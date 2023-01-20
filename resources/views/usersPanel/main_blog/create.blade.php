@extends('usersPanel.master')
@section('title')
    Create Blogs
@endsection

@section('main')
  <div class="container">
    
  <div class="page-title-box d-flex align-items-center justify-content-between">
    <h4 class="mb-0 font-size-18">Create Blog</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a class="btn btn-success rounded-0 text-light" href="{{ route('main_blog.index') }}"><i class="fa fa-list"></i> Show</a></li>
        </ol>
    </div>

  </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if(Session::get('delete'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('delete') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <form action="{{ route('main_blog.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-8">

                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                          
                          <div class="form-group">
                            <label for="desciption">Example textarea</label>
                            <textarea class="form-control" name="desciption" id="editor1" rows="3"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="image"> Image</label>
                            <input type="file" class="dropify-fr" name="image" data-height="50" id="image">
                          </div>

                        </div>
  
                        <div class="col-md-4">
                          <h6 class="text-center">Blog Images</h6>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary rounded-0">Submit</button>
                    </form>






                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
  </div>
@endsection
