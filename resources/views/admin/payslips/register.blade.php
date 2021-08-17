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
                        <input type="text" class="form-control" id="payslipName" value="{{ isset($payslip) ? $payslip->name : null }}" maxlength="100" required>
                        <label for="payslipName">Nome do Funcionário</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipCpf" value="{{ isset($payslip) ? $payslip->cpf : null }}" maxlength="11" required>
                        <label for="payslipCpf">CPF</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="payslipRg" value="{{ isset($payslip) ? $payslip->rg : null }}" maxlength="10" required>
                        <label for="payslipRg">Registro Geral</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection