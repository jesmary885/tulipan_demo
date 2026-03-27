<x-app-layout>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <div class="p-6 bg-gray-100 min-h-screen">

```
<!-- HEADER -->

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-2xl font-bold text-gray-800">
            Yard Services
        </h1>

        <p class="text-gray-500 text-sm">
            Manage yard receipts and transport services
        </p>
    </div>

    <button
        onclick="openModal()"
        class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow"
    >
        + Create Yard Receipt
    </button>

</div>


<!-- TABLE -->

<div class="bg-white shadow rounded-lg overflow-hidden">

    <table class="w-full text-sm">

        <thead class="bg-gray-100">

            <tr class="text-left text-gray-600">

                <th class="p-3">ID</th>
                <th class="p-3">Date</th>
                <th class="p-3">Size</th>
                <th class="p-3">Container</th>
                <th class="p-3">Release</th>
                <th class="p-3">Pickup</th>
                <th class="p-3">Delivery</th>
                <th class="p-3">Transport</th>
                <th class="p-3">Total</th>
                <th class="p-3">PDF</th>

            </tr>

        </thead>


        <tbody class="divide-y">

            <tr>

                <td class="p-3">6136</td>
                <td class="p-3">2/10/2026</td>
                <td class="p-3">2 x 20' STD</td>
                <td class="p-3">0</td>
                <td class="p-3">ISMSOL2S528</td>
                <td class="p-3">Medley FL</td>
                <td class="p-3">Fort Lauderdale</td>
                <td class="p-3">$400</td>
                <td class="p-3 font-semibold">$400</td>

                <td class="p-3">

                    <button
                        onclick="generatePDF()"
                        class="bg-green-600 text-white px-3 py-1 rounded"
                    >
                        PDF
                    </button>

                </td>

            </tr>

        </tbody>

    </table>

</div>



<!-- MODAL -->

<div
    id="yardModal"
    class="fixed inset-0 z-50 hidden bg-black/40 flex items-center justify-center"
>

    <div class="bg-white w-full max-w-4xl rounded-xl shadow-xl p-6">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">
                Yard Service Receipt
            </h2>

            <button onclick="closeModal()" class="text-gray-500 hover:text-black">
                ✕
            </button>
        </div>

        <!-- FORM -->

        <form id="yardForm" class="space-y-4">

            <div class="grid grid-cols-3 gap-4">

                <input id="booking" class="border p-2 rounded" placeholder="Booking #">
                <input id="order" class="border p-2 rounded" placeholder="Order #">
                <input id="container" class="border p-2 rounded" placeholder="Container #">

            </div>

            <div class="grid grid-cols-3 gap-4">

                <input id="customer" class="border p-2 rounded" placeholder="Customer">
                <input id="phone" class="border p-2 rounded" placeholder="Phone">
                <input id="size" class="border p-2 rounded" placeholder="Size">

            </div>

            <div class="grid grid-cols-2 gap-4">

                <input id="pickup" class="border p-2 rounded" placeholder="Pickup Address">
                <input id="delivery" class="border p-2 rounded" placeholder="Delivery Address">

            </div>

            <div class="grid grid-cols-4 gap-4">

                <input id="yard_fee" class="border p-2 rounded" placeholder="Yard Fee">
                <input id="storage_fee" class="border p-2 rounded" placeholder="Storage Fee">
                <input id="transport" class="border p-2 rounded" placeholder="Transport">
                <input id="total" class="border p-2 rounded" placeholder="Total">

            </div>

            <textarea
                id="notes"
                class="border p-2 rounded w-full"
                placeholder="Notes"
            ></textarea>


            <div class="flex justify-end gap-3">

                <button
                    type="button"
                    onclick="closeModal()"
                    class="px-4 py-2 border rounded"
                >
                    Cancel
                </button>

                <button
                    type="button"
                    onclick="generatePDF()"
                    class="px-4 py-2 bg-indigo-600 text-white rounded"
                >
                    Generate PDF
                </button>

            </div>

        </form>

    </div>

</div>




<!-- PDF TEMPLATE -->

<div
    id="pdf-template"
    style="
        display:none;
        width:800px;
        background:white;
        padding:30px;
        font-family:Arial;
    "
>

    <div style="font-family:Arial; font-size:12px; padding:30px;">

        <h2 style="text-align:center;">
            RP TULIPAN TRANSPORT INC
        </h2>

        <p style="text-align:center;">
            8421 NW 70th ST MIAMI FL 33166<br>
            786-768-4409
        </p>

        <h3 style="text-align:center;">
            YARD SERVICE RECEIPT
        </h3>


        <table border="1" width="100%" cellpadding="6">

            <tr>
                <td><b>Booking</b></td>
                <td id="pdf_booking"></td>

                <td><b>Order</b></td>
                <td id="pdf_order"></td>
            </tr>

            <tr>
                <td><b>Customer</b></td>
                <td id="pdf_customer"></td>

                <td><b>Container</b></td>
                <td id="pdf_container"></td>
            </tr>

        </table>


        <br>


        <table border="1" width="100%" cellpadding="6">

            <tr>
                <th>Pickup</th>
                <th>Delivery</th>
            </tr>

            <tr>
                <td id="pdf_pickup"></td>
                <td id="pdf_delivery"></td>
            </tr>

        </table>


        <br>


        <table border="1" width="100%" cellpadding="6">

            <tr>

                <th>Yard Fee</th>
                <th>Storage</th>
                <th>Transport</th>
                <th>Total</th>

            </tr>

            <tr>

                <td id="pdf_yard"></td>
                <td id="pdf_storage"></td>
                <td id="pdf_transport"></td>
                <td id="pdf_total"></td>

            </tr>

        </table>


        <br>

        <b>Notes</b>

        <div id="pdf_notes"></div>

    </div>

</div>


</div>

<script>

function openModal(){
    document.getElementById('yardModal').classList.remove('hidden')
}

function closeModal(){
    document.getElementById('yardModal').classList.add('hidden')
}


function generatePDF(){

    const template = document.getElementById('pdf-template')

    // llenar datos

    document.getElementById('pdf_booking').innerText =
        document.getElementById('booking').value

    document.getElementById('pdf_order').innerText =
        document.getElementById('order').value

    document.getElementById('pdf_customer').innerText =
        document.getElementById('customer').value

    document.getElementById('pdf_container').innerText =
        document.getElementById('container').value

    document.getElementById('pdf_pickup').innerText =
        document.getElementById('pickup').value

    document.getElementById('pdf_delivery').innerText =
        document.getElementById('delivery').value

    document.getElementById('pdf_yard').innerText =
        document.getElementById('yard_fee').value

    document.getElementById('pdf_storage').innerText =
        document.getElementById('storage_fee').value

    document.getElementById('pdf_transport').innerText =
        document.getElementById('transport').value

    document.getElementById('pdf_total').innerText =
        document.getElementById('total').value

    document.getElementById('pdf_notes').innerText =
        document.getElementById('notes').value


    // mostrar temporalmente
    template.style.display = "block"

    const opt = {

        margin: 10,

        filename: 'yard-service-receipt.pdf',

        image: { type: 'jpeg', quality: 0.98 },

        html2canvas: { scale: 2 },

        jsPDF: {
            unit: 'mm',
            format: 'letter',
            orientation: 'portrait'
        }

    }

    html2pdf()
        .set(opt)
        .from(template)
        .save()
        .then(() => {

            // ocultar nuevamente
            template.style.display = "none"

        })

}

</script>


</x-app-layout>