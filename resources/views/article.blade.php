@include('header')


<section class="section-padding pt-4">
	<div class="container">
		<div class="row">


			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="row">
					
					<section class="single-block-wrapper section-padding">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
									<div class="single-post">
										<div class="post-header mb-5 text-center">
											<div class="meta-cat">
												
												<a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"  href="#">{{$article->getCategory['name']}}}</a>
											</div>
											<h2 class="post-title mt-2">
												{{$article->title}}
											</h2>

											<div class="post-meta">
												
												<span class="text-uppercase font-sm letter-spacing-1">{{$article->created_at->diffForHumans()}}</span>
											</div>
											<div class="post-featured-image mt-5">
												<img src="storage/{{$article->image}}" class="img-fluid w-100" alt="featured-image">
											</div>
										</div>
										<div class="post-body">
											<div class="entry-content">{{$article->content}}</div>

											<div class="post-tags py-4">
												<a href="#">{{$article->keywords}}</a>
												
											</div>


											
										</div>
									</div>

									<div class="post-author d-flex my-5">
										<div class="author-img">
											<img alt="" src="storage/{{$Users->image}}" class="avatar avatar-100 photo" width="100" height="100">	
										</div>

										<div class="author-content pl-4">
											<h4 class="mb-3"><a href="#" title="" rel="author" class="text-capitalize">{{$Users->name}}</a></h4>
											<p>{{Str::limit($Users->about, 100)}}</p>

											<a target="_blank" class="author-social" href="#"><i class="ti-facebook"></i></a>
											<a target="_blank" class="author-social" href="#"><i class="ti-twitter"></i></a>
											<a target="_blank" class="author-social" href="#"><i class="ti-google-plus"></i></a>
											<a target="_blank" class="author-social" href="#"><i class="ti-instagram"></i></a>
											<a target="_blank" class="author-social" href="#"><i class="ti-pinterest"></i></a>
											<a target="_blank" class="author-social" href="#"><i class="ti-tumblr"></i></a>
										</div>
									</div>
									
									<div class="related-posts-block mt-5">
										<h3 class="news-title mb-4 text-center">
											You May Also Like
										</h3>
										<div class="row">
											
											

											<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="post-block-wrapper">
													<a href="blog-single.html">
														<img class="img-fluid" src="images/fashion/img-3.jpg" alt="post-thumbnail"/>
													</a>
													<div class="post-content mt-3">
														<h5 >
															<a href="blog-single.html">Snow and Freezing Rain in Paris Forces the</a>
														</h5>
													</div>
												</div>
											</div>

										</div>
									</div>

									@include('sidebar')						

								</div>
								
							</div>
						</div>
					</section>	
					




					
				</div>

				
			</div>

			

		</div>
	</div>
</section>

@include('footer')