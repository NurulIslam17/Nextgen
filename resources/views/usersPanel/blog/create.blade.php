@extends('usersPanel.master')
@section('title')
    Create Blog
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Create Blog</h1>

                    </div>
                    @if(Session::get('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif



                    <div class="card-body">
                        <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <label class="col-md-3" for="">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control rounded-0" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Feature Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="feature_image[]" multiple class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Create new Blog" class="btn btn-success rounded-0">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
