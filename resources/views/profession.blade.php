<!DOCTYPE html>
@include('header')

<body>
    <div>
        {{$profession}}
    </div>
    <ul>
        @forelse($profession as $prof)
        <li> {{$prof->description}} </li>
        @empty
        <li>No hay profesiones registradas.</li>
        @endforelse

    </ul>
</body>

</html>