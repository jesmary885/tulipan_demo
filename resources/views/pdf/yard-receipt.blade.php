<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>

body{
    font-family: Arial;
    font-size:12px;
}

table{
    width:100%;
    border-collapse:collapse;
}

td,th{
    border:1px solid #444;
    padding:6px;
}

.header{
    text-align:center;
    margin-bottom:15px;
}

</style>

</head>

<body>

<div class="header">

<h3>RP TULIPAN TRANSPORT INC</h3>

8421 NW 70th ST<br>
MIAMI FLORIDA 33166<br>
786-768-4409

<h2>YARD SERVICE RECEIPT</h2>

</div>

<table>

<tr>
<td><b>BOOKING #</b></td>
<td>{{ $booking }}</td>

<td><b>ORDER #</b></td>
<td>{{ $order }}</td>
</tr>

<tr>
<td><b>CUSTOMER</b></td>
<td>{{ $customer }}</td>

<td><b>CONTAINER #</b></td>
<td>{{ $container }}</td>
</tr>

<tr>
<td><b>CUSTOMER PHONE</b></td>
<td>{{ $phone }}</td>

<td><b>SIZE</b></td>
<td>{{ $size }}</td>
</tr>

<tr>
<td><b>DATE IN</b></td>
<td>{{ $date_in }}</td>

<td><b>DATE OUT</b></td>
<td>{{ $date_out }}</td>
</tr>

</table>

<br>

<table>

<tr>
<th>PICKUP ADDRESS</th>
<th>DELIVERY ADDRESS</th>
</tr>

<tr>
<td>{{ $pickup }}</td>
<td>{{ $delivery }}</td>
</tr>

</table>

<br>

<table>

<tr>
<th>YARD SERVICES</th>
<th>STORAGE</th>
<th>TRANSPORT</th>
<th>TOTAL</th>
</tr>

<tr>
<td>${{ $yard_fee }}</td>
<td>${{ $storage_fee }}</td>
<td>${{ $transport }}</td>
<td>${{ $total }}</td>
</tr>

</table>

<br>

<b>INSPECTION</b>

<table>

<tr>
<td>Doors open/close correctly</td>
<td></td>
</tr>

<tr>
<td>No holes in floor</td>
<td></td>
</tr>

<tr>
<td>No holes in container</td>
<td></td>
</tr>

<tr>
<td>Seals and gaskets ok</td>
<td></td>
</tr>

</table>

<br>

<b>NOTES</b>

<table>
<tr>
<td style="height:60px">{{ $notes }}</td>
</tr>
</table>

</body>
</html>