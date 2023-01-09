@extends('fontend.master')

@section('title')
    Blog
@endsection

@section('body')
    <section class="py-2 bg-secondary">
        <div class="container-fluid">
            <div class="row">
                <h3 class="text-center py-2">Blog Posts</h3>
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

                                <p class="p-0 m-0"> <i class="fa-solid fa-user text-danger"></i> &nbsp; {{ $post->name }} &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-calendar-days text-secondary"></i>  &nbsp; {{ $post->date }}</p>


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
                                <a href="">Lorem ipsum dolor</a>
                            </li>
                            <li>
                                <a href="">sit amet, consec</a>
                            </li>
                            <li>
                                <a href="">tetur adipisi</a>
                            </li>
                            <li>
                                <a href="">cing elit. Ea, in</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
