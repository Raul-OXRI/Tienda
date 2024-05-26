@extends('paginas/Ageneralist')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

<style>
      

</style>

<div class='container_p'>
    

    <h1>Lista de Clientes</h1>

    <div>
          <a class="a_nv" href="{{ route('clientes.create') }}">Agregar Cliente nuevo</a>
    </div>

    <div class='contenedor_contends' >

        <table class='table_c'>
                
            <thead class='theader'>
                <th class='th'>Código cliente</th>
                <th class='th'>Nombre</th>
                <th class='th'>Apellido</th>
                <th class='th'>Teléfono</th>
                <th class='th'>Dirección</th>
            </thead>

            <tbody class='tbody '>

                @foreach ($datos as $item)
                    <tr>
                        <td class='th'>{{$item->cod_cliente}}</td>
                        <td class='th'>{{$item->nombre}}</td>
                        <td class='th'>{{$item->apellido}}</td>
                        <td class='th'>{{$item->telefono}}</td>
                        <td class='th'>{{$item->address}}</td>
                        
                        {{--<td class='th'>
                            <form action="{{ route('products.edit' , $item->id) }}" method='get'>
                                <button class='btn_admin a_btn1'>Editar</button>
                            </form> 
                        </td>
                          
                        <td class='th'>
                            <form action="{{ route('products.show' , $item->id) }}" method='get'>
                                <button class='btn_admin a_btn2'>Eliminar</button>
                            </form> 
                        </td>--}}
                        

                    </tr>
                @endforeach
                        
            </tbody>

        </table>

    </div>

    
</div>


@endsection




