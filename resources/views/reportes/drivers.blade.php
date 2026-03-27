<x-app-layout>

    <div x-data="driversReport()" class="p-6 bg-gray-50 rounded-lg shadow-md space-y-6">

  <!-- Encabezado -->
  <div class="text-center space-y-1">
    <h1 class="text-2xl font-bold text-gray-700">RP TULIPAN TRANSPORT, INC</h1>
    <p class="text-gray-500">8421 NW 70th ST, MIAMI FL 33166 | 786-768-4409</p>
  </div>

  <!-- Filtros -->
  <div class="flex flex-wrap gap-4 justify-center items-end">
    <div class="space-y-1">
      <label class="text-gray-500 font-medium">Driver</label>
      <select x-model="filters.driver" class="border rounded p-2">
        <option value="">All Drivers</option>
        <template x-for="driver in uniqueDrivers()" :key="driver">
          <option x-text="driver"></option>
        </template>
      </select>
    </div>
    <div class="space-y-1">
      <label class="text-gray-500 font-medium">Initial Date</label>
      <input type="date" x-model="filters.startDate" class="border rounded p-2">
    </div>
    <div class="space-y-1">
      <label class="text-gray-500 font-medium">Final Date</label>
      <input type="date" x-model="filters.endDate" class="border rounded p-2">
    </div>
    <button @click="exportReport()" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Export PDF / Excel</button>
  </div>

  <!-- Tabla de entregas -->
  <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg shadow">
      <thead class="bg-gray-100">
        <tr>
          <template x-for="col in columns" :key="col">
            <th class="px-4 py-2 text-left text-gray-600 font-medium" x-text="col"></th>
          </template>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <template x-for="row in filteredRows()" :key="row.id">
          <tr class="hover:bg-gray-50" :class="{'bg-green-50': row.paidDriver > 0, 'bg-red-50': row.paidDriver == 0}">
            <td class="px-4 py-2" x-text="row.date"></td>
            <td class="px-4 py-2" x-text="row.size"></td>
            <td class="px-4 py-2" x-text="row.cont"></td>
            <td class="px-4 py-2" x-text="row.order"></td>
            <td class="px-4 py-2" x-text="row.city"></td>
            <td class="px-4 py-2" x-text="row.pickup"></td>
            <td class="px-4 py-2" x-text="row.delivery"></td>
            <td class="px-4 py-2 text-right" x-text="row.miles"></td>
            <td class="px-4 py-2" x-text="row.driver"></td>
            <td class="px-4 py-2 text-right" x-text="formatCurrency(row.paidDriver)"></td>
            <td class="px-4 py-2 text-right" x-text="formatCurrency(row.cash)"></td>
            <td class="px-4 py-2" x-text="row.idNumber"></td>
            <td class="px-4 py-2" x-text="row.driverName"></td>
            <td class="px-4 py-2" x-text="row.initialDate"></td>
            <td class="px-4 py-2" x-text="row.finalDate"></td>
            <td class="px-4 py-2 text-right" x-text="formatCurrency(row.cashBalance)"></td>
          </tr>
        </template>
      </tbody>
    </table>
  </div>

  <!-- Totales -->
  <div class="mt-4 flex justify-between">
    <div class="space-y-1 text-gray-700">
      <p>Total Miles: <span x-text="totalMiles()"></span></p>
      <p>Cash Collected: <span x-text="formatCurrency(totalCashCollected())"></span></p>
    </div>
    <div class="space-y-1 text-gray-700 text-right">
      <p>Gross: <span x-text="formatCurrency(totalGross())"></span></p>
      <p>Driver Salary: <span x-text="formatCurrency(totalSalary())"></span></p>
    </div>
  </div>
</div>

<script>
function driversReport() {
  return {
    filters: {
      driver: '',
      startDate: '',
      endDate: ''
    },
    columns: ["Date","Size","# Cont","Order #","City","Pick Up Address","Delivery Place","Miles","Driver","Paid Driver","Cash","ID","Driver Name","Initial Date","Final Date","Cash Balance"],
    rows: [
      {id:1,date:"2/3/2026",size:"20' STD",cont:"317234-7",order:"RC-020326-02",city:"MIAMI",pickup:"FLCHR YARD",delivery:"FORT LAUDERDALE",miles:25,driver:"FLCHR",paidDriver:200,cash:0,idNumber:6110,driverName:"JOSE",initialDate:"12/15/2025",finalDate:"12/20/2025",cashBalance:1126.99},
      {id:2,date:"2/5/2026",size:"20' STD",cont:"146988-2",order:"RC-020526-01",city:"MIAMI",pickup:"MARITIME CONT",delivery:"LOCATION",miles:0,driver:"FLCHR",paidDriver:200,cash:0,idNumber:6098,driverName:"TRAVIS",initialDate:"12/1/2025",finalDate:"12/25/2025",cashBalance:4312.00},
      {id:3,date:"2/5/2026",size:"20' STD",cont:"ZEENA",order:"P-020526-02",city:"MIAMI",pickup:"9801 NW 106 ST MEDLEY FL 33178",delivery:"3110 MATECUMBE KEY RD PUNTA GORDA FL 33955",miles:170,driver:"FLCHR",paidDriver:600,cash:0,idNumber:6120,driverName:"JOSE",initialDate:"12/22/2025",finalDate:"12/27/2025",cashBalance:126.99},
      {id:4,date:"2/6/2026",size:"20' STD",cont:"ZEENA",order:"P-020526-01",city:"MIAMI",pickup:"9801 NW 106 ST MEDLEY FL 33178",delivery:"3110 MATECUMBE KEY RD PUNTA GORDA FL 33955",miles:170,driver:"FLCHR",paidDriver:600,cash:0,idNumber:6119,driverName:"TRAVIS J",initialDate:"12/29/2025",finalDate:"1/3/2026",cashBalance:3606.32},
      // Agrega más filas según necesites
    ],
    filteredRows() {
      return this.rows.filter(r => {
        let driverMatch = this.filters.driver ? r.driver === this.filters.driver : true;
        let startDateMatch = this.filters.startDate ? new Date(r.date) >= new Date(this.filters.startDate) : true;
        let endDateMatch = this.filters.endDate ? new Date(r.date) <= new Date(this.filters.endDate) : true;
        return driverMatch && startDateMatch && endDateMatch;
      });
    },
    uniqueDrivers() {
      return [...new Set(this.rows.map(r => r.driver))];
    },
    formatCurrency(value) {
      return `$${value.toLocaleString()}`;
    },
    totalMiles() {
      return this.filteredRows().reduce((a,b)=>a+b.miles,0);
    },
    totalCashCollected() {
      return this.filteredRows().reduce((a,b)=>a+b.cash,0);
    },
    totalGross() {
      return this.filteredRows().reduce((a,b)=>a+b.paidDriver,0);
    },
    totalSalary() {
      return this.filteredRows().reduce((a,b)=>a.paidDriver,0);
    },
    exportReport() {
      alert('Por los momentos no esta disponible esta función');
    }
  }
}
</script>



</x-app-layout>