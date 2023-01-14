@extends('usersPanel.master')
@section('title')
    Seperate Image Manage
@endsection

@section('main')
  <div class="container">
    
  <div class="page-title-box d-flex align-items-center justify-content-between">
    <h4 class="mb-0 font-size-18">Manage Table</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a class="btn btn-success rounded-0 text-light" href="{{ route('create.img.diff') }}">Add Data</a></li>
         
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
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                              <td>SL</td>
                              <td>Title</td>
                              <td>Description</td>
                              <td>Image</td>
                              <td>Action</td>
                          </tr>
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
  </div>
@endsection
