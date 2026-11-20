@extends('layouts.admin')

@section('title', 'Chi tiết sản phẩm')

@section('actions')
    <div class="product-page-actions">
        <a href="{{ route('admin.products.index') }}" class="btn">
            Quay lại danh sách
        </a>

        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-primary">
            Sửa sản phẩm
        </a>
    </div>
@endsection

@section('content')
    <article class="panel product-detail" aria-labelledby="product-name">
        <div class="product-overview">
            <div class="product-media">
                @if ($product->image)
                    <img
                        src="{{ $product->image }}"
                        alt="{{ $product->name }}"
                        class="product-detail-image"
                    >
                @else
                    <p class="product-image-empty">Chưa có ảnh sản phẩm</p>
                @endif
            </div>

            <div class="product-summary">
                <h2 id="product-name" class="product-name">
                    {{ $product->name }}
                </h2>

                <dl class="product-facts">
                    <div class="product-price">
                        <dt>Giá bán</dt>
                        <dd>
                            {{ number_format($product->price, 0, ',', '.') }}
                            <span>₫</span>
                        </dd>
                    </div>

                    <div class="product-fact">
                        <dt>Hãng laptop</dt>
                        <dd>{{ $product->category->name }}</dd>
                    </div>

                    <div class="product-fact">
                        <dt>Mã sản phẩm</dt>
                        <dd>#{{ $product->id }}</dd>
                    </div>

                    <div class="product-fact">
                        <dt>Tồn kho</dt>
                        <dd>
                            @if ($product->stock > 0)
                                <span class="stock-label stock-available">
                                    Còn {{ number_format($product->stock, 0, ',', '.') }} chiếc
                                </span>
                            @else
                                <span class="stock-label stock-empty">Hết hàng</span>
                            @endif
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <section class="product-description" aria-labelledby="description-title">
            <h3 id="description-title">Mô tả sản phẩm</h3>

            @if (filled($product->description))
                <p class="description-text">{{ $product->description }}</p>
            @else
                <p class="muted">Chưa có mô tả cho sản phẩm này.</p>
            @endif
        </section>
    </article>
@endsection