<div>
    <label for="name">Tên danh mục</label>

    <input
        id="name"
        name="name"
        type="text"
        value="{{ old('name', $category->name ?? '') }}"
        placeholder="Ví dụ: Dell"
        required
        @error('name') aria-invalid="true" aria-describedby="name-error" @enderror
    >

    @error('name')
        <p id="name-error" class="field-error">{{ $message }}</p>
    @enderror
</div>

<div class="row-actions">
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ route('admin.categories.index') }}" class="btn">Hủy</a>
</div>