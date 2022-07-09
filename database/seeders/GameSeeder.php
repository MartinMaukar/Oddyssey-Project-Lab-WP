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
            'release'=>'October 18, 2011',
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
            'release'=>'January 25, 2019',
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
            'release'=>'October 11, 2018',
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
            'release'=>'August 21, 2012',
            'thumbnail'=>'https://i.pinimg.com/originals/73/94/eb/7394ebcbd70c48b3e0ff930ce3683da4.png',
            'image1'=>'https://asset.kompas.com/crops/rAmucUL2dFFSuxcVh6TdVK9PvCg=/0x85:1024x768/750x500/data/photo/2020/06/16/5ee833feae561.jpg',
            'image2'=>'https://www.elecspo.com/static/uploads/13/2018/04/Download-Free-Counter-Strike-1.6.jpeg',
            'image3'=>'https://i.ytimg.com/vi/oIoueckSEtU/maxresdefault.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'Forza Horizon 4',
            'description'=>'Forza Horizon 4 is a 2018 racing video game developed by Playground Games and published by Microsoft Studios.',
            'price'=>'10.000',
            'release'=>'September 28, 2018',
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
            'release'=>'May 29, 2014',
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
            'release'=>'December 10, 2020',
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
            'release'=>'September 12, 2018',
            'thumbnail'=>'https://cdn1.epicgames.com/offer/4b5461ca8d1c488787b5200b420de066/egs-shadowofthetombraiderdefinitiveedition-eidosmontralcrystaldynamicsnixxessoftware-s4-1200x1600-7ee40d6fa744_1200x1600-950cdb624cc75d04fe3c8c0b62ce98de',
            'image1'=>'https://www.gamereactor.asia/media/89/laracroftsvisits_2718933.png',
            'image2'=>'https://cdn0-production-images-kly.akamaized.net/CK-rjGS4KVlD1zMw8kEh4AfEA2g=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2246352/original/003034700_1528700932-shadow_of_the_tomb_raider.jpg',
            'image3'=>'https://ds.static.rtbf.be/article/image/1920x1080/a/a/5/a6ea6f71d998507d0df77ed3a2753a35-1649242134.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'For Honor',
            'description'=>'For Honor is a 2017 action video game developed and published by Ubisoft for Microsoft Windows, PlayStation 4, and Xbox One.',
            'price'=>'149.000',
            'release'=>'September 15, 2016',
            'thumbnail'=>'https://cdn.akamai.steamstatic.com/steam/apps/304390/capsule_616x353.jpg?t=1647523108',
            'image1'=>'https://jagatplay.com/wp-content/uploads/2021/02/for-honor-shovel-knight.jpg',
            'image2'=>'https://i.ytimg.com/vi/qpUSMl3N7qg/maxresdefault.jpg',
            'image3'=>'https://i.pcmag.com/imagery/reviews/03avFaLIJKPqJvj6NVXGWeq-5..v1569475898.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'God Of War',
            'description'=>'God of War is an action-adventure game franchise created by David Jaffe at Sonys Santa Monica Studio.',
            'price'=>'729.000',
            'release'=>'God of War; March 22, 2005',
            'thumbnail'=>'https://cdn1.epicgames.com/offer/3ddd6a590da64e3686042d108968a6b2/EGS_GodofWar_SantaMonicaStudio_S2_1200x1600-fbdf3cbc2980749091d52751ffabb7b7_1200x1600-fbdf3cbc2980749091d52751ffabb7b7',
            'image1'=>'https://traxonsky.com/wp-content/uploads/2022/03/god-of-war-pc-mod-baru-membuat-game-dapat-dimainkan-di-sistem-windows-7-dan-8.jpg',
            'image2'=>'https://img.okezone.com/content/2022/03/10/206/2559249/game-god-of-war-diadaptasi-ke-serial-tv-VXnQYa0um0.jpg',
            'image3'=>'https://www.dewa.gg/wp-content/uploads/2022/03/a-god-of-war-tv-series-is-in-the-works-at-amazon-prime-video_tk6n.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Soul Calibur VI',
            'description'=>'Soulcalibur VI is a fighting game developed by Bandai Namco Studios and Dimps and published by Bandai Namco Entertainment for the PlayStation 4, Xbox One, and Microsoft Windows in 2018.',
            'price'=>'550.000',
            'release'=>'October 19, 2018',
            'thumbnail'=>'https://cdn.akamai.steamstatic.com/steam/apps/544750/capsule_616x353.jpg?t=1646956219',
            'image1'=>'https://sobatgame.com/wp-content/uploads/2019/09/Soul-Calibur-6-2.jpg',
            'image2'=>'https://jagatplay.com/wp-content/uploads/2018/10/Soul-Calibur-VI-jagatplay-part-1-122-1-600x338.jpg',
            'image3'=>'https://www.trustedreviews.com/wp-content/uploads/sites/54/2018/09/SOULCALIBUR%E2%84%A2%E2%85%A5_20181016115348-1024x576.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Sekiro Shadows Die Twice',
            'description'=>'Sekiro: Shadows Die Twice is a 2019 action-adventure game developed by FromSoftware and published by Activision.',
            'price'=>'729.000',
            'release'=>'March 21, 2019',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/id/6/6e/Sekiro_art.jpg',
            'image1'=>'https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/10/01/4155758108.jpg',
            'image2'=>'https://image.api.playstation.com/cdn/HP0506/CUSA13910_00/QKJRzanGk86ezpx2pk5QqQaduoXGJV3u8vHIejSav4MYiHA3F7zNgxSOF9bJmt2T.png',
            'image3'=>'https://gimindo.com/wp-content/uploads/2020/10/Sekiro7.30-01.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Red Dead Redemption 2',
            'description'=>'Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and a prequel to the 2010 game Red Dead Redemption.',
            'price'=>'640.000',
            'release'=>'October 26, 2018',
            'thumbnail'=>'https://cdn1.epicgames.com/b30b6d1b4dfd4dcc93b5490be5e094e5/offer/RDR2476298253_Epic_Games_Wishlist_RDR2_2560x1440_V01-2560x1440-2a9ebe1f7ee202102555be202d5632ec.jpg',
            'image1'=>'https://www.cnet.com/a/img/resize/074b14ef40267c1c4f1070ddd3c86fe8ef35829b/hub/2018/10/25/776b9111-60ec-4e79-9f16-8372eac0635c/red-dead-redemption-2-20181021172719.jpg?auto=webp&width=768',
            'image2'=>'https://gamebrott.com/wp-content/uploads/2021/09/1570200612842-red-dead-redemption-2-review-feature-header.jpeg',
            'image3'=>'https://cdn.pocket-lint.com/r/s/970x/assets/images/147087-games-review-red-dead-redemption-2-screens-image1-g6h0p3edub.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Apex Legends',
            'description'=>'Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts. ',
            'price'=>'0',
            'release'=>'February 4, 2019',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/thumb/d/db/Apex_legends_cover.jpg/220px-Apex_legends_cover.jpg',
            'image1'=>'https://i.ytimg.com/vi/UPtoIy-oPWQ/maxresdefault.jpg',
            'image2'=>'https://statik.tempo.co/data/2022/03/02/id_1091915/1091915_720.jpg',
            'image3'=>'https://cms.hybrid.co.id/wp-content/uploads/2022/02/a77ae6f4aecddb0e42fd9f4ef7ab2b97_how-to-win-more-gunfights-in-apex-legends.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'FIFA 22',
            'description'=>'FIFA 22 is a football simulation video game published by Electronic Arts. It is the 29th installment in the FIFA series.',
            'price'=>'720.000',
            'release'=>'September 27, 2021',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/6/6c/FIFA_22_Cover.jpg',
            'image1'=>'https://cdn0-production-images-kly.akamaized.net/w2RszSi3q5KAAReegvzTOgNezl8=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3511325/original/083161300_1626320260-fifa-22-official-01.jpg',
            'image2'=>'https://mscfootball.com/wp-content/uploads/2022/06/2022-world-cup-Qatar.jpeg',
            'image3'=>'https://akcdn.detik.net.id/community/media/visual/2022/06/19/logo-piala-dunia-2022.jpeg?w=700&q=90'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'NBA 2K22',
            'description'=>'NBA 2K22 is a 2021 basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association.',
            'price'=>'720.000',
            'release'=>'September 9, 2021',
            'thumbnail'=>'https://www.si.com/.image/t_share/MTgyNDA0MzY4MTMyMjIwMjMy/cover---standard-edition.jpg',
            'image1'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6471/6471718cv12d.jpg',
            'image2'=>'https://i.ytimg.com/vi/OcUzwnA569M/maxresdefault.jpg',
            'image3'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSllcWdyJZ_u3QtdTR0DxDqAcGG6RrUk7aq8A&usqp=CAU'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Tekken 7',
            'description'=>'Tekken 7 is a fighting game developed and published by Bandai Namco Entertainment. It is the seventh main and ninth overall installment in the Tekken series.',
            'price'=>'500.000',
            'release'=>'February 18, 2015',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Official_Tekken_7_Logo.jpg/220px-Official_Tekken_7_Logo.jpg',
            'image1'=>'https://i.ytimg.com/vi/mrzmlyOQW5c/maxresdefault.jpg',
            'image2'=>'https://images.indianexpress.com/2020/06/Tekken7.jpg',
            'image3'=>'https://gamebrott.com/wp-content/uploads/2017/05/tekken-7-screen-01-ps4-us-28jun16.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Elden Ring',
            'description'=>'Elden Ring is a 2022 action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment.',
            'price'=>'720.000',
            'release'=>'February 25, 2022',
            'thumbnail'=>'https://image.api.playstation.com/vulcan/ap/rnd/202108/0410/np2Eb60bDep9fDWtqNNSzqZI.png',
            'image1'=>'https://cdn.eraspace.com/pub/media/mageplaza/blog/post/e/l/elden-ring-featured-img-incantations-1.jpg',
            'image2'=>'https://assets.nuuvem.com/image/upload/t_screenshot_full/v1/products/618420307c3eff0021fa197f/screenshots/wywibjs0bfxhpk7hfaak.jpg',
            'image3'=>'https://assets1.ignimgs.com/2019/06/17/elden-ring-1560798598319.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Rainbow Six Siege',
            'description'=>'Tom Clancys Rainbow Six Siege is an online tactical shooter video game developed by Ubisoft Montreal and published by Ubisoft.',
            'price'=>'0',
            'release'=>'November 26, 2015',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/id/4/47/Tom_Clancy%27s_Rainbow_Six_Siege_cover_art.jpg',
            'image1'=>'https://siege.gg/img/articles/2250.f5dddda.jpg',
            'image2'=>'https://cdn.mmoculture.com/mmo-images/2021/07/rainbow-six-siege-1.jpg',
            'image3'=>'https://cms.dailysocial.id/wp-content/uploads/2019/05/a4e0a8c9657683383e8b858443ad4da6_Rainbow-Six-Siege.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Street Fighter V',
            'description'=>'Street Fighter V is a fighting game developed by Capcom and Dimps and published by Capcom for the PlayStation 4 and Microsoft Windows in 2016. Similar to the previous games in the Street Fighter series, Street Fighter V features a side-scrolling fighting gameplay system.',
            'price'=>'300.000',
            'release'=>'February 16, 2016',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/8/80/Street_Fighter_V_box_artwork.png',
            'image1'=>'https://i.pcmag.com/imagery/reviews/06hO1Lm1X7KMKvQ8N53sexN-13..v1582574544.jpg',
            'image2'=>'https://br.atsit.in/id/wp-content/uploads/2021/11/street-fighter-v-karakter-dlc-final-edisi-champion-luke-akan-dirilis-minggu-depan.jpg',
            'image3'=>'https://cdn.mos.cms.futurecdn.net/Bs8NNqqFyVNP8CKQKn4nq5.jpg'
        ]);
    }
}