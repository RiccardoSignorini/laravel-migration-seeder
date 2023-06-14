<main>

    @foreach ($trains as $elem)
        <ul>
            <li>{{$elem->departure_to}}</li>
            <li>{{$elem->departure_time}}</li>
            <li>{{$elem->arrival_from}}</li>
            <li>{{$elem->arrival_time}}</li>
            <li>{{$elem->wagon_number}}</li>
        </ul>    
    @endforeach
    

</main>