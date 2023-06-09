@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Blog Page </h4>

            <form method="post" action="{{ route('store.blog') }}" enctype="multipart/form-data">
                @csrf



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                <div class="col-sm-10">
        <select name="blog_category_id" class="form-select" aria-label="Default select example">
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->blog_category }}</option>
                @endforeach
            </select>
               </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title </label>
                <div class="col-sm-10">
                    <input name="blog_title" class="form-control" type="text" id="example-text-input">

                    @error('blog_title')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags </label>
                <div class="col-sm-10">
                    <input name="blog_tags" value="home,tech" class="form-control" type="text" data-role="tagsinput"> 
                </div>
            </div>
            <!-- end row -->



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description </label>
                <div class="col-sm-10">
      <textarea id="elm1" name="blog_description">

      </textarea>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    @if($users)
                        <select name="author_id" class="form-select">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    @else
                        <p>No user exist.</p>
                    @endif
                </div>
            </div>


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" class="form-select">
                        <option value="draft">Draft</option>
                        <option value="publish">Publish</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Visiblity</label>
                <div class="col-sm-10">
                    <select name="visiblity" class="form-select">
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>
            </div>

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image </label>
                <div class="col-sm-10">
                    <input name="blog_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->

        


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Data">
            </form>






        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>
           <!--tinymce js-->
           <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }}"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection 