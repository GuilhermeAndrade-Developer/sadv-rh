@extends('layouts.admin')

@section('content')
<div class="container container-fluid pt-5">
    <div class="card">
        <form class="card-body row pt-2 g-2">
            <h5 class="card-title pt-4">
                Registar Funcionário
            </h5>
            <div class="row pt-2 g-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" required>
                        <label for="floatingInputGrid">Nome</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="lastName" id="lastName" required>
                        <label for="lastName">Sobrenome</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="cpf" id="cpf" required>
                        <label for="cpf">CPF</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="cpf" id="cpf" required>
                        <label for="cpf">CEP</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="cpf" id="cpf" required>
                        <label for="cpf">Endereço</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="cpf" id="cpf" required>
                        <label for="cpf">Número</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>São Paulo</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Estado</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="inputCity">
                        <label for="inputCity">Cidade</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="telephone">
                        <label for="telephone">Telefone</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2 justify-content-md-end">
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Santander</option>
                            <option value="1">Carrefour</option>
                            <option value="2">Pão de Açucar</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Empresas</label>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 pt-4 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-success btn-sm" type="submit">
                    Registrar
                </button>
                <button class="btn btn-outline-danger btn-sm" type="submit">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>
@endsection