<?php
 
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
 
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo();
 
        $role = Role::create(['name' => 'student']);
        $role->givePermissionTo('comment_create');

        $role = Role::create(['name' => 'docent']);
        $role->givePermissionTo('post_create','post_edit', 'post_delete', 'comment_create');

        $role = Role::create(['name' => 'gast']);
        $role->givePermissionTo('comment_create');
    }
}