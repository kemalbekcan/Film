@extends('layouts.master')
@section('title', 'Filmbekcisi.com | 1080p Kalitesinde Filmlerin Adresi')

@section('content')
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://media.discordapp.net/attachments/785467502518861824/803723512199774208/AksiyonSlider.jpg?width=840&height=473"></div>
                <div class="swiper-slide"><img src="https://media.discordapp.net/attachments/785467502518861824/803741202699649034/Bilimkurgu.jpg?width=840&height=473"></div>
                <div class="swiper-slide"><img src="https://media.discordapp.net/attachments/785467502518861824/803741202699649034/Bilimkurgu.jpg?width=840&height=473"></div>
                <div class="swiper-slide"><img src="https://media.discordapp.net/attachments/785467502518861824/803741202699649034/Bilimkurgu.jpg?width=840&height=473"></div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script src="js/app.js"></script>

    <div class="film">
        <div class="row">
            @foreach($filmler as $film)
            <div class="col-md-2">
                <div class="col-md-12">
                    <div class="card">
                        <a href="{{ route('film', $film->slug) }}">
                        <img class="resim" src="{{$film->film_resmi}}" class="card-img-top"></a>
                        <h5 class="cardTitle">

                                {{$film->film_adi}}

                        </h5>
                        <p class="dil">Türkçe</p>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    <div style="clear:both;"></div>

    <nav class="navi" aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Sonraki ></a></li>
            <li class="page-item"><a class="page-link" href="#">Son</a></li>
        </ul>
    </nav>

<p class="page-description">
    Sinema ve filmler, çok uzun yıllardan beri hayatımızda varlığını sürdüren ve toplulukların oluşmasında öncülük eden araçlardır. Ancak çoğu zaman sinemaya gitmek için zaman bulamamak veya uygun bir filme zamanında yetişememek gibi birçok sorun yüzünden izlemek istediğiniz filmleri kaçırabiliyorsunuz ki buda en büyük sorunlardan biridir.

    İnternet sitelerinin hayatımızda iyice yer edinmesi ile birlikte bu tip sorunların ortadan kalktığını söyleyebiliriz ancak burada da başka sorunlar kendini gösteriyor. Kesintiler, reklamlar, donmalar vs. tüm bunlar da yine film izlemeyi engelleyen büyük sorunlar olarak karşınıza çıkabiliyor. Filmmodu.org, yaşanan bu tip sorunları tamamen engelleyerek keyif içinde film izlemeyi ziyaretçilerine sunuyor.

    Ayrıcalıklarımız

    Film sitelerinde film izlemenin en zor ve çekilmez yönlerinden biri de film başlarken zorunlu olarak tıklanması gereken reklamlar veya filmin en heyecanlı yerinde araya giren ücretli reklamlar… Arkadaş, eş-dost ile birlikte veya tek başınıza film izlerken bu tip sorunların yaşanması ciddi anlamda can sıkıcı olabiliyor. Filmmodu ekibi olarak tüm bu olumsuzlukları önleyecek bir adım attık ve reklamsız film izleme imkanını ziyaretçilerimize sunarak istedikleri filmleri daha rahat bir ortamda ve sinirlerin bozulmasına gerek bırakmadan HD film izle kalitesi ile sunduk.

    IMDB puanı yüksek filmler

    Hangi filmi izleyeceğiniz karar vermediyseniz ve zamanınızı film izleyerek geçirmek istiyorsanız, yapmanız gereken şey sitemizden imdb puanı yüksek filmler seçmek olacak. Her kategorideki filmlerde yer alan puan sayesinde, filmin kalitesi ve izlenebilirlik derecesini test ederek film izlemeye karar verebilirsiniz. Ayrıca sitemiz üzerinden filmleri 1080p, 720p kalite seçenekleriyle ister Türkçe dublaj film izle veya Altyazılı film izle</p>
</div>
@endsection
