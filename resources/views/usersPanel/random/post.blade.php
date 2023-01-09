@extends('usersPanel.master')
@section('title')
    Random Post
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Random Post</h1>

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
                        <form action="{{ route('data.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <label class="col-md-3" for="">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" value="{{ old('title') }}"  class="@error('title') is-invalid @enderror form-control rounded-0">

                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="editor1" value="{{ old('description') }}"  class="@error('description') is-invalid @enderror form-control rounded-0" cols="30" rows="10"></textarea>

                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" value="{{ old('image') }}"  class="@error('image') is-invalid @enderror rounded-0">

                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-3" for="">Post Date</label>
                                <div class="col-md-9">
                                    <input type="date" name="date" multiple value="{{ old('date') }}"  class="@error('feature_image') is-invalid @enderror  rounded-0">

                                    @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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

