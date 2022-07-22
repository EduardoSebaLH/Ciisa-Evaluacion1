@extends('layouts.master')

@section('content')

    <div class="modal-dialog text-center">
        <div class="col-sm-12">
            <div class="modal-content">
                <form class="col-12" th:action="@{/login}" method="get">
                    <h4>Actualizar producto</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Código del producto"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nuevo nombre del producto"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nuevo precio del producto"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nueva descripción del producto"><br>
                    </div>
                    <button type="submit" href="http:/menu" class="btn btn-primary">Actualizar</button>
                </form>
                </div>
            </div>
        </div>
    </div><br>
@stop