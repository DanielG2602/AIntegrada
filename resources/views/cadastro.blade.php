@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')


<img src="img/faculsenac.png" class="bckg">



<div class="content">

    <img src="img/senac-logo-4.png" class="logo">

    <form action="" method="post">

    <h1>
        CADASTRO
    </h1>

    <label for="">Email</label>
    <input type="email" name="email" id="email" placeholder="Digite seu email">
    <br>

    <label for="">Senha</label>
    <input type="password" name="senha"id="senha" placeholder="Digite sua senha">
    <br>
    <input type="submit" value="Entrar" id="btn">
    <p id="link"><a href="/login">Fazer Login</a></p>

    </form>

</div>

@endsection
