<h1>Thêm danh mục</h1>

<form method="POST" action="{{ route('admin.categories.store') }}" novalidate>
    @csrf

    @include('admin.categories.form', ['buttonText' => 'Thêm danh mục'])
</form>