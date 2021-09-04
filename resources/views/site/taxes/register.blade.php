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
        <form action="{{ route('admin.taxes.create') }}" method="POST" enctype="multipart/form-data" class="card-body row pt-2 g-2">
            @csrf
            <h5 class="card-title pt-4">
                Registrar Tributo
            </h5>
            <input name="id" value="{{ isset($taxe) ? $taxe->id : null }}" class="hiden" hidden>
            <div class="row pt-2 g-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="taxeName" value="{{ isset($taxe) ? $taxe->name : null }}" maxlength="50" required>
                        <label for="taxeName">Denominação</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="taxeCode" value="{{ isset($taxe) ? $taxe->code : null }}" maxlength="5" required>
                        <label for="taxeCode">Código</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <select name="nature" id="floatingSelect" aria-label="Floating label select example" class="form-select">
                            <option selected value="{{ isset($taxe) ? $taxe->nature : null}}">Normal</option>
                            <option value="{{ isset($taxe) ? $taxe->nature : null}}">Devolução</option>
                            <option value="{{ isset($taxe) ? $taxe->nature : null}}">Estorno</option>
                            <option value="{{ isset($taxe) ? $taxe->nature : null}}">Atrasado</option>
                            <option value="{{ isset($taxe) ? $taxe->nature : null}}">Reposição</option>
                        </select>
                        <label for="floatingSelect">Natureza</label>
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