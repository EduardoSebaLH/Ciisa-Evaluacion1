@extends('layouts.master')

@section('content')

    <div class="modal-dialog text-center">
        <div class="col-sm-12">
            <div class="modal-content">
                <form class="col-12" th:action="@{/login}" method="get">
                <h4>Administrador</h4><hr> 
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/><br>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password"/> <br>
                    </div>
                    <button type="submit" href="localhost:8000/sesion" class="btn btn-primary"> Ingresar </button>
                </form>
                <div class="col-12 forgot"><br>
                    <a href="#">Recordar contraseña</a> <hr> 
                </div><br>
                </div>
            </div>
        </div>
    </div>
@stop