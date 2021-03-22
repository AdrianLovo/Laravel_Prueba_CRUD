@extends('layouts.plantillabase')

@section('contenido')   

    <div class="container">
        <a href="users/create" class="btn btn-primary mt-3" style="margin-bottom:20px">CREAR USUARIO</a>

        <table id="usuarios" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>        
        <tbody>
            @foreach($users as $user)
            <tr class="table-light">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-secondary" href="/users/{{$user->id}}/edit">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        $(document).ready(function() {
            $('#usuarios').DataTable();
        });

    </script>

   
@endsection