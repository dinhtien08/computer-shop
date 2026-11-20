<div class="row-actions">
    <a href="{{ $showUrl }}" class="btn">Xem chi tiết</a>

    <a href="{{ $editUrl }}" class="btn">Sửa</a>

    <form
        method="POST"
        action="{{ $deleteUrl }}"
        onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')"
    >
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Xóa</button>
    </form>
</div>