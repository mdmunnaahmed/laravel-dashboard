@extends('template')

@section('content')
    <div class="py-5 container">
        <form  action="#" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="post_img" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="post_img" name="post_img" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="des" class="form-label">Title</label>
                <textarea class="form-control" name="des" id="des" rows="5"></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Submit</button>
        </form>
    </div>
@endsection
