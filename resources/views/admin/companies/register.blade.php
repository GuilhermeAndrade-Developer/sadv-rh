@extends('layouts.admin')

@section('content')
<div class="container container-fluid pt-5">
    @if ($errors->any())
            <div class="alert alert-danger col-12">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="card">
        <form action="{{ route('admin.company.create') }}" method="POST" enctype="multipart/form-data" class="card-body row pt-2 g-2">
            @csrf
            <h5 class="card-title pt-4">
                Registar Empresa
            </h5>
            <input name="id" value="{{ isset($company) ? $company->id : null }}" class="hidden" hidden>
            <div class="row pt-2 g-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="companyName" aria-describedby="name" value="{{ isset($company) ? $company->name : null }}" maxlength="100" name="name" required>
                        <label for="companyName">Nome da Empresa</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="cnpj" aria-describedby="cnpj" value="{{ isset($company) ? $company->cnpj : null }}" name="cnpj" required>
                        <label for="cnpj">CNPJ</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="telephone" aria-describedby="telephone" value="{{ isset($company) ? $company->telephone : null }}" maxlength="11" name="telephone" required>
                        <label for="telephone">Telefone</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="cep" aria-describedby="cep" value="{{ isset($company) ? $company->cep : null }}" maxlength="8" name="cep" required>
                        <label for="cep">CEP</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="address" aria-describedby="address" value="{{ isset($company) ? $company->address : null }}" maxlength="100" name="address" required>
                        <label for="address">Endereço</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="address_number" aria-describedby="address_number" value="{{ isset($company) ? $company->address_number : null }}"  maxlength="5" name="address_number" required>
                        <label for="address_number">Número</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="state" name="state">
                            <option selected value="{{ isset($company) ? $company->state : null }}" name="state">Acre</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Alagoas</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Amapá</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Amazonas</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Bahia</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Ceará</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Distrito Federal</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Espírito Santo</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Goiás</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Maranhão</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Mato Grosso</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Mato Grosso do Sul</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Minas Gerais</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Pará</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Paraíba</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Paraná</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Pernambuco</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Piauí</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Rio de Janeiro</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Rio Grande do Norte</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Rio Grande do Sul</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Rondônia</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Roraima</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Santa Catarina</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         São Paulo</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Sergipe</option>
                            <option value="{{ isset($company) ? $company->state : null }}" name="state">         Tocantins</option>
                        </select>
                        <label for="floatingSelect">Estado</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="city" aria-describedby="city" value="{{ isset($company) ? $company->city : null }}" maxlength="40" name="city" required>
                        <label for="city">Cidade</label>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 pt-4 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-success btn-sm" type="submit">
                    Registrar
                </button>
                <a class="btn btn-outline-danger" href="{{ url()->previous() }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection