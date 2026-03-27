<x-app-layout>
<div x-data="deliveryApp()" class="min-h-screen bg-gray-100 p-8">

    <div >

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Delivery Management</h1>
                <p class="text-gray-500 text-sm">Dispatch & delivery tracking</p>
            </div>
            <button @click="openModal = true" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg shadow">
                + New Delivery
            </button>
        </div>

        <!-- KPI CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">Pending</p>
                <p class="text-2xl font-bold text-yellow-600" x-text="countStatus('Pending')"></p>
            </div>
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">In Transit</p>
                <p class="text-2xl font-bold text-blue-600" x-text="countStatus('In Transit')"></p>
            </div>
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">Completed</p>
                <p class="text-2xl font-bold text-green-600" x-text="countStatus('Completed')"></p>
            </div>
            <div class="bg-white p-5 rounded-xl shadow">
                <p class="text-gray-500 text-sm">Problems</p>
                <p class="text-2xl font-bold text-red-600" x-text="countStatus('Problem')"></p>
            </div>
        </div>

        <!-- SEARCH -->
        <div class="bg-white p-4 rounded-xl shadow mb-6">
            <input type="text" placeholder="Search by driver, city, container, order #..." x-model="search"
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
                    <template x-for="delivery in filteredDeliveries()" :key="delivery.id">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold" x-text="delivery.id"></td>
                            <td class="px-6 py-4" x-text="delivery.date"></td>
                            <td class="px-6 py-4" x-text="delivery.driver"></td>
                            <td class="px-6 py-4" x-text="delivery.city"></td>
                            <td class="px-6 py-4" x-text="delivery.container"></td>
                            <td class="px-6 py-4" x-text="delivery.miles"></td>
                            <td class="px-6 py-4" x-text="delivery.customer"></td>
                            <td class="px-6 py-4" x-text="'$'+delivery.rate"></td>
                            <td class="px-6 py-4">
                                <select x-model="delivery.status" @change="showToast(delivery.status)"
                                    :class="statusColor(delivery.status)" class="px-3 py-1 rounded-full text-xs">
                                    <option>Pending</option>
                                    <option>In Transit</option>
                                    <option>Completed</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 text-right space-x-3">
                                <button @click="editDelivery(delivery)" class="text-green-600 hover:underline">Edit</button>
                                <button @click="window.location.href='{{ url('repartos') }}/'+delivery.id+'/pdf'" class="text-red-600 hover:underline">PDF</button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

    </div>

    <!-- MODAL CREATE/EDIT DELIVERY -->
    <div x-show="openModal" x-transition class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-xl w-2/3 p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold" x-text="modalTitle"></h2>
                <button @click="closeModal" class="text-gray-500 hover:text-black">✕</button>
            </div>

            <form class="grid grid-cols-2 gap-4" @submit.prevent="saveAndGeneratePdf()">
                <input class="border rounded p-2" placeholder="Driver Name" x-model="form.driver">
                <input class="border rounded p-2" placeholder="Container Number" x-model="form.container">
                <input class="border rounded p-2" placeholder="Customer Phone" x-model="form.phone">
                <input class="border rounded p-2" type="date" x-model="form.date">
                <input class="border rounded p-2 col-span-2" placeholder="Pick Up Address" x-model="form.pickup">
                <input class="border rounded p-2 col-span-2" placeholder="Delivery Address" x-model="form.delivery" @change="calculateMiles()">
                <input class="border rounded p-2" placeholder="Miles" x-model="form.miles" readonly>
                <input class="border rounded p-2" placeholder="Rate" x-model="form.rate">

                <select class="border rounded p-2" x-model="form.status">
                    <option>Pending</option>
                    <option>In Transit</option>
                    <option>Completed</option>
                </select>

                <div class="col-span-2 mt-4 flex justify-end gap-3">
                    <button @click="closeModal" type="button" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">Save & Generate PDF</button>
                </div>
            </form>
        </div>
    </div>

    <!-- TOAST -->
    <div x-show="toast.show" x-transition
        class="fixed bottom-6 right-6 bg-indigo-600 text-white px-6 py-3 rounded shadow-lg z-50">
        <p x-text="toast.message"></p>
    </div>

</div>

<script>
function deliveryApp(){
    return {
        search: '',
        openModal: false,
        modalTitle: 'Create New Delivery',
        deliveries: @json($deliveries),
        form: {id:null, driver:'', container:'', phone:'', date:'', pickup:'', delivery:'', miles:'', rate:'', status:'Pending'},
        toast: {show:false, message:''},

        filteredDeliveries(){
            if(!this.search) return this.deliveries;
            return this.deliveries.filter(d => Object.values(d).some(v => String(v).toLowerCase().includes(this.search.toLowerCase())));
        },

        countStatus(status){
            return this.deliveries.filter(d => d.status === status).length;
        },

        statusColor(status){
            switch(status){
                case 'Pending': return 'bg-yellow-100 text-yellow-700';
                case 'In Transit': return 'bg-blue-100 text-blue-700';
                case 'Completed': return 'bg-green-100 text-green-700';
                case 'Problem': return 'bg-red-100 text-red-700';
                default: return '';
            }
        },

        editDelivery(delivery){
            this.form = {...delivery};
            this.modalTitle = 'Edit Delivery';
            this.openModal = true;
        },

        closeModal(){
            this.openModal = false;
            this.modalTitle = 'Create New Delivery';
            this.form = {id:null, driver:'', container:'', phone:'', date:'', pickup:'', delivery:'', miles:'', rate:'', status:'Pending'};
        },

        calculateMiles(){
            this.form.miles = Math.floor(Math.random()*200)+10;
        },

        saveAndGeneratePdf(){
               if(!this.form.id){
                    this.form.id = Math.floor(Math.random()*9000)+1000;
                }

                // guardamos el id antes de limpiar el formulario
                let deliveryId = this.form.id;

                // guardar en la tabla de la maqueta
                this.deliveries.push({...this.form});

                this.showToast('Delivery created successfully!');

                // crear parámetros
                const params = new URLSearchParams({
                    driver: this.form.driver,
                    container: this.form.container,
                    city: this.form.city,
                    miles: this.form.miles,
                    customer: this.form.customer,
                    rate: this.form.rate,
                    status: this.form.status,
                    pickup: this.form.pickup,
                    delivery: this.form.delivery,
                    phone: this.form.phone,
                    date: this.form.date
                }).toString();

                // cerrar modal (esto limpia el form)
                this.closeModal();

                // generar PDF usando el id guardado
                window.location.href = `/repartos/${deliveryId}/pdf?${params}`;
        },

        showToast(message){
            this.toast.message = message;
            this.toast.show = true;
            setTimeout(()=>{this.toast.show=false},3000);
        }
    }
}
</script>
</x-app-layout>