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
    <form action="index.php" method="GET">
            <label>Seleziona marca auto</label>
            <select @change="filter" v-model="marca" name="type" id="type">
                <option value="all">All</option>
                <option value="bmw">BMW</option>
                <option value="audi">audi</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Ford">Ford</option>
            </select>
        </form>
        <form action="index.php" method="GET">
            <label>Seleziona colore</label>
            <select @change="filter" v-model="color" name="color" id="color">
                <option value="all">All</option>
                <option value="bianco">Bianco</option>
                <option value="nero">nero</option>
                <option value="rosso">rosso</option>
                <option value="blu">blu</option>
                <option value="grigio">grigio</option>
            </select>
        </form>
        <div v-for ="car in carsFiltered">
            <img class="" :src="car.immagine" :alt="car.modello">
                <h4 >{{ car.modello }}</h4>
                <h5 >{{ car.marca }}</h5>
                <p >{{ car.prezzo}}</p>
                <div v-html="car.accessori"></div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>