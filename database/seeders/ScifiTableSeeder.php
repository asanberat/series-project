<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ScifiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scifi')->insert([
            [

                'id'=>'1',
                'name'=>'The Witcher',
                'season'=>'1',
                'episodes'=>'8',
                'IMDB'=>'8.2',
                'summary'=>"Yalnız yaşayan canavar avcısı Rivialı Geralt dünyanın dengesini değiştirecek bir çocuğun doğmasını beklemekte ancak bu sırada kendisini bir mücadelenin içinde bulmaktadır. Geralt, lanetlendiğine inanılan ve sürgün edilen bir prensesin izinden gider ve kendi yolunu bulmaya çalışır.

                        The Witcher, Polonyalı yazar Andrzej Sapkowski’",
            ],

            [   'id'=>'2',
                'name'=>'American Gods',
                'season'=>'3',
                'episodes'=>'26',
                'IMDB'=>'7.8',
                'summary'=>"Neil Gaiman'ın aynı isimli romanından uyarlanan 'American Gods' Starz kanalının yaklaşan fantezi, drama dizilerinden biri olup genel özeti şöyledir; Shadow gizemli ve sırlarla dolu bir geçmişe sahiptir. Bir banka soygunundan dolayı 3 yıl hapis cezası çekip erken tahliye edilir ve artık hiç birşey eskisi gibi olmayacaktır.",
            ],

            [   'id'=>'3',
                'name'=>'Flash',
                'season'=>'6',
                'episodes'=>'133',
                'IMDB'=>'7.7',
                'summary'=>"Central City Polis Departmanı’nda kendi halinde çalışan bir polis memuru olan Barry Allen, STAR isimli bir labaratuvarda bir patlamaya maruz kalır ve bu patlamanın neden olduğu hava değişimlerinden dolayı oluşan şimşeklerden biri Barry’ye çarpar. Şimşek sadece Barry’ye çarpmakla kalmaz, aynı zamanda Barry’de fizyolojik birtakım değişimlere yol açar. Örneğin Barry’nin kırık kolu bir çırpıda iyileşirken, kalbi çok hızlı atmaya başlar ve anormal bir hıza sahip olur. Tüm bu doğaüstü özelliklere sahip olan Barry, bunları insanlara yardım için kullanmak isteyecektir. Her ne kadar ilk başta bu hedefini zaman zaman yerine getirebilse de daha sonraki zamanlarda bunları yapmak hiç de kolay olmayacaktır.",
            ],
            [
                'id'=>'4',
                'name'=>'Luke Cage',
                'season'=>'2',
                'episodes'=>'13',
                'IMDB'=>'7.3',
                'summary'=>"Hapishanede geçirdiği günlerde üzerinde uygulanan deneyler sonucu Luke Cage; her türlü darbeye ve sıcaklığa karşı dayanıklı bir deri, iyileşme yeteneği ile süper insan gücüne sahip bir karakterdir. Daredevil’ın bir başka kardeşi dizisi olacak Luke Cage, Netflix kanalında ekranlara gelecek.",
            ],




        ]);
    }
}
