@extends('layout.app')

@section('title', 'Home | RareGloves')
@section('hero')
<div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Premium Quality <span class="d-block">Rare Gloves Collection</span></h1>
          <p class="mb-4">
            Discover the perfect blend of comfort, durability, and style. 
            Our Rare Gloves are crafted with precision to give you a flawless grip and unmatched protection.
          </p>
          <p>
            <a href="#" class="btn btn-secondary me-2">Shop Now</a>
            <a href="#" class="btn btn-white-outline">Explore Collection</a>
          </p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="hero-img-wrap">
          <img src="images/glove1.png" class="img-fluid" alt="Rare Gloves">
        </div>
      </div>
    </div>
  </div>

  @endsection
@section('content')


<!-- Start Hero Section -->
			<!-- <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div> -->
		<!-- End Hero Section -->

       	<!-- Start Product Section -->
		<div class="product-section">
  <div class="container">
    <div class="row">

      <!-- Start Column 1 -->
      <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
        <h2 class="mb-4 section-title">Crafted with Premium Leather.</h2>
        <p class="mb-4">
          Experience the comfort and durability of Rare Gloves — expertly made with fine materials for protection, performance, and timeless style.
        </p>
        <p><a href="shop.html" class="btn">Explore</a></p>
      </div> 
      <!-- End Column 1 -->

      <!-- Start Column 2 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="cart.html">
          <img src="images/product-1.png" class="img-fluid product-thumbnail">
          <h3 class="product-title">Classic Leather Gloves</h3>
          <strong class="product-price">$45.00</strong>

          <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
          </span>
        </a>
      </div> 
      <!-- End Column 2 -->

      <!-- Start Column 3 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="cart.html">
          <img src="images/product-2.webp" class="img-fluid product-thumbnail">
          <h3 class="product-title">Sports Grip Gloves</h3>
          <strong class="product-price">$55.00</strong>

          <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
          </span>
        </a>
      </div>
      <!-- End Column 3 -->

      <!-- Start Column 4 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="cart.html">
          <img src="images/product-3.png" class="img-fluid product-thumbnail">
          <h3 class="product-title">Winter Thermal Gloves</h3>
          <strong class="product-price">$60.00</strong>

          <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
          </span>
        </a>
      </div>
      <!-- End Column 4 -->

    </div>
  </div>
</div>

		<!-- End Product Section -->
		 
		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6">
        <h2 class="section-title">Why Choose Rare Gloves</h2>
        <p>
          At Rare Gloves, we combine craftsmanship, comfort, and performance. 
          Our gloves are designed to protect your hands while adding a touch of premium style — perfect for work, sports, and everyday wear.
        </p>

        <div class="row my-5">
          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="images/truck.svg" alt="Image" class="imf-fluid">
              </div>
              <h3>Fast &amp; Free Shipping</h3>
              <p>
                Get your gloves delivered quickly and safely with our free nationwide shipping service.
              </p>
            </div>
          </div>

          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="images/bag.svg" alt="Image" class="imf-fluid">
              </div>
              <h3>Easy to Shop</h3>
              <p>
                Browse and order your favorite gloves in just a few clicks — simple, secure, and smooth shopping.
              </p>
            </div>
          </div>

          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="images/support.svg" alt="Image" class="imf-fluid">
              </div>
              <h3>24/7 Customer Support</h3>
              <p>
                Our dedicated support team is always ready to help you with any questions or order issues.
              </p>
            </div>
          </div>

          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="images/return.svg" alt="Image" class="imf-fluid">
              </div>
              <h3>Hassle-Free Returns</h3>
              <p>
                Not satisfied with your purchase? Easily return or exchange your gloves with no extra stress.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="img-wrap">
          <img src="images/why-choose-us.png" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</div>
		<!-- End Why Choose Us Section -->
		 <!-- Start We Help Section -->
		<div class="we-help-section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="imgs-grid">
          <div class="grid grid-1"><img src="images/img-grid-1.avif" alt="Rare Gloves"></div>
          <div class="grid grid-2"><img src="images/img-grid-2.webp" alt="Rare Gloves"></div>
          <div class="grid grid-3"><img src="images/img-grid-3.avif" alt="Rare Gloves"></div>
        </div>
      </div>
      <div class="col-lg-5 ps-lg-5">
        <h2 class="section-title mb-4">We Help You Find the Perfect Pair of Gloves</h2>
        <p>
          At Rare Gloves, we’re passionate about delivering protection, comfort, and style in every pair. 
          Whether you need gloves for riding, work, or fashion, our expert craftsmanship ensures a perfect fit and lasting durability.
        </p>

        <ul class="list-unstyled custom-list my-4">
          <li>High-quality leather and breathable materials</li>
          <li>Designed for maximum grip and flexibility</li>
          <li>Available in a wide range of styles and sizes</li>
          <li>Trusted by professionals and everyday users</li>
        </ul>
        <p><a href="#" class="btn">Explore</a></p>
      </div>
    </div>
  </div>
</div>

		<!-- End We Help Section -->
		 
		<!-- Start Popular Product -->
	<div class="popular-product">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="product-item-sm d-flex">
          <div class="thumbnail">
            <img src="images/product-1.png" alt="Image" class="img-fluid">
          </div>
          <div class="pt-3">
            <h3>Classic Leather Gloves</h3>
            <p>Crafted from premium leather for comfort and durability — perfect for daily wear or riding.</p>
            <p><a href="#">Read More</a></p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="product-item-sm d-flex">
          <div class="thumbnail">
            <img src="images/product-2.webp" alt="Image" class="img-fluid">
          </div>
          <div class="pt-3">
            <h3>Sports Grip Gloves</h3>
            <p>Designed for athletes and fitness lovers — offering superior grip, comfort, and breathability.</p>
            <p><a href="#">Read More</a></p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="product-item-sm d-flex">
          <div class="thumbnail">
            <img src="images/product-3.png" alt="Image" class="img-fluid">
          </div>
          <div class="pt-3">
            <h3>Winter Thermal Gloves</h3>
            <p>Keep your hands warm and protected with our insulated gloves — ideal for cold weather comfort.</p>
            <p><a href="#">Read More</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
		<!-- End Popular Product -->
		 <!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <h2 class="section-title">Latest from Rare Gloves</h2>
      </div>
      <div class="col-md-6 text-start text-md-end">
        <a href="#" class="more">View All Posts</a>
      </div>
    </div>

    <div class="row">

      <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-1.png" alt="Rare Gloves Blog" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">How to Choose the Perfect Gloves for Your Work</a></h3>
            <div class="meta">
              <span>by <a href="#">Team Rare Gloves</a></span> <span>on <a href="#">Oct 15, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-2.jpg" alt="Rare Gloves Blog" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">Top 5 Leather Gloves for Riders</a></h3>
            <div class="meta">
              <span>by <a href="#">Rare Gloves Experts</a></span> <span>on <a href="#">Oct 10, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-3.jpg" alt="Rare Gloves Blog" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">Maintaining Your Gloves for Long-Lasting Durability</a></h3>
            <div class="meta">
              <span>by <a href="#">Rare Gloves Team</a></span> <span>on <a href="#">Oct 05, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

		<!-- End Blog Section -->	
		 
		<!-- Start Footer Section -->
		
<!-- End Footer Section -->

      

@endsection
