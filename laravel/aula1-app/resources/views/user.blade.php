
@extends('layouts.default')

@section('title','Usuários')
 

@section('content')
<h1 style="color:green">Usuario {{$user->id}}</h1>
<br>
<br> 
<h1>Nome:</h1> <h2>{{ $user->name }} </h2><br><br>
<h1>Email:</h1> <h2>{{ $user->email }} </h2>
@endsection

@section('menu')
<h1> Menu do usuário</h1>
@endsection

@push('styles')
<link rel="stylesheet" href="/css/user.css">
@endpush

@push('scripts')
<script src="/js/user.js"></script>
@endpush
