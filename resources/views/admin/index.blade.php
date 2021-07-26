@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Empresas</h5>
                  <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <!-- Example Text -->
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Carrefour</td>
                            <td>45.543.915/0001-81</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Santander</td>
                            <td>45.543.915/0001-81</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Pão de Açucar</td>
                            <td>45.543.915/0001-81</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Pão de Açucar</td>
                            <td>45.543.915/0001-81</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Pão de Açucar</td>
                            <td>45.543.915/0001-81</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">Visualizar</a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                  <a href="#" class="btn btn-primary btn-sm">Listar Todos</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Status de Serviços</h5>
                  {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome do Serviço</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">AWS Services</th>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(6, 202, 6)" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8"/>
                                      </svg>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail Services</th>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(228, 13, 13)" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8"/>
                                      </svg>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Rede</th>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(6, 202, 6)" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8"/>
                                      </svg>
                                </td>
                            </tr>
                        </tbody>
                        <!-- End Example Text -->
                    </table>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection