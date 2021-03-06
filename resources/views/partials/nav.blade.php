<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="\images\favicon.png" alt="logo de batoilogic">
          <img class="hidden lg:block h-7 w-auto bg-white" src="\images\logo.png" alt="logo de batoilogic">
        </div>
          <div class="flex space-x-4">
            <br>
            <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
            <a href="/proveedores" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Proveedores</a>
            <a href="/productos" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Productos</a>
            <a href="/pedidos" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pedidos</a>
          </div>
      </div>
    <!-- Con este boton accederemos al perfil de usuario (del que esta conectado), si no estamos conectados, aparecerá un botón de login -->
    
    @if(auth()->check())
    <?php $user = auth()->user(); ?>
            <p class="text-white">Bienvenid@, {{ $user->name }}</p>
      <div class="desplegable absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        
        <a href="/usuario/{{auth()->user()->id}}" class="p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-white">
          <!-- Heroicon user-circle -->
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>

            <form action="logout" method="POST" class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0" role="menuitem">
              @csrf
              @method('Post')
              <input type="submit" value="Logout" class="object-right bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-white">
              </form>
    
      @endif
      <!-- Seccion del boton de login, solo sería visible en caso de que no estemos conectados -->
      @if(!auth()->check())
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <a class="object-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="login">
                  Login
              </a>
        </div>
      @endif
      @if (auth()->check())
        @if (auth()->user()->role === 'dealer')
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <a class="object-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/pedidos/albaran">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
              </svg>
          </a>
        </div>
        @endif
      @endif
    </div>
  </div>
</nav>
<style>

  .desplegable{
    position:relative;
    display: inline-block;
  }

  .dropdown-content {
    display:none;
    position:absolute;
  }

  .dropdown-content a{
    padding:12px 16px;
    text-decoration:none;
    display:block;
  }

  .dropdown-content a:hover{background-color: #f1f1f1}

  .desplegable:hover .dropdown-content{
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
</style>
