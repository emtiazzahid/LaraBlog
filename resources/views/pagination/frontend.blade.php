@if ($paginator->lastPage() > 1)
    <div class="row">
        <div class="col">
            <div class="block-27">
                <ul>
                    @if($paginator->currentPage() > 1)
                    <li>
                        <a href="{{ $paginator->url(1) }}">&lt;</a>
                    </li>
                    @endif
                    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                        <li class="{{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
                            <a href="{{ $paginator->url($i) }}"><span>{{ $i }}</span></a>
                        </li>
                    @endfor
                    @if($paginator->currentPage() != $paginator->lastPage())
                    <li>
                        <a href="{{ $paginator->url($paginator->currentPage()+1) }}">&gt;</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif