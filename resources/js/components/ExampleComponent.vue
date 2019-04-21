<template>
    <div class="list-group">
        <div class="list-group-item" v-for="item in items" :key="item.id">
            {{ item.name }}
        
            <div class="text-right">
                <button @click="onActionButtonClick(item)" class="btn btn-primary btn-sm">
                    Action
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: [
            "items", "submit_url", "redirect_url",
        ],

        data() {
        },
        
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            onActionButtonClick(item) {
                console.log(item)
            }
        }
    }
</script>
