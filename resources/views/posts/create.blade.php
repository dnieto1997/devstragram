@extends('layouts.app')

@section('titulo')

Crea una nueva publicacion 
@endsection

@section('contenido')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />  
@endpush

<div class="md:flex md:items-center ">


<div class=" md:w-1/2 px-10">

  

    <form action="{{route('imagenes.store')}}" method="POST" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center" enctype="multipart/form-data">
@csrf
</form>
</div>
<div class="md:w-6/12 bg-white p-10 rounded-lg shadow-xl mt-10 md:mt-0">

    <form id ="dropzone"action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" novalidate>
        
    <div class="mb-5">
    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold text-center"> Titulo </label>
    <input id="titulo" name="descripcion" type="text" placeholder="Titulo de la publicacion" class="border p-3 w-full rounded-lg @error('name')
     border-red-500 @enderror" value={{old('titulo')}} >
    
    @error('titulo')
    
    <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{$message}}</p>
        
    @enderror
    </div>
    
    <div class="mb-5">
    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold text-center"> Descripcion </label>
    <textarea id="descripcion" name="descripcion"  placeholder="Descripcion de la publicacion" class="border p-3 w-full rounded-lg @error('descripcion')
    border-red-500 @enderror" >{{old('descripcion')}} </textarea>
    
    @error('descripcion')
    
    <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{$message}}</p>
        
    @enderror
    
    </div>


    <div class="mb-5">  

  <input name="imagen" type="hidden" value="{{old('imagen')}}"/>
  @error('imagen')
    
  <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{$message}}</p>
      
  @enderror 
  

    </div>
    <input type="submit" value="Crear Publicacion" class="bg-sky-600 hover:bg-sky-700 transition-colors curson-pointer uppercase font-bold w-full p-3 text-white rounded-lg"  />

@csrf
</form>
    </div>
</div>

@endsection