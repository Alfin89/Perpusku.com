@extends('layouts.admin');

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Daftar Buku</h4>
                <div class="table-responsive dataview">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Buku</th>
                                <th>Judul Buku</th>
                                <th>Diskripsi</th>
                                <th>Kategori</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="productimgname">
                                    <a href="{{ url('/book/show/'.$item->id) }}" target="_blank">
                                        <img src="{{ asset('assets/uploads/books/'.$item->cover) }}" alt="product" class="rounded" width="70px" alt="Kategori" />
                                    </a>
                                </td>
                                <td>
                                    <p>{{ $item->title }}</p>
                                </td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->quantity }}</td> 
                                <td>
                                    <a class="me-3" href="{{ url('book/edit/'.$item->id) }}">
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
                                                    <p>Apakah kamu ingin menghapus buku ini.?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <form action="{{ url('/book/delete/'.$item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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