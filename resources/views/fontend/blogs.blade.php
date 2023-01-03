@extends('fontend.master')
@section('body')
    <section class="py-2 bg-secondary">
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center text-light py-2">Blog Posts</h1>
            </div>

        </div>
    </section>

    <section class="py-2">
        <div class="container">

            <div class="row ">

                <div class="col-md-9 m-0 p-0">

                    @foreach($allData as $post)
                    <div class="card card-body mt-2">
                        <div class="row">
                            <div class="col-md-4 my-0 py-0">
                                <img src="{{asset($post->image)}}" class="m-0 p-0" style="height: 200px; width: 100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4>{{ $post->title }}</h4>
                                <p>
                                  {!! substr($post->description,0,200) !!} <a href="{{ route('blog.post.details',['id'=>$post->id]) }}">more...</a>
                                </p>

                                <p class="p-0 m-0"> <i class="fa-solid fa-user"></i> &nbsp; {{ $post->name }} &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-calendar-days"></i>  {{ $post->date }}</p>


                            </div>
                        </div>
                    </div>
                    @endforeach


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
