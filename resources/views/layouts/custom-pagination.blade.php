@if ($paginator->hasPages())
<ul>
    @if($paginator->onFirstPage())
    <li></li>
    @else
    <li><a class="btn p-4 m-2 bg-blue-900 text-white rounded-full capitalize" href="">
            < previous</a>
    </li>
    @endif


    @foreach($elements as $element)
    @if(is_array($element))
    @foreach ($element as $page => $url)
    @if($page == $paginator->currentPage())
    <li><a class="btn py-4 px-6 m-2 bg-blue-900 text-white rounded-full" href="{{$url}}">{{$page}}</a></li>
    @elseif($page == $paginator->currentPage() +1 || $page == $paginator->currentPage() + 2 || $page == $paginator->currentPage() + 3 || $page == $paginator->currentPage() - 1 || $page == $paginator->currentPage() -2 || $page == $paginator->currentPage() + 3)
    <li><a class="btn py-4 px-6 m-2 bg-blue-900 text-white rounded-full" href="{{$url}}">{{$page}}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach


    @if($paginator->hasMorePages())
    <li><a class="btn p-4 m-2 bg-blue-900 text-white rounded-full capitalize" href="">next ></a></li>
    @else
    <li></li>
    @endif
</ul>
@endif