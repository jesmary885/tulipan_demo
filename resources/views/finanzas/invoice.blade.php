<x-app-layout>   

<div class="p-8 bg-gray-50 min-h-screen">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Invoices</h1>

        <button onclick="openModal()"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
            + New Invoice
        </button>
    </div>

    <!-- Tabla -->
    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full text-sm">

            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-3 text-left">Invoice</th>
                    <th class="p-3 text-left">Customer</th>
                    <th class="p-3 text-left">Date</th>
                    <th class="p-3 text-left">Containers</th>
                    <th class="p-3 text-left">Amount</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y">

                <tr>
                    <td class="p-3 font-semibold">INV-45779</td>
                    <td class="p-3">MODUGO LLC</td>
                    <td class="p-3">03/14/2026</td>
                    <td class="p-3">3</td>
                    <td class="p-3">$650</td>
                    <td class="p-3">
                        <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">
                            Pending
                        </span>
                    </td>

                    <td class="p-3 flex gap-2">

                        <button class="text-blue-600 hover:underline">
                            View
                        </button>

                        <button class="text-green-600 hover:underline">
                            Edit
                        </button>

                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>


<div id="invoiceModal"
     class="fixed inset-0 bg-black/40 hidden items-center justify-center">

    <div class="bg-white rounded-xl w-[900px] p-6 shadow-xl">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold">Create Invoice</h2>

            <button onclick="closeModal()" class="text-gray-500">
                ✕
            </button>
        </div>

        <!-- Datos principales -->

        <div class="grid grid-cols-3 gap-4 mb-6">

            <div>
                <label class="text-xs text-gray-500">Customer</label>
                <select class="w-full border rounded-lg p-2">
                    <option>MODUGO LLC</option>
                </select>
            </div>

            <div>
                <label class="text-xs text-gray-500">Date</label>
                <input type="date" class="w-full border rounded-lg p-2">
            </div>

            <div>
                <label class="text-xs text-gray-500">Status</label>
                <select class="w-full border rounded-lg p-2">
                    <option>Pending</option>
                    <option>Paid</option>
                </select>
            </div>

        </div>

        <!-- Tarifas -->

        <div class="grid grid-cols-2 gap-4 mb-6">

            <div>
                <label class="text-xs text-gray-500">Cost per Day</label>
                <input type="text" placeholder="$2.00"
                    class="w-full border rounded-lg p-2">
            </div>

            <div>
                <label class="text-xs text-gray-500">Cost per Lift</label>
                <input type="text" placeholder="$50.00"
                    class="w-full border rounded-lg p-2">
            </div>

        </div>

        <!-- Tabla contenedores -->

        <div class="border rounded-lg overflow-hidden mb-6">

            <table class="w-full text-sm">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 text-left">Container</th>
                        <th class="p-2 text-left">Date In</th>
                        <th class="p-2 text-left">Date Out</th>
                        <th class="p-2 text-left">Days</th>
                        <th class="p-2 text-left">Lifts</th>
                        <th class="p-2 text-left">Total</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td class="p-2">MSKU1234567</td>
                        <td class="p-2">10/10/2025</td>
                        <td class="p-2">10/15/2025</td>
                        <td class="p-2">5</td>
                        <td class="p-2">1</td>
                        <td class="p-2 font-semibold">$60</td>
                    </tr>

                </tbody>

            </table>

        </div>

        <!-- Botones -->

        <div class="flex justify-end gap-3">

            <button onclick="closeModal()"
                class="px-4 py-2 border rounded-lg">
                Cancel
            </button>

            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                Save Invoice
            </button>

        </div>

    </div>

</div>


<script>

function openModal(){
    document.getElementById('invoiceModal').classList.remove('hidden')
    document.getElementById('invoiceModal').classList.add('flex')
}

function closeModal(){
    document.getElementById('invoiceModal').classList.add('hidden')
}

</script>
    

</x-app-layout>