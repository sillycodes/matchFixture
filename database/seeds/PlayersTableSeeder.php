<?php

use Illuminate\Database\Seeder;
use App\Player;
class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Player::truncate();

        $fake_data = \Faker\Factory::create();

        $jersey_no = 10;
        $team_id =1;
        $y = 1;
        $countries = ['India','Australia','England','Sri Lanka'];

        for($i=1; $i <= 11; $i++)
        {
            if($y > 11)
            {
               $y = 1;  
               $team_id++; 

            }
            $y++;
            Player::create([
                'team_id'=>$team_id,
                'f_name'=>$fake_data->name,
                'l_name'=>$fake_data->name,
                'role'=>'',
                'jersey_no'=>rand(7,200),
                'dob'=>'1990-03-07',
                'country'=>$countries[$team_id],
                'profile_pic'=>"default$i.png",
                'is_active'=>1,
                'created_at'=>date()              

            ]);
        }
    }
}
