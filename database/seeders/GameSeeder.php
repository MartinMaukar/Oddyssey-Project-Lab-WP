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
            'price'=>20000,
            'release'=>'October 18, 2011',
            'thumbnail'=>'BatmanTN.jpg',
            'image1'=>'Batman1.jpg',
            'image2'=>'Batman2.jpg',
            'image3'=>'Batman3.jpg',
            'countpurchase'=>'1',
            'countrecomend'=>'1',
            'countnotrecomend'=>'1'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Resident Evil 2',
            'description'=>'Resident Evil 2 is a 2019 survival horror game developed and published by Capcom. A remake of the 1998 game Resident Evil 2.',
            'price'=>0,
            'release'=>'January 25, 2019',
            'thumbnail'=>'ResidentEvilTN.jpg',
            'image1'=>'ResidentEvil1.jpg',
            'image2'=>'ResidentEvil2.jpg',
            'image3'=>'ResidentEvil3.jpg',
            'countpurchase'=>'1',
            'countrecomend'=>'1',
            'countnotrecomend'=>'1'
        ]);


        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Call of Duty: Black Ops 4',
            'description'=>'Call of Duty: Black Ops 4 is a 2018 multiplayer first-person shooter developed by Treyarch and published by Activision.',
            'price'=>0,
            'release'=>'October 11, 2018',
            'thumbnail'=>'CODTN.jpg',
            'image1'=>'COD1.jpg',
            'image2'=>'COD2.jpg',
            'image3'=>'COD3.jpg',
            'countpurchase'=>'1',
            'countrecomend'=>'1',
            'countnotrecomend'=>'1'
        ]);

        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Counter Strike',
            'description'=>'Counter-Strike is a series of multiplayer first-person shooter video games in which teams of terrorists battle to perpetrate an act of terror while counter-terrorists try to prevent it.',
            'price'=>10000,
            'release'=>'August 21, 2012',
            'thumbnail'=>'CSTN.jpg',
            'image1'=>'CS1.jpg',
            'image2'=>'CS2.jpg',
            'image3'=>'CS3.jpg',
            'countpurchase'=>'1',
            'countrecomend'=>'1',
            'countnotrecomend'=>'1'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'Forza Horizon 4',
            'description'=>'Forza Horizon 4 is a 2018 racing video game developed by Playground Games and published by Microsoft Studios.',
            'price'=>10000,
            'release'=>'September 28, 2018',
            'thumbnail'=>'ForzaTN.jpg',
            'image1'=>'Forza1.jpg',
            'image2'=>'Forza2.jpg',
            'image3'=>'Forza3.jpg',
            'countpurchase'=>'1',
            'countrecomend'=>'1',
            'countnotrecomend'=>'1'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'Mario Kart',
            'description'=>'Mario Kart is a series of racing games developed and published by Nintendo. Players compete in go-kart races while using various power-up items.',
            'price'=>0,
            'release'=>'May 29, 2014',
            'thumbnail'=>'MarioTN.jpg',
            'image1'=>'Mario1.jpg',
            'image2'=>'Mario2.jpg',
            'image3'=>'Mario3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Cyber Punk 2077',
            'description'=>'Cyberpunk 2077 is an action role-playing video game developed by CD Projekt Red and published by CD Projekt.',
            'price'=>0,
            'release'=>'December 10, 2020',
            'thumbnail'=>'CPTN.jpg',
            'image1'=>'CP1.jpg',
            'image2'=>'CP2.jpg',
            'image3'=>'CP3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Lara Croft: Shadow of the tomb rider',
            'description'=>'Shadow of the Tomb Raider is a 2018 action-adventure video game developed by Eidos-Montréal and published by Square Enix\'s European subsidiary.',
            'price'=>50000,
            'release'=>'September 12, 2018',
            'thumbnail'=>'LCTN.jpg',
            'image1'=>'LC1.jpg',
            'image2'=>'LC2.jpg',
            'image3'=>'LC3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'For Honor',
            'description'=>'For Honor is a 2017 action video game developed and published by Ubisoft for Microsoft Windows, PlayStation 4, and Xbox One.',
            'price'=>149000,
            'release'=>'September 15, 2016',
            'thumbnail'=>'FHTN.jpg',
            'image1'=>'FH1.jpg',
            'image2'=>'FH2.jpg',
            'image3'=>'FH3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'God Of War',
            'description'=>'God of War is an action-adventure game franchise created by David Jaffe at Sonys Santa Monica Studio.',
            'price'=>729000,
            'release'=>'God of War; March 22, 2005',
            'thumbnail'=>'GodOfWarTN.jpg',
            'image1'=>'GodOfWar1.jpg',
            'image2'=>'GodOfWar2.jpg',
            'image3'=>'GodOfWar3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Soul Calibur VI',
            'description'=>'Soulcalibur VI is a fighting game developed by Bandai Namco Studios and Dimps and published by Bandai Namco Entertainment for the PlayStation 4, Xbox One, and Microsoft Windows in 2018.',
            'price'=>550000,
            'release'=>'October 19, 2018',
            'thumbnail'=>'SCTN.jpg',
            'image1'=>'SCTN1.jpg',
            'image2'=>'SCTN2.jpg',
            'image3'=>'SCTN3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Sekiro Shadows Die Twice',
            'description'=>'Sekiro: Shadows Die Twice is a 2019 action-adventure game developed by FromSoftware and published by Activision.',
            'price'=>729000,
            'release'=>'March 21, 2019',
            'thumbnail'=>'SekiroTN.jpg',
            'image1'=>'Sekiro1.jpg',
            'image2'=>'Sekiro2.jpg',
            'image3'=>'Sekiro3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Red Dead Redemption 2',
            'description'=>'Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and a prequel to the 2010 game Red Dead Redemption.',
            'price'=>640000,
            'release'=>'October 26, 2018',
            'thumbnail'=>'RedTN.jpg',
            'image1'=>'Red1.jpg',
            'image2'=>'Red2.jpg',
            'image3'=>'Red3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Apex Legends',
            'description'=>'Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts. ',
            'price'=>0,
            'release'=>'February 4, 2019',
            'thumbnail'=>'ApexTN.jpg',
            'image1'=>'Apex1.jpg',
            'image2'=>'Apex2.jpg',
            'image3'=>'Apex3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'FIFA 22',
            'description'=>'FIFA 22 is a football simulation video game published by Electronic Arts. It is the 29th installment in the FIFA series.',
            'price'=>720000,
            'release'=>'September 27, 2021',
            'thumbnail'=>'FifaTN.jpg',
            'image1'=>'Fifa1.jpg',
            'image2'=>'Fifa2.jpg',
            'image3'=>'Fifa3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'3',
            'title'=>'NBA 2K22',
            'description'=>'NBA 2K22 is a 2021 basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association.',
            'price'=>720000,
            'release'=>'September 9, 2021',
            'thumbnail'=>'NBATN.jpg',
            'image1'=>'NBA1.jpg',
            'image2'=>'NBA2.jpg',
            'image3'=>'NBA3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Tekken 7',
            'description'=>'Tekken 7 is a fighting game developed and published by Bandai Namco Entertainment. It is the seventh main and ninth overall installment in the Tekken series.',
            'price'=>500000,
            'release'=>'February 18, 2015',
            'thumbnail'=>'TekkenTN.jpg',
            'image1'=>'Tekken1.jpg',
            'image2'=>'Tekken2.jpg',
            'image3'=>'Tekken3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'4',
            'title'=>'Elden Ring',
            'description'=>'Elden Ring is a 2022 action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment.',
            'price'=>720000,
            'release'=>'February 25, 2022',
            'thumbnail'=>'EldenTN.jpg',
            'image1'=>'Elden1.jpg',
            'image2'=>'Elden2.jpg',
            'image3'=>'Elden3.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'2',
            'title'=>'Rainbow Six Siege',
            'description'=>'Tom Clancys Rainbow Six Siege is an online tactical shooter video game developed by Ubisoft Montreal and published by Ubisoft.',
            'price'=>0,
            'release'=>'November 26, 2015',
            'thumbnail'=>'R6TN.jpg',
            'image1'=>'R61.jpg',
            'image2'=>'R62.jpg',
            'image3'=>'R63.jpg'
        ]);

        DB::table('games')->insert([
            'category_id'=>'1',
            'title'=>'Street Fighter V',
            'description'=>'Street Fighter V is a fighting game developed by Capcom and Dimps and published by Capcom for the PlayStation 4 and Microsoft Windows in 2016. Similar to the previous games in the Street Fighter series, Street Fighter V features a side-scrolling fighting gameplay system.',
            'price'=>300000,
            'release'=>'February 16, 2016',
            'thumbnail'=>'SFTN.jpg',
            'image1'=>'SF1.jpg',
            'image2'=>'SF2.jpg',
            'image3'=>'SF3.jpg',
            'countpurchase'=>'10',
        ]);
    }
}