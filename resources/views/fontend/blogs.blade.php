@extends('fontend.master')
@section('body')
    <section class="py-2 bg-secondary">
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center text-light py-3">Blogs</h1>
            </div>

        </div>
    </section>

    <section class="py-2">
        <div class="container">

            <div class="row ">

                <div class="col-md-9 m-0 p-0">

                    <div class="card card-body mt-2">

                        <div class="row">
                            <div class="col-md-4 my-0 py-0">
                                <img src="{{asset('/')}}testImage/image1.jpg" class="m-0 p-0" style="height: 200px; width: 100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4>At consequatur cum cupiditate dicta</h4>
                                <p>
                                    at consequatur cum cupiditate dicta, dolores enim excepturi expedita fugiat
                                    hic illo ipsa iusto libero maiores minus quia saepe sequi sint sunt veniam
                                    veritatis vero voluptatem! Ad consequatur error, ex in libero necessitatibus,
                                    odio quod ratione reprehenderit repudiandae, saepe sequi tempore ut voluptatum?
                                </p>

                                <p class="p-0 m-0"> <i class="fas fa-pen-alt"></i> Adam Site   || 1st Feb 2023</p>


                            </div>
                        </div>
                    </div>

                    <div class="card card-body mt-2">
                        <div class="row">
                            <div class="col-md-4 my-0 py-0">
                                <img src="{{asset('/')}}testImage/image1.jpg" class="m-0 p-0" style="height: 200px; width: 100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4>Consequatur cum cupiditate dicta</h4>
                                <p>
                                    at consequatur cum cupiditate dicta, dolores enim excepturi expedita fugiat
                                    hic illo ipsa iusto libero maiores minus quia saepe sequi sint sunt veniam
                                    veritatis vero voluptatem! Ad consequatur error, ex in libero necessitatibus,
                                    odio quod ratione reprehenderit repudiandae, saepe sequi tempore ut voluptatum?
                                </p>

                                <p class="p-0 m-0"> <i class="fas fa-pen-alt"></i> Adam Site   || 1st Feb 2023</p>


                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-3">
                    <div class="card card-body">
                        <h3>Recent Post</h3>
                        <hr>
                        <ul>
                            <li>
                                <a href="">ABC</a>
                            </li>
                            <li>
                                <a href="">ABC</a>
                            </li>
                            <li>
                                <a href="">ABC</a>
                            </li>
                            <li>
                                <a href="">ABC</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
