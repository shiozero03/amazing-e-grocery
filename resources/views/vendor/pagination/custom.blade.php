<style type="text/css">
    ul li{
        display: inline-block;
        border: 1px;
        margin: 0 5px;
        font-weight: 600;
    }
    ul li a{
        text-decoration: none;
    }
</style>
@if ($paginator->hasPages())
    <ul class="pager">    
        <li>Pages</li>
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
@endif 