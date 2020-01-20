
    {{-- @if ($customers)
        @foreach ($customers as $item)
            {{$item}}
        @endforeach
    @else
       No Customer Yet
    @endif --}}


        {{$page}}
        <br>  
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                </tr>
            </thead>
                @foreach ($customers as $element)
            <tbody>
                <tr>
                    <td> {{$element['id']}}</td>
                    <td> {{$element['name']}}</td>
                    <td> {{$element['email']}}</td>
                </tr>
            </tbody>
                @endforeach
        </table>
