
<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<div x-data="calendarApp()" x-init="init()" class="min-h-screen bg-gray-100 p-8">

<div class="max-w-7xl mx-auto">

<div class="flex justify-between mb-6">

<div>
<h1 class="text-2xl font-bold text-gray-800">Delivery Calendar</h1>
<p class="text-gray-500 text-sm">Dispatch planning board</p>
</div>

<a href="{{ route('deliveries.index') }}"
class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow">
+ New Delivery
</a>

</div>

<div class="bg-white rounded-xl shadow p-6">

<div id="calendar"></div>

</div>

</div>

<!-- MODAL EVENT -->

<div
x-show="openModal"
x-transition
style="z-index:9999"
class="fixed inset-0 flex items-center justify-center bg-black/40 backdrop-blur"
@click.self="openModal=false"
>

<div class="bg-white w-1/3 rounded-xl shadow-xl p-6 relative z-50">

<div class="flex justify-between mb-4">

<h2 class="text-lg font-bold">
Delivery Details
</h2>

<button @click="openModal=false" class="text-gray-500 hover:text-black text-xl">✕</button>

</div>

<div class="space-y-2">

<p><b>ID:</b> <span x-text="event.id"></span></p>
<p><b>Route:</b> <span x-text="event.title"></span></p>
<p><b>Date:</b> <span x-text="event.date"></span></p>
<p><b>Status:</b> <span x-text="event.status"></span></p>

</div>

<div class="flex justify-end gap-3 mt-6">

<button
@click="generatePdf"
class="bg-red-600 text-white px-4 py-2 rounded">
PDF
</button>

<button
class="bg-indigo-600 text-white px-4 py-2 rounded">
Edit
</button>

</div>

</div>

</div>

<!-- TOAST -->

<div x-show="toast.show"
class="fixed bottom-6 right-6 bg-indigo-600 text-white px-6 py-3 rounded shadow-lg">

<span x-text="toast.message"></span>

</div>

</div>

<script>

function calendarApp(){

return{

openModal:false,

event:{},

toast:{show:false,message:''},

init(){

let calendarEl=document.getElementById('calendar')

let calendar=new FullCalendar.Calendar(calendarEl,{

initialView:'dayGridMonth',

height:650,

editable:true,

events:@json($deliveries),

eventClick:(info)=>{

this.event={
id:info.event.id,
title:info.event.title,
date:info.event.startStr,
status:info.event.extendedProps.status
}

this.openModal=true

},

eventDrop:(info)=>{

this.showToast("Delivery moved to "+info.event.startStr)

}

})

calendar.render()

},

generatePdf(){

window.location.href=`/repartos/${this.event.id}/pdf`

},

showToast(msg){

this.toast.message=msg
this.toast.show=true

setTimeout(()=>{

this.toast.show=false

},3000)

}

}

}

document.addEventListener('alpine:init',()=>{

Alpine.data('calendarApp',calendarApp)

})

</script>
</x-app-layout>