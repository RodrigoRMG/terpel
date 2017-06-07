<html>

    <tr style="background-color: #1F497D;">
    <td style="color: #FFF;"><b>Cédula (usuario)</b></td>
    <td style="color: #FFF;"><b>Nombre</b></td>
    <td style="color: #FFF;"><b>Apellido</b></strong></td>
    <td style="color: #FFF;"><b>Celular</b></td>
    <td style="color: #FFF;"><b>Correo Electrónico</b></td>
    <td style="color: #FFF;"><b>Cargo</b></td>
    <td style="color: #FFF;"><b>Nombre de las EDS</b></td>
    <td style="color: #FFF;"><b>Nombre del asesor</b></td>
    <td style="color: #FFF;"><b> Fecha de creación</b></td>
    <td style="color: #FFF;"><b>Fecha de Modificación</b></td>

   
    </tr>

    @foreach($usuarios as $usuario)
    <tr>
    <td>{{$usuario->cedula}}</td>
    <td>{{$usuario->nombres}}</td>
    <td>{{$usuario->apellidos}}</td>
    <td>{{$usuario->telefono}}</td>
    <td>{{$usuario->email}}</td>

    @if($usuario->tipo_usuario==1)
        <td>Vendedor de pista</td>
    @endif

    @if($usuario->tipo_usuario==2)
        <td>Dependiente de tienda</td>
    @endif

    @if($usuario->tipo_usuario==3)
        <td>Supervisor</td>
     @endif

    @if($usuario->tipo_usuario==6)
        <td>Administrador</td>
    @endif

    @if($usuario->tipo_usuario==4)
        <td>Asesor</td>
    @endif


    <td>{{$usuario->eds}}</td>
    <td>{{$usuario->asesor}}</td>
    <td>{{$usuario->created_at}}</td>
    <td>{{$usuario->updated_at}}</td>
    </tr>
    @endforeach

</html>