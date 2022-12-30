@extends('layouts.app')


@section('titulo')

Registrate en Devstragram


@endsection



@section('contenido')



<div class="md:flex md:justify-center md:gap-10 md:items-center "  >


<div class="md:w-6/12 p-5">
<img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuario"  />

</div>    

<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">


 <form action="{{route('registrar')}}" method="POST">
    @csrf
<div class="mb-5">
<label for="name" class="mb-2 block uppercase text-gray-500 font-bold text-center"> Nombre </label>
<input id="name" name="name" type="text" placeholder="Nombre" class="border p-3 w-full rounded-lg"/>

@error('name')

<p>El nombre es obligatorio</p>
    
@enderror
</div>

<div class="mb-5">
<label for="username" class="mb-2 block uppercase text-gray-500 font-bold text-center"> Usuario </label>
<input id="username" name="username" type="text" placeholder="Usuario" class="border p-3 w-full rounded-lg"/>
</div>
    
<div class="mb-5">
<label for="email" class="mb-2 block uppercase text-gray-500 font-bold text-center">Email </label>
<input id="email" name="email" type="email" placeholder="Ingrese Correo" class="border p-3 w-full rounded-lg"/>
</div>

<div class="mb-5">
<label for="password" class="mb-2 block uppercase text-gray-500 font-bold text-center">Password </label>
<input id="password" name="password" type="password" placeholder="Password" class="border p-3 w-full rounded-lg"/>
</div>

<div class="mb-5">
    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold text-center">Repetir Password </label>
    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repetir Password" class="border p-3 w-full rounded-lg"/>
    </div>



<input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors curson-pointer uppercase font-bold w-full p-3 text-white rounded-lg"  />

</form>   


</div>



</div>

@endsection