<div>


<div class="bg-gray-100 min-h-screen p-8">

<!-- HEADER -->

<div class="flex justify-between items-center mb-8">

<div>
<h1 class="text-3xl font-bold text-gray-800">
Inventario de Contenedores
</h1>
<p class="text-gray-500">
Control de contenedores disponibles
</p>
</div>

<button onclick="openModal()"
class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg shadow">
+ Registrar contenedor
</button>

</div>


<!-- STATS -->

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">Total contenedores</p>
<p class="text-2xl font-bold">24</p>
</div>

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">20FT</p>
<p class="text-2xl font-bold text-blue-600">10</p>
</div>

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">40FT</p>
<p class="text-2xl font-bold text-green-600">11</p>
</div>

<div class="bg-white p-5 rounded-xl shadow-sm">
<p class="text-gray-500 text-sm">Vendidos</p>
<p class="text-2xl font-bold text-purple-600">3</p>
</div>

</div>



<!-- BUSCADOR -->

<div class="bg-white p-4 rounded-xl shadow-sm mb-6 ">

<input
type="text"
placeholder="Buscar por número de contenedor..."
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 outline-none">

</div>



<!-- TABLA -->

<div class="bg-white rounded-xl shadow-sm overflow-auto ">

<table class="w-full text-sm">

<thead class="bg-gray-50 border-b">

<tr class="text-left text-gray-600">

<th class="p-4">ID</th>
<th class="p-4">Fecha</th>
<th class="p-4">N° CONT</th>
<th class="p-4">Size</th>
<th class="p-4">Proveedor</th>
<th class="p-4">Precio Compra</th>
<th class="p-4">Salida</th>
<th class="p-4">Precio Venta</th>
<th class="p-4">Nota</th>
<th class="p-4"></th>

</tr>

</thead>


<tbody class="divide-y">


<tr class="hover:bg-gray-50">
<td class="p-4">253</td>
<td class="p-4">10/1/2025</td>
<td class="p-4 font-semibold">878179-0</td>
<td class="p-4">40FT</td>
<td class="p-4">CARU CONTAINER</td>
<td class="p-4">$1,825.00</td>
<td class="p-4 text-gray-500">—</td>
<td class="p-4">$0.00</td>
<td class="p-4 text-gray-400">—</td>

<td class="p-4">
<button onclick="openModal()"
class="text-indigo-600 hover:text-indigo-800">
Editar
</button>
</td>
</tr>


<tr class="hover:bg-gray-50">
<td class="p-4">196</td>
<td class="p-4">9/2/2025</td>
<td class="p-4 font-semibold">914960-4</td>
<td class="p-4">40FT</td>
<td class="p-4">CARU CONTAINER</td>
<td class="p-4">$1,675.00</td>
<td class="p-4 text-gray-500">—</td>
<td class="p-4">$0.00</td>
<td class="p-4 text-red-500 text-xs">
REFUSED - IN JAX YARD
</td>

<td class="p-4">
<button onclick="openModal()"
class="text-indigo-600 hover:text-indigo-800">
Editar
</button>
</td>
</tr>



<tr class="hover:bg-gray-50">
<td class="p-4">100</td>
<td class="p-4">6/2/2025</td>
<td class="p-4 font-semibold">779311-2</td>
<td class="p-4">40FT</td>
<td class="p-4">QUALITY</td>
<td class="p-4">$1,500.00</td>
<td class="p-4">—</td>
<td class="p-4">$0.00</td>
<td class="p-4 text-green-600 text-xs">
PAINTED
</td>

<td class="p-4">
<button onclick="openModal()"
class="text-indigo-600 hover:text-indigo-800">
Editar
</button>
</td>
</tr>


</tbody>

</table>

</div>

</div>



<!-- MODAL -->

<div id="modalContainer"
class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center p-6">

<div class="bg-white rounded-xl shadow-xl w-full max-w-2xl p-7">

<div class="flex justify-between mb-6">

<h2 class="text-xl font-bold">
Registrar Contenedor
</h2>

<button onclick="closeModal()" class="text-gray-400 hover:text-gray-700">
✕
</button>

</div>



<form class="grid grid-cols-2 gap-4">

<input class="border rounded-lg p-2" placeholder="Fecha">

<input class="border rounded-lg p-2" placeholder="Ciudad">

<input class="border rounded-lg p-2" placeholder="Número contenedor">

<select class="border rounded-lg p-2">
<option>20FT</option>
<option>40FT</option>
<option>20FT NEW</option>
</select>

<input class="border rounded-lg p-2" placeholder="Proveedor">

<input class="border rounded-lg p-2" placeholder="Teléfono">

<input class="border rounded-lg p-2" placeholder="Precio compra">

<input class="border rounded-lg p-2" placeholder="Precio venta">

<textarea class="border rounded-lg p-2 col-span-2"
placeholder="Notas"></textarea>


<div class="col-span-2 flex justify-end gap-3 mt-4">

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

function openModal(){
document.getElementById('modalContainer').classList.remove('hidden')
}

function closeModal(){
document.getElementById('modalContainer').classList.add('hidden')
}

</script>


</div>
