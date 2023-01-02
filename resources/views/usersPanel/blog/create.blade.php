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

                    <div class="card-body">
                        <form action="">
                            <div class="row mt-2">
                                <label class="col-md-3" for="">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control rounded-0">
                                </div>
                            </div>


                            <div class="row mt-2">
                                <label class="col-md-3" for="">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea name="Description" class="form-control rounded-0" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="button" value="Create new Blog" class="btn btn-success rounded-0">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
