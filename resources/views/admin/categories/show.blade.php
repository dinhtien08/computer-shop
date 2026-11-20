<h1>Chi tiết danh mục</h1>

<p>Mã danh mục: {{ $category->id }}</p>
<p>Tên danh mục: {{ $category->name }}</p>
<p>Số sản phẩm: {{ $category->products_count }}</p>

<a href="{{ route('admin.categories.edit', $category) }}">Sửa danh mục</a> |
<a href="{{ route('admin.categories.index') }}">Quay lại danh sách</a>