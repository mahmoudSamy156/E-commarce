
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2>Product Details</h2>
            <p>Very us move be blessed multiply night</p>
          </div>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="single-product.html">Product Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->



  <div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-6">
          <div class="s_product_img">
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
               
              </ol>
              <div class="carousel-inner">
               
                <div class="carousel-item active">
                  <img
                    class="d-block w-100"
                    src="{{asset('image/'.$Detail->image)}}"
                    alt="Second slide"
                  />
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3>T-shirt</h3>
          <h2>$300</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                <span>Category</span> :addies</a
                >
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              Mill Oil is an innovative oil filled radiator with the most
              modern technology. If you are looking for something that can
              make your interior look awesome, and at the same time give you
              the pleasant warm feeling during the winter.
            </p>

            <div class="card_area">

                <form method="post" action="ProductCart">

                    <input type="hidden" name='id' value="$Detail->id" id="hidden_id">
                    <input type="submit" value="Add to Cart" class="main_btn" id="Add_order">
                </form>


              
              <a class="icon_btn" href="#">
                <i class="lnr lnr lnr-diamond"></i>
              </a>
              <a class="icon_btn" href="#">
                <i class="lnr lnr lnr-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="left: 73%;position: relative;" role="alert" aria-live="assertive" aria-atomic="true" class="toast " data-autohide="false">
        <div class="toast-header">
          <svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
            <rect fill="#007aff" width="100%" height="100%" /></svg>
          <strong class="mr-auto">Bootstrap</strong>
          <small>11 mins ago</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>
  </div>
  <!--================End Single Product Area =================-->



  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a
            class="nav-link"
            id="home-tab"
            data-toggle="tab"
            href="#home"
            role="tab"
            aria-controls="home"
            aria-selected="true"
            >Description</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="profile-tab"
            data-toggle="tab"
            href="#profile"
            role="tab"
            aria-controls="profile"
            aria-selected="false"
            >Specification</a
          >
        </li>


      </ul>
      <div class="tab-content" id="myTabContent">
        <div
          class="tab-pane fade"
          id="home"
          role="tabpanel"
          aria-labelledby="home-tab"
        >
          <p>
            Description
          </p>
        </div>
        <div
          class="tab-pane fade"
          id="profile"
          role="tabpanel"
          aria-labelledby="profile-tab"
        >
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>Width</h5>
                  </td>
                  <td>
                    <h5>128mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Height</h5>
                  </td>
                  <td>
                    <h5>508mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Depth</h5>
                  </td>
                  <td>
                    <h5>85mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Weight</h5>
                  </td>
                  <td>
                    <h5>52gm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Quality checking</h5>
                  </td>
                  <td>
                    <h5>yes</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Freshness Duration</h5>
                  </td>
                  <td>
                    <h5>03days</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>When packeting</h5>
                  </td>
                  <td>
                    <h5>Without touch of hand</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Each Box contains</h5>
                  </td>
                  <td>
                    <h5>60pcs</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        {{-- <div
          class="tab-pane fade show active"
          id="review"
          role="tabpanel"
          aria-labelledby="review-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="row total_rate">
                <div class="col-6">
                  <div class="box_total">
                    <h5>Overall</h5>
                    <h4>4.0</h4>
                    <h6>(03 Reviews)</h6>
                  </div>
                </div>
                <div class="col-6">
                  <div class="rating_list">
                    <h3>Based on 3 Reviews</h3>
                    <ul class="list">
                      <li>
                        <a href="#"
                          >5 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >4 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >3 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >2 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >1 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="review_list">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="<?= \App\Process\Template::asset('img/review-1.png')?>"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="<?= \App\Process\Template::asset('img/review-2.png')?>"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="<?= \App\Process\Template::asset('img/review-3.png')?>"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>Add a Review</h4>
                <p>Your Rating:</p>
                <ul class="list">
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                </ul>
                <p>Outstanding</p>
                <form
                  class="row contact_form"
                  action="contact_process.php"
                  method="post"
                  id="contactForm"
                  novalidate="novalidate"
                >
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Your Full name"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="number"
                        name="number"
                        placeholder="Phone Number"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        name="message"
                        id="message"
                        rows="1"
                        placeholder="Review"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button
                      type="submit"
                      value="submit"
                      class="btn submit_btn"
                    >
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

