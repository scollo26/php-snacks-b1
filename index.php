<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
<!-- <?php include_once __DIR__ . '/server/db.php'
    ?> -->
    <main id ="app">
        <div v-for ="cars in autoUsate">
            <img class="card-img" :src="cars.immagine" :alt="cars.modello">
                <h4 >{{ cars.modello }}</h4>
                <h5 >{{ cars.marca }}</h5>
                <p >{{ cars.prezzo}}</p>
                <div v-html="cars.accessori"></div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>