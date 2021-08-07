<!DOCTYPE html>
<html lang="en">
@include('header')
<body>
    <h1>Listado de Usuarios, desde las Rutas</h1>
    <ul>
        @foreach($users as $user)
            <li> {{$user}} </li>            
        @endforeach
    </ul>
</body>
</html>