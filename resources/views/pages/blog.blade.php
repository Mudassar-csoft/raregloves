@extends('layout.app')

@section('title', 'Blog - Rare Gloves')
@section('hero')

<!-- <div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Blog</h1>
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
        <h1>Latest <span class="d-block">News & Articles</span></h1>
        <p class="mb-4">
          Stay updated with the latest trends, tips, and insights from the world of 
          premium gloves. Our blog brings you expert advice, product highlights, 
          and stories that inspire performance and style.
        </p>
        <p>
          <a href="#" class="btn btn-secondary me-2">Read Blog</a>
          <a href="#" class="btn btn-white-outline">Latest Posts</a>
        </p>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="hero-img-wrap">
        <img src="images/glove1.png" class="img-fluid" alt="Blog Section">
      </div>
    </div>
  </div>
</div>

@endsection
@section('content')

<!-- Start Blog Section -->
<div class="blog-section">
  <div class="container">
    
    <div class="row">

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-1.jpg" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">Top 5 Gloves for Winter 2025</a></h3>
            <div class="meta">
              <span>by <a href="#">Faiqa Rafiq</a></span> <span>on <a href="#">Oct 12, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-2.avif" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">How to Choose the Right Sports Gloves</a></h3>
            <div class="meta">
              <span>by <a href="#">Ali Ahmed</a></span> <span>on <a href="#">Oct 8, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-3.jpg" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">Leather Care Tips for Long-Lasting Gloves</a></h3>
            <div class="meta">
              <span>by <a href="#">Sara Khan</a></span> <span>on <a href="#">Oct 2, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-4.webp" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">The Evolution of Rare Gloves Design</a></h3>
            <div class="meta">
              <span>by <a href="#">Faiqa Rafiq</a></span> <span>on <a href="#">Sep 25, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-5.jpg" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">Why Premium Gloves Improve Performance</a></h3>
            <div class="meta">
              <span>by <a href="#">Ahmed Raza</a></span> <span>on <a href="#">Sep 20, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-6.jpg" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">Behind the Scenes: How Rare Gloves Are Made</a></h3>
            <div class="meta">
              <span>by <a href="#">Sana Malik</a></span> <span>on <a href="#">Sep 14, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-7.jpg" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">Top Accessories to Pair with Your Gloves</a></h3>
            <div class="meta">
              <span>by <a href="#">Faiqa Rafiq</a></span> <span>on <a href="#">Sep 9, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-8.jpg" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">The Future of Smart Gloves Technology</a></h3>
            <div class="meta">
              <span>by <a href="#">Ali Ahmed</a></span> <span>on <a href="#">Sep 1, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-5">
        <div class="post-entry">
          <a href="#" class="post-thumbnail"><img src="images/blog-9.jpg" alt="Image" class="img-fluid"></a>
          <div class="post-content-entry">
            <h3><a href="#">How Rare Gloves Blend Style and Durability</a></h3>
            <div class="meta">
              <span>by <a href="#">Sara Khan</a></span> <span>on <a href="#">Aug 28, 2025</a></span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Blog Section -->

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