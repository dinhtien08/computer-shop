@if ($paginator->hasPages())
    <nav class="pager" aria-label="Phân trang">
        @if ($paginator->previousPageUrl())
            <a class="btn" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                Trang trước
            </a>
        @endif

        @for ($page = 1; $page <= $paginator->lastPage(); $page++)
            @if ($page === $paginator->currentPage())
                <span class="btn btn-primary" aria-current="page">{{ $page }}</span>
            @else
                <a class="btn" href="{{ $paginator->url($page) }}" aria-label="Trang {{ $page }}">
                    {{ $page }}
                </a>
            @endif
        @endfor

        @if ($paginator->nextPageUrl())
            <a class="btn" href="{{ $paginator->nextPageUrl() }}" rel="next">
                Trang sau
            </a>
        @endif
    </nav>
@endif