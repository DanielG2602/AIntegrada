@extends('layouts.main')

@section('title', 'Login')

@section('content')


<img src="img/faculsenac.png" class="bckg">


<div class="content">
    <form action="" method="post">

    <h1>
        LOGIN
    </h1>

    <label for="">Email</label>
    <input type="email" name="email" id="email" placeholder="Digite seu email">
    <br>

    <label for="">Senha</label>
    <input type="password" name="senha" value="" id="senha" placeholder="Digite sua senha">
    <br>
    <input type="submit" value="Entrar" id="btn">
    <p id="link"><a href="/cadastro">Inscrever-se</a></p>

    </form>

</div>

@endsection
