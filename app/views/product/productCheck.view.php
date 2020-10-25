<?php use App\Process\Template ;?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2>Check Product</h2>
            <p>Very us move be blessed multiply night</p>
          </div>
          <div class="page_link">
            <a  href="/ecommarce/public/index/home">Home</a>
            <a href="#">Checkproduct</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Category Product Area =================-->
  <section class="cat_product_area section_gap">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-11">
          <div class="product_top_bar">
            <div class="left_dorp">
                Check product
            </div>
          </div>

          <div class="latest_product_inner">
            <div class="row">



                <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="<?= Template::asset('img/1.jpg') ;?>"
                        alt=""
                      />
                      <div class="p_icon">
                        <a href="Order/favourite/id=">
                            <i class="far fa-remove"></i>
                          </a>
                        <a href="Order/favourite/id=">
                          <i class="far fa-heart"></i>
                        </a>
                        <a href="Order/insertCart/id=">
                          <i class="fas fa-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>T-shirt</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">300$</span>
                        <del>400$</del>
                      </div>
                     <form action="ProductDetails" method="post">

                                <input type="hidden" name="id" value="$check->id_product" />
                                <input type="submit" class="blog_btn" Style="border:none;background-color:#fff;"value="Learn More">
                     </form>
                    </div>
                  </div>
                </div>

                @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Category Product Area =================-->



@stop
