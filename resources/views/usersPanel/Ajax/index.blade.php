@extends('usersPanel.master')
@section('title')
    Ajax Page
@endsection

@section('main')
    <div class="container">
        <div class="row">

            <div style="background: #fff" class="col-md-12 d-flex justify-content-between align-items-center py-4 my-2">
                <h2> <i class="fas fa-fan fa-1x"></i>To Do List</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add List
                </button>
                {{-- <a href="{{ route('ajax.create')}}" class="btn btn-success rounded-0"><i class="fas fa-chevron-circle-down fa-1x px-2"></i>Create</a> --}}
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="" class="myTable table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="text-center">
                                <tr>
                                    <th>SL</th>
                                    <th>Description</th>
                                    <th>Start</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($lists as $list)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $list->wtd }}</td>
                                        <td>{{ $list->s_date }} </td>
                                        <td>{{ $list->e_date }}</td>
                                        @if ($list->status == 1)
                                            <td class="badge badge-danger py-1 mt-2">Important</td>
                                        @else
                                            <td class="badge badge-info py-1 mt-2">Normal</td>
                                        @endif
                                        <td>
                                            <a href="" class="btn btn-success update_list" data-toggle="modal"
                                                data-target="#update_modal" data-id="{{ $list->id }}"
                                                data-todo="{{ $list->wtd }}" data-s_date="{{ $list->s_date }}"
                                                data-e_date="{{ $list->e_date }}">
                                                <i class="fa fa-edit"></i>
                                            </a>


                                            <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

<!--Insert  Modal -->
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form action="" method="post" id='todo_form'>
        @csrf
        @method('post')
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add To Do List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="err_Msg"></div>

                    <div class="mb-3">
                        <label for="wtd" class="form-label"> <strong>Do</strong> </label>
                        <textarea name="wtd" id="wtd" required class="w-100 " cols="30" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="start" class="form-label"> <strong>Start</strong> </label>
                        <input type="date" name="s_date" required class="form-control" id="start">
                    </div>
                    <div class="mb-3">
                        <label for="ends" class="form-label"> <strong>End</strong> </label>
                        <input type="date" name="e_date" required class="form-control" id="end">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-0 save_list">Save List</button>
                </div>
            </div>
        </div>

    </form>

</div>


<!--Update  Modal -->
<div class="modal fade" id="update_modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form action="" method="post" id='todo_form'>
        @csrf
        @method('post')
        <input type="hidden" name="up_id">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit To Do List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="err_Msg"></div>

                    <div class="mb-3">
                        <label for="u_wtd" class="form-label"> <strong>Do</strong> </label>
                        <textarea name="up_wtd" id="up_wtd" required class="w-100 " cols="30" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="u_start" class="form-label"> <strong>Start</strong> </label>
                        <input type="u_date" name="ups_date" required class="form-control" id="up_start">
                    </div>
                    <div class="mb-3">
                        <label for="u_end" class="form-label"> <strong>End</strong> </label>
                        <input type="u_date" name="upe_date" required class="form-control" id="up_end">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-0 upadate_todo_list">Update List</button>
                </div>
            </div>
        </div>

    </form>

</div>

@push('js')
    <script>
        $(document).ready(function() {
            // alert('fvd')
            $('.save_list').click(function(e) {
                // alert('Save list btn working');
                e.preventDefault();
                let wtd = $('#wtd').val();
                let s_date = $('#start').val();
                let e_date = $('#end').val();
                // console.log(wtd + s_date + e_date);

                $.ajax({
                    url: "{{ route('ajax.store') }}",
                    method: "post",
                    data: {
                        'wtd': wtd,
                        's_date': s_date,
                        'e_date': e_date,
                    },
                    success: function(response) {
                        // alert(response.status);
                        if (response.status == 1) {
                            $('.modal').modal('hide');
                            $('#todo_form')[0].reset();
                            $('.table').load(location.href + ' .table');
                        }
                    },
                    error: function(err) {
                        let error = err.responseJSON;
                        $.each(error.errors, function(index, value) {
                            $('.err_Msg').append('<span class="text-danger">' + value +
                                '</span><br>');
                        });
                    }
                });
            });


            // edit list
            $('.update_list').click(function() {

                let id = $(this).data('id'); //data-id="{{ $list->id }}"
                let wtd = $(this).data('todo');//data-todo="{{ $list->wtd }}" 
                let start = $(this).data('s_date');
                let ends = $(this).data('e_date');
                // alert(ends);

                $('#up_id').val(id);
                $('#up_wtd').val(wtd);
                $('#up_start').val(start);
                $('#up_end').val(ends);
            });
            
        })
    </script>
@endpush
