@extends('paginas/Ageneralist')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

<style>
      

</style>

<div class='container_p'>
    

    <h1>Lista de Productos</h1>

    <div>
            <a class="a_nv" href="{{ route('products.create') }}">Agregar Producto nuevo</a>
    </div>

    <div class='contenedor_contends' >

        <table class='table_c'>
                
            <thead class='theader'>
                <th class='th'>id</th>
                <th class='th'>Categoria</th>
                <th class='th'>Nombre</th>
                <th class='th'>Stock</th>
                <th class='th'>Descripcion</th>
                <th class='th'>Imagen</th>
                <th class='th'>Estado</th>
                <th class='th'>Editar</th>
                <th class='th'>Eliminar</th>
            </thead>

            <tbody class='tbody '>

                @foreach ($datos as $item)
                    <tr>
                        <td class='th'>{{$item->id}}</td>
                        <td class='th'>{{$item->p_Categoria}}</td>
                        <td class='th'>{{$item->p_Nombre}}</td>
                        <td class='th'>{{$item->p_Stock}}</td>
                        <td class='th'>{{$item->p_Descripcion}}</td>
                        <td class='th'>{{$item->p_Imagen}}</td>
                        <td class='th'>{{$item->p_Estado}}</td>

                        
                        <td class='th'>
                            <form action="{{ route('products.edit' , $item->id) }}" method='get'>
                                <button class='btn_admin a_btn1'>Editar</button>
                            </form> 
                        </td>
                          
                        <td class='th'>
                            <form action="{{ route('products.show' , $item->id) }}" method='get'>
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




