@extends('layouts.admin')

@section('title', 'Tổng quan')

@section('content')
    <section class="panel">
        <h2>Quản lý cửa hàng</h2>

        <div class="toolbar">
            <a href="{{ route('admin.categories.index') }}" class="btn">
                Quản lý danh mục
            </a>

            <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
                Quản lý sản phẩm
            </a>
        </div>
    </section>
@endsection