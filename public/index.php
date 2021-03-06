<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contract</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
    <div class="top">
        <div class="">
            <header>
                <h1 class="bg-danger text-uppercase text-center text-white font-weight-bold font-italic">
                    Luispacstitches</h1>
            </header>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 bg bg-danger py-4">
                    <div>
                        <ul>
                            <li class="lid"><a href="samples.html" class="lis">More samples</a></li>
                            <li class="lid"><a href="About.html" class="lis">About us</a></li>
                            <li class="lid"><a href="vission.html" class="lis">Vission/aim</a></li>
                            <li class="lid"><a href="servies.html" class="lis">Servies</a></li>
                            <li class="lid"><a href="contact.php" class="lis">Contact us</a></li>
                            <li class="lid"><a href="Delivery.html" class="lis">Delivery points</a></li>
                        </ul>
                    </div>
                </div>
                <style>
                    .lis {
                        color: beige;
                        padding: 5%;
                        font-weight: bolder;
                        font-size: larger;
                    }
                </style>
                <div class="col-9">
                    <div class="row">

                        <div class="col-4">
                            <div id="example" class="carousel slide" data-ride='carousel'>
                                <ul class="carousel-indicators">
                                    <li data-target="#example" data-slide-to='0' class="active"></li>
                                    <li data-target="#example" data-slide-to='1'></li>
                                    <li data-target="#example" data-slide-to='2'></li>
                                    <li data-target="#example" data-slide-to='3'></li>
                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./img/FB_IMG_1572553817058.jpg" class="img-fluid img-thumbnail"
                                            alt="project" width="300" heigth="300">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/im1.jpg" class="img-fluid img-thumbnail" alt="project"
                                            width="300" heigth="300">>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="./img/k1.jpg" class="img-fluid img-thumbnail" alt="project"
                                            width="300" heigth="300">>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/m5.jpg" class="img-fluid img-thumbnail" alt="project"
                                            width="300" heigth="300">>
                                    </div>
                                </div>
                                <a href="#example" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#example" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>

                        </div>


                        <div class="col-5">
                            <div id="clock"></div>
                            <div class="label bg-info px-5 font-weight-bold text-uppercase">Now
                                <div id="current-time>
                                <h2 style=" color:white">

                                    </h2>
                                    <script>


                                        document.addEventListener('DOMContentLoaded', function () {
                                            var c = document.getElementById('current-time');
                                            
                                            var d = new Date();
                                            /*var hours = d.getHours;
                                            if (hours > 12){
                                                hours -= - 12;
                                            }*/
                                            c.innerHTML = d.getHours() + ":" + d.getMinutes();
                                        })
                                    </script>
                                </div>
                                <div id="current-date">
                                    <h2 style=" color:white">

                                    </h2>
                                    <script>

/*
                                        document.addEventListener('DOMContentLoaded', function () {
                                            var f = document.getElementById('current-date');
                                            var g = new Date();
                                            /*var hours = d.getHours;
                                            if (hours > 12){
                                                hours -= - 12;
                                            
                                            f.innerHTML = g.getdays() + ":" + g.getmonths() + ":"+g.getFullYear();
                                        })*/
                                    </script>
                                </div>
                            </div>


                            <div class=" ">
                                <p class="py-2 text-primary lead py-5"> We've got the world in our hands <span
                                        class="text-danger">.......</span>and we dont take that lightly. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-muted">At luispactitches,we have the demand and customers services to back up our <span
                    class="text-danger">"worldly"</span> claims.Give us a
                try,
                and you will see we stand by our values and our customers taste.</p>




            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card mt-2">
                                <img src="./img/im1.jpg" alt="" width="200" height="200">
                            </div>
                            <div class="card-body">
                                <h5>Sample 1</h5>
                                <p class="text-muted">Trouser with peplon top.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mt-2">
                                <img src="./img/im2.jpg" alt="" width="200" height="200">
                            </div>
                            <div class="card-body">
                                <h5>Sample 2</h5>
                                <p class="text-muted">Long and sexy gawn.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mt-2">
                                <img src="./img/img3.jpg" alt="" width="200" height="200">
                            </div>
                            <div class="card-body">
                                <h5>Sample 3</h5>
                                <p class="text-muted">skirt and blouse.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mt-2">
                                <img src="./img/img4.jpg" alt="" width="200" height="200">
                            </div>
                            <div class="card-body">
                                <h5>Sample 4</h5>
                                <p class="text-muted">Short gawn and baby dresses.</p>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
    </div>
    <script>
        let button = document.getElementById('cta-btn');
        let overlay = document.getElementById('overlay');
        button = addEventListener('click', () => {
            overlay.style.display = 'grid'
            overlay.classList.add('animate-overlay')
        })

    </script>
    </div>

</body>

</html>