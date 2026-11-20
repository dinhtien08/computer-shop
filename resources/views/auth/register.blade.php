<h1>Đăng ký tài khoản</h1>

<form method="POST" action="{{ route('register.submit') }}" novalidate>
    @csrf

    <div>
        <label for="name">Họ tên</label>
        <input id="name" type="text" name="name"
               value="{{ old('name') }}" autocomplete="name" required>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email"
               value="{{ old('email') }}" autocomplete="email" required>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password">Mật khẩu</label>
        <input id="password" type="password" name="password"
               autocomplete="new-password" required>

        @error('password')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Xác nhận mật khẩu</label>
        <input id="password_confirmation" type="password"
               name="password_confirmation" autocomplete="new-password" required>
    </div>

    <button type="submit">Đăng ký</button>
</form>

<p>Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a></p>