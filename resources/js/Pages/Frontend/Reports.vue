<template>
    <Frontend>
      <div class="flex flex-col items-center justify-center align-middle bg-gray-100 container-fluid">
        <div>This is the Reports page</div>
        <div> <!-- Selection Panel -->
            <div class="flex flex-row items-center justify-center align-baseline">
                <p>Select Serial No: </p>
                <select
                v-model="currentSerialSelected"
                class="py-2 m-4 text-base font-semibold text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm px-auto focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option v-for="serial in serialList" :key="serial" :value="serial">{{ serial }}</option>
                </select>
            </div>
        </div>

        <!-- Report Content -->
            <div class="flex flex-col justify-center py-10 mx-20 mt-20 align-middle bg-blue-100 shadow-2xl rounded-3xl">
                <div class="flex flex-row mb-4 justify-evenly">
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Model:</label>&nbsp;
                        <input type="text" name="pulseTracerMachineNo" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Material Code:</label>&nbsp;
                        <input type="text" name="date" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Partial No.:</label>&nbsp;
                        <input type="text" name="shift" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Total Quantity:</label>&nbsp;
                        <input type="number" name="operator" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                </div>
                <div class="flex flex-row mb-4 justify-evenly">
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Pulse Tracer Machine No:</label>&nbsp;
                        <input type="text" name="pulseTracerMachineNo" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Date:</label>&nbsp;
                        <input type="date" name="date" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Shift:</label>&nbsp;
                        <input type="text" name="shift" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                    <div class="flex flex-row items-baseline">
                        <label class="text-sm font-semibold">Operator:</label>&nbsp;
                        <input type="text" name="operator" class="w-[12rem] h-[1.5rem] p-2 mt-1 text-sm border rounded-md">
                    </div>
                </div>

                <div class="flex flex-row items-center justify-center align-middle">
                    <table class="mt-[1.1rem] ml-[2rem] border-collapse table-auto">
                        <thead>
                            <tr class="bg-blue-300">
                                <th colspan="2" class="px-2 py-2 text-lg font-semibold text-center">STANDARD&nbsp;SAMPLE&nbsp;DIMENSION&nbsp;and&nbsp;Material&nbsp;Grade<br>標準サンプル寸法および材料グレード</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-1 border">LENGTH&nbsp;(mm)</td>
                                <td class="px-4 py-1 border"><input type="text" class="w-[10rem] py-1 text-sm border rounded-md"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-1 border">WIDTH&nbsp;(mm)</td>
                                <td class="px-4 py-1 border"><input type="text" class="w-[10rem] py-1 text-sm border rounded-md"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-1 border">THICKNESS&nbsp;(mm)</td>
                                <td class="px-4 py-1 border "><input type="text" class="w-[10rem] py-1 text-sm border rounded-md"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-1 border">MATERIAL&nbsp;GRADE</td>
                                <td class="px-4 py-1 border"><input type="text" class="w-[10rem] py-1 text-sm border rounded-md"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-1 border">MPI&nbsp;SAMPLE&nbsp;QTY.</td>
                                <td class="px-4 py-1 border"><input type="text" class="w-[10rem] py-1 text-sm border rounded-md"></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="ml-2 mt-[1rem] mr-[2rem] border-collapse table-auto">
                        <thead>
                            <tr class="bg-blue-300">
                                <th colspan="6" class="py-4 text-lg font-semibold text-center">MAGNETIC&nbsp;PROPERTY&nbsp;DATA(磁気特性データ)</th>
                            </tr>
                            <tr class="bg-blue-200">
                                <th rowspan="2" class="px-4 border">ITEMS</th>
                                <th rowspan="2" class="px-4 border">STANDARD</th>
                                <th colspan="4" class="px-4 text-center border">ACTUAL DATA</th>
                            </tr>
                            <tr class="bg-blue-200">
                                <th class="px-4 border">AVERAGE</th>
                                <th class="px-4">MAXIMUM</th>
                                <th class="px-4">MINIMUM</th>
                                <th class="px-4">VARIANCE<br>(max-min)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">Br (G)</td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">iHc (Oe)</td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">iHk (Oe)</td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                            </tr>
                            <tr class="bg-blue-200">
                                <th rowspan="2" class="px-4 border">Br Cpk</th>
                                <th class="px-4 border">STD DEV</th>
                                <th class="px-4 border">Cpu</th>
                                <th class="px-4 border">Cpl</th>
                                <th class="px-4 border">Cpk</th>
                                <th class="px-4 border">Remarks</th>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                                <td class="px-4 py-2 border"><input type="text" class="w-full px-2 py-1 text-sm border rounded-md"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-row items-center justify-center align-middle m-5">
                    <p class="m-5">Remarks:</p>
                    <input type="text" class="w-full px-2 py-1 text-sm border rounded-md" />
                    <p class="mx-20 text-3xl text-blue-500">OK</p>
                </div>

            </div>

            <div class="flex flex-col justify-center py-8 px-8 my-10 align-middle bg-blue-100 shadow-2xl rounded-3xl">
                <div class="flex flex-row">
                    <div class="flex flex-col mr-8">
                        <p class="border border-black p-2 text-center text-xl font-extrabold bg-blue-300">SMP Judgement</p>
                        <p class="border border-black p-10 text-center"><span>(Insert Stamp here)</span></p>
                    </div>
                    <div class="flex flex-col">
                        <p class="border border-black p-2 text-center text-xl font-extrabold bg-blue-300">Prepared By:</p>
                        <p class="border border-black p-10 text-center"><span>(Insert Stamp here)</span></p>
                    </div>
                    <div class="flex flex-col">
                        <p class="border border-black p-2 text-center text-xl font-extrabold bg-blue-300">Check By:</p>
                        <p class="border border-black p-10 text-center"><span>(Insert Stamp here)</span></p>
                    </div>
                    <div class="flex flex-col">
                        <p class="border border-black p-2 text-center text-xl font-extrabold bg-blue-300">Approve By:</p>
                        <p class="border border-black p-10 text-center"><span>(Insert Stamp here)</span></p>
                    </div>
                </div>
            </div>

      </div>
    </Frontend>
