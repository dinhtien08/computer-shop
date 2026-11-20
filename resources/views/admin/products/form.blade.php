<div>
    <label for="name">Tên sản phẩm</label>

    <input
        id="name"
        name="name"
        type="text"
        value="{{ old('name', $product->name ?? '') }}"
        placeholder="Ví dụ: Dell Inspiron 15"
        required
        @error('name') aria-invalid="true" aria-describedby="name-error" @enderror
    >

    @error('name')
        <p id="name-error" class="field-error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="category_id">Hãng laptop</label>

    <select
        id="category_id"
        name="category_id"
        required
        @error('category_id') aria-invalid="true" aria-describedby="category-error" @enderror
    >
        <option value="">Chọn hãng laptop</option>

        @foreach ($categories as $category)
            <option
                value="{{ $category->id }}"
                @selected((string) old('category_id', $product->category_id ?? '') === (string) $category->id)
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    @error('category_id')
        <p id="category-error" class="field-error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="price">Giá bán (đồng)</label>

    <input
        id="price"
        name="price"
        type="number"
        min="0"
        step="1"
        value="{{ old('price', $product->price ?? '') }}"
        required
        @error('price') aria-invalid="true" aria-describedby="price-error" @enderror
    >

    @error('price')
        <p id="price-error" class="field-error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="stock">Số lượng tồn kho</label>

    <input
        id="stock"
        name="stock"
        type="number"
        min="0"
        step="1"
        value="{{ old('stock', $product->stock ?? 0) }}"
        required
        @error('stock') aria-invalid="true" aria-describedby="stock-error" @enderror
    >

    @error('stock')
        <p id="stock-error" class="field-error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description">Mô tả (tùy chọn)</label>

    <textarea
        id="description"
        name="description"
        rows="4"
        @error('description') aria-invalid="true" aria-describedby="description-error" @enderror
    >{{ old('description', $product->description ?? '') }}</textarea>

    @error('description')
        <p id="description-error" class="field-error">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="image">URL ảnh sản phẩm (tùy chọn)</label>

    <input
        id="image"
        name="image"
        type="url"
        value="{{ old('image', $product->image ?? '') }}"
        placeholder="https://example.com/laptop.jpg"
        @error('image') aria-invalid="true" aria-describedby="image-error" @enderror
    >

    @error('image')
        <p id="image-error" class="field-error">{{ $message }}</p>
    @enderror
</div>

<div class="row-actions">
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ route('admin.products.index') }}" class="btn">Hủy</a>
</div>