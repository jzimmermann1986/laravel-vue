<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <style>
            .container {
                margin-top: 50px;
            }
        </style>


        <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Userliste</div>
                <div class="panel-body">
                    <tasks></tasks>
                </div>
            </div>
        </div>





        <template id="tastks-template">
            <div class="row">
                <div class="col-lg-4"><strong>Name</strong></div>
                <div class="col-lg-4"><strong>Email</strong></div>
                <div class="col-lg-2"><strong>Edit</strong></div>
                <div class="col-lg-2"><strong>Löschen</strong></div>
            </div>
            <div class="row" v-for="user in list">
                <div class="col-lg-4">@{{user.name}}</div>
                <div class="col-lg-4">@{{user.email}}</div>
                <div class="col-lg-2" @click="">E</div>
                <div class="col-lg-2" @click="deleteUser(user)">X</div>
            </div>
        </template>

    <script src="{{ elixir("js/app.js") }}"></script>
</body>
</html>
