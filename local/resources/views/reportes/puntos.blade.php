<html>



    <tr style="background-color: #1F497D;">
    
    <td style="color: #FFF;"><b>Nombre</b></td>
    <td style="color: #FFF;"><b>Apellido</b></strong></td>
    <td style="color: #FFF;"><b>Cargo</b></td>
    <td style="color: #FFF;"><b>Cédula</b></td>
    <td style="color: #FFF;"><b>Acumulados</b></td>
    <td style="color: #FFF;"><b>Canjeados</b></td>
    <td style="color: #FFF;"><b>Disponibles</b></td>

   
    </tr>

    @foreach($usuarios as $usuario)

    <?php $compras=DB::table('compras')->where('usuario','=',$usuario->cedula)->get();?>
    <?php $puntos=DB::table('puntos')->where('usuario','=',$usuario->cedula)->get();?>

    <?php 
     $pts=0;
     $ptscanjeados=0;
    ?>
    @foreach($puntos as $punto)
        <?php $pts+=$punto->puntos;?>
    @endforeach

    @foreach($compras as $compra)
        <?php $ptscanjeados+=$compra->total_puntos;?>
    @endforeach


    <tr>
    
    <td>{{$usuario->nombres}}</td>
    <td>{{$usuario->apellidos}}</td>

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

    <td>{{$usuario->cedula}}</td>
    
    <td>{{$pts}}</td>
    <td>{{$ptscanjeados}}</td>
    <td>{{$pts-$ptscanjeados}}</td>

    </tr>
    @endforeach

</html>