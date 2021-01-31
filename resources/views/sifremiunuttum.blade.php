@extends('layouts.master')
@section('title', 'Filmbekcisi.com | Şifremi Unuttum')

@section('content')
    <div class="sifre">
        <h1>Şifre Sıfırla</h1>

        <div class="textbox">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Mail Adresi">
        </div>


        <input type="button" class="btn" value="Mail Gönder">


    </div>

@endsection
