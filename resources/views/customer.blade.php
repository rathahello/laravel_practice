
    {{-- @if ($customers)
        @foreach ($customers as $item)
            {{$item}}
        @endforeach
    @else
       No Customer Yet
    @endif --}}
        {{$page}}
    @if ($customers1 )
        @foreach ($customers1 as $element)
            {{$element}}
        @endforeach
    @else
    No Customer Yet
    @endif
