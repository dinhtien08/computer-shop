@extends('layouts.admin')

@section('title', 'Quản lý sản phẩm')

@section('actions')
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
        Thêm sản phẩm
    </a>
@endsection

@section('content')
    <section class="panel" aria-label="Danh sách sản phẩm">
        <form method="GET" action="{{ route('admin.products.index') }}" class="toolbar">
            <label for="q">Tên sản phẩm</label>

            <input
                id="q"
                name="q"
                type="search"
                value="{{ $keyword }}"
                placeholder="Ví dụ: Dell Inspiron hoặc Dell"
            >

            <button type="submit" class="btn">Tìm kiếm</button>

            @if ($keyword !== '')
                <a href="{{ route('admin.products.index') }}">Xóa bộ lọc</a>
            @endif
        </form>

        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hãng</th>
                        <th scope="col" class="numeric">Giá bán</th>
                        <th scope="col" class="numeric">Tồn kho</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $products->firstItem() + $loop->index }}</td>

                            <td>
                                @if ($product->image)
                                    <img
                                        src="{{ $product->image }}"
                                        alt="{{ $product->name }}"
                                        class="product-thumb"
                                        width="76"
                                        height="54"
                                        loading="lazy"
                                    >
                                @else
                                    <span class="muted">Chưa có ảnh</span>
                                @endif
                            </td>

                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td class="numeric">
                                {{ number_format($product->price, 0, ',', '.') }} đ
                            </td>
                            <td class="numeric">{{ $product->stock }}</td>

                            <td>
                                @include('partials.admin-row-actions', [
                                    'showUrl' => route('admin.products.show', $product),
                                    'editUrl' => route('admin.products.edit', $product),
                                    'deleteUrl' => route('admin.products.destroy', $product),
                                ])
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty">
                                @if ($keyword !== '')
                                    Không tìm thấy sản phẩm với từ khóa “{{ $keyword }}”.
                                @else
                                    Chưa có sản phẩm nào.
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @include('partials.admin-pagination', ['paginator' => $products])
    </section>
@endsection