<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="app">
        <header>    
            <h1 class="text-center mt-3 fw-bold">Compiti di oggi!</h1>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="list-group list-group-flush my-5 w-50">
                            <li v-for="todo, key in todoList" :key="key" class="list-group-item d-flex" >
                                <div>
                                    <span>
                                        {{todo.text}}
                                    </span>
                                </div>
                            </li>   
                        </ul>    
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-center">
                        <input class="w-50 mx-1 form-control form-control-sm" type="text" placeholder="Aggiungi qualcosa da fare alla lista" aria-label=".form-control-sm example" v-model="newText" @keyup.enter="addText">
                        <button type="button" class="mx-1 btn btn-outline-light" @click="addText">Aggiungi</button>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>
