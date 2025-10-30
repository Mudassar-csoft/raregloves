@extends('layout.app')

@section('title', 'Services - Rare Gloves')
@section('hero')

<!-- <div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Services</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div> -->
				<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-5">
      <div class="intro-excerpt">
        <h1>Our <span class="d-block">Premium Services</span></h1>
        <p class="mb-4">
          We go beyond selling gloves — we provide customized solutions for every need. 
          From bulk orders and personalized designs to after-sale support, 
          our team ensures quality service and customer satisfaction at every step.
        </p>
        <p>
          <a href="#" class="btn btn-secondary me-2">View Services</a>
          <a href="#" class="btn btn-white-outline">Contact Us</a>
        </p>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="hero-img-wrap">
        <img src="images/glove1.png" class="img-fluid" alt="Our Services">
      </div>
    </div>
  </div>
</div>


@endsection
@section('content')

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
  <div class="container">

    <div class="row my-5">
      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/truck.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>Fast &amp; Reliable Delivery</h3>
          <p>Get your Rare Gloves delivered quickly and safely. We ensure timely shipping so you can start performing your best without delay.</p>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/bag.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>Seamless Shopping Experience</h3>
          <p>Shop effortlessly through our user-friendly store — from browsing to checkout, every step is designed for your convenience.</p>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/support.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>24/7 Customer Support</h3>
          <p>Our support team is always available to help with inquiries, product recommendations, and order assistance — anytime you need us.</p>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/return.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>Easy Returns &amp; Exchanges</h3>
          <p>Not satisfied? No problem. We offer hassle-free returns and exchanges to make sure you get the perfect fit and comfort.</p>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/truck.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>Worldwide Shipping</h3>
          <p>No matter where you are, Rare Gloves can reach you. We ship internationally with trusted delivery partners.</p>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/bag.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>Secure Payments</h3>
          <p>Your security is our priority. All transactions are protected with advanced encryption for safe and smooth payments.</p>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/support.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>Expert Guidance</h3>
          <p>Need help choosing the right gloves? Our experts are here to guide you based on your needs — from sports to safety gear.</p>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-4">
        <div class="feature">
          <div class="icon">
            <img src="images/return.svg" alt="Image" class="imf-fluid">
          </div>
          <h3>Quality Guaranteed</h3>
          <p>Each pair of Rare Gloves is crafted with precision and quality materials, ensuring long-lasting performance and durability.</p>
        </div>
      </div>

    </div>

  </div>
</div>

		<!-- End Why Choose Us Section -->
	<!-- Start Product Section -->
<div class="product-section pt-0">
  <div class="container">
    <div class="row">

      <!-- Start Column 1 -->
      <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
        <h2 class="mb-4 section-title">Designed for Performance & Comfort.</h2>
        <p class="mb-4">Every pair of Rare Gloves is crafted with precision, premium materials, and attention to detail — giving you the perfect blend of style, protection, and flexibility.</p>
        <p><a href="#" class="btn">Shop Now</a></p>
      </div> 
      <!-- End Column 1 -->

      <!-- Start Column 2 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="#">
          <img src="images/Classic_Leather_Gloves.png" class="img-fluid product-thumbnail">
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
        <a class="product-item" href="#">
          <img src="images/Premium_Safety_Gloves.png" class="img-fluid product-thumbnail">
          <h3 class="product-title">Premium Safety Gloves</h3>
          <strong class="product-price">$60.00</strong>

          <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
          </span>
        </a>
      </div>
      <!-- End Column 3 -->

      <!-- Start Column 4 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="#">
          <img src="images/Tactical_Pro_Gloves.webp" class="img-fluid product-thumbnail">
          <h3 class="product-title">Tactical Grip Gloves</h3>
          <strong class="product-price">$55.00</strong>

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

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section before-footer-section">
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

@endsection