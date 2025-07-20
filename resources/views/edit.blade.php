@extends('layouts.website')

@section("title", "Edit Form")

@section("header")
<header class="masthead" style="background-image: url('/assets/image/image.png')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Edit Form</h1>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section("content")
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm rounded-3">
                <div class="card-header bg-warning fw-semibold py-2 px-3">
                    Edit Item
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('update',$form->id) }}">
                        @csrf

                        @method('PUT')
                        <div class="mb-2">
                            <label for="title" class="form-label small">Title</label>
                            <input type="text" class="form-control form-control-sm rounded-2" id="title" name="title" value="{{ old('title', $form->title) }}">
                        </div>

                        <div class="mb-2">
                            <label for="content" class="form-label small">Content</label>
                            <textarea class="form-control form-control-sm rounded-2" id="content" name="content" rows="3">{{ old('content', $form->content) }}</textarea>
                        </div>

                        <div class="form-check mb-1">
                            <input type="hidden" name="is_published" value="0">
                            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1" {{ $form->is_published ? 'checked' : '' }}>
                            <label class="form-check-label small" for="is_published">Published?</label>
                        </div>

                        <div class="form-check mb-3">
                            <input type="hidden" name="has_content" value="0">
                            <input type="checkbox" class="form-check-input" id="has_content" name="has_content" value="1" {{ $form->has_content ? 'checked' : '' }}>
                            <label class="form-check-label small" for="has_content">Has Content?</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                        <a href="{{ route('form') }}" class="btn btn-secondary btn-sm px-3">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
