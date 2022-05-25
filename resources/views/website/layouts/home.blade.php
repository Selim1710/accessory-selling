@extends('website.master')
@section('contents')
<!-- slider -->
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('website/images/t1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('website/images/t2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('website/images/t3.png') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</div>
<!-- down 2 -->
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('website/images/t1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('website/images/t2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('website/images/t3.png') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('website/images/t1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('website/images/t2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('website/images/t3.png') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- category -->
<section class="all_categories">
    <div class="container">
        <div class="section_header">
            <h5>Our Categories</h5>
        </div>
    </div>
    <div class="container">
        <div class="container-fluid" id="inventory">
            <div class="row">
                <!-- popular -->
                <div class="col-md-3 col-lg-3">
                    <div class="my_card">
                        <img class="img-fluid" src="{{ asset('website/images/t1.jpg') }}" alt="Card image cap">
                        <button class="btn view-btn w-100">SEDAN</button>
                        <div class="ribbon"><span>Popular</span></div>
                    </div>
                </div>

            </div>
            <!-- not popular -->
            <div class="row mt-5">
                
                <div class="col-md-3">
                    <div class="my_card">
                        <img class="img-fluid" src="{{ asset('website/images/t1.jpg') }}" alt="Card image cap">
                        <button class="btn  view-btn w-100">MINIVAN</button>
                    </div>
                </div>

            </div>
        </div>
        <br><br>
    </div>
</section>
<!-- product -->
<section class="all_product">
    <div class="container">
        <div class="section_header">
            <h5>Our Product </h5>
        </div>
    </div>
    <div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
    </div>
    <div id="mobile-filter">
        <p class="pl-sm-0 pl-2"> Home | <b>All Breads</b></p>
        <div class="border-bottom pb-2 ml-2">
            <h4 id="burgundy">Filters</h4>
        </div>
        <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Categories</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
            </form>
        </div>
        <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Accompainments</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
                <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
                <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
                <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
                <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
            </form>
        </div>
        <div class="py-2 ml-3">
            <h6 class="font-weight-bold">Top Offers</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
                <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
            </form>
        </div>
    </div>
    <!-- Sidebar filter section -->
    <section id="sidebar">
        <p> Home | <b>All Breads</b></p>
        <div class="border-bottom pb-2 ml-2">
            <h4 id="burgundy">Filters</h4>
        </div>
        <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Categories</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
            </form>
        </div>
        <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Accompainments</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
                <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
                <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
                <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
                <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
            </form>
        </div>
        <div class="py-2 ml-3">
            <h6 class="font-weight-bold">Top Offers</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
                <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
            </form>
        </div>
    </section>
    <!-- products section -->
    <section id="products">
        <div class="container">
            <div class="d-flex flex-row">
                <div class="text-muted m-2" id="res">Showing 44 results</div>
                <div class="ml-auto mr-lg-4">
                    <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select name="sort" id="sort">
                            <option value="popularity"><b>Popularity</b></option>
                            <option value="prcie"><b>Price</b></option>
                            <option value="rating"><b>Rating</b></option>
                        </select> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="card-body">
                            <h5><b>Multi Grain Bread</b> </h5>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">₹110/loaf</div>
                                <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 loaf</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                            </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/3085146/pexels-photo-3085146.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="card-body">
                            <h5><b>Bagels</b> </h5>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">₹35/piece</div>
                                <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                            </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/1448665/pexels-photo-1448665.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="card-body">
                            <h5><b>White Bread</b> </h5>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">₹80/loaf</div>
                                <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 loaf</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                            </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/461060/pexels-photo-461060.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="card-body">
                            <h5><b>Baguette</b> </h5>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">₹160/piece</div>
                                <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                            </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/209206/pexels-photo-209206.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="card-body">
                            <h5><b>Masala Bun</b> </h5>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">₹85/piece</div>
                                <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                            </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card d-relative"> <img class="card-img-top" src="https://images.pexels.com/photos/3570/morning-breakfast-croissant.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="card-body">
                            <h5><b>Croissant</b> </h5>
                            <div class="rounded bg-white discount" id="orange">10% off</div>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted price"><del>₹55</del>₹45/piece</div>
                                <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span>1pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                            </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- Services -->
<section>

</section>
@endsection