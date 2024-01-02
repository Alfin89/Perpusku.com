@extends('layouts.front')

@section('content')
<div class="page-wrapper ms-0">
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-sm-12 tabs_wrapper">
                <div class="page-header container">
                    <div class="page-title">
                        <h4>Silahkan dibaca</h4>
                        <h6>Budayakan membaca buku</h6>
                    </div>
                </div>
                <div class="container">
                    <div class="tab_content active" data-tab="fruits">
                        <div class="row ">
                            @foreach ($books as $item)
                            <div class="col-lg-3 col-sm-6 d-flex ">
                                <a href="{{ url('show/'.$item->id) }}">
                                <div class="productset flex-fill">
                                    <div class="productsetimg">
                                        <img src="{{ asset('assets/uploads/books/'.$item->cover) }}" alt="img">
                                        <h6>Qty: {{ $item->quantity }}</h6>
                                        <div class="check-product">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="productsetcontent">
                                        <h5>{{ $item->title }}</h5>
                                        <h4>Kategori {{ $item->category->name }}</h4>
                                    </div>
                                </div>
                            </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
