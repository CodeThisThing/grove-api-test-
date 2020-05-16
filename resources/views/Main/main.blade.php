@extends('layouts.default')

@section('content')


    <div class="row ml-3 mt-5 mr-3 d-inline-flex">
        <div class="column main-column col-8 justify-content-center">

                @foreach($articles as $article)
                <div class="col-lg-12 col-md-8 mb-3">

                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view">
                            <img src="{{$article->img}}" class="card-img-top img-fluid " alt="photo">
                            <a href="#">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body elegant-color white-text">
                            <!--Title-->
                            <h4 class="card-title">{{$article->title}}</h4>
                            <!--Text-->
                            <p class="card-text white-text">{{$article->text}}</p>
                            <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                        </div>

                    </div>



                </div>
                @endforeach

        </div>
        <div class="column col-4">
            <div class="col-lg-12 col-md-8 mb-3">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/SLides/img%20(125).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body elegant-color white-text">
                        <!--Title-->
                        <h4 class="card-title">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>



            </div>

        </div>

    </div>





@endsection
