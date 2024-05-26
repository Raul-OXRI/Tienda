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
    

    <h1>Agregar Productos</h1>

    <div>
            <a class="a_nv" href="{{ route('clientes.create') }}">REGRESAR</a>
    </div>

    <div class='container_frm' >

      <form action="{{ route("clientes.store") }}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control">
        <label for="">Telefono</label>
        <input type="text" name="telefono" id="telefono" class="form-control">
        <label for="">Direccion</label>
        <input type="text" name="address" id="address" class="form-control">
        <br>
        <a href="{{ route("clientes.index") }}" class="btn btn-secondary">
            <span><i class="bi bi-arrow-return-left"></i></span> regresar
        </a>
        <button class="btn btn-success">
            Agregar
        </button>
    </form>

    </div>

    
</div>


@endsection