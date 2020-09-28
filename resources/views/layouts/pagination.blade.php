

@if ($paginator->hasPages())
    <ul class="pagen-list">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!-- <li class="disabled pagen-item "><span class="pagen-link"> << </span></li> -->
        @else
            <li class="pagen-item"><a class="pagen-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"> << </a></li>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagen-item pagen-active disabled"><span>{{ $element }}</span></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagen-item "><span class="pagen-link pagen-active">{{ $page }}</span></li>
                    @else
                        <li class="pagen-item"><a class="pagen-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagen-item"><a class="pagen-link" href="{{ $paginator->nextPageUrl() }}" rel="next"> >> </a></li>
        @else
            <li class="disabled pagen-item"><span class="pagen-link"> >> </span></li>
        @endif
    </ul>
@endif