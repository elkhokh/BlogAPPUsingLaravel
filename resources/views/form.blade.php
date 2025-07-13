@extends('layout.app')

@section("title", "Form")
@section("header")
        <header class="masthead" style="background-image: url('assets/image/image.png')">
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
    <div class="col-md-8">
      <div class="card shadow-sm rounded-3">
        <div class="card-header bg-primary text-white fw-semibold py-2 px-3">
          Add New Item
        </div>
        <div class="card-body p-3">
          {{-- <form method="POST" action="{{ url('form/insert') }}"> --}}
            {{-- if i use name in route --}}
            <form method="POST" action="{{ route('insert') }}">
    @csrf

    <div class="mb-2">
        <label for="title" class="form-label small">Title</label>
        <input type="text" class="form-control form-control-sm rounded-2" id="title" name="title">
    </div>

    <div class="mb-2">
        <label for="content" class="form-label small">Content</label>
        <textarea class="form-control form-control-sm rounded-2" id="content" name="content" rows="3"></textarea>
    </div>

    <div class="form-check mb-1">
        <input type="hidden" name="is_published" value="0"> {{-- Default if not checked --}}
        <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1">
        <label class="form-check-label small" for="is_published">Published?</label>
    </div>

    <div class="form-check mb-3">
        <input type="hidden" name="has_content" value="0"> {{-- Default if not checked --}}
        <input type="checkbox" class="form-check-input" id="is_content" name="has_content" value="1">
        <label class="form-check-label small" for="is_content">Has Content?</label>
    </div>
            {{-- if you want to not put the @csrf make that  --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/>  --}}
    <button type="submit" class="btn btn-success btn-sm px-3">Submit</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
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
                <th style="width: 120px;">Title</th>
                <th style="max-width: 200px;">Content</th>
                <th style="width: 80px;">Published</th>
                <th style="width: 90px;">Is Content</th>
                <th style="width: 130px;">Actions</th>
              </tr>
            </thead>
            <tbody>

              <!-- Example Row -->

@foreach($forms as $form)
{{-- style using chatgpt ,iam not frontend  --}}
    <tr>
        <td>{{ $form->id }}</td>
        <td class="text-truncate">{{ $form->title }}</td>
        <td class="text-truncate" style="max-width: 200px;">{{ $form->content }}</td>
        <td><span class="badge {{ $form->has_content ? 'bg-success' : 'bg-secondary' }}">
                {{ $form->has_content ? 'Yes' : 'No' }}</span></td>
        <td><span class="badge {{ $form->is_published ? 'bg-primary' : 'bg-secondary' }}">
                {{ $form->is_published ? 'Yes' : 'No' }} </span> </td>


            <td><div class="d-flex align-items-center gap-1"><a href="{{ route('edit',$form->id) }}" class="btn btn-warning btn-sm">Edit</a>
            {{-- <a href="{{ route('delete',$form->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                <form action="{{ route('delete',$form->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
                </div>
</td>

        {{-- <td>
            <a href="#" class="btn btn-warning btn-sm me-1">Edit</a>
            <form action="#" method="POST" style="display:inline-block;">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr> --}}
@endforeach

              <!-- End Example Row -->
            </tbody>
          </table>

        </div>

<a href="{{ route('delete_all') }}" class="btn btn-danger btn" onclick="return confirm('Are you sure you want to delete all items?');">Delete All</a>
<a href="{{ route('truncate_all') }}" class="btn btn-warning btn" onclick="return confirm('Are you sure you want to truncate all items?');">Truncate All</a>
      </div>
    </div>
  </div>
</div>
@endsection
