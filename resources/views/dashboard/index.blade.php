@extends('template')
@section('content')
        <!-- BEGIN Tiles -->
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <a class="tile tile-pink" data-stop="500" href="{{url('users')}}">
                            <div class="img img-center">
                                <i class="fa fa-user"></i>
                                <p class="title text-center">+{{$users}}</p>
                                <p class="title text-center">Users</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="tile tile-blue" data-stop="700" href="#">
                            <div class="img img-center">
                            <i class="fa fa-music align-left"></i>
                                <p class="title text-center">+99</p>
                                <p class="title text-center">Static</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>
            <div class="col-md-3">
                <a class="tile tile-red" data-stop="900" href="#">
                    <div class="img img-center">
                        <i class="fa fa-bookmark"></i>
                        <p class="title text-center">+99</p>
                        <p class="title text-center">Static</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <a class="tile tile-pink" data-stop="500" href="#">
                            <div class="img img-center">
                                <i class="fa fa-globe"></i>
                                <p class="title text-center">+99</p>
                                <p class="title text-center">Static</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="tile tile-blue" data-stop="700" href="#">
                            <div class="img img-center">
                                <i class="fa fa-star align-left"></i>
                                <p class="title text-center">+99</p>
                                <p class="title text-center">Static</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>
            <div class="col-md-3">
                <a class="tile tile-red" data-stop="900" href="#">
                    <div class="img img-center">
                        <i class="fa fa-user-plus"></i>
                        <p class="title text-center">+99</p>
                        <p class="title text-center">Static</p>
                    </div>
                </a>
            </div>
        </div>
@stop