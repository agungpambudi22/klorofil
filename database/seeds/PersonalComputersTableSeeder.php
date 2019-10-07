<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\PersonalComputer;

class PersonalComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(PersonalComputer $pc)
    {

    	$faker = Faker::create();

        $pc->asset_tag = "CPU-".$faker->randomElement($array = array ('TTL','TML'))."-".$faker->date($format = 'md', $max = 'now')."-".$faker->numberBetween($min = 100000, $max = 900000);
        $pc->ram = $faker->randomElement($array = array (2,4,8));
        $pc->processor = $faker->randomElement($array = array ("Dual Core","Core i5","Core i3"));
        $pc->mother_board = $faker->randomElement($array = array ("Gigabyte H61","Asus H81C","Asus H61M","Gigabyte H81"));
        $pc->user_id = $faker->numberBetween($min = 1, $max = 50);
        $pc->vga = $faker->randomElement($array = array (0,1));
        $pc->hdmi = $faker->randomElement($array = array (0,1));
        $pc->ps2port = $faker->randomElement($array = array (0,1));
        $pc->save();
    		
	}
	    
}