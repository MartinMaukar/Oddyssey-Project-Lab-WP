<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Batman: Arkham City',
            'description'=>'Batman: Arkham City is a 2011 action-adventure game developed by Rocksteady Studios and published by Warner Bros. Interactive Entertainment.',
            'price'=>'20.000',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/0/00/Batman_Arkham_City_Game_Cover.jpg',
            'image1'=>'https://i.ytimg.com/vi/qbtRsaA4kH8/maxresdefault.jpg',
            'image2'=>'https://images.gamersyde.com/image_stream-17813-2101_0002.jpg',
            'image3'=>'https://i.pinimg.com/736x/5b/ca/a6/5bcaa626aecf82279b7950e45cbff6fa.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Resident Evil 2',
            'description'=>'Resident Evil 2 is a 2019 survival horror game developed and published by Capcom. A remake of the 1998 game Resident Evil 2.',
            'price'=>'0',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/thumb/f/fd/Resident_Evil_2_Remake.jpg/220px-Resident_Evil_2_Remake.jpg',
            'image1'=>'https://sm.ign.com/t/ign_ap/review/r/resident-e/resident-evil-2-review_23mg.1200.jpg',
            'image2'=>'https://cdn.vox-cdn.com/uploads/chorus_asset/file/13695830/Resident_Evil_2_intro_0011_Layer_5.jpg',
            'image3'=>'https://cdn.tmpo.co/data/2019/02/08/id_817943/817943_720.jpg'
        ]);


        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Call of Duty: Black Ops 4',
            'description'=>'Call of Duty: Black Ops 4 is a 2018 multiplayer first-person shooter developed by Treyarch and published by Activision.',
            'price'=>'0',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://www.gamespot.com/a/uploads/scale_medium/1197/11970954/3388303-codbops4.jpg',
            'image1'=>'https://pbs.twimg.com/media/Ddb_51HVAAAw_XI.jpg',
            'image2'=>'https://i.ytimg.com/vi/86CfvPUfToM/maxresdefault.jpg',
            'image3'=>'https://static.techspot.com/images2/news/bigimage/2018/11/2018-11-21-image-16.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Counter Strike',
            'description'=>'Counter-Strike is a series of multiplayer first-person shooter video games in which teams of terrorists battle to perpetrate an act of terror while counter-terrorists try to prevent it.',
            'price'=>'10.000',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://i.pinimg.com/originals/73/94/eb/7394ebcbd70c48b3e0ff930ce3683da4.png',
            'image1'=>'https://asset.kompas.com/crops/rAmucUL2dFFSuxcVh6TdVK9PvCg=/0x85:1024x768/750x500/data/photo/2020/06/16/5ee833feae561.jpg',
            'image2'=>'https://www.elecspo.com/static/uploads/13/2018/04/Download-Free-Counter-Strike-1.6.jpeg',
            'image3'=>'https://i.ytimg.com/vi/oIoueckSEtU/maxresdefault.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'Forza Horizon',
            'description'=>'Forza Horizon 4 is a 2018 racing video game developed by Playground Games and published by Microsoft Studios.',
            'price'=>'10.000',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://images.tokopedia.net/img/cache/700/product-1/2019/6/9/2487735/2487735_7df74ea4-00ff-4109-acfb-18070ea78291_452_452.jpg',
            'image1'=>'https://static.wikia.nocookie.net/forzamotorsport/images/e/e3/FH4_Screenshot_3.jpg/revision/latest?cb=20180611101526',
            'image2'=>'https://apsachieveonline.org/in/wp-content/uploads/2019/09/Forza-Horizon-4-ulasan-Barang.jpg',
            'image3'=>'https://m.media-amazon.com/images/M/MV5BZGQ5MzQ1ZDctY2RiZC00MDAwLTg2YjYtNzI4OGEwNGQ0MWI1XkEyXkFqcGdeQXVyMTk5NDI0MA@@._V1_.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'Mario Kart',
            'description'=>'Mario Kart is a series of racing games developed and published by Nintendo. Players compete in go-kart races while using various power-up items.',
            'price'=>'0',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://cdn.cdkeys.com/700x700/media/catalog/product/s/t/streamer-life-simulator-free-download-steam-repacks_4_.jpg',
            'image1'=>'https://www.gamespot.com/a/uploads/original/1585/15855271/3954603-switch_mk8d_bcp_wave1_scrn_03.png',
            'image2'=>'https://cdn.mos.cms.futurecdn.net/fqz2J3ecZmNytbjbXbHbWd.jpg',
            'image3'=>'https://cdn.pocket-lint.com/r/s/970x/assets/images/140830-games-review-mario-kart-8-deluxe-review-image1-5duUm8BfrP.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Cyber Punk 2077',
            'description'=>'Cyberpunk 2077 is an action role-playing video game developed by CD Projekt Red and published by CD Projekt.',
            'price'=>'0',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://cdn.medcom.id/images/content/2020/10/28/1203943/d9YHosSq56.jpg',
            'image1'=>'https://cdn4.uzone.id/assets/uploads/Uzone/TECH-GADGET/Game/DLC%20Cyberpunk%202077.jpg',
            'image2'=>'https://www.cyberpunk.net/build/images/media/screenshots/Cyberpunk2077_Party_at_night_RGB-en-d339ac11.jpg',
            'image3'=>'https://cdn0-production-images-kly.akamaized.net/AQ9GOzTTnvwOI_7RtXztPfyAor4=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3322580/original/075148100_1607839935-cyberpunk2077.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Lara Croft: Shadow of the tomb rider',
            'description'=>'Shadow of the Tomb Raider is a 2018 action-adventure video game developed by Eidos-Montréal and published by Square Enix\'s European subsidiary.',
            'price'=>'50.000',
            'release'=>'12 Apr , 2022',
            'thumbnail'=>'https://cdn1.epicgames.com/offer/4b5461ca8d1c488787b5200b420de066/egs-shadowofthetombraiderdefinitiveedition-eidosmontralcrystaldynamicsnixxessoftware-s4-1200x1600-7ee40d6fa744_1200x1600-950cdb624cc75d04fe3c8c0b62ce98de',
            'image1'=>'https://www.gamereactor.asia/media/89/laracroftsvisits_2718933.png',
            'image2'=>'https://cdn0-production-images-kly.akamaized.net/CK-rjGS4KVlD1zMw8kEh4AfEA2g=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2246352/original/003034700_1528700932-shadow_of_the_tomb_raider.jpg',
            'image3'=>'https://ds.static.rtbf.be/article/image/1920x1080/a/a/5/a6ea6f71d998507d0df77ed3a2753a35-1649242134.jpg'
        ]);
    }
}