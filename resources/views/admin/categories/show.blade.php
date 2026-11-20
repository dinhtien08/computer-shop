@extends('layouts.admin')

@section('title', 'Chi tiết danh mục')

@section('actions')
    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary">
        Sửa danh mục
    </a>
@endsection

@section('content')
    <section class="panel">
        <h2>{{ $category->name }}</h2>

        <dl>
            <dt>Mã danh mục</dt>
            <dd>{{ $category->id }}</dd>

            <dt>Số sản phẩm thuộc danh mục</dt>
            <dd>{{ $category->products_count }}</dd>
        </dl>

        <a href="{{ route('admin.categories.index') }}" class="btn">
            Quay lại danh sách
        </a>
    </section>
@endsection