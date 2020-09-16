<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('dramas')->insert([

    [
        'id'=>'1',
        'name'=>"Grey's Anatomy",
        'season'=>'16',
        'episodes'=>'363',
        'IMDB'=>'7.6',
        'summary'=>"Seattle Grace Hastanesi’nde yeni bir gün, yeni bir sabah, yeni ameliyatlar, kurtarılması gereken hayatlar, düşler ve umutlar...

Farklı tıp fakültelerini yeni bitirmiş 5 stajyer doktor adayı Meredith, Cristina, Izzie, Alex ve George zorlu bir eleme sınavını geçerek, prestijli bir eğitim hastanesi olarak ün salan Seattle Grace’in cerrahi departmanında stajyerlik programına kabul edilmiştir. Önlerindeki bir sene boyunca, cerrahi bölümünün en başarılı doktorlarından olan Uzman Dr. Bailey'in (Nazi) gözetiminde, doktorluğun her yönünü yaşayan stajyerler hastanenin karmaşasının yanında aşk ilişkilerinde de yeni heyecanlar ve bocalamalarla tanışacaklar...
",
    ],

    [
        'id'=>'2',
        'name'=>"Suits",
        'season'=>'9',
        'episodes'=>'134',
        'IMDB'=>'8.5',
        'summary'=>"Bir hukuk draması olarak lanse edilmesine rağmen, türden beklenmeyecek bir tempoyla ilerleyen dizi, yaza yakışır bir USA Network dizisi.
Hukuk fakültesinden atılan, çok zeki ve olağanüstü bir fotografik hafızaya sahip olan Mike Ross'un yolu, Harvard mezunu Harvey Specter ile kesişir. Specter NewYork'un bir numaralı avukatlarından biridir ve Mike'ın yeteneklerinden oldukça etkilenmiştir. Böylece ikili bir araya gelerek, Mike'ın da Harvard mezunu olduğu yalanını söyleyerek beraber çalışmaya başlarlar.",
    ],

    [   'id'=>'3',
        'name'=>"House",
        'season'=>'8',
        'episodes'=>'177',
        'IMDB'=>'8.7',
        'summary'=>"Orijinal ismi House M.D. olan House dizisi konusu, oyuncuları ve karakterlerini bu yazımızda bulabilirsiniz.Dram türündeki dizi 2004 yılında başlamış ve 2012 yılına kadar yayınlanmıştır. FOX kanalında yayınlanan House dizisi 177 bölüm sürmüştür.Dizinin yönetmen koltuğunda Bryan Singer oturmaktadır.Dizinin büyük bölümü Los Angeles da Century City de çekilmiştir.Oyuncu Hugh Laurie 206 ve 2007 yılları olmak üzere Dr. Gregory House karakteri ile Altın Küre ödülünü almıştır. Humanitas Prize’nin yanında Altın Küre ve Emmy ödülünü de alan dizi tabiri caizse en iyi hastane dizisidir.",
    ],

    [   'id'=>'4',
        'name'=>"Chernobyl",
        'season'=>'1',
        'episodes'=>'5',
        'IMDB'=>'9.4',
        'summary'=>"Chernobyl, 1986 yılında Ukrayna’da Çernobil nükleer santralindeki patlama ve sonrasında yaşananları konu ediyor. Yaşanan trajik kazanın ardından SSCB, olayın araştırılması için ülkenin önde gelen nükleer fizikçilerinden Valery Legasov’u görevlendirir. Sovyet Başkan Yardımcısı Boris Shcherbina ile birlikte kazayı incelemeye giden Valery, olayın nasıl meydana geldiğini öğrenmek ve felaketin boyutlarını kontrol altına almak için zorlu bir mücadele verir.",
    ],
    [   'id'=>'5',
        'name'=>"Elite",
        'season'=>'3',
        'episodes'=>'24',
        'IMDB'=>'7.6',
        'summary'=>"Elite, ülkenin en seçkin okuluna gitmeye hak kazanan işçi sınıfından üç gencin hikayesini konu ediyor. Las Encinas, İspanya’nın en seçkin okullarından biridir. Ülkede yaşanan bir deprem pek çok okulun yıkılmasına neden olur. Açıkta kalan çocuklar bölgedeki diğer okullara dağıtılmaya başlayınca, işçi sınıfı ailelerden gelen üç çocuk da Las Encinas’a kabul edilir. Gençler başlarda bu durumu büyük bir şans olarak görür. Ancak çok geçmeden yanıldıklarını anlarlar. Kaybedecek hiçbir şeyi olmayan üç genç ile her şeye sahip olan okulun zengin öğrencileri arasında büyük bir çatışma başlar. Sınıf arkadaşlarından birinin ölü bulunması ise ortamı iyice karıştırır. Polis tüm öğrencileri sorgudan geçirir. Peki suçlu ya da suçlular kimdir? La Casa de Papel'in başrol oyuncularından María Pedraza, Miguel Herrán ve Jaime Lorente'yi tekrar bir araya getiren dizinin kadrosunda Itzan Escamilla, Miguel Bernardeau, Arón Piper, Ester Expósito, Mina El Hammani gibi isimler yer alıyor. Darío Madrona ve Carlos Montero’nun yaratıcısı olduğu dizinin müzikleri ise Lucas Vidal’a ait.",


    ],

]);
    }
}
