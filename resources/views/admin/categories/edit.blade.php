<h1>Sửa danh mục</h1>

<form
    method="POST"
    action="{{ route('admin.categories.update', $category) }}"
    novalidate
>
    @csrf
    @method('PUT')

    @include('admin.categories.form', ['buttonText' => 'Lưu thay đổi'])
</form>