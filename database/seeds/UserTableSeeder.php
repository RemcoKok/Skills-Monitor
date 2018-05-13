<?php
 
use Illuminate\Database\Seeder;
 
use App\User;
 
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::make([
            'name' => 'Hasina Noori',
            'email' => 'noor0041@hz.nl',
        ]);
        $user->password = bcrypt('Skillsmonitorgang');
        $user->save();    

        factory(User::class, 5)->create()->each(function($u) {
            if ($u->id == 1) {
            $u->assignRole('admin');
            } else {
            $u->assignRole('docent');
            }
        });
    }
}

