@extends('paginas/Ageneralist')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

<style>
      

</style>

<div class='container_p'>
    

    <h1>Eliminar Producto</h1>

    <div>
            <a class="a_nv" href="{{ route('Ventafactura.index') }}">REGRESAR</a>
    </div>

    <div class='contenedor_contends' >

        <table class='table_c'>
                
            <thead class='theader'>
                <th class='th'>id</th>
                <th class='th'>cliente</th>
                <th class='th'>vendedor</th>
                <th class='th'>estado</th>
                <th class='th'>detalle del producto</th>
                <th class='th'>fecha de la venta</th>
            </thead>

            <tbody class='tbody '>


                <tr>
                    <td class='th'>{{$Ventafactura->id}}</td>
                    <td class='th'>{{$Ventafactura->id_cliente}}</td>
                    <td class='th'>{{$Ventafactura->id_personal}}</td>
                    <td class='th'>{{$Ventafactura->estado}}</td>
                    <td class='th'>{{$Ventafactura->detalleProducto}}</td>
                    <td class='th'>{{$Ventafactura->fecha_venta}}</td>
                </tr>

                        
            </tbody>

        </table>

        <form action="{{ route('Ventafactura.destroy', $Ventafactura->id) }}" method="get">

            <div class='cont_data_fm cont_data_fm2'>
                <button>Elinimar</button>
            </div>

        </form>

    </div>

    
</div>


@endsection