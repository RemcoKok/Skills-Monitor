<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Rank;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //users aanmaken
        $user = App\User::make([
            'name' => 'Hasina Noori',
            'email' => 'noor0041@hz.nl',
        ]);
        $user->password = bcrypt('Skillsmonitorgang');
        $user->save();     }
  }
