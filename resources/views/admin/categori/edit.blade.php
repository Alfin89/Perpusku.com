@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Kategori</h4>
                <h6>Perbarui kategori</h6>
            </div>
        </div>

        <form action="{{ url('category/update/'.$category->id) }}" method="POST" class="card" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input value="{{ $category->name }}" type="text" name="name">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Product Image</label>
                            <div class="image-upload">
                                <input type="file" name="image">
                                @if ($category->image)
                                    <img src="{{ asset('assets/uploads/category/'.$category->image) }}" width="200" alt="Category Image">
                                @endif
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Simpan</button>
                        <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection