<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between">
                                <h5>Product List</h5>
                                <input type="text" placeholder="Search...." class="form-control mb-3 w-auto" v-model="searchValue">
                            </div>

                            <EasyDataTable buttons-pagination alternating :headers="Header" :items="Item" :rows-per-page="10" :search-field="searchField" :search-value="searchValue">
                                <template #item-number="{number,player}">
                                    <button class="btn btn-primary mx-3 btn-sm" @click="itemClick(number,player)">Edit</button>
                                    <button class="btn btn-danger btn-sm" @click="itemClick(number,player)">Delete</button>
                                </template>
                            </EasyDataTable>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import {ref} from "vue";

    const Header = [
        {text: "No", value: "no"},
        {text: "Product Name", value: "name"},
        {text: "Product Price", value: "price"},
        {text: "Unit", value: "unit"},
        {text: "Action", value: "number"},
    ];

    const Item = ref([
        { no: "1", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "2", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "3", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "4", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "5", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "6", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "7", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "8", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "9", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "10", name: "Mobile Phone", price: "10000", unit: "5" },
        { no: "11", name: "Mobile Phone", price: "10000", unit: "5" },
    ]);

    const itemClick = (number,player) => {
    alert(`Number is=${number} & Category Name is=${player}`)
}

</script>

<style scoped>

</style>
