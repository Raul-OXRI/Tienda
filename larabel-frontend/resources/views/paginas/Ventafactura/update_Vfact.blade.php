@extends('paginas/Ageneralist')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

<style>

      form{
        background-color: white;
        width: 70%;
        height: 350px;
        margin:0 auto;
        padding:1rem;
        overflow: hidden;
        overflow-y: scroll;
      }

      .container_frm{
        width: 100%;
      }

      .cont_data_fm{
        width: 100%;
        margin:1rem;
        box-shadow: rgba(0, 0, 0, 0.1) 5px 10px 20px;

        background: rgb(58,180,167);
        background: linear-gradient(90deg, rgba(58,180,167,1) 17%, rgba(29,253,248,0.9098827030812325) 59%, rgba(69,252,128,1) 100%);

        padding: 0 20px;

        display:flex;
        flex-direction:row;
        justify-content: space-between;

      }

     

      label{
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 500;
      }

      input{
        width: 60%;
        border: none;
        text-decoration: none;
        border-color: aqua;

      }


      button{
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 500;
        width: 100%;     
      }

      button:hover{
            background-color: rgb(87, 235, 67);

      }

      
</style>

<div class='container_p'>
    

    <h1>Actualizando un Producto</h1>

    <div>
            <a class="a_nv" href="{{ route('Ventafactura.index') }}">REGRESAR</a>
    </div>

    <div class='container_frm' >

        <form action="{{ route('Ventafactura.update', $Ventafactura->id) }}" method="get">

            <div class='cont_data_fm'>
                <label class='stl_labels' for="id_cliente">id_cliente</label>
                <input class='stl_inputs' type="text" name='id_cliente' value='{{$Ventafactura->id_cliente}}' require>
            </div>

            <div class='cont_data_fm'>
                <label class='stl_labels' for="id_personal">id_personal</label>
                <input class='stl_inputs' type="text" name='id_personal' value='{{$Ventafactura->id_personal}}' require>
            </div>

            <div class='cont_data_fm'>
                <label class='stl_labels' for="estado">estado</label>
                <input class='stl_inputs' type="number" name='estado' value='{{$Ventafactura->estado}}' require>
            </div>

            <div class='cont_data_fm'>
                <label class='stl_labels' for="detalleproducto">detalleproducto</label>
                <input class='stl_inputs' type="text" name='detalleproducto' value='{{$Ventafactura->detalleProducto}}' require>
            </div>

            <div class='cont_data_fm'>
                <label class='stl_labels' for="fecha_venta">fecha_venta</label>
                <input class='stl_inputs' type="date" name='fecha_venta' value='{{$Ventafactura->fecha_venta}}' require>
            </div>

            <div class='cont_data_fm cont_data_fm2'>
                <button>Modificar</button>
            </div>

           
        </form>
        

    </div>

    
</div>


@endsection