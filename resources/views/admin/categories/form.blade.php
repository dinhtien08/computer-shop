<div>
    <label for="name">Tên danh mục</label>

    <input
        id="name"
        name="name"
        type="text"
        value="{{ old('name', $category->name ?? '') }}"
        placeholder="Ví dụ: Dell"
    >

    @error('name')
        <p role="alert">{{ $message }}</p>
    @enderror
</div>

<button type="submit">{{ $buttonText }}</button>
<a href="{{ route('admin.categories.index') }}">Quay lại</a>