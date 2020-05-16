<?php


namespace App\Api;


class Main extends BaseClient
{


    public function getArticles($uri)
    {
        $headers['Accept'] = 'application/json';

        $response = $this->request('GET', $uri, null, $headers);

        return $response->status == 200 ? $response->body : null;
    }

    public function createArticle($body)
    {
        $headers['Accept'] = 'application/json';

        $response = $this->request('POST', '/article', null, $body , $headers);

        return $response->status == 200 ? $response->body : null;
    }


}
