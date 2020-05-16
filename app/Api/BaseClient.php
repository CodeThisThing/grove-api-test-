<?php


namespace App\Api;


use GuzzleHttp\Client;
use GuzzleHttp\Promise\EachPromise;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Pool;
use Exception;

class BaseClient
{
protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://localhost:3012']);

    }

    public function request($method, $path,$token=null,$body=null,$headers=[]){

        $body = !empty($body) ? json_encode($body) : $body;
        $headers = $this->headers($token, $body, $headers);
        $request = new Request($method, $path, $headers, $body);

        try {
            $response = $this->client->send($request);
        } catch (Exception $e) {
            return (object)[
                'status' => 500,
                'body' => null,
            ];
        }
        $body = json_decode($response->getBody());

        if (!empty($body->error) && $body->error === 'Not Found user') {
            abort(403, 'Expired token');
        }

        return (object)[
            'status' => $response->getStatusCode(),
            'body' => $body
        ];

    }

    protected function headers($token = null, $content = null, $headers)
    {

        $headers['accept-encoding'] = 'gzip, deflate';

        if (!empty($content) && is_string($content)) {
            $headers['Content-Length'] = strlen($content);
            $headers['Content-Type'] = 'application/json';
        }
        return $headers;
    }

}
