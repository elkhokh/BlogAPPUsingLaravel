@extends('layout.app')

@section("title", "trashed")
@section("header")
        <header class="masthead" style="background-image: url('/assets/image/image.png')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection
@section("content")

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow-sm rounded-3">
        <div class="card-header bg-dark text-white fw-semibold py-2 px-3">
          Items List
        </div>
        <div class="card-body p-3 table-responsive">
          <table class="table table-bordered table-sm table-hover align-middle text-center small">
            <thead class="table-light">

              <tr>
                <th style="width: 40px;">#</th>
                <th style="width: 120px;">Name</th>
                <th style="max-width: 200px;">Discraption</th>
                <th style="width: 130px;">Actions</th>
              </tr>
            </thead>
            <tbody>

              <!-- Example Row -->

{{-- style using chatgpt ,iam not frontend  --}}
@foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td class="text-truncate">{{ $product->name }}</td>
        <td class="text-truncate" style="max-width: 200px;">{{ $product->discraption }}</td>
            <td><div class="d-flex align-items-center gap-1"><a href="{{ route('product.restore',$product->id) }}" class="btn btn-warning btn-sm">restore</a>
            {{-- <a href="{{ route('delete',$form->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                <form action="{{ route('product.destroy',$product->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
                </div>
</td>
@endforeach

        {{-- <td>
            <a href="#" class="btn btn-warning btn-sm me-1">Edit</a>
            <form action="#" method="POST" style="display:inline-block;">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr> --}}


              <!-- End Example Row -->
            </tbody>
          </table>

        </div>

{{-- <a href="{{ route('delete_all') }}" class="btn btn-danger btn" onclick="return confirm('Are you sure you want to delete all items?');">Delete All</a> --}}
{{-- <a href="{{ route('truncate_all') }}" class="btn btn-warning btn" onclick="return confirm('Are you sure you want to truncate all items?');">Truncate All</a> --}}
      </div>
    </div>
  </div>
</div>
@endsection
