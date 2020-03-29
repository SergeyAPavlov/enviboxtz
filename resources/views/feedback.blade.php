<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <style>
            #app, #form  li {
                 font-size: 2em;
                 margin-top: 20px;
                 margin-left: 200px;
             }
            #form {
                margin-left: 200px;
                margin-right: 200px;
            }
            #app ul {
                margin-top: 50px;
            }

        </style>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    </head>
    <body>
    <div id="all">
        <div>
            <div id="form" class="container">
                <form  role="form" class="form">
                    <ul>
                        <li><input v-model="name" placeholder="имя"></li>
                        <li><input v-model="phone" placeholder="телефон, 10 цифр"></li>
                        <li><textarea class="form-control" rows="5" v-model="text" placeholder="сообщение"></textarea></li>
                    </ul>
                    <button id="post" type="button" class="btn btn-primary" style="margin-left: 200px" @click.prevent="submitBid">POST</button>
                </form>
            </div>
            @verbatim
        </div>


        <div id="app">
            <ul>
                <li v-for="item in info.data" :key="info.data.id">
                    {{ item.name }} {{ item.phone }}  {{ item.text }}
                </li>
            </ul>

        </div>
            @endverbatim
    </div>

        <script>
            var listItems = new Vue({
                el: '#all',
                data() {
                    return {
                        info: null,
                        name: null,
                        phone: null,
                        text: null
                    };
                },
                mounted() {
                    axios
                        .get('/ajax')
                        .then(response => (this.info = response));
                },
                methods: {
                    submitBid() {

                        const formData = new FormData();
                        formData.append('name', this.name);
                        formData.append('phone', this.phone);
                        formData.append('text', this.text);
                        axios.post('/ajax', formData)
                            .then(axios
                                .get('/ajax')
                                .then(response => (this.info = response)));
                    },
                }

            });

        </script>
    </body>
</html>
