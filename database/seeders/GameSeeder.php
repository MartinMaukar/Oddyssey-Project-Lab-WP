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
            'description'=>'Batman: Arkham City is a 2011 action-adventure game developed by Rocksteady Studios and published by Warner Bros. Interactive Entertainment. Based on the DC Comics superhero Batman, it is the sequel to the 2009 video game Batman: Arkham Asylum and the second installment in the Batman: Arkham series',
            'price'=>'20.000',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/0/00/Batman_Arkham_City_Game_Cover.jpg',
            'image1'=>'https://i.ytimg.com/vi/qbtRsaA4kH8/maxresdefault.jpg',
            'image2'=>'https://images.gamersyde.com/image_stream-17813-2101_0002.jpg',
            'image3'=>'https://i.pinimg.com/736x/5b/ca/a6/5bcaa626aecf82279b7950e45cbff6fa.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Resident Evil 2',
            'description'=>'Resident Evil 2 is a 2019 survival horror game developed and published by Capcom. A remake of the 1998 game Resident Evil 2, it was released for PlayStation 4, Windows, and Xbox One in January 2019 and for PlayStation 5 and Xbox Series X/S in June 2022.',
            'price'=>'0',
            'thumbnail'=>'https://upload.wikimedia.org/wikipedia/en/thumb/f/fd/Resident_Evil_2_Remake.jpg/220px-Resident_Evil_2_Remake.jpg',
            'image1'=>'https://sm.ign.com/t/ign_ap/review/r/resident-e/resident-evil-2-review_23mg.1200.jpg',
            'image2'=>'https://cdn.vox-cdn.com/uploads/chorus_asset/file/13695830/Resident_Evil_2_intro_0011_Layer_5.jpg',
            'image3'=>'https://cdn.tmpo.co/data/2019/02/08/id_817943/817943_720.jpg'
        ]);


        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Call of Duty: Black Ops 4',
            'description'=>'Call of Duty: Black Ops 4 is a 2018 multiplayer first-person shooter developed by Treyarch and published by Activision. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 12, 2018',
            'price'=>'0',
            'thumbnail'=>'https://www.gamespot.com/a/uploads/scale_medium/1197/11970954/3388303-codbops4.jpg',
            'image1'=>'https://pbs.twimg.com/media/Ddb_51HVAAAw_XI.jpg',
            'image2'=>'https://i.ytimg.com/vi/86CfvPUfToM/maxresdefault.jpg',
            'image3'=>'https://static.techspot.com/images2/news/bigimage/2018/11/2018-11-21-image-16.jpg'
        ]);
    }
}
