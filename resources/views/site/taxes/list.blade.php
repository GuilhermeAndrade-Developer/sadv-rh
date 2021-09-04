@extends('layouts.admin')

@section('content')
    <div class="container container-fluid pt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Listar Tributos
                </h5>
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Código</th>
                            <th scope="col">Denominação</th>
                            <th scope="col">Natureza</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">01.001</th>
                            <td>SALÁRIO BASE</td>
                            <td>Normal</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">01.035</th>
                            <td>IMPOSTO DE RENDA NA FONTE</td>
                            <td>Atrasado</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection