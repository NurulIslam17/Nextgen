@extends('usersPanel.master')
@section('title')
    List To do
@endsection
@section('main')
    <div class="container">
        <div class="row">

            <div style="background: #fff" class="col-md-12 d-flex justify-content-between align-items-center py-4 my-2">
                <h2> <i class="fas fa-file-signature fa-1x"></i> Create To Do</h2>
                <a href="{{ route('ajax.index') }}" class="btn btn-success rounded-0"><i
                        class="fas fa-list fa-1x px-2"></i>Show</a>
            </div>

            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        
                        <form method="POST">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                                <label for="wtd" class="form-label">Do</label>
                                <textarea name="wtd" id="" class="w-100" cols="30" rows="4"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="start" class="form-label">Start</label>
                                <input type="date" name="s_date" class="form-control" id="start">
                            </div>
                            <div class="mb-3">
                                <label for="ends" class="form-label">End</label>
                                <input type="date" name="e_date" class="form-control" id="ends">
                            </div>

                            <button type="submit" id="add_btn" class="btn btn-primary">Make List</button>
                        </form>

                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

            $('#add_btn').click(function() {
                // alert('ok');
                $.ajax({
                  url :"{{route('ajax.store')}}",
                  data:$('form').serialize(),
                  type:'post',
                  success:function(res){
                    alert(res)
                  }
                });
            });
        });
    </script>
@endpush
