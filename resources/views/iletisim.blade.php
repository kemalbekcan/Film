@extends('layouts.master')
@section('title', 'Filmbekcisi.com | İletişim')
@section('content')
    <div class="iletisim">
        <h1>İletişim</h1>

        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Adınız">
        </div>

        <div class="textbox">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Mail Adresi">
        </div>

        <div class="textbox">
            <i class="fas fa-comment"></i>
            <textarea class="message" placeholder="Mesajınız"></textarea>
        </div>


        <input type="button" class="btn" value="Mail Gönder">


    </div>
@endsection
