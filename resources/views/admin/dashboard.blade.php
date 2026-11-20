<h1>Trang quản trị Computer Shop</h1>
<p>Quản trị viên: {{ auth()->user()->name }}</p>
<a href="{{ route('admin.categories.index') }}">Quản lý danh mục</a>
@include('partials.logout')