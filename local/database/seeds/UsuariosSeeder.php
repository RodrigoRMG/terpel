<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Usuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $users = array(
                ['usuario' => '1234', 'cedula' => '1234', 'password' => Hash::make('1234'),'nombre'=>'Juan','apellidos'=>"perez","email"=>"juanperez@terpel.com","telefono"=>"123456789","eds"=>"prueba EDS","asesor"=>"pedro perez","tipo_usuario"=>"1"],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}
