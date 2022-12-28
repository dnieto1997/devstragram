<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
@vite('resources/css/app.css')

<title>Devstagram - @yield('titulo')</title>

    </head>
    <body class="bg-gray-100">

   <header class="p-5 border -b bg-white shadow">

<div class="container mx-auto flex justify-between items-center">
 <h1 class="text-3xl font-black">
  
    Devstagram

 </h1>

<nav class="flex gap-2 items-center" >


<a class="font-bold uppercase text-gray-600 text-sm"  href="#">Login</a>
<a  class="font-bold uppercase text-gray-600 text-sm" href="#">Crear cuenta</a>

</nav>



</div>
   </header>
        
<main class="container mx-auto mt-10">

    <h2>

       @yield('titulo') 
    </h2>
@yield('contenido')

</main>

<footer>


</footer>


    </body>

</html>

   

   