<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="bg-primary">
    <div id="app">
        <h2 class="text-center my-5">Todo List</h2>
        <div class="container d-flex justify-content-center">
            <ul class="list-group col-7">
                <li v-for="task in tasks" class="list-group-item">{{task}}</li>
            </ul>
        </div>

        <div class=" container d-flex justify-content-center my-3">
            <div class="col-7">
                <form action="server.php" method="post">
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-secondary" type="button" id="button-addon2">Button</button>
            </form>
            </div>
            
        </div>

    </div>
    </div>





    <!--script axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js"
        integrity="sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!--script vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="main.js"></script>
</body>

</html>