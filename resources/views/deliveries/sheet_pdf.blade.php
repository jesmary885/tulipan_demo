<!DOCTYPE html>
<html>
<head>
<style>
body { font-family: Arial; font-size:12px; }
.header { text-align:center; font-size:20px; font-weight:bold; margin-bottom:20px; }
.box { border:2px solid #24364a; padding:6px; margin-bottom:10px; }
table { width:100%; border-collapse:collapse; }
td { border:1px solid #000; padding:6px; }
.label { font-weight:bold; }
.notes { background:#f3c7a5; padding:8px; border:1px solid #000; }
</style>
</head>
<body>

<div class="header">
RP TULIPAN TRANSPORT
</div>

<table>
<tr>
<td class="label">RELEASE #</td>
<td>{{ $delivery['container'] }}</td>
<td class="label">ORDER #</td>
<td>{{ $delivery['id'] }}</td>
</tr>

<tr>
<td class="label">DRIVER NAME</td>
<td>{{ $delivery['driver'] }}</td>
<td class="label">CONTAINER</td>
<td>{{ $delivery['container'] }}</td>
</tr>

<tr>
<td class="label">CUSTOMER PHONE</td>
<td>{{ $delivery['phone'] }}</td>
<td class="label">DELIVERY DATE</td>
<td>{{ $delivery['date'] }}</td>
</tr>

<tr>
<td class="label">CITY</td>
<td>{{ $delivery['city'] }}</td>
<td class="label">MILES</td>
<td>{{ $delivery['miles'] }}</td>
</tr>

<tr>
<td class="label">PICK UP ADDRESS</td>
<td colspan="3">{{ $delivery['pickup'] }}</td>
</tr>

<tr>
<td class="label">DELIVERY</td>
<td colspan="3">{{ $delivery['delivery'] }}</td>
</tr>
</table>

<br>

<table>
<tr><td>Doors can open and close correctly</td><td width="60"></td></tr>
<tr><td>Handle bars not damaged</td><td></td></tr>
<tr><td>No holes in floor</td><td></td></tr>
<tr><td>No holes in container</td><td></td></tr>
<tr><td>Seals and gaskets OK</td><td></td></tr>
</table>

<br>
<div class="notes">
<b>NOTES:</b>
<ul>
<li>Inspect container and send pictures</li>
<li>Send outgate receipt from depot when loaded</li>
<li>Call customer and confirm ETA</li>
</ul>
</div>

<br><br>
<table>
<tr>
<td>
FOR DELIVERING CARRIER:  
THIS EQUIPMENT WAS DELIVERED IN SOUND CONDITION
<br><br><br>
BY ______________________
</td>
<td>
FOR RECEIVING PARTY:  
THIS EQUIPMENT WAS RECEIVED IN SOUND CONDITION
<br><br><br>
BY ______________________
</td>
</tr>
</table>

</body>
</html>