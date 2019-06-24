<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>People</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        
        footer {
           

            border-top-width: 1px;
    border-top-style: solid; 
    border-top-color: #b8c2cc;
        }

        .carousel-inner {
            
            height: 300px;
        }

        .carousel-inner img {
            
            
            height: 100%;
        }

        @media (min-width: 540px){
            .carousel-inner img {
                width: 100%;
            }
        }

        .carousel-caption {
            position: absolute;
            top: 10%;
            
            text-shadow: 1px 1px 10px #000;
        }

        @media (max-width: 450px){
            .carousel-caption .display-2 {
                font-size: 5em;
            }

            .table {
                font-size: 0.5em;
            }
        }

        

        .card.small img {
            object-fit: cover;
            width: 100px;
            height: 100px;
            margin: 5px;
        }

        @media (max-width: 950px){
            .card.small img {
                width: 50px;
                height: 50px;
            }
        }

        .social li{
margin:10px;
}

        .row.no-gutters {
  margin-right: 0;
  margin-left: 0;

  & > [class^="col-"],
  & > [class*=" col-"] {
    padding-right: 0;
    padding-left: 0;
  }
}
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>



    </head>

    <body>
    @include('layouts.navbar')       
    @yield ('content')
    @include('layouts.footer')  

        <script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </body>
</html>
