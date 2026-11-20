@props([
    'name',
    'label',
    'type' => 'text',
    'placeholder' => '',
    'autocomplete' => 'off',
])

<div>
    <label for="{{ $name }}" class="auth-label">
        {{ $label }}
        <span class="text-red-500" aria-hidden="true">*</span>
    </label>

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        class="auth-input"
        placeholder="{{ $placeholder }}"
        autocomplete="{{ $autocomplete }}"
        required
        @if ($type !== 'password')
            value="{{ old($name) }}"
        @endif
        @error($name)
            aria-invalid="true"
            aria-describedby="{{ $name }}-error"
        @enderror
    >

    @error($name)
        <p id="{{ $name }}-error" class="auth-error">
            {{ $message }}
        </p>
    @enderror
</div>