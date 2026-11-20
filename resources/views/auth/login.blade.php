@extends('layouts.auth')

@section('title', 'Đăng nhập')

@section('content')
    @if (session('success'))
        <p
            role="status"
            class="mb-5 rounded-xl border border-emerald-200 bg-emerald-50
                   px-4 py-3 text-sm text-emerald-800"
        >
            {{ session('success') }}
        </p>
    @endif

    <form
        method="POST"
        action="{{ route('login.submit') }}"
        class="space-y-5"
        novalidate
    >
        @csrf

        <x-auth-input
            name="email"
            label="Email"
            type="email"
            placeholder="Nhập địa chỉ email"
            autocomplete="username"
        />

        <x-auth-input
            name="password"
            label="Mật khẩu"
            type="password"
            placeholder="Nhập mật khẩu"
            autocomplete="current-password"
        />

        <button type="submit" class="auth-button">
            Đăng nhập
        </button>

        <p class="text-center text-sm text-slate-600">
            Chưa có tài khoản?
            <a href="{{ route('register') }}" class="auth-link">Đăng ký</a>
        </p>
    </form>
@endsection