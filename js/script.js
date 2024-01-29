const { createApp } = Vue;

createApp({
    data() {
        return {
            url: "server.php",
            todoList: []
        }
    },
    mounted() {
        this.getTodoList();
    },
    methods: {
        getTodoList() {
            axios.get(this.url).then((response) => {
                this.todoList = response.data;
            });
        }
    },
}).mount("#app")