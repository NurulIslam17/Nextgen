@extends('usersPanel.master')
@section('title')
    Manage Blog
@endsection

@section('main')

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

                    <h3 class="card-title text-center">All Blogs</h3>

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
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ substr($post->title,0,30) }}...</td>
                                    <td>{!! substr($post->description,0,50) !!}... </td>
                                    <td>
                                        <img src="{{ asset($post->image) }}" style="height: 90px;width: 90px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('post.details',['id'=>$post->id]) }}" class="text-success"><i class="fa-solid fa-book-open fa-2x"></i></a>
                                        <a href="{{ route('post.delete',['id'=>$post->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="text-danger"><i class="fa-solid fa-trash fa-2x "></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
