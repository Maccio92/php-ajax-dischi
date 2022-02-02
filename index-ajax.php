<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <?php include __DIR__ . '/partials/header.php' ?>
    <main class="bg" id="app">
        <div class="container">
            <div class="row row-cols-5 pt-5 gx-3">
                    <div class="col py4" v-for="disc in discs">
                        <div class="col-bg">        
                            <img class="img-fluid" :src="disc.poster" alt="">
                            <h2 class="title" >{{disc.title}}</h2>
                            <h3 class="author">{{disc.author}}</h3>
                            <h4 class="year">{{disc.year}}</h4>
                        </div>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>