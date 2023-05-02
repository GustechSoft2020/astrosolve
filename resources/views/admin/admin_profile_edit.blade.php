@extends('admin.admin_master')
@section('admin')


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <form  method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="name" name="name" value="{{ $editData->name }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Username:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="username" name="username" value="{{ $editData->username }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email"  id="email" name="email" value="{{ $editData->email }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file"  id="image" name="profile_image" value="{{ $editData->profile_image }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg mt-3" src="{{ !empty( $editData->profile_image) ? url('upload/admin_images/'.$editData->profile_image) : url('upload/no_image.jpg')  }}" alt="Card image cap"/>
                                    </div>
                                </div>
                                    <input type="submit" name="submit" value="Update Profile" class="btn btn-primary btn-rounded waves-effect waves-light"/>
                            </div>
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