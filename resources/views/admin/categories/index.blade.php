<h1>Quản lý danh mục</h1>

<p>
    <a href="{{ route('admin.dashboard') }}">Trang quản trị</a> |
    <a href="{{ route('admin.categories.create') }}">Thêm danh mục</a>
</p>

@if (session('success'))
    <p role="status">{{ session('success') }}</p>
@endif

@if (session('error'))
    <p role="alert">{{ session('error') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Số sản phẩm</th>
            <th>Thao tác</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->products_count }}</td>
                <td>
                    <a href="{{ route('admin.categories.show', $category) }}">Xem</a>
                    <a href="{{ route('admin.categories.edit', $category) }}">Sửa</a>

                    <form
                        method="POST"
                        action="{{ route('admin.categories.destroy', $category) }}"
                        onsubmit="return confirm('Bạn có muốn xóa danh mục này?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit">Xóa</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Chưa có danh mục nào.</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $categories->links() }}