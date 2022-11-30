const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
        }
    },
    methods:{
        leggoTasks(url){
            axios.get(url)
            .then(response => {
                console.log(response);
                this.tasks = response.data;
            })
            .catch(error => {
                console.log(error.message);
            })
        }
    },
    mounted(){
        this.leggoTasks(this.api_url)
    }
}).mount('#app')