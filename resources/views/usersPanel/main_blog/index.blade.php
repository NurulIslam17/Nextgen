@extends('usersPanel.master')
@section('title')
    Manage Blogs
@endsection

@section('main')
  <div class="container">
    
  <div class="page-title-box d-flex align-items-center justify-content-between">
    <h4 class="mb-0 font-size-18">Manage Blogs</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a class="btn btn-success rounded-0 text-light" href="{{ route('main_blog.create') }}"> <i class="fa fa-plus"></i> Create</a></li>
         
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

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{!! Str::substr($blog->desciption, 0, 250) !!}</td>
                                <td>
                                    <img src="{{ asset($blog->image)}}" style="height: 80px;width:80px" alt="Not Found" srcset="">
                                </td>
                                @if ($blog->status == 1 )
                                    <td class="badge badge-success text-dark py-1 mt-4">ACTIVE</td>
                                @else
                                    <td class="badge badge-warning text-dark py-1 mt-4">INACTIVE</td>
                                @endif
                                <td class="">
                                    <a href="{{ route('main_blog.edit',$blog->id)}}" class="btn btn-info m-1"> <i class="fa fa-edit"></i> </a>
                                    <a href="" class="btn btn-danger m-1"> <i class="fa fa-trash"></i> </a>
                                    <a href="" class="btn btn-dark m-1"> <i class="fa fa-repeat"></i> </a>
                                </td>
                            </tr> 
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
  </div>
@endsection
