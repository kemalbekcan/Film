@extends('layouts.master')
@section('title', $film->film_baslik)

@section('content')

    <div class="film">
    <h1 class="film-isimleri">{{$film->film_ismi_ingilizce}} - {{$film->film_ismi_turkce}}</h1>
        <div class="btn btn-primary">Türkçe Altyazılı</div>
        <div class="btn btn-primary">Fragman</div>
        <div style="clear:both;"></div>
        <div class="youtube">
            <iframe width="560" height="315" src={{$film->film_fragman}} frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div style="clear:both;"></div>
<div class="film-card">
    <img src={{$film->film_resmi}}>
    <div class="film-bilgi">
        <p class="imbd">IMDB : {{$film->imdb}}</p>
        <p class="tur">Tür : {{$film->film_turu}}</p>
        <p class="yapim">Yapım : {{$film->yapim_yili}}</p>
        <p class="yonetmen">Yönetmen : {{$film->yonetmen}}</p>
        <p class="oyuncu">Oyuncular : {{$film->oyuncu1. ($film->oyuncu1 == null ? '': ', ')}}{{$film->oyuncu2. ($film->oyuncu2 == null ? '':', ')}}{{$film->oyuncu3. ($film->oyuncu3 == null ? '':', ')}}{{$film->oyuncu4. ($film->oyuncu4 == null ? '': ', ')}}{{$film->oyuncu5. ($film->oyuncu5 == null ? '': ', ')}}{{$film->oyuncu6. ($film->oyuncu6 == null ? '': ', ')}}{{$film->oyuncu7. ($film->oyuncu7 == null ? '':', ')}}{{$film->oyuncu8 .($film->oyuncu8 == null ? '': ', ')}}{{$film->oyuncu9. ($film->oyuncu9 == null ? '': ', ')}}{{$film->oyuncu10 .($film->oyuncu10 == null ? '': ', ')}}{{$film->oyuncu11. ($film->oyuncu11 == null ? '' : ', ')}}{{$film->oyuncu12. ($film->oyuncu12 == '' ? '' : ', ')}}</p>
        <p class="ozet">Film Özeti : {{$film->film_ozet}}</p>
    </div>
</div>
        <div style="clear:both;"></div>

<div class="yorum">
<h1>Film hakkında ne düşünüyorsun?</h1>
    <hr>
    <form>
        <input class="form-control" type="text" placeholder="Ad Soyad">
        <input class="form-control" type="text" placeholder="Mail">
        <textarea class="form-control" placeholder="Film hakkındaki yorumunuz"></textarea>
        <input type="checkbox" id="spoiler">
        <label class="spoiler" for="spoiler">Yorumunuz <strong>spoiler</strong> içeriyorsa lütfen işaretleyin</label>
        <button class="btn btn-primary">Gönder</button>
    </form>
</div>

        <div style="clear:both;"></div>

    </div>


    @endsection
