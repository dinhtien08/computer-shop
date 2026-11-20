@extends('layouts.auth')

@section('title', 'Đăng ký tài khoản')

@section('content')
    <form
        method="POST"
        action="{{ route('register.submit') }}"
        class="space-y-5"
        novalidate
    >
        @csrf

        <x-auth-input
            name="name"
            label="Họ tên"
            placeholder="Nhập họ tên của bạn"
            autocomplete="name"
        />

        <x-auth-input
            name="email"
            label="Email"
            type="email"
            placeholder="Nhập địa chỉ email"
            autocomplete="email"
        />

        <x-auth-input
            name="password"
            label="Mật khẩu"
            type="password"
            placeholder="Nhập ít nhất 8 ký tự"
            autocomplete="new-password"
        />

        <x-auth-input
            name="password_confirmation"
            label="Xác nhận mật khẩu"
            type="password"
            placeholder="Nhập lại mật khẩu"
            autocomplete="new-password"
        />

        <button type="submit" class="auth-button">
            Đăng ký
        </button>

        <p class="text-center text-sm text-slate-600">
            Đã có tài khoản?
            <a href="{{ route('login') }}" class="auth-link">Đăng nhập</a>
        </p>
    </form>
@endsection