@extends('layouts.admin');

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Daftar Kategori</h4>
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
                                    <a class="confirm-text" href="javascript:void(0);">
                                        {{-- <form action="{{ url('category/delete/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE') --}}
                                            {{-- <button type="submit"> --}}
                                                <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
                                            {{-- </button> --}}
                                        {{-- </form> --}}
                                    </a>
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