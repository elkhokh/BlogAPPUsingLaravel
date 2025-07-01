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



{{-- <div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm rounded-3">
        <div class="card-header bg-primary text-white fw-semibold py-2 px-3">
          Add New Item
        </div>
        <div class="card-body p-3">
          <form method="POST" action="/submit">
            @csrf
            <div class="mb-2">
              <label for="title" class="form-label small">Title</label>
              <input type="text" class="form-control form-control-sm rounded-2" id="title" name="title" required>
            </div>

            <div class="mb-2">
              <label for="content" class="form-label small">Content</label>
              <textarea class="form-control form-control-sm rounded-2" id="content" name="content" rows="3" required></textarea>
            </div>

            <div class="form-check mb-1">
              <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1">
              <label class="form-check-label small" for="is_published">Published?</label>
            </div>

            <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="is_content" name="is_content" value="1">
              <label class="form-check-label small" for="is_content">Is Content?</label>
            </div>

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
              <tr>
                <td>1</td>
                <td class="text-truncate">My First Title</td>
                <td class="text-truncate" style="max-width: 200px;">This is some example content fjfoiewjfiojefsfdsljffffffffdfssssssssssssssssssssssssssffffffffff</td>
                <td><span class="badge bg-success">Yes</span></td>
                <td><span class="badge bg-primary">Yes</span></td>
                <td>
                  <a href="#" class="btn btn-warning btn-sm me-1">Edit</a>
                  <form action="#" method="POST" style="display:inline-block;">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>
              </tr>
              <!-- End Example Row -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection
