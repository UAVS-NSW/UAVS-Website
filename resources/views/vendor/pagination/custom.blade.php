@if ($paginator->hasPages())
    <div class="pagination-links">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="disabled">« Previous</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="linked-link">« Previous</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="disabled">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="linked-link">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="linked-link">Next »</a>
        @else
            <span class="disabled">Next »</span>
        @endif
    </div>
@endif
