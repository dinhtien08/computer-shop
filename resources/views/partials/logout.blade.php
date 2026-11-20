<form method="POST" action="{{ route('logout') }}" onsubmit="return confirm('Bạn có chắn chắn muốn đăng xuất?')">
    @csrf

    <button type="submit">Đăng xuất</button>
</form>