
<div>



<div class="bg-gray-100 min-h-screen p-8">

<!-- HEADER -->

<div class="flex justify-between items-center mb-8">

<div>
<h1 class="text-3xl font-bold text-gray-800">
Empleados
</h1>
<p class="text-gray-500">
Gestión del personal de la empresa
</p>
</div>

<button onclick="openCreate()"
class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg shadow-sm font-medium">
+ Nuevo empleado
</button>

</div>



<!-- STATS -->

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">Total empleados</p>
<p class="text-2xl font-bold text-gray-800">18</p>
</div>

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">Conductores</p>
<p class="text-2xl font-bold text-blue-600">6</p>
</div>

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">Administrativos</p>
<p class="text-2xl font-bold text-green-600">4</p>
</div>

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">Mecánicos</p>
<p class="text-2xl font-bold text-purple-600">3</p>
</div>

</div>



<!-- BUSCADOR -->

<div class="bg-white p-4 rounded-xl shadow-sm mb-6">

<input
type="text"
placeholder="Buscar empleado..."
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 outline-none">

</div>



<!-- TABLA -->

<div class="bg-white rounded-xl shadow-sm overflow-hidden">

<table class="w-full">

<thead class="bg-gray-50 border-b">

<tr class="text-left text-sm text-gray-500">

<th class="p-4">Empleado</th>
<th class="p-4">Tipo</th>
<th class="p-4">Teléfono</th>
<th class="p-4">Correo</th>
<th class="p-4 text-right">Acciones</th>

</tr>

</thead>


<tbody class="divide-y">

<tr class="hover:bg-gray-50">

<td class="p-4 flex items-center gap-3">

<div class="w-10 h-10 rounded-full bg-indigo-500 text-white flex items-center justify-center font-bold">
CM
</div>

<div>
<p class="font-semibold text-gray-800">Carlos Mendoza</p>
<p class="text-xs text-gray-500">ID: EMP001</p>
</div>

</td>

<td class="p-4">

<span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700">
Conductor
</span>

</td>

<td class="p-4 text-gray-600">
+507 6234-1123
</td>

<td class="p-4 text-gray-600">
carlos@empresa.com
</td>

<td class="p-4 text-right">

<button onclick="openEdit()"
class="text-indigo-600 hover:text-indigo-800 font-medium">
Editar
</button>

</td>

</tr>



<tr class="hover:bg-gray-50">

<td class="p-4 flex items-center gap-3">

<div class="w-10 h-10 rounded-full bg-green-500 text-white flex items-center justify-center font-bold">
AR
</div>

<div>
<p class="font-semibold text-gray-800">Ana Rodríguez</p>
<p class="text-xs text-gray-500">ID: EMP002</p>
</div>

</td>

<td class="p-4">

<span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
Administrador
</span>

</td>

<td class="p-4 text-gray-600">
+507 6455-9981
</td>

<td class="p-4 text-gray-600">
ana@empresa.com
</td>

<td class="p-4 text-right">

<button onclick="openEdit()"
class="text-indigo-600 hover:text-indigo-800 font-medium">
Editar
</button>

</td>

</tr>



<tr class="hover:bg-gray-50">

<td class="p-4 flex items-center gap-3">

<div class="w-10 h-10 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold">
LC
</div>

<div>
<p class="font-semibold text-gray-800">Luis Castillo</p>
<p class="text-xs text-gray-500">ID: EMP003</p>
</div>

</td>

<td class="p-4">

<span class="px-3 py-1 text-xs rounded-full bg-purple-100 text-purple-700">
Mecánico
</span>

</td>

<td class="p-4 text-gray-600">
+507 6554-8821
</td>

<td class="p-4 text-gray-600">
luis@empresa.com
</td>

<td class="p-4 text-right">

<button onclick="openEdit()"
class="text-indigo-600 hover:text-indigo-800 font-medium">
Editar
</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>



<!-- MODAL -->

<div id="modalEmpleado"
class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center p-6">

<div class="bg-white rounded-xl shadow-xl w-full max-w-xl p-7">

<div class="flex justify-between items-center mb-6">

<h2 class="text-xl font-bold text-gray-800">
Empleado
</h2>

<button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
✕
</button>

</div>


<form class="space-y-4">

<div class="grid grid-cols-2 gap-4">

<div>
<label class="text-sm text-gray-500">Nombre</label>
<input class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500">
</div>

<div>
<label class="text-sm text-gray-500">Tipo de empleado</label>

<select class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500">

<option>Conductor</option>
<option>Administrador</option>
<option>Secretario</option>
<option>Mecánico</option>

</select>

</div>

<div>
<label class="text-sm text-gray-500">Teléfono</label>
<input class="w-full border rounded-lg px-3 py-2">
</div>

<div>
<label class="text-sm text-gray-500">Correo</label>
<input class="w-full border rounded-lg px-3 py-2">
</div>

</div>


<div class="flex justify-end gap-3 pt-4">

<button type="button"
onclick="closeModal()"
class="px-4 py-2 border rounded-lg">
Cancelar
</button>

<button class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
Guardar
</button>

</div>

</form>

</div>

</div>



<script>

function openCreate(){
document.getElementById('modalEmpleado').classList.remove('hidden')
}

function openEdit(){
document.getElementById('modalEmpleado').classList.remove('hidden')
}

function closeModal(){
document.getElementById('modalEmpleado').classList.add('hidden')
}

</script>




</div>


