
<nav class="bg-slate-950 border-b border-slate-800 relative z-40"
     x-data="{ mobileOpen:false }">

    <div class="container mx-auto px-6">

        <div class="flex items-center justify-between  h-24  ">

            <!-- Logo -->

                    <!-- Logo -->
            <div  class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ Storage::url('logo/logo.png') }}" alt="" class="block h-28  w-36">
                    </a>
            </div>




            <!-- MENU CENTRADO DESKTOP -->
            <div class="hidden md:flex flex-1 justify-center items-center space-x-10">

                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                   class="text-lg font-semibold transition
                   {{ request()->routeIs('dashboard')
                        ? 'text-white border-b-2 border-blue-500 pb-1'
                        : 'text-slate-300 hover:text-white' }}">
                    Dashboard
                </a>

                <!-- Administración -->
                <div x-data="{ open:false }" class="relative">

                    <button @click="open=!open"
                            class="text-lg font-semibold flex items-center space-x-1 transition
                            {{ request()->routeIs('admin.*')
                                ? 'text-white border-b-2 border-blue-500 pb-1'
                                : 'text-slate-300 hover:text-white' }}">
                        <span>Administración</span>

                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- SUBMENU DESKTOP -->
                    <div x-show="open"
                        x-transition.opacity.scale
                        @click.away="open=false"
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl py-3 text-sm border border-slate-200 z-50">

                       <a href="{{route('admin.empleados')}}"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Empleados
                        </a>
                       
                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Usuarios
                        </a>

                        

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Drivers
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Clientes
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Compañías
                        </a>

                      

                    </div>
                </div>

                <!-- Inventario -->
                <div x-data="{ open:false }" class="relative">

                    <button @click="open=!open"
                            class="text-lg font-semibold flex items-center space-x-1 transition
                            {{ request()->routeIs('inv.*')
                                ? 'text-white border-b-2 border-blue-500 pb-1'
                                : 'text-slate-300 hover:text-white' }}">
                        <span>Inventario</span>

                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- SUBMENU DESKTOP -->
                    <div x-show="open"
                        x-transition.opacity.scale
                        @click.away="open=false"
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl py-3 text-sm border border-slate-200 z-50">

                        <a href="{{ route('inv.contenedores') }}"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Contenedores
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Vehiculos o transportes
                        </a>

                    </div>
                </div>

                     <!-- Operaciones -->
                <div x-data="{ open:false }" class="relative">

                    <button @click="open=!open"
                            class="text-lg font-semibold flex items-center space-x-1 transition
                            {{ request()->routeIs('deliveries.*')
                                ? 'text-white border-b-2 border-blue-500 pb-1'
                                : 'text-slate-300 hover:text-white' }}">
                        <span>0peraciones</span>

                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- SUBMENU DESKTOP -->
                    <div x-show="open"
                        x-transition.opacity.scale
                        @click.away="open=false"
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl py-3 text-sm border border-slate-200 z-50">

                        <a href="{{ route('deliveries.index') }}"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Deliveries
                        </a>

                        <a href="{{ route('deliveries.calendar')}}"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Delivery Calendar
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Yard
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Releases
                        </a>

                    </div>
                </div>


                      <!-- Finanzass -->
                <div x-data="{ open:false }" class="relative">

                    <button @click="open=!open"
                            class="text-lg font-semibold flex items-center space-x-1 transition
                            {{ request()->routeIs('finanzas.*')
                                ? 'text-white border-b-2 border-blue-500 pb-1'
                                : 'text-slate-300 hover:text-white' }}">
                        <span>Finanzas</span>

                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- SUBMENU DESKTOP -->
                    <div x-show="open"
                        x-transition.opacity.scale
                        @click.away="open=false"
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl py-3 text-sm border border-slate-200 z-50">

                        <a href="{{ route('finanzas.invoice') }}"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Invoices
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Payments
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Expenses
                        </a>


                    </div>
                </div>


                {{-- <a href="{{ route('repartos.registro') }}"
                   class="text-lg font-semibold transition
                   {{ request()->routeIs('repartos.registro')
                        ? 'text-white border-b-2 border-blue-500 pb-1'
                        : 'text-slate-300 hover:text-white' }}">
                    Repartos o entregas
                </a> --}}

    


                <!-- Delivery -->
                {{-- <div x-data="{ open:false }" class="relative">

                    <a href="{{ route('admin.usuarios') }}
                            class="text-lg font-semibold flex items-center space-x-1 transition
                            {{ request()->routeIs('admin.*')
                                ? 'text-white border-b-2 border-blue-500 pb-1'
                                : 'text-slate-300 hover:text-white' }}">
                        <span>Repartos o entregas</span>

                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>

                 
                </div> --}}

                <!-- Alquiler -->
                {{-- <div x-data="{ open:false }" class="relative">

                    <button @click="open=!open"
                            class="text-lg font-semibold flex items-center space-x-1 transition
                            {{ request()->routeIs('admin.*')
                                ? 'text-white border-b-2 border-blue-500 pb-1'
                                : 'text-slate-300 hover:text-white' }}">
                        <span>Alquiler</span>

                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- SUBMENU DESKTOP -->
                    <div x-show="open"
                        x-transition.opacity.scale
                        @click.away="open=false"
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl py-3 text-sm border border-slate-200 z-50">

                        <a href="{{ route('admin.usuarios') }}"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Registro
                        </a>

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Movimientos y seguimiento
                        </a>

           

    

                    </div>
                </div> --}}

                <!-- Reportes -->

                   <!-- Reportes -->
                <div x-data="{ open:false }" class="relative">

                    <button @click="open=!open"
                            class="text-lg font-semibold flex items-center space-x-1 transition
                            {{ request()->routeIs('admin.*')
                                ? 'text-white border-b-2 border-blue-500 pb-1'
                                : 'text-slate-300 hover:text-white' }}">
                        <span>Reportes</span>

                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- SUBMENU DESKTOP -->
                    <div x-show="open"
                        x-transition.opacity.scale
                        @click.away="open=false"
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl py-3 text-sm border border-slate-200 z-50">

                        <a href="{{ route('reportes.drivers') }}"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                             Drivers 
                        </a>
                        
                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Operations 
                        </a>

                        

                         <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                             Revenue 
                        </a>
              
                         <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Expense 
                        </a>

                    </div>
                </div>
                {{-- <a href="{{ route('reportes') }}"
                    class="text-lg font-semibold transition
                   {{ request()->routeIs('reportes')
                        ? 'text-white border-b-2 border-blue-500 pb-1'
                        : 'text-slate-300 hover:text-white' }}">
                    Reportes
                </a> --}}

            </div>

            <!-- PERFIL -->
            <div class="hidden md:flex items-center">
                <div x-data="{ open:false }" class="relative">

                    <button @click="open=!open"
                            class="bg-slate-800 px-4 py-2 rounded-lg
                                   text-white font-semibold
                                   hover:bg-slate-700 transition">
                        Perfil
                    </button>

                    <div x-cloak
                         x-show="open"
                         x-transition.origin.top
                         @click.away="open=false"
                         class="absolute right-0 mt-3 w-44 bg-white
                                rounded-xl shadow-xl py-2 text-sm
                                border border-slate-200 z-50">

                        <a href="#"
                           class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600">
                            Mi Perfil
                        </a>

                        <a href="{{ route('logout') }}"
                           class="block px-4 py-2 hover:bg-red-50 hover:text-red-600">
                            Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>

            <!-- BOTON MOVIL -->
            <div class="md:hidden">
                <button @click="mobileOpen=!mobileOpen"
                        class="text-slate-300 text-2xl">
                    ☰
                </button>
            </div>

        </div>

        <!-- MENU RESPONSIVE -->
        <div x-cloak
             x-show="mobileOpen"
             x-transition
             class="md:hidden py-4 space-y-4">

            <a href="#"
               class="block font-semibold
               {{ request()->routeIs('dashboard')
                    ? 'text-white'
                    : 'text-slate-300 hover:text-white' }}">
                Dashboard
            </a>

            <!-- Submenu móvil -->
            <div x-data="{ open:false }">

                <button @click="open=!open"
                        class="w-full text-left font-semibold
                        {{ request()->routeIs('admin.*')
                            ? 'text-white'
                            : 'text-slate-300 hover:text-white' }}">
                    Administración
                </button>

                <div x-cloak x-show="open" x-transition
                     class="pl-4 mt-2 space-y-2">

                     <a href="{{route('admin.empleados')}}"
                       class="block text-slate-400 hover:text-white">
                        Empleados
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Usuarios
                    </a>

                    

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Clientes
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Compañías
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Configuración
                    </a>

                </div>
            </div>

            <div x-data="{ open:false }">

                <button @click="open=!open"
                        class="w-full text-left font-semibold
                        {{ request()->routeIs('admin.*')
                            ? 'text-white'
                            : 'text-slate-300 hover:text-white' }}">
                    Inventario
                </button>

                <div x-cloak x-show="open" x-transition
                     class="pl-4 mt-2 space-y-2">

                    <a href="{{ route('inv.contenedores') }}"
                       class="block text-slate-400 hover:text-white">
                        Contenedores
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Vehiculos o transportes
                    </a>

              

                </div>
            </div>

             <div x-data="{ open:false }">

                <button @click="open=!open"
                        class="w-full text-left font-semibold
                        {{ request()->routeIs('admin.*')
                            ? 'text-white'
                            : 'text-slate-300 hover:text-white' }}">
                    Operaciones
                </button>

                <div x-cloak x-show="open" x-transition
                     class="pl-4 mt-2 space-y-2">

                     <a href="{{ route('deliveries.index') }}"
                       class="block text-slate-400 hover:text-white">
                     Deliveries
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Delivery Calendar
                    </a>

                    

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                         Yard
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                       Releases
                    </a>

              

                </div>
            </div>

             <div x-data="{ open:false }">

                <button @click="open=!open"
                        class="w-full text-left font-semibold
                        {{ request()->routeIs('admin.*')
                            ? 'text-white'
                            : 'text-slate-300 hover:text-white' }}">
                    Finanzas
                </button>

                <div x-cloak x-show="open" x-transition
                     class="pl-4 mt-2 space-y-2">

                     <a href="{{ route('finanzas.invoice') }}"
                       class="block text-slate-400 hover:text-white">
                     Invoices
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Payments
                    </a>

                    

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Expenses
                    </a>

             

              

                </div>
            </div>

             <div x-data="{ open:false }">

                <button @click="open=!open"
                        class="w-full text-left font-semibold
                        {{ request()->routeIs('admin.*')
                            ? 'text-white'
                            : 'text-slate-300 hover:text-white' }}">
                    Reportes
                </button>

                <div x-cloak x-show="open" x-transition
                     class="pl-4 mt-2 space-y-2">

                     <a href="{{ route('reportes.drivers') }}"
                       class="block text-slate-400 hover:text-white">
                      Drivers 
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Operations 
                    </a>

                    

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Revenue 
                    </a>

                    <a href="#"
                       class="block text-slate-400 hover:text-white">
                        Expense 
                    </a>

                </div>
            </div>

    

        </div>

    </div>
</nav>