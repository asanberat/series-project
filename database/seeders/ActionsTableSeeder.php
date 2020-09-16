<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('actions')->insert([

                [

                'id'=>'1',
                'name'=>'Game Of Thrones',
                'season'=>'3',
                'episodes'=>'6',
                'IMDB'=>'9.3',
                'summary'=>"Game of Thrones'un ilk sezon hikayesi Geroge R.R. Martin'in yazdığı kitap serisi Buz ve Ateşin Şarkısı üzerine kuruludur. Hikaye, Kral Robert Baratheon'ın sağ kolunun gizemli bir şekilde ölmesiyle, Stark Hanesi'nin bölgesi olan Winterfell'a gelmesi ve Ned Stark'a yeni sağ kolu olmasını teklif etmesiyle başlar.

                    Ned Stark, Kral'ın Sağ Eli'ni kim öldürdüğünü bulmak ve kendi ailesini de korumak için güneye gitmeye karar verir. Jon Arryn'in ölümünün arkasındaki karanlık sırlar açığa çıktıkça, Lannister Hanesi'nin de sırları ortaya çıkmaya başlar.

                Bu sırada Viserys Targaryen tahtın kendi hakkı olduğunu iddia ederken, yıllarca acı çektirdiği kız kardeşi Daenerys Targaryen'ı, çıkarları uğruna savaşçı bir kabile olan Dothrakilerin lideri Khal Drogo ile evlendirir. Daenerys, Khal Drogo'ya zamanla aşık olur ve kabilenin Khaleesi'si olur. Böylece Viserys'in planları beklenmedik şekilde suya düşer ve gücünü gittikçe yitirir. Duvar'da ise Ned Stark'ın gayrimeşru oğlu olarak bilinen Jon Snow, Duvar'ı yıllarca koruyan ve kutsal birlik olan Gece Nöbetçileri'ne katılır.",

            ],
                [
                'id'=>'2',
                'name'=>'Snowpiercer',
                'season'=>'1',
                'episodes'=>'10',
                'IMDB'=>'6.7',
                'summary'=>"Küresel ısınmanın Dünya’yı yaşanamayacak bir çöle getirmesinin arifesinde bilim insanları bir çözümle gelirler; atmosfere soğuk hava bombaları atmak. İşler ters gider ve Dünya bu sefer de donmuş bir gezegen haline gelir. Buna benzer bir durumu planlayıp kendi kendisine yetebilecek, içinde ekosistemler barınabilecek bir tren planlayan Mr. Wilford buzullaşmanın son günlerinde Snowpiercer’i ortaya çıkartır. Bilet alabilecek gücü olan ultra zenginler ve çalışanlar trenin yolcularıdır. Kalkıştan hemen önceyse sıradan halk treni istila eder. Wilford’un askerleri tarafından son vagonlara, Kuyruk’a itilirler ve orada trenin geri kalanından kopuk, sefil bir hayat yaşamaya başlarlar.",
            ],

                [
                'id'=>'3',
                'name'=>'Marvels The Punisher',
                'season'=>'2',
                'episodes'=>'26',
                'IMDB'=>'8.5',
                 'summary'=>"Kandahar’da gizli bir operasyona çıkan Kerberos özel harekat timinin üstleri, bir eroin kaçırma olayına karışıyor. Ahmad Zubair isimli polis bunu farkedince onu rehin alıyor ve infaz ediyorlar. İnfaz emrini verense William Rawlins. Yıllar sonra bu infazın video görüntüsü ortaya çıkıyor ve Zubair’in ortağı Dinah Madani’ye ulaşıyor. Madani ise videoda yer alanları açığa çıkarmak için uğraşıyor ama işin içinde hükümet olunca yapabileceği pek de bir şey yok. Bu noktada devreye Frank Castle giriyor çünkü kendisi Kerberos özel harekat timinin üyelerinden. Kandahar olayından sonra ölü gösteriliyor hatta ailesi de öldürüyor.",
            ],

                [
                'id'=>'4',
                'name'=>'Sherlock',
                'season'=>'4',
                'episodes'=>'13',
                'IMDB'=>'9.1',
                'summary'=>"Robert Downey Jr. ve Jude Law ikilisinin başrollerinde yer aldığı başarılı seri filmlerden Sherlock Holmes’ün aksine,  modern zamanların İngiltere’sinde ve modern cihazların kullanıldığı bir dönemde geçiyor.Benedict Cumberbatch tarafından canlandırılan modern Sherlock Holmes karakteri; kredi kartı, cep telefonu, otomobil ve metro gibi günümüze ait araç gereçleri kullanırken, Martin Freeman’ın hayat verdiği Dr. John Watson ise anılarını daktilo ya da kağıt kalem yerine blog adresinde online olarak yazıyor.",
            ],

                [
                'id'=>'5',
                'name'=>'Daredevil',
                'season'=>'3',
                'episodes'=>'39',
                'IMDB'=>'8.6',
                'summary'=>"Hikaye New York’un Hell’s Kitchen bölgesinde geçiyor. Matt Murdock 9 yaşında radyoaktif bir kaza geçirir ve gözlerine radyoaktif bir madde dökülür. Geçirdiği kaza görme duyusunu kaybetmesine neden olur. Ancak hala etrafındaki her şeyin şeklini ve yerini rahatça tespit edebilmektedir. Başına gelen bu kaza diğer 4 duyusunun daha hassas ve güçlü olmasına neden olmuştur. Matt’in eski boksör olan babası, oğlunun başına gelen bu kazadan dolayı kendini suçlamaktadır. Bu sebepten işini bırakır ve kendini yeniden boksa verir. Yaptığı bir dövüş esnasında, kendine söyleneni yapmadığı için öldürülür. Artık Matt’in baş düşmanı, babasının ölümüne sebep olan Kingpin’dir. Bunun üzerine babasının intikamını almak isteyen Daredevil (Matt Murdock), gündüzleri avukat olarak adalet dağıtırken, geceleri ise Daredevil olarak Hell’s Kitchen’da adaleti sağlamaya başlar. Kingpin’in aşkı, yaşamı ve Hell’s Kitchen üzerinde kurmak istediği egemenlik, Daredevil’in ortaya çıkmasıyla bozulacaktır.",
            ],

             [

                'id'=>'6',
                'name'=>'Vikings',
                'season'=>'6',
                'episodes'=>'89',
                'IMDB'=>'8.5',
                 'summary'=>"izi 793 yılında, adından da anlaşılacağı üzere Viking'lerin döneminde geçmektedir.

Özetle ilk sezon, Ragnar'ın savaşlarını, aile ilişkilerini ve Earl'e(Reis-Lider) başkaldırarak yeni lider konumuna gelmesini konu alıyor.

İkinci sezonda ise Earl olan Ragnar'ın uzaklara açılarak yaptığı savaşları ve sonunda ise kralı öldürerek Viking kralı oluşunu, Üçüncü sezonda ise savaşlara devam etmesi ve sonunda Paris'in kapılarına dayanmasını anlatıyor.
",
            ],

               [
                 'id'=>'7',
                'name'=>'Breaking Bad',
                'season'=>'5',
                'episodes'=>'62',
                'IMDB'=>'9.5',
                 'summary'=>"Bir lisede çalışan Walter White, kendi halinde başarılı bir kimya öğretmenidir. Öğretmenlikten arta kalan zamanlarda ise bir oto yıkamacıda araba yıkamakta, ailesinin getirdiği maddi zorlukların üstesinden gelmeye çalışmaktadır. Nefes alış verişinde ve vücudunda hissettiği bazı rahatsızlıklar sonucu doktora görünür ve Akciğer Kanseri olduğunu öğrenir. Ölüm ve ailesini geride bırakma düşüncesi Walter White’ı derin düşüncelere iter.",
            ],

            ]);
    }
}
