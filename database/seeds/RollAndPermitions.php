<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\Models\User;

class RollAndPermitions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner'; // optional
        $owner->description  = 'User is the owner of a given project'; // optional
        $owner->save();

        $village = new Role();
        $village->name         = 'village';
        $village->display_name = ''; // optional
        $village->description  = ''; // optional
        $village->save();

        $dealer = new Role();
        $dealer->name         = 'dealer';
        $dealer->display_name = ''; // optional
        $dealer->description  = ''; // optional
        $dealer->save();

        $buyer = new Role();
        $buyer->name         = 'buyer';
        $buyer->display_name = ''; // optional
        $buyer->description  = ''; // optional
        $buyer->save();

        $user = User::where('id', 1)->first();

        $user->attachRole($owner);

        $createVillage = new Permission();
        $createVillage->name         = 'create-village';
        $createVillage->display_name = 'Create Village'; // optional
// Allow a user to...
        $createVillage->description  = ''; // optional
        $createVillage->save();


        $createProduct = new Permission();
        $createProduct->name         = 'create-roduct';
        $createProduct->display_name = 'Create-product'; // optional
// Allow a user to...
        $createProduct->description  = ''; // optional
        $createProduct->save();



        $dealer->attachPermission($createProduct);
        $owner->attachPermissions(array($createProduct, $createVillage));
    }
}
