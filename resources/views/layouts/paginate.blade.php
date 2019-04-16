
@if ($paginator->hasPages())

    <ul class="paginator">
        @if ($paginator->onFirstPage())
            {{-- кнопка << --}}
            <li class="disable"><p>&laquo;</p></li>

        @else

            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>

        @endif
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @foreach ($element as $page => $url)
                {{--  Use three dots when current page is greater than 2.  --}}
                @if ($paginator->currentPage() > 3 && $page === 2)
                    <li class="disable"><p>...</p></li>
                @endif

                {{--  Show active page else show the first and last two pages from current page.  --}}
                @if ($page == $paginator->currentPage())
                    <li class="actived"><p>{{ $page }}</p></li>
                @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 1 || $page === $paginator->lastPage() || $page === 1)
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @elseif ($page === $paginator->lastPage()-1)
                        <li class="disable"><p>...</p></li>
                    @endif

            @endforeach
        @endforeach
        @if ($paginator->hasMorePages())
            {{-- кнопка >> --}}
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>

        @else

            <li class="disable"><p>&raquo;</p></li>

        @endif
    </ul>
@endif

{{-- Pagination Elements --}}
