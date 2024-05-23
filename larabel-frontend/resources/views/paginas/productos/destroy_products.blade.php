@extends('paginas/Ageneralist')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

<style>
      

</style>

<div class='container_p'>
    

    <h1>Eliminar Producto</h1>

    <div>
            <a class="a_nv" href="{{ route('products.index') }}">REGRESAR</a>
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
            </thead>

            <tbody class='tbody '>


                <tr>
                    <td class='th'>{{$product->id}}</td>
                    <td class='th'>{{$product->p_Categoria}}</td>
                    <td class='th'>{{$product->p_Nombre}}</td>
                    <td class='th'>{{$product->p_Stock}}</td>
                    <td class='th'>{{$product->p_Descripcion}}</td>
                    <td class='th'>{{$product->p_Imagen}}</td>
                    <td class='th'>{{$product->p_Estado}}</td>
                </tr>

                        
            </tbody>

        </table>

        <form action="{{ route('products.destroy', $product->id) }}" method="get">

            <div class='cont_data_fm cont_data_fm2'>
                <button>Elinimar</button>
            </div>

        </form>

    </div>

    
</div>


@endsection