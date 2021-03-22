@extends('layouts.plantillabase')

@section('contenido')

    <div class="container">
        <h1>Editar Usuario</h1>

        <form method="POST" action="/users/{{$user->id}}">  
            @csrf
            @method('PUT')
            <input type="text" name="metodo" value="Agregar" style="display:none">                     
            <div class="form-row pt-4">
                <div class="form-group col-md-10 offset-md-1">
                    <label for="nombre">Nombre</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Nombre" require value="{{$user->name}}">   
                    <span id="nombreWarning"></span>                     
                </div>
                <div class="form-group col-md-10 offset-md-1">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" require value="{{$user->email}}">
                    <span id="emailWarning"></span>
                </div>                 
            </div>

            <div class="form-row">
               
                <div class="form-group col-md-10 offset-md-1">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="*****" require value="{{$user->password}}">
                    <span id="passwordWarning"></span>
                </div>          
            </div>
            <div class="form-row mt-3">
                <div class="form-group col-md-10 offset-md-1">
                    <a href="/users" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>                        
                </div>
            </div>
        </form>
    </div>

@endsection('contenido')