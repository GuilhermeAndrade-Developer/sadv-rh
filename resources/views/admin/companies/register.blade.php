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
        <form  action="{{ route('admin.companies.create') }}" method="POST" enctype="multipart/form-data" class="card-body row pt-2 g-2">
            @csrf
            <h5 class="card-title pt-4">
                Registar Empresa
            </h5>
            <input name="id" value="{{ isset($company) ? $company->id : null }}" class="hidden" hidden>
            <div class="row pt-2 g-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="companyName"
                        value="{{ isset($company) ? $company->name : null }}" maxlength="100" required>
                        <label for="companyName">Nome da Empresa</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="cpf" id="cpf" value="{{ isset($company) ? $company->cnpj : null }}" maxlength="14" required>
                        <label for="cpf">CNPJ</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="telephone" id="telephone" value="{{ isset($company) ? $company->telephone : null }}" maxlength="11" required>
                        <label for="telephone">Telefone</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="cep" id="cep" value="{{ isset($company) ? $company->cep : null }}" maxlength="8" required>
                        <label for="cep">CEP</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="address" id="address" value="{{ isset($company) ? $company->address : null }}" maxlength="100" required>
                        <label for="address">Endereço</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="address_number" id="address_number" value="{{ isset($company) ? $company->address_number : null }}"  maxlength="5" required>
                        <label for="address_number">Número</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected value="{{ isset($company) ? $company->state : null }}">Acre</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Alagoas</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Amapá</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Amazonas</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Bahia</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Ceará</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Distrito Federal</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Espírito Santo</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Goiás</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Maranhão</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Mato Grosso</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Mato Grosso do Sul</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Minas Gerais</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Pará</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Paraíba</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Paraná</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Pernambuco</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Piauí</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Rio de Janeiro</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Rio Grande do Norte</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Rio Grande do Sul</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Rondônia</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Roraima</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Santa Catarina</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         São Paulo</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Sergipe</option>
                            <option value="{{ isset($company) ? $company->state : null }}">         Tocantins</option>
                            
                        </select>
                        <label for="floatingSelect">Estado</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="city" value="{{ isset($company) ? $company->city : null }}" maxlength="40" required>
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