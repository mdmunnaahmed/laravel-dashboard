@extends('template')

<div class="container pt-5">
    @if (Auth::check())
        <a href="{{ route('blog.create') }}" class="btn btn-primary">Create Post</a>
    @endif
</div>

@section('content')
    <div class="py-5">
        <div class="row gy-4">
            <div class="col-lg-4">
                @foreach ($posts as $post)
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-between">
                                <p class="mb-3">Posted by <span class="text-primary">{{ $post->user->name }}</span></p>
                                <p class="mb-3">Posted at <span class="text-primary">{{ date('j M y', strtotime($post->updated_at)) }}</span></p>
                            </div>
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->des }}</p>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
