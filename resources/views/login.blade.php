@extends('layouts.master')
@section('title', 'Filmbekcisi.com | Üye Girişi')

@section('content')
    <div class="giris">
        <h1>Giriş Yap</h1>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Kullanıcı Adı">
        </div>
        <div style="clear:both;"></div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Şifre">
        </div>
        <div style="clear:both;"></div>
        <input type="button" class="btn" value="Giriş">


        <div class= "sifre">
            <p><a href="{{ route('sifirla') }}">Şifremi unuttum</a></p>
        </div>
        <div style="clear:both;"></div>

        <div class= "uyeol">
            <p>Üye değil misin? Hemen üye ol.</p>
        </div>
        <div style="clear:both;"></div>

    </div>
@endsection
