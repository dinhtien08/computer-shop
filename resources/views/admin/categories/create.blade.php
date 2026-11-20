@extends('layouts.admin')

@section('title', 'Thêm danh mục')

@section('content')
    <form
        method="POST"
        action="{{ route('admin.categories.store') }}"
        class="panel edit-form"
        novalidate
    >
        @csrf

        @include('admin.categories.form', ['buttonText' => 'Thêm danh mục'])
    </form>
@endsection