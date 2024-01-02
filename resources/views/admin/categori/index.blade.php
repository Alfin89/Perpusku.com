@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Daftar Kategori</h4>
                <div class="table-responsive dataview">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Kategori</th>
                                <th>Tanggal Dibuat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="productimgname">
                                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="product" class="rounded" width="70px" alt="Kategori" />
                                    </a>
                                </td>
                                <td>
                                    <p>{{ $item->name }}</p>
                                </td>
                                <td>{{ $item->created_at }}</td> 
                                {{-- ->format("Y-m-d") --}}
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="{{ asset('assets/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{ url('category/edit/'.$item->id) }}">
                                        <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    {{-- modal --}}
                                            <a href="#" class="confirm-text" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Delete</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah kamu ingin menghapus categori ini.?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ url('category/delete/'.$item->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    {{-- /modal --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection