<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Traits\HasForeignKeys;

class ThreadsTableSeeder extends Seeder
{
    use HasForeignKeys;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKey();   

        \DB::table('threads')->delete();
        
        \DB::table('threads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Est odit ut quis.',
                'body' => 'Qui minus assumenda perferendis eos. Modi animi eligendi eaque voluptatum eos aut quos.',
                'slug' => 'doloremque-officia-deserunt-cumque-velit-aspernatur-pariatur-sunt',
                'author_id' => 6,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:45',
                'updated_at' => '2024-02-17 01:05:45',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Ipsum sed facere facere.',
                'body' => 'Impedit facilis cum quas sit doloribus. Et iusto nostrum nemo id. Sed ut aliquam perferendis minus.',
                'slug' => 'consequuntur-odio-eos-facilis-error',
                'author_id' => 3,
                'category_id' => 2,
                'created_at' => '2024-02-17 01:05:45',
                'updated_at' => '2024-02-17 01:05:45',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'In et vitae doloremque.',
                'body' => 'Impedit dignissimos autem ut numquam quia. Culpa perspiciatis unde quo maxime magnam.',
                'slug' => 'et-enim-occaecati-repellat',
                'author_id' => 5,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:45',
                'updated_at' => '2024-02-17 01:05:45',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Maxime blanditiis dolorum et.',
                'body' => 'Soluta iure accusantium quam neque occaecati ut. Ut sequi iusto necessitatibus dicta quia tempora.',
                'slug' => 'voluptatem-id-sed-explicabo-quae-aut-fugit-molestiae',
                'author_id' => 3,
                'category_id' => 4,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Ab id placeat ut aut.',
                'body' => 'Numquam expedita voluptas molestias molestias amet et et. Debitis est iste rem et voluptate ut.',
                'slug' => 'accusamus-consequatur-quam-quia-aliquam-accusantium-asperiores',
                'author_id' => 3,
                'category_id' => 1,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Quae optio minus et omnis ex.',
                'body' => 'Consequatur ut ut dolorem esse dignissimos. Ad velit optio vel quam aut maxime expedita.',
                'slug' => 'est-voluptatibus-laborum-commodi-harum-autem-est-sunt',
                'author_id' => 3,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Qui dolor impedit temporibus.',
                'body' => 'Aut molestias facilis error voluptatem minus qui. Ipsa corrupti unde qui quibusdam quia iusto perspiciatis sunt. Molestiae aut omnis at exercitationem consequatur ut.',
                'slug' => 'cumque-nesciunt-hic-consequatur',
                'author_id' => 4,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Est temporibus minus eum ut.',
                'body' => 'Tenetur aut alias sed quia. Est molestiae sunt aliquid expedita officiis sed distinctio quo.',
                'slug' => 'ullam-tempore-sed-nulla-vel-cumque-consequatur-velit',
                'author_id' => 3,
                'category_id' => 3,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Eos nam quia aliquam.',
                'body' => 'Quis soluta sint ut illum qui. Doloremque qui aperiam similique praesentium nisi aliquam.',
                'slug' => 'voluptate-maxime-adipisci-et-rerum-ea-sequi-repudiandae-esse',
                'author_id' => 4,
                'category_id' => 7,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Nulla cum dicta sit eum.',
                'body' => 'Voluptatem cupiditate id dignissimos est dolorum quia. Et praesentium eveniet voluptatem ut quaerat inventore dolorum.',
                'slug' => 'nisi-mollitia-eligendi-unde-est-ut-quis-quidem',
                'author_id' => 6,
                'category_id' => 7,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Dolore sunt officia et.',
                'body' => 'Recusandae tempora saepe aliquam. Praesentium voluptatem tempora quae modi. Perferendis recusandae adipisci accusantium ratione rerum non sit quod.',
                'slug' => 'praesentium-minima-et-magni-minima-voluptatem-dolores',
                'author_id' => 4,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Nobis amet quo dolorem odit.',
                'body' => 'Omnis illum voluptatem excepturi voluptas id vel officia vero. Quidem aperiam harum error eum. Atque quia omnis inventore nobis fugit.',
                'slug' => 'exercitationem-sint-amet-qui-numquam-inventore-quo',
                'author_id' => 3,
                'category_id' => 7,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Dolorum vel odio eum error.',
                'body' => 'Non laboriosam nihil in natus. Tenetur quo excepturi in dignissimos laborum reiciendis voluptatem.',
                'slug' => 'debitis-qui-est-perspiciatis-quo-amet-et-possimus-aut',
                'author_id' => 5,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Aut alias cum nihil.',
                'body' => 'Vel ut voluptatem eveniet nobis illum. Harum ratione expedita ratione quidem ut.',
                'slug' => 'explicabo-omnis-aut-omnis-blanditiis',
                'author_id' => 4,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Et hic ipsa nemo porro.',
                'body' => 'Pariatur itaque sit sit praesentium. Numquam quo adipisci sed reiciendis sit recusandae. Asperiores occaecati quas unde qui.',
                'slug' => 'veritatis-provident-neque-sequi-voluptatum-aut-eligendi-qui',
                'author_id' => 8,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Et odio qui qui doloribus.',
                'body' => 'Officiis sed rerum est culpa officia consectetur. Eos inventore deleniti qui ad aut. Praesentium voluptates est aspernatur commodi ducimus officiis suscipit illo.',
                'slug' => 'quia-non-ut-tempora-odio-quas-itaque-accusantium',
                'author_id' => 4,
                'category_id' => 1,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Hic quia sed voluptatum et a.',
                'body' => 'Optio velit nobis suscipit aut est veniam qui. Maxime sit qui corporis qui. Neque amet non porro.',
                'slug' => 'dolore-reiciendis-dolorum-a-quo-voluptas',
                'author_id' => 3,
                'category_id' => 4,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Non perferendis aliquid aut.',
                'body' => 'Dolore dicta tempora reprehenderit. Cumque saepe temporibus dolor ea. Et molestiae magnam velit corrupti fuga at dignissimos.',
                'slug' => 'sed-et-est-consequuntur-non-rem-mollitia-et',
                'author_id' => 6,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Labore et quo tenetur facere.',
                'body' => 'Possimus eveniet sunt ut reprehenderit. Rerum ut dolor esse voluptatem hic libero inventore.',
                'slug' => 'mollitia-voluptatem-consequuntur-id-quidem',
                'author_id' => 7,
                'category_id' => 3,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Vitae dignissimos et itaque.',
                'body' => 'Ut labore et ut et est eius expedita. Suscipit quidem numquam odit architecto odio doloribus.',
                'slug' => 'et-velit-alias-occaecati-et-tempore-tempore-rerum',
                'author_id' => 6,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Temporibus quo quis qui modi.',
                'body' => 'Enim optio eum dolorum ad ut. Deleniti quaerat voluptate expedita officia voluptas sit eveniet. Ea placeat omnis dolor perferendis hic nihil.',
                'slug' => 'quis-ipsam-ut-et-et-dolorem-necessitatibus-explicabo',
                'author_id' => 7,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Facilis quo autem sed qui.',
                'body' => 'Amet rerum voluptate nemo sunt. Ut ut ut laborum. Est provident fuga excepturi eius deserunt.',
                'slug' => 'dolorem-rerum-est-qui-voluptatem-est-occaecati-sit-quam',
                'author_id' => 7,
                'category_id' => 2,
                'created_at' => '2024-02-17 01:05:46',
                'updated_at' => '2024-02-17 01:05:46',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Ex officia non quibusdam.',
                'body' => 'Non qui omnis necessitatibus blanditiis et repellendus. Eius illum perferendis in laborum est non voluptatum. In recusandae et possimus aut.',
                'slug' => 'eum-sunt-quis-iste-eaque-eius-sapiente',
                'author_id' => 5,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Velit magnam id est.',
                'body' => 'Possimus et rerum hic ipsa est eveniet commodi. Ab quaerat et commodi blanditiis sed minima. Voluptatem provident ut illo facere dolores corrupti.',
                'slug' => 'praesentium-eum-iure-mollitia-corporis-est',
                'author_id' => 5,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Rerum et sed impedit.',
                'body' => 'Velit esse impedit odit veritatis ut cupiditate non. In incidunt ex quisquam maiores autem aut.',
                'slug' => 'officia-facere-non-consequatur-explicabo-animi-dolorem',
                'author_id' => 4,
                'category_id' => 4,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Neque officia adipisci sunt.',
                'body' => 'Explicabo quia maiores laborum dolorem magni soluta architecto. Eum vel illo consequatur dolor illo molestiae. Sunt aut tempore commodi ut ut sit et.',
                'slug' => 'dicta-aut-enim-voluptate-sed-alias-quasi',
                'author_id' => 6,
                'category_id' => 4,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'Officia ad est iure.',
                'body' => 'Nulla voluptatem quibusdam consequatur labore velit. Est voluptatem qui cumque aut. Voluptate beatae et repudiandae debitis ad voluptatem dolorum.',
                'slug' => 'consequatur-quaerat-quis-sapiente-asperiores-quisquam',
                'author_id' => 6,
                'category_id' => 2,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Amet nihil dolores at.',
                'body' => 'Est tempora quae laudantium at modi voluptatem alias. Sunt facilis error pariatur maiores saepe dignissimos voluptate.',
                'slug' => 'a-ut-consequatur-sit-iusto-occaecati-modi-occaecati',
                'author_id' => 6,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'Iste quas possimus rem.',
                'body' => 'Nam temporibus ratione quia quam et. Ducimus totam omnis nam laborum voluptatum repellat impedit amet.',
                'slug' => 'vel-earum-et-dolorem-commodi-rerum',
                'author_id' => 8,
                'category_id' => 2,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'Aut natus et nisi explicabo.',
                'body' => 'Est adipisci consequatur saepe minima sit natus. Eveniet rerum aut sint a et deleniti totam.',
                'slug' => 'animi-omnis-temporibus-cum-velit-nostrum-sed',
                'author_id' => 4,
                'category_id' => 3,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'Quia fugit vel rem placeat.',
                'body' => 'Esse dolore asperiores esse tenetur laboriosam sed tempora. Sint ullam vitae dolores fugiat qui voluptas tempora. Dolorem blanditiis vitae fuga corrupti quam enim commodi.',
                'slug' => 'et-ut-necessitatibus-non-adipisci-porro-numquam',
                'author_id' => 3,
                'category_id' => 1,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'Amet illo autem porro illo.',
                'body' => 'Quidem qui aliquam possimus voluptatem labore tempore ut. Perspiciatis optio qui et velit. Rem maiores dolorum ipsam temporibus pariatur aut.',
                'slug' => 'velit-maxime-ipsa-qui',
                'author_id' => 3,
                'category_id' => 7,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'Et qui consequuntur et ab.',
                'body' => 'Itaque aut asperiores et optio cupiditate optio sunt. Omnis culpa est labore autem omnis.',
                'slug' => 'laborum-adipisci-recusandae-fugit-incidunt',
                'author_id' => 7,
                'category_id' => 1,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'Sed eos cum autem.',
                'body' => 'Enim sed quia delectus unde ratione repudiandae voluptas. Ipsa dicta facere illum deserunt nam ratione. Tempora occaecati quo et in laborum eum.',
                'slug' => 'eligendi-architecto-quo-accusamus-est-aut',
                'author_id' => 7,
                'category_id' => 2,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'Quis ut laboriosam unde ab.',
                'body' => 'Quidem voluptas sed sit perferendis. Asperiores modi eligendi minus aliquam iusto aut. Esse quae sint voluptatibus voluptas et aut et rerum.',
                'slug' => 'rerum-in-ipsa-facilis-numquam-voluptas-accusamus-et-dolores',
                'author_id' => 5,
                'category_id' => 7,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'Minus omnis sed esse.',
                'body' => 'Esse incidunt placeat expedita voluptatibus amet qui. Fuga cumque et accusamus nobis et voluptatem ut molestiae. Quo distinctio minus ipsam aut sapiente fuga asperiores.',
                'slug' => 'voluptatem-nemo-dolorum-nam-perferendis',
                'author_id' => 6,
                'category_id' => 2,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'Error sed beatae reiciendis.',
                'body' => 'Sequi error iste quidem. Qui aperiam qui distinctio minus tempore voluptatem rerum.',
                'slug' => 'id-quia-sed-voluptatem-sint-repudiandae',
                'author_id' => 8,
                'category_id' => 1,
                'created_at' => '2024-02-17 01:05:47',
                'updated_at' => '2024-02-17 01:05:47',
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'Quos et a aut est.',
                'body' => 'Veritatis a quas voluptate nostrum nisi non. Tenetur et quia ab quia dolor quam. Ut sint quam dolor saepe harum quis voluptas.',
                'slug' => 'qui-aut-sit-dolores',
                'author_id' => 4,
                'category_id' => 4,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'Illum explicabo sint quia.',
                'body' => 'In cum nulla sint animi temporibus ut repellat est. Quos a corrupti non nihil unde. Id architecto assumenda asperiores pariatur.',
                'slug' => 'ea-minima-et-numquam-et',
                'author_id' => 5,
                'category_id' => 7,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'Velit voluptatem nemo est.',
                'body' => 'Rerum dolorum iure nesciunt quaerat saepe quo. Molestiae est voluptate fugiat repellat et.',
                'slug' => 'deleniti-porro-reprehenderit-ut-veniam-eaque-qui-qui',
                'author_id' => 8,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'Ea natus sint minima unde.',
                'body' => 'Nesciunt inventore atque eum iure qui similique. Mollitia temporibus dicta in rerum. Nostrum animi enim qui illum necessitatibus molestiae sed.',
                'slug' => 'quo-error-impedit-natus-error-corrupti-id',
                'author_id' => 4,
                'category_id' => 2,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            41 => 
            array (
                'id' => 42,
                'title' => 'Odio quod et aut voluptatem.',
                'body' => 'Quia itaque magni sed vitae reiciendis consequatur. Sequi quas quidem porro porro voluptates. Sunt vel modi earum omnis nisi.',
                'slug' => 'qui-distinctio-ipsum-alias-nemo',
                'author_id' => 5,
                'category_id' => 3,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            42 => 
            array (
                'id' => 43,
                'title' => 'Neque aut accusamus odio est.',
                'body' => 'Vero atque dignissimos est fuga. Ut reiciendis omnis temporibus sit enim. Voluptas accusamus quod et.',
                'slug' => 'iure-odit-repudiandae-voluptas-necessitatibus-fuga-at-sed',
                'author_id' => 3,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            43 => 
            array (
                'id' => 44,
                'title' => 'Est unde sit nostrum.',
                'body' => 'Consequatur perferendis doloribus assumenda quae voluptatibus distinctio. Sed ea natus et qui quidem et totam. Similique quisquam doloremque voluptates iusto optio sed.',
                'slug' => 'eligendi-harum-ut-quia-et-alias-vel-qui-veniam',
                'author_id' => 7,
                'category_id' => 7,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            44 => 
            array (
                'id' => 45,
                'title' => 'Corporis amet dolor deleniti.',
                'body' => 'Quidem dignissimos architecto ratione. Labore iusto autem delectus. Qui ut eligendi aliquam fugiat.',
                'slug' => 'temporibus-dignissimos-voluptas-hic-et-voluptatem',
                'author_id' => 4,
                'category_id' => 1,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            45 => 
            array (
                'id' => 46,
                'title' => 'Quia quidem dignissimos nisi.',
                'body' => 'Laborum aut tempora esse quia. Accusamus ex ipsa minus molestias et magnam. Repellat et praesentium beatae officia et.',
                'slug' => 'deserunt-ad-velit-voluptatem-voluptatem-debitis-mollitia-ut-et',
                'author_id' => 8,
                'category_id' => 3,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            46 => 
            array (
                'id' => 47,
                'title' => 'At sapiente nihil debitis ut.',
                'body' => 'Magnam quia nam dolores repudiandae. Possimus pariatur nemo magnam omnis aut ad.',
                'slug' => 'in-tempora-mollitia-enim-iusto-harum-voluptatum-molestiae',
                'author_id' => 8,
                'category_id' => 4,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            47 => 
            array (
                'id' => 48,
                'title' => 'Quo et sequi commodi sit.',
                'body' => 'Voluptatem in quia aut quae sapiente. Quam veniam nostrum id est.',
                'slug' => 'nesciunt-nemo-omnis-sint-repellat-voluptatem-veniam-officiis',
                'author_id' => 7,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            48 => 
            array (
                'id' => 49,
                'title' => 'Fugiat est nostrum veniam.',
                'body' => 'Et quia et praesentium repellendus quaerat quod nesciunt iusto. Beatae adipisci debitis expedita aliquid consectetur.',
                'slug' => 'ut-et-modi-cumque',
                'author_id' => 8,
                'category_id' => 6,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            49 => 
            array (
                'id' => 50,
                'title' => 'Totam eos placeat vitae.',
                'body' => 'Veniam omnis ut repellat sit in. Ipsam blanditiis consequuntur nisi quis similique doloremque. Consequatur exercitationem voluptatem odio animi accusantium.',
                'slug' => 'voluptatem-eum-aut-quas-ducimus-et-ea-modi-deleniti',
                'author_id' => 3,
                'category_id' => 5,
                'created_at' => '2024-02-17 01:05:48',
                'updated_at' => '2024-02-17 01:05:48',
            ),
            50 => 
            array (
                'id' => 51,
                'title' => 'Fluent JSON Testing',
                'body' => '<div><strong>Laravel</strong> also offers a beautiful way to fluently test your application\'s JSON responses. To get started, pass a closure to the assertJson method. This closure will be invoked with an instance of <em>Illuminate\\Testing\\Fluent\\AssertableJson </em></div>',
                'slug' => 'fluent-json-testing',
                'author_id' => 3,
                'category_id' => 4,
                'created_at' => '2024-02-19 13:02:23',
                'updated_at' => '2024-02-19 13:02:23',
            ),
            51 => 
            array (
                'id' => 52,
                'title' => 'Query Builder',
                'body' => '<div>Laravel provides several helpers for interacting with the session during HTTP testing. First, you may set the session data to a given array using the withSession method. This is useful for loading the session with data before issuing a request to your application:</div>',
                'slug' => 'query-builder',
                'author_id' => 3,
                'category_id' => 6,
                'created_at' => '2024-02-20 19:52:11',
                'updated_at' => '2024-02-20 19:52:11',
            ),
            52 => 
            array (
                'id' => 53,
                'title' => 'Testing Views',
                'body' => '<div>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects. new</div>',
                'slug' => 'testing-views',
                'author_id' => 3,
                'category_id' => 7,
                'created_at' => '2024-02-20 21:06:38',
                'updated_at' => '2024-02-23 07:05:13',
            ),
            53 => 
            array (
                'id' => 54,
                'title' => 'CREATING CUSTOM VALIDATION MESSAGE',
                'body' => '<div>Laravel provides a very fluent API for making HTTP requests to your application and examining the responses. For example, take a look at the feature test defined below</div>',
                'slug' => 'creating-custom-validation-message',
                'author_id' => 5,
                'category_id' => 1,
                'created_at' => '2024-02-20 21:55:57',
                'updated_at' => '2024-02-20 21:55:57',
            ),
        ));
        
        $this->enableForeignKey(); 
    }
}