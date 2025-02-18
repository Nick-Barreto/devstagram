
@extends('layouts.app')

@section('titulo')
     Registrate en DevStagram
@endsection


@section('contenido')
     <div class="md:flex justify-center">
        <div class="md:w-1/2">
            <p>Imagen aqui</p>        
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl ">
            <form>
                <div class="mb'5">
                    <label for="name" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                       id = "nanme"
                       name = "name"
                       type="text"
                       placeholder=" Tu Nombre"
                       class="border p-3 w-full rounded-lg "                    
                    />
                </div>
                <div class="mb-5">
                    <label for="username" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input
                       id = "usernanme"
                       name = "username"
                       type="text"
                       placeholder=" Tu Nombre De Usuario"
                       class="border p-3 w-full rounded-lg "                    
                    />
                </div>
                <div class="mb-5">
                    <label for="email" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                       id = "email"
                       name = "email"
                       type="email"
                       placeholder=" Tu Email de Registro"
                       class="border p-3 w-full rounded-lg "                    
                    />
                </div>
                <div class="mb-5">
                    <label for="password" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input
                       id = "password"
                       name = "password"
                       type="password"
                       placeholder=" Password de Registro"
                       class="border p-3 w-full rounded-lg "                    
                    />
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input
                       id = "password_confirmation"
                       name = "password_confirmation"
                       type="password"
                       placeholder=" Repite tu Password"
                       class="border p-3 w-full rounded-lg "                    
                    />
                </div>
                <input 
                type="submit"
                value="Crear Cuenta"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
                w-full p-3 text-white rounded-lg"/>
                
            </form>

        </div>

     </div>
    
@endsection