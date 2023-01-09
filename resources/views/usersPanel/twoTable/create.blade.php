@extends('usersPanel.master')
@section('title')
    Create Post For Two Table
@endsection

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Create Post For Two Table</h4>

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
                        <form action="{{ route('store.in.two') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <label class="col-md-3" for="">Project Name</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="project_id" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Project Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="editor1"  class="form-control rounded-0" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Project Type</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="type" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="NORMAL">Normal</option>
                                        <option value="AMINITIES">Animities</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="rounded-0">
                                </div>
                            </div>


                            <div class="row mt-2">
                                <label class="col-md-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Create Post" class="btn btn-success rounded-0">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

