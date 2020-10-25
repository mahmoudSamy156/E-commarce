  <?php use App\Process\Template;?>
     <!--================Home Banner Area =================-->
     <section class="home_banner_area mb-40" style="background: url(/ecommarce/public/img/banner-bg.jpg) no-repeat center bottom !important;">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase">men Collection</p>
            <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
            <h4>Fowl saw dry which a above together place.</h4>
            <a class="main_btn mt-40" href="#">View Collection</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

      <!-- Start feature Area -->
      <section class="feature-area section_gap_bottom_custom">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="fab fa-flaticon-money"></i>
                  <h3>Money back gurantee</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="fab fa-flaticon-truck"></i>
                  <h3>Free Delivery</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="fab fa-flaticon-support"></i>
                  <h3>Alway support</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="single-feature">
                <a href="#" class="title">
                  <i class="fab fa-flaticon-blockchain"></i>
                  <h3>Secure payment</h3>
                </a>
                <p>Shall open divide a one</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End feature Area -->
      <!-- {{-- المنتجات المميزة  --}} -->
       <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Featured product</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        
        <?php foreach($productsNum as $product):?>

        <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="<?= \App\Process\Template::asset('img/'.$product['image'])?>" alt="" />
                <div class="p_icon">
                    <a href="Order/productshow/<?= $product['id']?>">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="favourite/favourite/<?= $product['id']?>">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="Order/insertCart/<?= $product['id']?>">
                      <i class="fas fa-shopping-cart"></i>
                    </a>
                  </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4><?= $product['name']?></h4>
                </a>
                <div class="mt-3">
                <span class="mr-4">$<?= $product['price']?></span>
                  <del>$<?= $product['offer']?></del>
                </div>
                <form action="{{route('ProductDetails')}}" method="post">

                    <input type="hidden" name="id" value="<?= $product['id']?>?>" />
                    <input type="submit" class="blog_btn" Style="border:none;background-color:#fff;" value="Learn More">
                  </form>
              </div>
            </div>
          </div>
          <?php endforeach;?>
   
  
      </div>
    </div>
  </section>
  <!--================ End Feature Product Area =================-->

<!-- {{-- منتجات ملهمة --}} -->
   <!--================ Inspired Product Area =================-->
   <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Inspired products</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">

        <?php foreach($newproducts as $key => $product):?>
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                <div class="product-img">
                    <img class="img-fluid w-100" src="<?= Template::asset('img/'.$product['image'])?>" alt="" />
                    <div class="p_icon">
                        <a href="Order/productshow/<?= $product['id']?>">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="favourite/favourite/<?= $product['id']?>">
                          <i class="far fa-heart"></i>
                        </a>
                        <a href="Order/insertCart/<?= $product['id']?>">
                          <i class="fas fa-shopping-cart"></i>
                        </a>
                      </div>
                </div>
                <div class="product-btm">
                    <a href="#" class="d-block">
                    <h4><?= $product['name']?></h4>
                    </a>
                    <div class="mt-3">
                    <span class="mr-4">$<?= $product['price']?></span>
                    <del>$<?= $product['offer']?></del>
                    </div>                    
                    <form action="{{route('ProductDetails')}}" method="post">
                    <input type="hidden" name="id" value="{{$product->id}}" />
                    <input type="submit" class="blog_btn" Style="border:none;background-color:#fff;" value="Learn More">
                  </form>
                </div>
                </div>
            </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>
  <!--================ End Inspired Product Area =================-->
<!--================ Offer Area =================-->
<section class="offer_area" style="background-image:url('/ecommarce/public/img/offer-bg.png')">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-4 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">all men’s collection</h3>
            <h2 class="text-uppercase">50% off</h2>
            <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
            <p>Limited Time Offer</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Offer Area =================-->
<!-- {{-- منتجات جديدة --}} -->
  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="new_product">
            <h5 class="text-uppercase">collection of 2019</h5>
            <h3 class="text-uppercase">Men’s summer t-shirt</h3>
            <div class="product-img">
              <img class="img-fluid" src="<?= Template::asset('img/new-product1.png');?>" alt="" />
            </div>
            <h4>$120.70</h4>
            <a href="#" class="main_btn">Add to cart</a>
          </div>
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row">

            <?php foreach($newproducts as $product):?>
                <div class="col-lg-6 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="<?= Template::asset('img/'.$product['image'])?>" alt="" />
                        <div class="p_icon">
                            <a href="Order/productshow/<?= $product['id']?>">
                              <i class="fas fa-eye"></i>
                            </a>
                            <a href="favourite/favourite/<?= $product['id']?>">
                              <i class="far fa-heart"></i>
                            </a>
                            <a href="Order/insertCart/<?= $product['id']?>">
                              <i class="fas fa-shopping-cart"></i>
                            </a>
                          </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4><?= $product['name']?></h4>
                        </a>
                        <div class="mt-3">
                        <span class="mr-4">$<?= $product['price']?></span>
                        <del>$<?= $product['offer']?></del>
                        </div>
                         <form action="{{route('ProductDetails')}}" method="post">
                  
                    <input type="hidden" name="id" value="{{$product->id}}" />
                    <input type="submit" class="blog_btn" Style="border:none;background-color:#fff;" value="Learn More">
                  </form>
                  
                    </div>
                    </div>
                </div>
        
        <?php endforeach;?>


          </div>
        </div>
      </div>
    </div>
  </section>