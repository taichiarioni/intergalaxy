@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <input type="submit" value=" + Cadastrar Prestador" id="button">
                    </div>
                    <br>
                        <table border="3" width="100%">
                            <th>Período</th>
                            <th>Horas Trabalhadas</th>
                            <th>Salário</th>
                        <tr>
                            <th>Manhã</th>
                        <tr>
                            <th>Tarde</th>
                        <tr>
                            <th>Noite</th>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
