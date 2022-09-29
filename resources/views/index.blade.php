@include('header');
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="category-item">
					<div class="category-img">
						<a href="blog-single.html"><img src="assets/images/cat/cat-4.jpg" alt="" class="img-fluid w-100"></a>
					</div>
					<div class="content">
						<a href="#" class="text-color text-uppercase font-sm letter-spacing font-extra">lifestyle</a>
						<h4><a href="blog-single.html">Managing your time In 3 easy steps</a></h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="category-item">
					<div class="category-img">
						<a href="blog-single.html"><img src="assets/images/cat/cat-2.jpg" alt="" class="img-fluid w-100"></a>
					</div>
					<div class="content">
						<a href="#" class="text-color text-uppercase font-sm letter-spacing font-extra">Fashion</a>
						<h4><a href="blog-single.html">The Ultimate Summer Hat Guide</a></h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="category-item">
					<div class="category-img">
						<a href="blog-single.html"><img src="assets/images/cat/cat-3.jpg" alt="" class="img-fluid w-100"></a>
					</div>
					<div class="content">
						<a href="#" class="text-color text-uppercase font-sm letter-spacing font-extra" >Travel</a>
						<h4><a href="blog-single.html">The trip you should take this fall</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-padding pt-4">
	<div class="container">
		<div class="row">
		<!--	<div class="col-lg-12">
				<div class="subscribe-home py-4 px-4 mb-5 bg-grey">
					<div class="form-group row align-items-center mb-0">
						<label for="colFormLabel" class="col-form-label col-sm-12 h4 col-lg-4">Subscribe for Newsletter</label>
						<div class="col-sm-6 col-lg-3">
							<input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel" placeholder="Full Name">
						</div>
						<div class="col-sm-6 col-lg-3">
							<input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel2" placeholder="Email Address">
						</div>
						<div class="col-sm-2">
							<a href="#" class="btn btn-dark">Subscribe</a>
						</div>
					</div>
				</div>
			</div> -->

			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="row">
					
					@forelse($articles as $article) 

					<div class="col-lg-6 col-md-6 col-sm-6">
						<article class="post-grid mb-5">
							<a class="post-thumb mb-4 d-block">
								<img src="assets/images/fashion/img-1.jpg" alt="" class="img-fluid w-100">
							</a>
							<span class="letter-spacing cat-name font-extra text-uppercase font-sm text-color ">Travel</span>
							<h3 class="post-title mt-1"><a href="blog-single.html">{{$article->title}}</a></h3>

							<span class="text-muted letter-spacing text-uppercase font-sm">{{$article->created_at}}</span>
							<div class="post-content mt-4">
								<p>{{Str::limit(strip_tags($article->content), 200)}}</p>

								<a href="blog-single.html" class="btn btn-grey mt-3"> read more</a>
							</div>
						</article>
					</div>

					@empty 

					Veri bulunamadı

					@endforelse

					




					
				</div>

				<div class="pagination mt-5 pt-4">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="#" class="active">1</a></li>
						<li class="list-inline-item"><a href="#">2</a></li>
						<li class="list-inline-item"><a href="#">3</a></li>
						<li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
					</ul>
				</div>
			</div>

			@include('sidebar');

			
		</div>
	</div>
</section>


@include('footer');