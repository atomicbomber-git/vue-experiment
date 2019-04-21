<template>
    <div>
        <form @submit="onFormSubmit">
            
            <h1>
                {{ this.name }}
            </h1>
            
            <div class='form-group'>
                <label for='name'> Item: </label>
                <input
                    v-model='name'
                    class='form-control'
                    :class="{'is-invalid': get(this.error_data, 'errors.name[0]', false)}"
                    type='text' id='name' placeholder='Item'>
                <div class='invalid-feedback'>{{ get(this.error_data, 'errors.name[0]', false) }}</div>
            </div>
            
            <div class='form-group'>
                <label for='stock'> Jumlah Stock: </label>
                <input
                    v-model.number='stock'
                    class='form-control'
                    :class="{'is-invalid': get(this.error_data, 'errors.stock[0]', false) && !this.stock}"
                    type='text' id='stock' placeholder='Jumlah Stock'>
                <div class='invalid-feedback'>{{ get(this.error_data, 'errors.stock[0]', false) }}</div>
            </div>

            <div class='form-group'>
                <label for='price'> Harga: </label>
                <input
                    v-model.number='price'
                    class='form-control'
                    :class="{'is-invalid': get(this.error_data, 'errors.price[0]', false)}"
                    type='text' id='price' placeholder='Harga'>
                <div class='invalid-feedback'>{{ get(this.error_data, 'errors.price[0]', false) }}</div>
            </div>

            <div class="text-right">
                <button class="btn btn-primary btn-sm">
                    Tambahkan Item
                    <i class="fa fa-plus"></i>
                </button>
            </div>


        </form>
    </div>
</template>

<script>

import { get } from 'lodash'

export default {

    props: [
        "submit_url", "redirect_url",
    ],

    data() {
        return {
            name: "",
            stock: 0,
            price: 0,

            error_data: null,
        }
    },

    methods: {
        get,

        onFormSubmit(e) {
            e.preventDefault()

            $.post(this.submit_url, { _token: window.token,  name: this.name, price: this.price, stock: this.stock })
                .done(response => {
                    this.error_data = null;
                    window.location.replace(this.redirect_url);
                })
                .fail((xhr, status, error) => {
                    let response = JSON.parse(xhr.responseText);
                    this.error_data = response;
                });
        }
    }
}
</script>

<style>

</style>
