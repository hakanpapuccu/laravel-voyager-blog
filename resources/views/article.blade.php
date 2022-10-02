@include('header')

<section class="single-block-wrapper section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="single-post">
					<div class="post-header mb-5 text-center">
						<div class="meta-cat">
							<a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">{{$article->getCategory['name']}}</a>
							
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
						<div class="entry-content">
							
							{{strip_tags($article->content)}}

						</div>

						<div class="post-tags py-4"></div>


						<div class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

							

							<div class="post-share">
								{{$article->keywords}}	                    
							</div>

							<div class="list-posts-share">
								<a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
								<a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
								<a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
								<a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				
				
				
				

				

				

			</div>
			
			@include('sidebar')

		</div>
	</div>
</section>


@include('footer')