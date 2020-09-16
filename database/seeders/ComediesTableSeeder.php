<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ComediesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comedies')->insert([
           [
               'id'=>'1',
               'name'=>'The Simpsons',
               'season'=>'28',
               'episodes'=>'639',
               'IMDB'=>'8.7',
               'summary'=>"Henüz ilk sezonuyla birlikte hem hayranlar, hem de eleştirmenler tarafından Amerikan ailesinin televizyonda ekranlarındaki en gerçekçi ve en komik tasvirlerinden birisi olarak nitelendirilen The Simpsons, Springfield kasabasının en çılgın ailesi. Do’nuts düşkünü Homer; kocaman mavi saçlarıyla ailenin denge unsuru olan Marge; sinsi ve kurnaz Bart; sadece ailenin değil bütün kasabanın da entelektüeli, zeki kız Lisa ve emzik ile konuşabilen yegane bebek Maggie’den oluşan The Simpsons, sadece çocukların değil, yetişkinlerin de çizgi film bağımlısı olabileceğinin en büyük göstergesi.",
           ],


            [
                'id'=>'2',
                'name'=>'How I Met Your Mother',
                'season'=>'9',
                'episodes'=>'208',
                'IMDB'=>'8.3',
                'summary'=>"Dizi, 2030 yılında baş karakterlerden Ted’in çocuklarının karşısına geçip anneleri ile nasıl tanıştıklarını anlatmasıyla başlıyor ve bu hikaye tam 208 bölüm sürüyor. Kendini tekrar etmeden 208 bölüm çekilen dizide bu durum bir başarı olarak gösteriliyor. Dizi Ted ve Marshall’ın nasıl tanıştıkları ile başlıyor ve Yazarları olan Bays ve Thomas kendi hikayelerinden yola çıkarak karakterlere yön veriyorlar.",
            ],

            [
                'id'=>'3',
                'name'=>'Friends',
                'season'=>'10',
                'episodes'=>'236',
                'IMDB'=>'8.9',
                'summary'=>"Friends; 20’li yaşlarında olan; karakterleri ve hayat hikayeleri birbirinden farklı 3’ü kadın ve 3’ü erkek olan bu 6 gencin New York’ta yaşadıkları komik ve hayat dolu maceralarını anlatıyor. Ayrıca diziye konuk olan 34 farklı oyuncu da bu hikâyeye ortak oluyor. Kâh üzülüyorlar kâh gülüyorlar, bazen aşk bazen ayrılık dolu çok kaliteli bir yapım. Sürekli vakit geçirdikleri Central Perk Cafe’de onların komedilerine çoğu sahnede ortak oluyor. Çekimleri 10 yıl süren bu yapımda, karakterlerin yaşları da dizi süresince gerçek hayatla aynı şekilde büyütülmüş ve hayat hikâyeleri bu duruma göre şekillendirilmiştir.",
            ],

            [
                'id'=>'4',
                'name'=>'The Big Bang Theory',
                'season'=>'12',
                'episodes'=>'279',
                'IMDB'=>'8.1',
                'summary'=>"Birbirinden zeki ve takıntılı iki ev arkadaşının karşı apartman dairesine, güzel (ama aklı biraz yavaş çalışan) bir genç kız tanışırsa ne olur? The Big Bang Theory MIT doktorası yapan, asosyal iki araştırma görevlisinin, sıradan bir garson olan, sarışın güzel Sheldon ile komşuluk ilişkilerini anlatıyor.
The Big Bang Theory, Two and a Half Men’in yaratıcısı ve yazarı Chuck Lorre imzalı, zeka dolu bir komedi.",
            ],

            [
                'id'=>'5',
                'name'=>'The Office',
                'season'=>'9',
                'episodes'=>'201',
                'IMDB'=>'8.9',
                'summary'=>"Amerika’da bir kağıt şirketi olan Mifflin’in Scraton şubesindeki ofisinde gerçekleşen olaylar mizahi yönü ile diziye aktarılmış. Dizide ofis müdürü Michael Scott ve elemanlarının yaşadıkları olaylar aktarılırken birbirinden ilginç karakterler olması da diziyi ilgi çekici hale getirmiş. Ofiste geçen günleri belgesel dizi şeklinde gösteren dizide Steve Carell’in can verdiği karakter Michael Scott şimdi neden bunu yaptı ki diyeceğiniz ilginç ve utandırıcı şakaları ve davranışları ile adeta saç baş yoldurtuyor.",
            ],
            [
                'id'=>'6',
                'name'=>'Modern Family',
                'season'=>'11',
                'episodes'=>'250',
                'IMDB'=>'8.4',
                'summary'=>"Bir aile düşünün. Sizden yaşça hayli küçük ve güzel bir eşiniz ve onun babalık yapmaya çalıştığınız oğlu. Her biri birbirinden dertli, üç çocuğu olan kızınız ve partneriyle beraber evlat edinmeye karar veren eşcinsel oğlunuz. Böylesi bir aile portresinden, elbette komediden başka bir şey çıkmaz.
Modern Family son zamanların en iyi komedilerinden biri. Aslına bakarsanız Mockumentery diye tanımlanan bir aile komedisi belgeseli. Başrollerde; uzun yıllar Married and Children ile evlerimize konuk olan Ed O'Neill, Sofía Vergara, Julie Bowen, Ty Burrell var.",
            ],

        ]);
    }
}
