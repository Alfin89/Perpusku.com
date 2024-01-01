@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Buku</h4>
                <h6>Buat buku baru</h6>
            </div>
        </div>

        <form action="{{ url('book/update/'.$book->id) }}" method="POST" class="card" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="title" value="{{ $book->title }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description">{{ $book->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="quantity" value="{{ $book->quantity }}" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="select form-select">
                                <option >{{ $book->category->name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Cover Buku</label>
                            <div class="image-upload">
                                <input type="file" name="cover">
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>File Buku</label>
                            <div class="image-upload">
                                <input type="file" name="file">
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product-list">
                            <ul class="row">
                                <li>
                                    <div class="productviews">
                                        <div class="productviewsimg">
                                            <img src="{{ asset('assets/uploads/books/'.$book->cover) }}" alt="img">
                                        </div>
                                        <div class="productviewscontent">
                                            <div class="productviewsname">
                                                <h2>{{ $book->title }}</h2>
                                            </div>
                                            <a href="javascript:void(0);" class="hideset">x</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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