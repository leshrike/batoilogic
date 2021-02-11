<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        
        <div class="flex-shrink-0 flex items-center">
        <!-- Icono del nav si el display correspongde con  "lg" -->
        
          <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Batoilogic"> 
        
        <!-- Icono del nav si el desplay es chiquito -->  
          <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Batoilogic">
        </div>
          <div class="flex space-x-4">
            <a href="/" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
            <a href="proveedores" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Proveedores</a>
            <a href="productos" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Productos</a>
            <a href="pedidos" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pedidos</a>
          </div>
      </div>
      <!-- Con este boton accederemos al perfil de usuario (del que esta conectado), si no estamos conectados, aparecerá un botón de login -->

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
          
          <!-- Heroicon user-circle -->
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
          </svg>
        
        </button>
      </div>
      <!-- Seccion del boton de login, solo sería visible en caso de que no estemos conectados -->
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

            <a class="object-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="">
                Login
            </a> 

      </div>
    </div>
  </div>
</nav>