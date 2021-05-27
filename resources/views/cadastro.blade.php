@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">{{ __('Cadastro de Prestadores') }}

            <form action="">
            @csrf
                <label for="nome">
                    <span><br>Nome</span>
                    <input type="text" id="nome" name="nome">
                </label>

                <label for="sobrenome">
                    <span><br>Sobrenome</span>
                    <input type="text" id="sobrenome" name="sobrenome">
                </label>

                <label for="email">
                    <span>E-mail</span>
                    <input type="email" id="email" name="email">
                </label>

                <label for="telefone">
                    <span>Telefone</span>
                    <input type="text" id="telefone" name="telefone">
                </label>
            <div>
                <label for="nasc">
                    <span>Data de Nascimento</span>
                    <input type="date" id="nasc" name="nasc">
                </label>
                <label for="area">
                    <span>Área</span>
                    <input type="text" id="area" name="area">
                    <span>Cargo</span>
                    <input type="text" id="cargo" name="cargo">
                </label>
            </div>
            <div>
                <input type="submit" value="Cadastrar" id="button">
            </div>
            </form>
        </div>
    </div>

@endsection
