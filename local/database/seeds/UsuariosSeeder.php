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
                ['usuario' => 'corina', 'cedula' => 'corina', 'password' => Hash::make('$!n3rgi@'),'nombres'=>'Corina','apellidos'=>"Anyelo","email"=>"Corina@fabricamosideas.com.pa","telefono"=>"68142761","eds"=>"","asesor"=>"","tipo_usuario"=>"5"],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            Usuarios::create($user);
        }

        Model::reguard();
    }
}
