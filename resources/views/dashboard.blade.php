<x-app-layout>

<div class="max-w-7xl mx-auto px-6 py-12">



    <!-- KPIs -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Alquileres Pendientes -->
        <div class="bg-white rounded-2xl shadow-md p-6 border border-slate-200 hover:shadow-xl transition">
            <p class="text-sm text-slate-500">Alquileres Pendientes</p>
            <h2 class="text-3xl font-bold text-slate-800 mt-2">18</h2>
            <p class="text-xs text-amber-500 mt-1">Requieren atención</p>
        </div>

        <!-- Deliveries en Proceso -->
        <div class="bg-white rounded-2xl shadow-md p-6 border border-slate-200 hover:shadow-xl transition">
            <p class="text-sm text-slate-500">Deliveries en Proceso</p>
            <h2 class="text-3xl font-bold text-slate-800 mt-2">9</h2>
            <p class="text-xs text-blue-600 mt-1">Operaciones activas</p>
        </div>

        <!-- Contenedores Disponibles -->
        <div class="bg-white rounded-2xl shadow-md p-6 border border-slate-200 hover:shadow-xl transition">
            <p class="text-sm text-slate-500">Contenedores Disponibles</p>
            <h2 class="text-3xl font-bold text-slate-800 mt-2">124</h2>
            <p class="text-xs text-green-600 mt-1">Inventario operativo</p>
        </div>

        <!-- Equipos en Mantenimiento -->
        <div class="bg-white rounded-2xl shadow-md p-6 border border-slate-200 hover:shadow-xl transition">
            <p class="text-sm text-slate-500">Equipos en Mantenimiento</p>
            <h2 class="text-3xl font-bold text-slate-800 mt-2">5</h2>
            <p class="text-xs text-red-500 mt-1">No disponibles</p>
        </div>
    </div>

    <!-- PANEL DE INVENTARIO DETALLADO DINÁMICO -->
    {{-- <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-lg mb-6">
        <h3 class="text-2xl font-bold text-slate-800 mb-6">Inventario Detallado</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- CONTENEDORES -->
            <div class="bg-slate-50 rounded-xl p-6 shadow hover:shadow-md transition">
                <p class="text-slate-500 font-medium text-sm mb-2">Contenedores</p>
                <h2 class="text-2xl font-bold text-slate-800">36 / 160 ocupados</h2>
                <p class="text-xs text-slate-600 mb-3">124 disponibles</p>
                <div class="w-full bg-slate-200 rounded-full h-3 mb-3 overflow-hidden">
                    <div class="h-3 rounded-full transition-all duration-1000"
                         style="width: 22.5%; background-color:#3B82F6;"></div>
                </div>
                <ul class="text-xs text-slate-600 space-y-1">
                    <li>Alquiler #C102 – 3 días restantes</li>
                    <li>Alquiler #C103 – 1 día restante</li>
                    <li>Alquiler #C110 – 7 días restantes</li>
                </ul>
            </div>

            <!-- EQUIPOS -->
            <div class="bg-slate-50 rounded-xl p-6 shadow hover:shadow-md transition">
                <p class="text-slate-500 font-medium text-sm mb-2">Equipos</p>
                <h2 class="text-2xl font-bold text-slate-800">5 / 20 ocupados</h2>
                <p class="text-xs text-slate-600 mb-3">15 disponibles</p>
                <div class="w-full bg-slate-200 rounded-full h-3 mb-3 overflow-hidden">
                    <div class="h-3 rounded-full transition-all duration-1000"
                         style="width: 25%; background-color:#10B981;"></div>
                </div>
                <ul class="text-xs text-slate-600 space-y-1">
                    <li>Equipo #E55 – 2 días restantes</li>
                    <li>Equipo #E60 – 5 días restantes</li>
                    <li>Equipo #E61 – 1 día restante</li>
                </ul>
            </div>

            <!-- VEHÍCULOS / TRANSPORTE -->
            <div class="bg-slate-50 rounded-xl p-6 shadow hover:shadow-md transition">
                <p class="text-slate-500 font-medium text-sm mb-2">Vehículos / Transportes</p>
                <h2 class="text-2xl font-bold text-slate-800">8 / 25 ocupados</h2>
                <p class="text-xs text-slate-600 mb-3">17 disponibles</p>
                <div class="w-full bg-slate-200 rounded-full h-3 mb-3 overflow-hidden">
                    <div class="h-3 rounded-full transition-all duration-1000"
                         style="width: 32%; background-color:#F59E0B;"></div>
                </div>
                <ul class="text-xs text-slate-600 space-y-1">
                    <li>Vehículo #V21 – 1 día restante</li>
                    <li>Vehículo #V22 – 3 días restantes</li>
                    <li>Vehículo #V30 – 2 días restantes</li>
                </ul>
            </div>

        </div>
    </div> --}}



