@extends('emails.layout')

@php /** @var \App\Models\User $user */ @endphp

@section('content')
    <p>Olá {{$user->name}},</p>
    <p>Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.</p>
    <p style="text-align: center;margin-bottom: 20px;">
        <a href="{{$url}}" target="_blank" class="btn-send">
            Redefinir Senha
        </a>
    </p>
    <p>Este link de redefinição de senha irá expirar em {{$expiresIn}} minutos.</p>
    <p>Se você não solicitou uma redefinição de senha, nenhuma ação adicional será necessária.</p>
@endsection
