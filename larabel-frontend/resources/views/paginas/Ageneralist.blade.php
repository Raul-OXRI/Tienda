

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tituloPagina')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
    <style>

       /* .container{
            position: absolute;
            left: 0; right: 0;

            width: 100%;
            height: 450px;
            margin-top: -60px;
            margin-bottom: 0;
            background-color: rgb(255, 255, 255);
            box-shadow: 15px 15px 5px rgb(100, 100, 100);
            
        }*/

        

        h1{
            color: white;
            text-transform: uppercase;
            text-align: center;
            
            margin-top: 4px;
            margin-bottom: 1px;
            font-weight: 900;
            background-color: rgba(9, 57, 88, 0.788);
        }

        .table_c{
            width: 100%;
            margin-top: 2px;
        }
        .table_cs{
            width: 100%;
            margin-top: 2px;
        }

        .theader{ 
            background-color: rgb(25, 160, 170);
        }

        .th{
            padding: 10px 7px;
            text-align: center;
        }

        .tbody{
            width: 100%;
        }

        .a_nv{
            color: white;
            font-weight: 500;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;  
            background-color: rgba(9, 56, 88, 0.651);
            padding:5px 20px ;
            
        }

        .a_nv:hover{ 
            background-color: rgb(54, 228, 91);
            color: black;
        }

        header{
            width: 100%;
            height: 200px;
            background-color: rgb(54, 170, 25);
            display: flex;
            flex-direction: row;
            justify-content: center; 

            position: relative;
        }

        .img_ecomers{
            object-fit:cover;
            margin:0;
            padding:0;
            width: 100%;
            height: 100%;
        }

        .header_bg{
            position: absolute;
            top: 0; bottom: 0; right: 0; left: 0;
            background-color: rgba(0, 0, 0,0.8);
        }

        .title_2{
            color: white;
            text-align: center;
            font-weight: 900;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-top: 20px;
        }

        .container_p{
            position: relative;
        }

        .contenedor_contends{
            position: absolute;
            left: 0; right:0;
            height: 340px;
            overflow: hidden;
            overflow-y: scroll;
            overflow-x: scroll;
        }

        .btn_admin{

            background-color: rgb(54, 219, 21);
            padding: 5px 20px;
            border-radius: 5rem;
            text-decoration: none;
            font-family: sans-serif;
            font-weight: 300;
            color: aliceblue;
        }

        .a_btn1{
            background-color: rgb(255, 94, 0);
        }
        .a_btn2{
            background-color: red;
        }

        .header_bg_sub{
            display: grid;
            grid-template-areas: 'uno dos tres'; 
            grid-template-columns: 1fr 1fr 1fr; 
        }

        .bg_sub1{
            grid-area: dos;
        }

        .bg_sub2{
            grid-area: uno;
            display: flex;
            flex-direction: rows;
            justify-content: star;
            margin-left: 10px;
            margin-top: 10px;
            
        }



        .rtg_cls{
            position: absolute;
            background-color: black;
            top: 0; bottom: 0; left: 0;
            width: 300px;
            padding-right:2px;
            
        }

        .rtg_cls_none{
            display:none;
        }


        .nav_ins{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        
        .nav_ins a{
            text-decoration: none;
            text-transform: uppercase;
            color: white;
        }

        .nav_ins a:hover{
            color: rgb(255, 255, 0);
        }
        


    </style>


</head>
<body class='rl_pos'>

    <header>

        <div class='header_bg'> 

            <div class='header_bg_sub'>

                <h2 class='title_2 bg_sub1'>Tienda_Marquensita</h2> 

                <div class='bg_sub2'>
                    <div class='rt_cls'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-article" width="45" height="45" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M7 8h10" />
                        <path d="M7 12h10" />
                        <path d="M7 16h10" />
                        </svg>
                    </div>
                </div>

            </div>

        </div>


        <img class="img_ecomers" src="https://www.salvioni-alomar.com/wp-content/uploads/2021/10/10-tradiciones-de-japon-que-desconocias.jpg" jsaction="VQAsE" class="sFlh5c pT0Scc iPVvYb" alt="10 tradiciones de Japón que desconocías - SALVIONI-ALOMAR" jsname="kn3ccd" aria-hidden="false">
        

        
    
    </header>

    


    <div class="container container_rl">
        @yield('contenido')

       
    </div>


    <div class="rtg_cls rtg_cls_none">

        <div  style=' width: 100%; display:flex; justify-content: end; margin-top:2px;'>
            <svg class='rt_cls_P' xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="3" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M18 6l-12 12" />
            <path d="M6 6l12 12" />
            </svg>
        </div>


        <div class="nav_ins">
            <a href="">Productos</a>
            <a href="">Clientes</a>
            <a href="">Personal</a>
            <a href="">Facturas Ventas</a>
        </div>

    </div>


    <script>
        const img_user = document.querySelector('.rt_cls');

        img_user.addEventListener('click', ()=>{
            const modal1 = document.querySelector('.rtg_cls');
            modal1.classList.toggle('rtg_cls_none');

        });

        const img_user_p = document.querySelector('.rt_cls_P');

        img_user_p.addEventListener('click', ()=>{
            const modal1 = document.querySelector('.rtg_cls');
            modal1.classList.toggle('rtg_cls_none');

        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>