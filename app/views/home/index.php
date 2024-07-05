<?php require_once 'app/views/templates/header.php' ?>
<style>
    body {
        /* background-image: url('https://images-assets.nasa.gov/image/PIA11141/PIA11141~large.jpg?w=1920&h=929&fit=clip&crop=faces%2Cfocalpoint'); */
        background-image: url('https://i.imgur.com/EZQ0Pw0.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hey</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-lg-12">
            <p> <a href="/logout">Click here to logout</a></p>
        </div>
    </div>

    

    <?php require_once 'app/views/templates/footer.php' ?>
