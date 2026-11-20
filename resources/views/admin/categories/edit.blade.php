@extends('layouts.admin')

@section('title', 'Sửa danh mục')

@section('content')
    <form
        method="POST"
        action="{{ route('admin.categories.update', $category) }}"
        class="panel edit-form"
        novalidate
    >
        @csrf
        @method('PUT')

        @include('admin.categories.form', ['buttonText' => 'Lưu thay đổi'])
    </form>
@endsection