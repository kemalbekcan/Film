<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate çalıştırılmadan önce siler.
        DB::table('film')->truncate();
        // insert tabloya veri ekler.
        DB::table('film')->insert(['film_adi'=>'Sightless', 'film_fragman'=>'https://www.youtube.com/embed/I675IkNPFuY', 'imdb'=>5.4, 'yapim_yili'=>'2020', 'oyuncu1'=>'Madelaine Petsch', 'oyuncu2'=>'Alexander Koch', 'oyuncu3'=>'December Ensminger', 'oyuncu4'=>'Deniz Akdeniz', 'oyuncu5'=>'Matthew Yang King', 'oyuncu6'=>'Lee Jones', 'oyuncu7'=>'Courtney Compton', 'oyuncu8'=>'Jarrod Crawford', 'oyuncu9'=>'Mikandrew Perdaris', 'film_ozet'=>"Eski kemancı Ellen Ashland, gece geç saatlerde gaz maskesi ve peruk takan bir kişi tarafından saldırıya uğrar ve hastane yatağında uyanır. Artık kör olduğunu öğrenir ve Saldırıyı, birçok düşmanı olan eski kocasını Dedektif Bryce'a anlatır.", 'film_turu'=>'Gerilim', 'yonetmen'=>'Cooper Karl', 'film_baslik'=>'Sightless (Körü Körüne) 1080p Full HD izle', 'film_ismi_turkce'=>'Körü Körüne', 'film_ismi_ingilizce'=>'Sightless', 'film_resmi'=>'https://s1.filmmodu.org/uploads/movie/poster/10019/thumb_leCkJsZbQDULb0x5EocYs0JEloF.jpg', 'slug'=>'sightless-izle']);

        DB::table('film')->insert(['film_adi'=>'Palmer', 'film_fragman'=>'https://www.youtube.com/embed/OABSI3eYOk0', 'imdb'=>7.1, 'yapim_yili'=>'2021', 'oyuncu1'=>'Justin Timberlake', 'oyuncu2'=>'Ryder Allen', 'oyuncu3'=>'Juno Temple', 'oyuncu4'=>'Alisha Wainwright', 'oyuncu5'=>'June Squibb', 'oyuncu6'=>'Dean Winters', 'oyuncu7'=>'Wynn Everett', 'oyuncu8'=>'Jesse C. Boyd', 'oyuncu9'=>'Charmin Lee', 'oyuncu10'=>'Jake Brennan', 'film_ozet'=>"Üniversite döneminde gözde bir futbolcu olan Eddie Palmer, bir cinayetle suçlanarak 10 yıl hapis cezası alır. Dört duvar arasında geçirdiği yılların ardından özgürlüğüne kavuşan Eddie, hayatını yeniden kurmak için memleketine, büyükannesinin evine geri döner. Ancak onun eve geri dönmesi, ardında bıraktığı çatışmalara da dönmesine neden olur. Hayatına yön vermeye çalışan Eddie, bu sırada annesi tarafından terk edilen bir çocuğun sorumluluğunu üstlenmek zorunda kalır.", 'film_turu'=>'Dram', 'yonetmen'=>'Fisher Stevens', 'film_baslik'=>'Palmer (Palmer) 1080p Full HD izle', 'film_ismi_turkce'=>'Palmer', 'film_ismi_ingilizce'=>'Palmer', 'film_resmi'=>'https://s2.filmmodu.org/uploads/movie/poster/10051/thumb_xSDdRAjxKAGi8fUBLOqSrBhJmF0.jpg', 'slug'=>'palmer-izle']);

        DB::table('film')->insert(['film_adi'=>'Elly Hakkında', 'film_fragman'=>'https://www.youtube.com/embed/MdqMICWhxuA', 'imdb'=>7.1, 'yapim_yili'=>'2009', 'oyuncu1'=>'Golshifteh Farahani', 'oyuncu2'=>'Shahab Hosseini', 'oyuncu3'=>'Rastin Soleimani', 'oyuncu4'=>'Tarane Alidousti', 'oyuncu5'=>'Peyman Maadi', 'oyuncu6'=>'Mani Haghighi', 'oyuncu7'=>'Rana Azadivar', 'oyuncu8'=>'Ahmad Mehranfar', 'oyuncu9'=>'Saber Abar', 'oyuncu10'=>'Merila Zarei', 'film_ozet'=>"Ahmad, Almanya'da yıllar boyu yaşadıktan sonra, İran'ı ziyaret etmeye karar verir. Üniversiteden eski arkadaşları, Ahmad'ın gelişi onuruna Hazar Gölü kıyısında hep birlikte üç gün geçirecekleri bir tatil planlarlar. Bu tatili düzenlemek, gruptaki kadınlardan birinin, neşeli Sepideh'ın sorumluluğundadır. Sepideh, gruptaki arkadaşlarının haberi olmaksızın, kızının anaokulu öğretmeni Elly'yi de davet eder. Almanya'da yaptığı mutsuz evlilikten henüz kurtulmuş olan Ahmad, İranlı bir kadınla bir yuva kurmak istemektedir. Bunu bilen arkadaş grubu, Sepideh'in Elly'yi niçin davet ettiğini yavaş yavaş anlarlar.", 'yonetmen'=>'Asghar Farhadi', 'film_turu'=>'Dram', 'film_baslik'=>'About Elly (Elly Hakkında) 1080p Full HD izle', 'film_ismi_turkce'=>'Elly Hakkında', 'film_ismi_ingilizce'=>'About Elly', 'film_resmi'=>'https://s2.filmmodu.org/uploads/movie/poster/10022/thumb_dnHTROwOsUUihNw0nIFSvbztyMR.jpg', 'slug'=>'elly-hakkında-izle']);
    }
}
