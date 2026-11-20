@extends('layouts.admin')

@section('title', 'Sửa sản phẩm')

@section('content')
    <form
        method="POST"
        action="{{ route('admin.products.update', $product) }}"
        class="panel edit-form"
        novalidate
    >
        @csrf
        @method('PUT')

        @include('admin.products.form', ['buttonText' => 'Lưu thay đổi'])
    </form>
@endsection