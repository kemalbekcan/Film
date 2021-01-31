@extends('layouts.master')
@section('title', 'Filmbekcisi.com | Kayıt Ol')
@section('content')

    <div class="kayit">
    <h1>Kayıt Ol</h1>
    <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Kullanıcı Adı">
    </div>
        <div style="clear:both;"></div>
    <div class="textbox">
        <i class="fas fa-envelope"></i>
        <input type="text" placeholder="Mail Adresi">
    </div>
        <div style="clear:both;"></div>
    <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Şifre">
    </div>
        <div style="clear:both;"></div>

    <input type="button" class="btn" value="Kayıt Ol">
    </div>
        <div style="clear:both;"></div>
@endsection
