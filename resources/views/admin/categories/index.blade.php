@extends('layouts.admin')

@section('title', 'Quản lý danh mục')

@section('actions')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
        Thêm danh mục
    </a>
@endsection

@section('content')
    <section class="panel" aria-label="Danh sách danh mục">
        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col" class="numeric">Số sản phẩm</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $categories->firstItem() + $loop->index }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="numeric">{{ $category->products_count }}</td>
                            <td>
                                @include('partials.admin-row-actions', [
                                    'showUrl' => route('admin.categories.show', $category),
                                    'editUrl' => route('admin.categories.edit', $category),
                                    'deleteUrl' => route('admin.categories.destroy', $category),
                                ])
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="empty">Chưa có danh mục nào.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @include('partials.admin-pagination', ['paginator' => $categories])
    </section>
@endsection