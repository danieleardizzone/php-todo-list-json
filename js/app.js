const { createApp } = Vue

createApp({
    data() {
        return {
            todos: [],
        }
    }, methods: {
        fetchData() {
            axios.get('server.php').then((res) => {
                console.log(res.data.results)
                this.todos = res.data.results
            })
        }
    }, created() {
        this.fetchData()
    }
}).mount('#app')