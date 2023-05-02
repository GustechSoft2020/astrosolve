@extends('admin.admin_master')
@section('admin')


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <form  method="post" action="{{ route('update.password') }}">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title my-5">Change Password Page</h4>
                                    @if(count($errors))
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger alert-dismissible fade show" role="alert">{{ $error }} </p>
                                        @endforeach
                                    @endif
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input name="oldpassword" class="form-control" type="password"   id="oldpassword">
                                        </div>
                                    </div>
                                    <!-- end row -->


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                        <input name="newpassword" class="form-control" type="password"  id="newpassword">
                                        </div>
                                    </div>
                                    <!-- end row -->



                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input name="confirm_password" class="form-control" type="password"   id="confirm_password">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
                        </form>
                    </div>
                </div>
                </div>
                <!-- end row -->
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader =  new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src', e.target.result);
                }
                if (reader.readAsDataURL) {reader.readAsDataURL(e.target.files['0']);}
                else if (reader.readAsDataurl) {reader.readAsDataurl(e.target.files['0']);}
                //reader.readAsDataUrl(e.target.files['0']);
            });
        });
    </script>

@endsection