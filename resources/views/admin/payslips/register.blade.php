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
        <form action="{{ route('admin.payslips.create') }}" method="POST" enctype="multipart/form-data" class="card-body row pt-2 g-2">
            @csrf
            <h5 class="card-title pt-4">
                Registrar Holerite
            </h5>
            <input name="id" value="{{ isset($payslip) ? $payslip->id : null }}" class="hiden" hidden>
            <div class="row pt-2 g-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeName" value="{{ isset($payslip) ? $payslip->name : null }}" maxlength="100" required>
                        <label for="employeeName">Nome do Funcionário</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="employeeCpf" value="{{ isset($payslip) ? $payslip->cpf : null }}" maxlength="11" required>
                        <label for="employeepCpf">CPF</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipRg" value="{{ isset($payslip) ? $payslip->rg : null }}" maxlength="10" required>
                        <label for="payslipRg">Registro Geral</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipPis" value="{{ isset($payslip) ? $payslip->pis : null }}" maxlength="11" required>
                        <label for="payslipPis">PIS/ PASEP</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipCargo" value="{{ isset($payslip) ? $payslip->cargo : null }}" disabled>
                        <label for="payslipCargo">Cargo/ Função Atividade</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipUnidade" value="{{ isset($payslip) ? $payslip->unidade : null }}" maxlength="60" required>
                        <label for="payslipUnidade">Unidade</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipBanco" value="{{ isset($payslip) ? $payslip->banco : null }}" disabled>
                        <label for="payslipBanco">Banco</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipAgencia" value="{{ isset($payslip) ? $payslip->agencia : null }}" disabled>
                        <label for="payslipAgencia">Agência</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipCorrente" value="{{ isset($payslip) ? $payslip->corrent : null }}" disabled>
                        <label for="payslipCorrente">Conta Corrente</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipDate" value="{{ isset($payslip) ? $payslip->date : null }}" maxlength="8" required>
                        <label for="payslipDate">Data de Pagamento</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipCode" value="{{ isset($payslip) ? $payslip->code : null }}" maxlength="8" required>
                        <label for="payslipCode">Código do Tributo</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipTributo" value="{{ isset($payslip) ? $payslip->nameTributo : null }}" maxlength="30" disabled>
                        <label for="payslipTributo">Denominação do Tributo</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipNatureza" value="{{ isset($payslip) ? $payslip->natureza : null }}" maxlength="30" disabled>
                        <label for="payslipNatureza">Natureza</label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 g-2">
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipCode" value="{{ isset($payslip) ? $payslip->code : null }}" maxlength="8">
                        <label for="payslipCode">Código do Tributo</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipTributo" value="{{ isset($payslip) ? $payslip->nameTributo : null }}" disabled>
                        <label for="payslipTributo">Denominação do Tributo</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipNatureza" value="{{ isset($payslip) ? $payslip->natureza : null }}" disabled>
                        <label for="payslipNatureza">Natureza</label>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 pt-4 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-primary btn-sm" type="submit">
                    Imprimir
                </button>
                <button class="btn btn-outline-success btn-sm" type="submit">
                    Registrar
                </button>
                
                <a class="btn btn-outline-danger" href="{{ url()->previous() }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection