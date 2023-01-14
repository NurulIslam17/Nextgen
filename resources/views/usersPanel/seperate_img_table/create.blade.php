@extends('usersPanel.master')
@section('title')
    Create Record
@endsection


@section('main')
    <div class="container">

        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Create New Product Record</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a class="btn btn-success rounded-0 text-light"
                            href="{{ route('mange.img.diff') }}">Manage</a></li>

                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-10 mx-auto">
                <div class="card">
                    @if (Session::get('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif



                    <div class="card-body">

                      <form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                              <div class="col-md-8">

                                  <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                                  </div>

                                  <div class="form-group">
                                    <label for="name">Product Key</label>
                                    <input type="text" name="product_key" class="form-control" id="product_key" placeholder="Enter Product Key">
                                  </div>

                                  <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug"  placeholder="Enter slug">
                                  </div>

                                  <div class="form-group">
                                    <label for="editor1">Description</label>
                                    <textarea class="form-control" name="description" id="editor1" rows="3"></textarea>
                                  </div>
                              </div>

                              <div class="col-md-4">

                                  <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="dropify-fr form-control-file" data-height="200">
                                  </div>

                                  <div class="form-group">
                                    <label for="">More Image</label>
                                    <input type="file" name="product_images[]" multiple class="dropify-fr form-control-file" data-height="220">
                                  </div>

                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-0 mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
