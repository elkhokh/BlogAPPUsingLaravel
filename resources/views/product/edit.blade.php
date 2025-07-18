@extends('layout.app')

@section("title", "Edit prodcut")

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
                    <form method="POST" action="{{ route('product.update',$product->id) }}">
                        @csrf

                        @method('PUT')
                        <div class="mb-2">
                            <label for="title" class="form-label small">Name</label>
                            <input type="text" class="form-control form-control-sm rounded-2" id="title" name="name" value="{{ $product->name }}">
                        </div>

                        <div class="mb-2">
                            <label for="content" class="form-label small">discraption</label>
                            <textarea class="form-control form-control-sm rounded-2" id="content" name="discraption" rows="3">{{  $product->discraption }}</textarea>
                        </div>


                        <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                        {{-- <a href="{{ route('form') }}" class="btn btn-secondary btn-sm px-3">Cancel</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
