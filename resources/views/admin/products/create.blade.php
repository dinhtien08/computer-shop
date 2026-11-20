@extends('layouts.admin')

@section('title', 'Thêm sản phẩm')

@section('content')
    @if ($categories->isEmpty())
        <section class="panel">
            <p>Bạn cần tạo ít nhất một hãng laptop trước khi thêm sản phẩm.</p>

            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                Thêm hãng laptop
            </a>

            <a href="{{ route('admin.products.index') }}" class="btn">
                Quay lại
            </a>
        </section>
    @else
        <form
            method="POST"
            action="{{ route('admin.products.store') }}"
            class="panel edit-form"
            novalidate
        >
            @csrf

            @include('admin.products.form', ['buttonText' => 'Thêm sản phẩm'])
        </form>
    @endif
@endsection