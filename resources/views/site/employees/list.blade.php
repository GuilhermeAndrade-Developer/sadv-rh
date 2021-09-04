@extends('layouts.admin')

@section('content')
<div class="container container-fluid pt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Listar Funcionários
            </h5>
            <table class="table table-responsive table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <!-- Example Text -->
                <tbody class="text-center">
                    <tr>
                        <th scope="row">1</th>
                        <td>Guilherme Andrade Santos</td>
                        <td>000.000.000-00</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Arthur Andrade Lopes Silva</td>
                        <td>000.000.000-00</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                        </td>
                    </tr>
                </tbody>
                <!-- End Example Text -->
            </table>
        </div>
    </div>
</div>
@endsection