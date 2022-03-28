<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.12.17/css/grapes.min.css"> --}}
        <link rel="stylesheet" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
        <script src="https://unpkg.com/grapesjs@0.18.3/dist/grapes.min.js"></script>

        <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/>
        <script src="https://unpkg.com/grapesjs"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Styles -->

        <style>

            :root {
                --primaryColor: #444;
                --secondaryColor: #ddd;
                --tertiaryColor: #804f7b;
                --quaternaryColor: #d278c9;
            }
            /* Let's highlight canvas boundaries */
            #gjs {
                /* border: 3px solid #444; */
                border:none;
            }

            /* Primary color for the background */
            .gjs-one-bg {
                background-color: #78366a;
            }
            /* Secondary color for the text color */
            .gjs-two-color {
                color: rgba(255, 255, 255, 0.7);
            }

            /* Tertiary color for the background */
            .gjs-three-bg {
                background-color: #ec5896;
                color: white;
            }

            /* Quaternary color for the text color */
            .gjs-four-color,
            .gjs-four-color-h:hover {
                color: #ec5896;
            }


            /* Reset some default styling */
            .gjs-cv-canvas {
                top: 0;
                width: 100%;
                height: 100%;
            }
            .gjs-block {
                width: auto;
                height: auto;
                min-height: auto;
            }
            .panel__top {
                padding: 0;
                width: 100%;
                display: flex;
                position: initial;
                justify-content: center;
                justify-content: space-between;
            }
            .panel__basic-actions {
                position: initial;
            }
            .editor-row {
                display: flex;
                justify-content: flex-start;
                align-items: stretch;
                flex-wrap: nowrap;
                height: 650px;
            }

            .editor-canvas {
                flex-grow: 1;
            }

            .panel__right {
                flex-basis: 230px;
                position: relative;
                overflow-y: auto;
            }
            .panel__devices {
                position: initial;
            }
            .panel__switcher {
                position: initial;
            }

        </style>

    </head>
    <body>

        @yield('bodyTag')
          
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.12.17/grapes.min.js"></script> --}}
        <script src="{{asset('js/grapes.js')}}"></script>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>
