@extends('paginas/Ageneralist')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')


<div class='container_p'>
    

    <h1>Lista de las ventas facturas</h1>

    <div>
            <a class="a_nv" href="{{ route('Ventafactura.create') }}">venta nueva</a>
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
                    <th class='th'>Editar</th>
                    <th class='th'>Eliminar</th>
                </thead>
    
                <tbody class='tbody '>
    
                    @foreach ($datos as $item)
                        <tr>
                            <td class='th'>{{$item->id}}</td>
                            <td class='th'>{{$item->id_cliente}}</td>
                            <td class='th'>{{$item->id_personal}}</td>
                            <td class='th'>{{$item->estado}}</td>
                            <td class='th'>{{$item->detalleProducto}}</td>
                            <td class='th'>{{$item->fecha_venta}}</td>
    
                            
                            <td class='th'>
                                <form action="{{ route('Ventafactura.edit' , $item->id) }}" method='get'>
                                    <button class='btn_admin a_btn1'>Editar</button>
                                </form> 
                            </td>
                              
                            <td class='th'>
                                <form action="{{ route('Ventafactura.show' , $item->id) }}" method='get'>
                                    <button class='btn_admin a_btn2'>Eliminar</button>
                                </form> 
                            </td>
                            
    
                        </tr>
                    @endforeach
                            
                </tbody>
    
            </table>

    </div>

    
</div>


@endsection




