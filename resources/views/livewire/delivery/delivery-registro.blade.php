<div>
<div x-data="{ openModal:false }" class="min-h-screen bg-gray-100 p-8">

<div class="max-w-7xl mx-auto">

<!-- HEADER -->

<div class="flex justify-between items-center mb-8">

<div>
<h1 class="text-2xl font-bold text-gray-800">
Delivery Management
</h1>
<p class="text-gray-500 text-sm">
Dispatch & delivery tracking
</p>
</div>

<button
@click="openModal=true"
class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg shadow">

+ New Delivery

</button>

</div>


<!-- KPI CARDS -->

<div class="grid grid-cols-4 gap-6 mb-8">

<div class="bg-white p-5 rounded-xl shadow">
<p class="text-gray-500 text-sm">Pending</p>
<p class="text-2xl font-bold text-yellow-600">12</p>
</div>

<div class="bg-white p-5 rounded-xl shadow">
<p class="text-gray-500 text-sm">In Transit</p>
<p class="text-2xl font-bold text-blue-600">8</p>
</div>

<div class="bg-white p-5 rounded-xl shadow">
<p class="text-gray-500 text-sm">Completed</p>
<p class="text-2xl font-bold text-green-600">34</p>
</div>

<div class="bg-white p-5 rounded-xl shadow">
<p class="text-gray-500 text-sm">Problems</p>
<p class="text-2xl font-bold text-red-600">2</p>
</div>

</div>


<!-- SEARCH -->

<div class="bg-white p-4 rounded-xl shadow mb-6">

<input
type="text"
placeholder="Search by driver, city, container, order #..."
class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-200">

</div>


<!-- TABLE -->

<div class="bg-white rounded-xl shadow overflow-x-auto">

<table class="min-w-full text-sm">

<thead class="bg-gray-50 text-gray-600 uppercase text-xs">

<tr>

<th class="px-6 py-3 text-left">ID</th>

<th class="px-6 py-3 text-left">Date</th>

<th class="px-6 py-3 text-left">Driver</th>

<th class="px-6 py-3 text-left">City</th>

<th class="px-6 py-3 text-left">Container</th>

<th class="px-6 py-3 text-left">Miles</th>

<th class="px-6 py-3 text-left">Customer</th>

<th class="px-6 py-3 text-left">Rate</th>

<th class="px-6 py-3 text-left">Status</th>

<th class="px-6 py-3 text-right">Actions</th>

</tr>

</thead>


<tbody class="divide-y">

<tr class="hover:bg-gray-50">

<td class="px-6 py-4 font-semibold">5056</td>
<td class="px-6 py-4">09/10/2025</td>
<td class="px-6 py-4">Travis J</td>
<td class="px-6 py-4">Savannah</td>
<td class="px-6 py-4">318362-6</td>
<td class="px-6 py-4">60</td>
<td class="px-6 py-4">RP Customer</td>
<td class="px-6 py-4">$200</td>

<td class="px-6 py-4">

<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">
Pending
</span>

</td>

<td class="px-6 py-4 text-right space-x-3">

<button class="text-indigo-600 hover:underline">
View
</button>

<button class="text-green-600 hover:underline">
Edit
</button>

<button class="text-red-600 hover:underline">
PDF
</button>

</td>

</tr>



<tr class="hover:bg-gray-50">

<td class="px-6 py-4 font-semibold">5058</td>
<td class="px-6 py-4">09/11/2025</td>
<td class="px-6 py-4">Andres</td>
<td class="px-6 py-4">Newark</td>
<td class="px-6 py-4">50028111</td>
<td class="px-6 py-4">193</td>
<td class="px-6 py-4">Arthur</td>
<td class="px-6 py-4">$350</td>

<td class="px-6 py-4">

<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
Completed
</span>

</td>

<td class="px-6 py-4 text-right space-x-3">

<button class="text-indigo-600 hover:underline">
View
</button>

<button class="text-green-600 hover:underline">
Edit
</button>

<button class="text-red-600 hover:underline">
PDF
</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>



<!-- MODAL NEW DELIVERY -->

<div
x-show="openModal"
x-transition
class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center">

<div class="bg-white rounded-xl shadow-xl w-2/3 p-8">

<div class="flex justify-between items-center mb-6">

<h2 class="text-xl font-bold">
Create New Delivery
</h2>

<button
@click="openModal=false"
class="text-gray-500 hover:text-black">
✕
</button>

</div>


<form class="grid grid-cols-2 gap-4">

<input class="border rounded p-2" placeholder="Driver Name">
<input class="border rounded p-2" placeholder="Container Number">
<input class="border rounded p-2" placeholder="Customer Phone">
<input class="border rounded p-2" type="date">
<input class="border rounded p-2 col-span-2" placeholder="Pick Up Address">
<input class="border rounded p-2 col-span-2" placeholder="Delivery Address">
<input class="border rounded p-2" placeholder="Miles">
<input class="border rounded p-2" placeholder="Rate">

<select class="border rounded p-2">
<option>Status</option>
<option>Pending</option>
<option>In Transit</option>
<option>Completed</option>
</select>

</form>


<div class="flex justify-end mt-6 gap-3">

<button
@click="openModal=false"
class="bg-gray-500 text-white px-4 py-2 rounded">
Cancel
</button>

<button
class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">
Save Delivery
</button>

</div>

</div>

</div>

</div>
</div>