</template>

<script setup>
import Frontend from '@/Layouts/FrontendLayout.vue';
import { ref, computed, onMounted } from 'vue';


const tpmData = ref([]);
const serialList = ref([]); // Stores all fetched furnaces
const currentSerialSelected = ref('');

const reportModel = ref('');
const reportPulseTracerMachineNo = ref('');
const reportMaterialCode = ref('');
const reportDate = ref('');
const reportPartialNo = ref('');
const reportShift = ref('');
const reportTotalQuantity = ref('');
const reportOperator = ref('');
const reportStandardSampleDimension = ref('');
const reportMagneticPropertyData = ref('');

const createReport = async () => {
    try {

    } catch {

    }
}

// Fetching the serial start

    // Function to fetch serial data
// Function to fetch serial data
const fetchSerial = async () => {
  try {
    const response = await axios.get("/api/tpmdata");
    //console.log("API Response:", response.data);

    // Extract furnace data dynamically
    tpmData.value = response.data.data["tpmData"] || [];
    console.log("TPM DATA response: ", tpmData.value);

    // Extract unique serial numbers by using a Set
    serialList.value = [...new Set(tpmData.value.map(item => item.serial_no))];

    // Sort the serialList in descending order (highest value first)
    serialList.value = serialList.value.sort((a, b) => {
      return Number(b) - Number(a); // Convert to number for proper sorting
    });

    console.log("Unique Serial lists (Descending):", serialList.value);

    // Set default selection to first serial, if available
    if (serialList.value.length > 0) {
      currentSerialSelected.value = serialList.value[0];
    }

  } catch (error) {
    console.error("Error fetching serial data:", error);
  }
};
// Fetching the serial start end

//Makes sure furnace lists is loaded on start.
onMounted(fetchSerial);

</script>
