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
                        <input type="text" class="form-control" id="empoyeeName" value="{{ isset($employee) ? $employee->name : null }}" required>
                        <label for="employeeName">Nome do Funcionário</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeCpf" value="{{ isset($employee) ? $employee->cpf : null }}" maxlength="11" required>
                        <label for="employeeCpf">CPF</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeRg" value="{{ isset($employee) ? $employee->rg : null }}" maxlength="10" required>
                        <label for="employeeRg">Registro Geral</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeePis" value="{{ isset($employee) ? $employee->pis : null }}" maxlength="11" required>
                        <label for="employeePis">PIS/ PASEP</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeCep" value="{{ isset($employee) ? $employee->cep : null }}" maxlength="8" required>
                        <label for="employeeCep">CEP</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control"id="employeeAddress" value="{{ isset($employee) ? $employee->address : null }}" required>
                        <label for="employeeAddress">Endereço</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeNumber" {{ isset($employee) ? $employee->number : null }} maxlength="11" required>
                        <label for="employeeNumber">Número</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" id="employeeState" aria-label="Floating label select">
                            <option selected value="{{ isset($employee) ? $employee->state : null }}">Acre</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Alagoas</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Amapá</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Amazonas</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Bahia</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Ceará</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Distrito Federal</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Espírito Santo</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Goiás</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Maranhão</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Mato Grosso</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Mato Grosso do Sul</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Minas Gerais</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Pará</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Paraíba</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Paraná</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Pernambuco</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Piauí</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Rio de Janeiro</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Rio Grande do Norte</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Rio Grande do Sul</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Rondônia</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Roraima</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Santa Catarina</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         São Paulo</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Sergipe</option>
                            <option value="{{ isset($employee) ? $employee->state : null }}">         Tocantins</option>
                        </select>
                        <label for="employeeState">Estado</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeCity" value="{{ isset($employee) ? $employee->city : null }}" required>
                        <label for="employeeCity">Cidade</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeTelephone" value="{{ isset($employee) ? $employee->telephone : null }}" required>
                        <label for="employeeTelephone">Telefone</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeCargo" value="{{ isset($employee) ? $employee->cargo : null }}" maxlength="30" required>
                        <label for="EmployeepCargo">Cargo/ Função Atividade</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeUnit" value="{{ isset($employee) ? $employee->unit : null }}" maxlength="60" required>
                        <label for="employeeUnit">Unidade</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <select class="form-select" id="employeeCompany" aria-label="Floating label select">
                            <option selected>Santander</option>
                            <option value="1">Carrefour</option>
                            <option value="2">Pão de Açucar</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="employeeCompany">Empresas</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeBank" value="{{ isset($employee) ? $employee->bank : null }}" required>
                        <label for="employeeBank">Banco</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeBankBranch" value="{{ isset($employee) ? $employee->branch : null }}" required >
                        <label for="employeeBankBranch">Agência</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeAccount" value="{{ isset($employee) ? $employee->account : null }}" required>
                        <label for="employeeAccount">Conta Corrente</label>
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