<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Agency</title>

  <!-- BOOTSTRAP CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="css/voyagestyle.css">

</head>

<body>
    
    <div class="container">
              <?php include("header.php"); ?>

             
              <!--=================END NAVBAR====================-->

              <!--================= START SLIDE==================-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/moscou1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h4>WELCOME TO MOSCOW</h4>
                <p>Moscow is the capital of Russia, the largest city in the country and Europe, and one of the largest cities in the world.</p>
                <button type="button" class="btn btn-secondary me-auto">More Infos</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/chicago.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h4>CHICAGO CITY</h4>
                <p>Chicago officially the City of Chicago, is the most populous city in the U.S. state of Illinois, and ... romance" and
                "genteel realism", needed a new approach to describe the urban social, political, and economic conditions of Chicago.</p>
                <button type="button" class="btn btn-secondary me-auto">More Infos</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/CityofLondon.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h4>VISIT LONDON</h4>
                <p>London is the biggest city in western Europe, and the world's largest financial centre. ... This area is still called
                the City of London.</p>
                <button type="button" class="btn btn-secondary me-auto">More Infos</button>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
              <!--================= END SLIDE==================-->

              <!--================= START WHY ARE WE ==================-->
        <div class="row py-3">
            <h1 class="text-center">WHY WE ARE THE BEST</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </p>
            <div class="col-sm-2 pt-3 text-center">
              <a href="#"><i class="fa fa-plane fa-5x" aria-hidden="true"></i></a></i>
              <h4>Travel Management</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
              literature from 45 BC, making it over 2000 years old.</p>
            </div>
            <div class="col-sm-2 pt-3 text-center">
              <i class="fa fa-assistive-listening-systems fa-5x" aria-hidden="true"></i>
              <h4>Passenger assistance</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                literature from 45 BC, making it over 2000 years old.</p>
            </div>
            <div class="col-sm-2 pt-3 text-center">
              <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>
              <h4>Consulting</h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
              literature from 45 BC, making it over 2000 years old.</p>
            </div>
            <div class="col-sm-2 pt-3 text-center">
              <i class="fa fa-american-sign-language-interpreting fa-5x" aria-hidden="true"></i>
              <h4>Marketing and internal communication</h4>
              <p>CoContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
              literature from 45 BC, making it over 2000 years old.</p>
            </div>
            <div class="col-sm-2 pt-3 text-center">
              <i class="fa fa-tachometer fa-5x" aria-hidden="true"></i>
              <h4>Technology</h4>
              <p>CoContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                literature from 45 BC, making it over 2000 years old.</p>
            </div>
            <div class="col-sm-2 pt-3 text-center">
              <i class="fa fa-cutlery fa-5x" aria-hidden="true"></i>
              <h4>Leisure Services</h4>
              <p>CoContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                literature from 45 BC, making it over 2000 years old.</p>
            </div>

        </div> 
              <!--================= END WHY WE=====================-->

              <!--==================Start HAPPY Costomers================-->
                <div class="row">
                  <h2 class="text-center " style="font-size:30px">Testimonials and Comments</h2>
                  <div class="col-sm-3">
                    <div class="card text-center">
                      <img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Hanna Lisem</h5>
                        <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card text-center">
                      <img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Martha Brown</h5>
                        <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card text-center">
                      <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301"
                  alt="">
                      <div class="card-body">
                        <h5 class="card-title">Missy Limana</h5>
                        <span> Engineer </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card text-center">
                      <img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Ronne Galle</h5>
                        <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                </div>
              <!--==================End HAPPY Costomers================-->

              <!--==================Start HOTELS Test================-->

                <div class="row py-5">
                    <h2 class="text-center " style="font-size:30px">BOOK YOUR HOTEL</h2>
                  <div class="col-sm-3">
                    
                      <article class="card card-body text-center">
                        <figure> <a class="hover-effect popup-gallery"><img class="img-fluid" alt=""
                              src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1556030102/home-office-336373_640.jpg"
                              draggable="false"></a> </figure>
                        <div> <span class="price"><small>avg/night</small>$188</span>
                          <h4 class="box-title">Hotel Hilton<small>Albufeira</small></h4>
                          <div class="feedback">
                            <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars">
                              <span style="width: 80%;" class="five-stars"></span>
                            </div>
                            <span class="review">170 reviews</span>
                          </div>
                          <br>
                          <p class="description">For what reason would it be advisable for me to think about business content?</p>
                          <div class="action">
                            <a class="button btn-small" href="#">BOOK</a>
                            <a class="button btn-small yellow popup-map" href="#" data-box="37.089072, -8.247880">VIEW ON MAP</a>
                          </div>
                        </div>
                      </article>
                    
                  </div>
                  <div class="col-sm-3">

                      <article class="card card-body text-center">
                        <figure> <a class="hover-effect popup-gallery"><img class="img-fluid" alt=""
                              src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1556030091/office-620822_640.jpg" draggable="false"></a>
                        </figure>
                        <div class="details"> <span class="price"><small>avg/night</small>$322</span>
                          <h4 class="box-title">Double Tree<small>New delhi</small></h4>
                          <div class="feedback">
                            <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span
                                style="width: 80%;" class="five-stars"></span></div> <span class="review">485 reviews</span>
                          </div>
                          <br>
                          <p class="description">For what reason would it be advisable for me to think about business content?</p>
                          <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map"
                              href="#" data-box="40.463667, -3.749220">VIEW ON MAP</a>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-sm-3">

                      <article class="card card-body text-center">
                        <figure> <a class="hover-effect popup-gallery"><img class="img-fluid" alt=""
                              src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1556030070/desktop-1985856_640.jpg"
                              draggable="false"></a> </figure>
                        <div class="details"> <span class="price"><small>avg/night</small>$170</span>
                          <h4 class="box-title">Hotel Taj<small>Mumbai</small></h4>
                          <div class="feedback">
                            <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span
                                style="width: 80%;" class=""></span></div> <span class="review">75 reviews</span>
                          </div>
                          <br>
                          <p class="description">For what reason would it be advisable for me to think about business content?</p>
                          <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map"
                              href="#" data-box="40.705631, -73.978003">VIEW ON MAP</a>
                          </div>
                        </div>
                      </article>

                  </div>
                  <div class="col-sm-3">

                      <article class="card card-body text-center">
                        <figure> <a class="hover-effect popup-gallery"><img class="img-fluid" alt=""
                              src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1556030070/desktop-1985856_640.jpg"
                              draggable="false"></a> </figure>
                        <div class="details"> <span class="price"> <small>avg/night</small> $360 </span>
                          <h4 class="box-title">Lamon Tree<small>Bangalore</small></h4>
                          <div class="feedback">
                            <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span
                                style="width: 80%;" class="five-stars"></span></div> <span class="review">270 reviews</span>
                          </div>
                          <br>
                          <p class="description">For what reason would it be advisable for me to think about business content?</p>
                          <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map"
                              href="#" data-box="48.856614, 2.352222">VIEW ON MAP</a>
                          </div>
                        </div>
                      </article>

                  </div>
                </div>

              <!--==================End HOTELS Test================-->



    </div>

<!--==================START FOOTER================-->

<?php include("footer.php"); ?>

<!--==================END FOOTER================-->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
      <script src="js/voyage.js"></script>

</body>
</html>