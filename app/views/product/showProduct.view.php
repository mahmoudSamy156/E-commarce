
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2>Shop Category</h2>
            <p>Very us move be blessed multiply night</p>
          </div>
          <div class="page_link">
            <a href="/ecommarce/public/index/home">Home</a>
            <a href="/ecommarce/public/product/home">Shop</a>
            
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
        <div class="col-lg-9">
          <div class="product_top_bar">
            <div class="left_dorp">
                Catgories
            </div>
          </div>

          <div class="latest_product_inner">
            <div class="row">

                <?php foreach($products as $product):?>
                <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="<?= \App\Process\Template::asset('img/'.$product['image'])?>"
                        alt=""
                      />
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
                      <a href="/ecommarce/public/product/ProductDetails/<?= $product['id']?>" class="d-block">
                          <h4><?= $product['name']?></h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4"><?= $product['price']?>$</span>
                        <del><?= $product['offer']?></del>
                      </div>
                      <a href="/ecommarce/public/product/ProductDetails/<?= $product['id']?>" class="btn btn-outline-success">Learn More</a>
                     
                    </div>
                  </div>
                </div>
                
                <?php endforeach;?>

            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="left_sidebar_area">
            <aside class="left_widgets p_filter_widgets">
              <div class="l_w_title">
                <h3>Browse Categories</h3>
              </div>
              <div class="widgets_inner">

                <ul class="list">
                    <li>
                        <a href="/ecommarce/public/product/home">all</a>
                    </li>
                    <?php foreach($categories as $category):?>
                        <li>
                        <a href="/ecommarce/public/category/ChoseCategor/<?= $category['id']?>"><?= $category['Category']?></a>
                        </li>
                    <?php endforeach;?>
                </ul>
              </div>
            <!-- </aside>

             <aside class="left_widgets p_filter_widgets">
              <div class="l_w_title">
                <h3>Product Brand</h3>
              </div>
              <div class="widgets_inner">
                <ul class="list">
                  <li>
                    <a href="#">Apple</a>
                  </li>
                  <li>
                    <a href="#">Asus</a>
                  </li>
                  <li class="active">
                    <a href="#">Gionee</a>
                  </li>
                  <li>
                    <a href="#">Micromax</a>
                  </li>
                  <li>
                    <a href="#">Samsung</a>
                  </li>
                </ul>
              </div>
            </aside> -->




          </div>
        </div>
      </div>
    </div>
  </section>

