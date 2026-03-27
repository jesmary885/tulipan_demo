<x-app-layout>

<div class="p-6 bg-gray-100 min-h-screen">

{{-- DASHBOARD FINANCIERO --}}
<div class="grid grid-cols-4 gap-6 mb-6">

<div class="bg-white p-4 rounded shadow">
<div class="text-gray-500 text-sm">TOTAL SALES</div>
<div class="text-2xl font-bold text-green-600">
${{ number_format($totalSales,2) }}
</div>
</div>

<div class="bg-white p-4 rounded shadow">
<div class="text-gray-500 text-sm">REMAINING</div>
<div class="text-2xl font-bold text-blue-600">
${{ number_format($remaining,2) }}
</div>
</div>

<div class="bg-white p-4 rounded shadow">
<div class="text-gray-500 text-sm">TOTAL STOCK</div>
<div class="text-2xl font-bold text-yellow-600">
{{ $stock }}
</div>
</div>

<div class="bg-white p-4 rounded shadow">
<div class="text-gray-500 text-sm">CONTAINERS SOLD</div>
<div class="text-2xl font-bold text-purple-600">
{{ $containersSold }}
</div>
</div>

</div>


{{-- BARRA DE PROGRESO VENTAS --}}
<div class="bg-white p-4 rounded shadow mb-6">

<div class="flex justify-between text-sm mb-2">
<span>Sales Progress</span>
<span>{{ $containersSold }} / {{ $containersAvailable }}</span>
</div>

<div class="w-full bg-gray-200 rounded h-3">

<div class="bg-green-500 h-3 rounded"
style="width: {{ ($containersSold/$containersAvailable)*100 }}%"></div>

</div>

</div>



<div class="grid grid-cols-12 gap-6">

{{-- FORM RELEASES --}}

<div class="col-span-4 bg-gray-700 text-white p-5 rounded shadow">

<h2 class="text-center font-bold mb-4 text-lg">FORM RELEASES</h2>

<div class="grid grid-cols-2 gap-2 text-sm">

<label>Date *</label>
<input type="date" class="text-black p-1 rounded">

<label>Type</label>
<select class="text-black p-1 rounded">
<option>REFERS</option>
<option>USED</option>
<option>NEW</option>
</select>

<label>Measures</label>
<select class="text-black p-1 rounded">
<option>20FT</option>
<option>40FT</option>
<option>45FT</option>
</select>

<label>City</label>
<input class="text-black p-1 rounded">

<label>Seller</label>
<input class="text-black p-1 rounded">

<label>Depot</label>
<input class="text-black p-1 rounded">

<label>No Releases *</label>
<input class="text-black p-1 rounded">

<label>Depot Address</label>
<input class="text-black p-1 rounded">

<label>Cantidad</label>
<input type="number" class="text-black p-1 rounded">

<label>Price</label>
<input type="number" class="text-black p-1 rounded">

<label>Total</label>
<input class="text-black p-1 bg-gray-200 rounded" value="$0.00" readonly>

</div>

<div class="flex gap-3 mt-6">

<button class="bg-red-600 px-4 py-2 rounded shadow hover:bg-red-700">
DELETE
</button>

<button class="bg-green-600 px-4 py-2 rounded shadow hover:bg-green-700">
NEW
</button>

<button class="bg-blue-600 px-4 py-2 rounded shadow hover:bg-blue-700">
SAVE
</button>

</div>

</div>



{{-- TABLA + FILTROS --}}

<div class="col-span-8 bg-white p-5 rounded shadow">

<h2 class="text-center font-bold mb-4">SUPPORT FILTER</h2>

<div class="grid grid-cols-6 gap-2 mb-4">

<input type="date" class="border p-1 rounded">
<input type="date" class="border p-1 rounded">

<input class="border p-1 rounded" placeholder="Seller">
<input class="border p-1 rounded" placeholder="Release">

<input class="border p-1 rounded" value="MIAMI">

<label class="flex items-center gap-2">
<input type="checkbox" checked>
<span>Active</span>
</label>

</div>



<div class="overflow-x-auto">

<table class="w-full text-sm border">

<thead class="bg-orange-300">

<tr>

<th class="border p-2">ID</th>
<th class="border p-2">DATE</th>
<th class="border p-2">TYPE</th>
<th class="border p-2">MEASURES</th>
<th class="border p-2">SELLER</th>
<th class="border p-2">DEPOT</th>
<th class="border p-2">RELEASE</th>
<th class="border p-2">PRICE</th>
<th class="border p-2">QTY</th>
<th class="border p-2">INV</th>
<th class="border p-2">PICKUP</th>
<th class="border p-2">STOCK</th>
<th class="border p-2">DATE PICKUP</th>
<th class="border p-2">STATUS</th>

</tr>

</thead>

<tbody>

@foreach($releases as $r)

<tr class="text-center hover:bg-gray-100">

<td class="border">{{ $r['id'] }}</td>
<td class="border">{{ $r['date'] }}</td>
<td class="border">{{ $r['type'] }}</td>
<td class="border">{{ $r['measures'] }}</td>
<td class="border">{{ $r['seller'] }}</td>
<td class="border">{{ $r['depot'] }}</td>
<td class="border">{{ $r['release'] }}</td>

<td class="border">${{ number_format($r['price'],2) }}</td>

<td class="border">{{ $r['qty'] }}</td>
<td class="border">{{ $r['inv_inicial'] }}</td>
<td class="border">{{ $r['pickup'] }}</td>

<td class="border font-bold">

@if($r['stock'] <= 2)
<span class="text-red-600">{{ $r['stock'] }}</span>
@else
<span class="text-green-600">{{ $r['stock'] }}</span>
@endif

</td>

<td class="border">{{ $r['pickup_date'] }}</td>

<td class="border">

@if($r['stock'] == 0)

<span class="bg-red-500 text-white px-2 py-1 rounded text-xs">
SOLD OUT
</span>

@elseif($r['stock'] <= 2)

<span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs">
LOW STOCK
</span>

@else

<span class="bg-green-600 text-white px-2 py-1 rounded text-xs">
AVAILABLE
</span>

@endif

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</div>

</div>

    </x-app-layout>