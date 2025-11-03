@extends('layout.app')

@section('title', 'About - Rare Gloves')
@section('hero')

<!-- <div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>About Us</h1>
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
        <h1>About <span class="d-block">Rare Gloves</span></h1>
        <p class="mb-4">
          At Rare Gloves, we are passionate about crafting high-quality gloves that combine 
          performance, comfort, and style. With years of expertise and attention to detail, 
          our mission is to deliver products that empower professionals and enthusiasts alike.
        </p>
        <p>
          <a href="#" class="btn btn-secondary me-2">Learn More</a>
          <a href="#" class="btn btn-white-outline">Our Story</a>
        </p>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="hero-img-wrap">
        <img src="images/glove1.png" class="img-fluid" alt="About Rare Gloves">
      </div>
    </div>
  </div>
</div>

				
@endsection
@section('content')

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
	<!-- Start Team Section -->
<div class="untree_co-section">
  <div class="container">

    <div class="row mb-5">
      <div class="col-lg-5 mx-auto text-center">
        <h2 class="section-title">Our Team</h2>
      </div>
    </div>

    <div class="row">

      <!-- Start Column 1 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="images/person_1.jpg" class="img-fluid mb-5">
        <h3><a href="#"><span class="">Daniel</span> Carter</a></h3>
        <span class="d-block position mb-4">Founder & CEO</span>
        <p>Daniel founded Rare Gloves with a vision to blend craftsmanship and innovation,
          ensuring every glove offers unmatched comfort and performance.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
      </div>
      <!-- End Column 1 -->

      <!-- Start Column 2 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="images/person_2.jpg" class="img-fluid mb-5">
        <h3><a href="#"><span class="">Sophie</span> Allen</a></h3>
        <span class="d-block position mb-4">Head of Design</span>
        <p>Sophie leads our creative department, crafting glove designs that balance durability,
          elegance, and superior functionality for every purpose.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
      </div>
      <!-- End Column 2 -->

      <!-- Start Column 3 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="images/person_3.jpg" class="img-fluid mb-5">
        <h3><a href="#"><span class="">Michael</span> Ross</a></h3>
        <span class="d-block position mb-4">Production Manager</span>
        <p>Michael ensures every pair of gloves meets the highest quality standards through
          careful supervision of materials, stitching, and finishing.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
      </div>
      <!-- End Column 3 -->

      <!-- Start Column 4 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="images/person_4.jpg" class="img-fluid mb-5">
        <h3><a href="#"><span class="">Emily</span> Turner</a></h3>
        <span class="d-block position mb-4">Marketing Director</span>
        <p>Emily brings Rare Gloves to the world through creative campaigns, partnerships,
          and storytelling that highlight our passion for quality.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
      </div>
      <!-- End Column 4 -->

    </div>
  </div>
</div>

	<!-- End Team Section -->
 <!-- Start Testimonial Slider -->
<div class="testimonial-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="section-title">What Our Customers Say</h2>
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
                      <p>&ldquo;RareGloves has completely changed the way I shop for accessories online. The quality is outstanding, and their attention to detail is unmatched. My order arrived quickly and beautifully packaged!&rdquo;</p>
                    </blockquote>

                    <div class="author-info">
                      <div class="author-pic">
                        <img src="images/person-1.jpg" alt="Sophia Turner" class="img-fluid">
                      </div>
                      <h3 class="font-weight-bold">Sophia Turner</h3>
                      <span class="position d-block mb-3">Marketing Manager, BrandFlow</span>
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
                      <p>&ldquo;I’ve been a loyal customer for over a year now. Every product feels premium and long-lasting. The team is super responsive whenever I have questions — I couldn’t be happier!&rdquo;</p>
                    </blockquote>

                    <div class="author-info">
                      <div class="author-pic">
                        <img src="images/person-1.jpg" alt="Liam Anderson" class="img-fluid">
                      </div>
                      <h3 class="font-weight-bold">Liam Anderson</h3>
                      <span class="position d-block mb-3">Entrepreneur & Designer</span>
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
                      <p>&ldquo;The gloves I ordered are not just stylish but incredibly comfortable. I’ve received so many compliments. Thank you RareGloves for combining fashion with quality!&rdquo;</p>
                    </blockquote>

                    <div class="author-info">
                      <div class="author-pic">
                        <img src="images/person-1.jpg" alt="Ava Mitchell" class="img-fluid">
                      </div>
                      <h3 class="font-weight-bold">Ava Mitchell</h3>
                      <span class="position d-block mb-3">Fashion Blogger</span>
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