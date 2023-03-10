@extends('usersPanel.master')
@section('title')
    Post Details
@endsection

@section('main')
    <div class="row">
        <div class="col-md-9">
            <div class="card card-body rounded-0">
                <img src="{{ asset($postDetails->image) }}" style="height: 350px" alt="">
                <h4 class="pt-4">{{ $postDetails->title }}</h4>
                <p> <i class="fa fa-pen fa-2x"> </i>{{ $postDetails->date  }}</p>

                <p>
                    {!! $postDetails->description !!}
                </p>


            </div>
        </div>

        <div class="col-md-3">
            <h4>Featured Images</h4>
            <hr>
            @foreach($allImages as $singleImage)
                <div class="row mt-2">
                    <img src="{{ asset($singleImage) }}" style="height: 150px; width: 200px" alt="">
                </div>
            @endforeach
        </div>

    </div>
@endsection
