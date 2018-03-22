<?php
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
   
	public function run()
	{
 //users aanmaken
        // $user = App\User::make([
        //     'name' => 'Hasina Noori',
        //     'name' => 'hasina',
        //     'email' => 'noor0041@hz.nl',
        // ]);
        // $user->password = bcrypt('Skillsmonitorgang');
        // $user->save(); 

//admins aanmaken
        // $user = App\Admin::make([
        //     'name' => 'Hasina Noori',
        //     'name' => 'hasina',
        //     'email' => 'noor0041@hz.nl',
        // ]);
        // $user->password = bcrypt('Skillsmonitorgang');
        // $user->save();

//superadmins aanmaken
            $user = App\SuperAdmin::make([
                'name' => 'Hasina Noori',
                'name' => 'hasina',
                'email' => 'noor0041@hz.nl',
            ]);
            $user->password = bcrypt('Skillsmonitorgang');
            $user->save();
	}
}