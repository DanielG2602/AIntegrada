@extends('layouts.main')

@section('title', 'Login')

@section('content')


<img src="img/faculsenac.png" class="bckg">


@if (auth()->check())
    Already logged in {{auth()->user()->fistName}}| <a href="{{route('login.destroy')}}"></a>
@else

@if (@session()->has('success'))
{{session()->get('success')}}
@endif

@error('error')
<span>{{$message}}</span>
@enderror

<div class="content">

<img src="img/senac-logo-4.png" class="logo">

<form action="{{route('login.store')}}" method="post">
    @csrf
<h1>
    LOGIN
</h1>

<label for="">Email</label>
<input type="email" name="email" id="email" placeholder="Digite seu email" required>
@error('email')
    <span>{{$message}}</span>
@enderror
<br>

<label for="">Senha</label>
<input type="password" name="senha" value="" id="senha" placeholder="Digite sua senha" required>
@error('senha')
    <span>{{$message}}</span>
@enderror
<br>
<input type="submit" value="Entrar" id="btn">
<p id="link"><a href="/cadastro">Inscrever-se</a></p>

</form>

</div>
@endif
@endsection