<!-- RESUMEN FINANCIERO -->
<div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-lg mb-6">
    <h3 class="text-2xl font-bold text-slate-800 mb-6">Resumen Financiero Mensual</h3>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- INGRESOS -->
        <div class="bg-green-50 rounded-xl p-6 shadow hover:shadow-md transition">
            <p class="text-sm text-green-700 font-semibold mb-2">Ingresos</p>
            <h2 class="text-3xl font-bold text-green-800">$ 42,350</h2>
            <p class="text-xs text-green-600 mt-1">Total de contratos cobrados este mes</p>
            <div class="w-full bg-green-200 rounded-full h-3 mt-3 overflow-hidden">
                <div class="h-3 rounded-full transition-all duration-1000" style="width: 75%; background-color:#10B981;"></div>
            </div>
        </div>

        <!-- EGRESOS -->
        <div class="bg-red-50 rounded-xl p-6 shadow hover:shadow-md transition">
            <p class="text-sm text-red-700 font-semibold mb-2">Egresos</p>
            <h2 class="text-3xl font-bold text-red-800">$ 18,420</h2>
            <p class="text-xs text-red-600 mt-1">Gastos operativos y mantenimiento</p>
            <div class="w-full bg-red-200 rounded-full h-3 mt-3 overflow-hidden">
                <div class="h-3 rounded-full transition-all duration-1000" style="width: 55%; background-color:#EF4444;"></div>
            </div>
        </div>

        <!-- BALANCE NETO -->
        <div class="bg-slate-50 rounded-xl p-6 shadow hover:shadow-md transition">
            <p class="text-sm text-slate-700 font-semibold mb-2">Balance Neto</p>
            <h2 class="text-3xl font-bold text-slate-800">$ 23,930</h2>
            <p class="text-xs text-slate-500 mt-1">Ingresos menos egresos</p>
            <div class="w-full bg-blue-200 rounded-full h-3 mt-3 overflow-hidden">
                <div class="h-3 rounded-full transition-all duration-1000" style="width: 65%; background-color:#3B82F6;"></div>
            </div>
        </div>

    </div>


</div>


    <!-- GRÁFICO DE ACTIVIDAD -->
    <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-sm mb-6">
        <h3 class="text-lg font-semibold text-slate-700 mb-6">
            Actividad Mensual
        </h3>
        <canvas id="activityChart" height="90"></canvas>
    </div>

    <!-- ÚLTIMAS OPERACIONES -->
    <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-sm">
        <h3 class="text-lg font-semibold text-slate-700 mb-6">
            Últimas Operaciones
        </h3>

        <div class="space-y-4 text-sm">
            <div class="flex justify-between border-b pb-3">
                <span>Alquiler #A1023</span>
                <span class="text-slate-500">Hace 2 horas</span>
            </div>
            <div class="flex justify-between border-b pb-3">
                <span>Delivery #D884</span>
                <span class="text-slate-500">Hace 4 horas</span>
            </div>
            <div class="flex justify-between border-b pb-3">
                <span>Mantenimiento Equipo #E55</span>
                <span class="text-slate-500">Ayer</span>
            </div>
            <div class="flex justify-between">
                <span>Alquiler #A1022</span>
                <span class="text-slate-500">Ayer</span>
            </div>
        </div>
    </div>

</div>


<script>
const ctx = document.getElementById('activityChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
        datasets: [{
            data: [12, 19, 15, 22, 30, 28],
            borderColor: '#334155',
            backgroundColor: 'transparent',
            tension: 0.4,
            borderWidth: 2,
            pointRadius: 0
        }]
    },
    options: {
        plugins: { legend: { display: false }},
        scales: {
            x: { grid: { display: false }},
            y: { grid: { color: '#e2e8f0' }}
        }
    }
});
</script>

<!-- SCRIPT DE EJEMPLO CON CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('financialChart').getContext('2d');
    const financialChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
            datasets: [
                {
                    label: 'Ingresos',
                    data: [10300, 11250, 9800, 10900],
                    borderColor: '#10B981',
                    backgroundColor: 'rgba(16,185,129,0.1)',
                    tension: 0.3,
                    fill: true
                },
                {
                    label: 'Egresos',
                    data: [4500, 4200, 5100, 4620],
                    borderColor: '#EF4444',
                    backgroundColor: 'rgba(239,68,68,0.1)',
                    tension: 0.3,
                    fill: true
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top', labels: { font: { size: 12 } } },
            },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 5000 } },
            }
        }
    });
</script>
</x-app-layout>
