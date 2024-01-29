const { createApp } = Vue;

createApp({
    data() {
        return {
            url: "server.php",
            newText: "",
            todoList: [],
        }
    },
    mounted() {
        this.getTodoList();
    },
    methods: {
        addText() {
            const data = {
                newText: this.newText
            }
            axios.post(this.url, data, {
                headers: { "Content-type": "multipart/form-data" }

            }).then((response) => {
                this.newText = "";
                this.todoList = response.data;


            })

        },
        getTodoList() {
            axios.get(this.url).then((response) => {
                console.log(response.data);
                this.todoList = response.data;
            });
        },
    },
}).mount("#app")

