

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tituloPagina')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
    <style>

        .container{
            position: absolute;
            left: 0; right: 0;

            width: 100%;
            height: 450px;
            margin-top: -60px;
            margin-bottom: 0;
            background-color: rgb(255, 255, 255);
            box-shadow: 15px 15px 5px rgb(100, 100, 100);
            
        }

        

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
            margin:0;
            padding:0;
            width: 500px;
            height: 100%;
        }

        .header_bg{
            position: absolute;
            top: 0; bottom: 0; right: 0; left: 0;
            background-color: rgba(0, 0, 0,0.6);
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
            grid-area: tres;
            display: flex;
            flex-direction: rows;
            justify-content: end;
            margin-right: 10px;
            margin-top: 10px;
            
        }

        .abs_bg_sub2{
            position:absolute;
            background-color: white;
            top: -130px; bottom: 0; right: 0;
            width: 400px;
            height: 600px;
            display:none;
        }

        .rotage_calss{
            display:block;
        }
        

        /*modal1 */
        .flex_icons{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            
        }

        .icons{
            background-color: white;
            margin-top:20px;
            border-radius: 10rem;
            padding: 5px;
        }
        
        .Component_mdl1{
            position: relative;
            background-color: rgb(8, 16, 31);
        }

        .Component_mdl1 h3{
            text-align: center;
            padding: 10px 0;
        }

        .Component_mdl2{
            position: absolute;
            top: 140px; bottom: 0; 
            width:100%;
            height: 490px; 
            overflow: hidden;
            overflow-y: scroll;
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
                        <img  src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png" jsaction="VQAsE" class="sFlh5c pT0Scc iPVvYb rtg_bl" style="max-width: 512px; width: 80px; height: 80px; margin: 0px;" alt="Usuario - Iconos gratis de social" jsname="kn3ccd" aria-hidden="false">
                    </div>
                </div>

            </div>

        </div>

        <img class='img_ecomers' id="dimg_401" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYNGW23YwzmRRF0sjH2T84Nc_Az8bTHL3MMQ&amp;s" class="YQ4gaf"  style="object-position:center"  alt="750+ Fotos de la tienda de ropa | Descargar imágenes gratis en Unsplash" data-csiid="197" data-atf="4" data-ilt="1716180743496" data-deferred="3">
        <img class='img_ecomers' id="dimg_FddKZuvnPP2VwbkP6vGrqA8_411" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbY78sr9tXBmYDYf5cCfpAKlBRH8aRGQg2xg&amp;s" class="YQ4gaf"  style="object-position:center"  alt="Marketing para Tiendas de Ropa: 5 Estrategias" data-ilt="1716180759848">
        <img class='img_ecomers' id="dimg_FddKZuvnPP2VwbkP6vGrqA8_297" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqM8-jhpR4CBGsAD_YZznik6qKELE_i13L-A&amp;s" class="YQ4gaf"  style="object-position:center"  alt="Las mejores calles de tiendas de Ámsterdam | Explore de Expedia" data-ilt="1716180759965">
    
    </header>




    <div class="container container_rl">
        @yield('contenido')

        <div class='abs_bg_sub2'>

            <div>

                <div class='Component_mdl1'>


                    <div class='flex_icons'>
                        <div class='icons'>

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M14.872 14.287l6.522 6.52a2.996 2.996 0 0 1 -2.218 1.188l-.176 .005h-14a2.995 2.995 0 0 1 -2.394 -1.191l6.521 -6.522l2.318 1.545l.116 .066a1 1 0 0 0 .878 0l.116 -.066l2.317 -1.545z" stroke-width="0" fill="currentColor" />
                            <path d="M2 9.535l5.429 3.62l-5.429 5.43z" stroke-width="0" fill="currentColor" />
                            <path d="M22 9.535v9.05l-5.43 -5.43z" stroke-width="0" fill="currentColor" />
                            <path d="M12.44 2.102l.115 .066l8.444 5.629l-8.999 6l-9 -6l8.445 -5.63a1 1 0 0 1 .994 -.065z" stroke-width="0" fill="currentColor" />
                            </svg>

                        </div>

                        <div class='icons'>

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-waze" width="44" height="44" viewBox="0 0 24 24" stroke-width="2.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6.66 17.52a7 7 0 0 1 -3.66 -4.52c2 0 3 -1 3 -2.51c0 -3.92 2.25 -7.49 7.38 -7.49c4.62 0 7.62 3.51 7.62 8a8.08 8.08 0 0 1 -3.39 6.62" />
                            <path d="M10 18.69a17.29 17.29 0 0 0 3.33 .3h.54" />
                            <path d="M16 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M8 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M16 9h.01" />
                            <path d="M11 9h.01" />
                            </svg>

                        </div>

                        <div class='icons'>

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-automation" width="44" height="44" viewBox="0 0 24 24" stroke-width="2.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M10 9v6l5 -3z" />
                            </svg>

                        </div>

                    </div>


                    <h3 style='color: white;'>Nombre de user</h3>



                    <div class='Component_mdl2'>

                        <div>
                            <iframe width="100%" height="400px" 
                            src="https://www.youtube.com/embed/RIh2zgzp_sI?si=ewn5AuJiCuIVDn5h" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>

                        <div>
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/s97pUW5fvXo?si=NOUcch3CYVhaskK_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>

                        <div>
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/Fp-GgPaOcU8?si=Ot7wkrX1sDuSVXa6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>

                        <div>
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/CPycW_beYe8?si=gITAco6_f6DhbjPL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>


                    </div>

                </div>

               

            </div>

        </div>
       
    </div>

    <script>
        const img_user = document.querySelector('.rtg_bl');

        img_user.addEventListener('click', ()=>{
            const modal1 = document.querySelector('.abs_bg_sub2');
            modal1.classList.toggle('rotage_calss');

        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>