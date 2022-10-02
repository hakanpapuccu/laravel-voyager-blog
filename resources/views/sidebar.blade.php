<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="sidebar sidebar-right">
		<div class="sidebar-wrap mt-5 mt-lg-0">
			<div class="sidebar-widget about mb-5 text-center p-3">
				<div class="about-author">
					<img src="storage/{{$Users->avatar}}" alt="" class="img-fluid">
				</div>
				<h4 class="mb-0 mt-4">{{$Users->name}}</h4>
				<p>Travel Blogger</p>
				<p>{{Str::limit($Users->about, 200)}}</p>

			</div>

			<div class="sidebar-widget follow mb-5 text-center">
				<h4 class="text-center widget-title">Follow Me</h4>
				<div class="follow-socials">
					<a href="#"><i class="ti-facebook"></i></a>
					<a href="#" ><i class="ti-twitter"></i></a>
					<a href="#" ><i class="ti-instagram"></i></a>
					<a href="#"><i class="ti-youtube"></i></a>
					<a href="#"><i class="ti-pinterest"></i></a>
				</div>
			</div>

			<div class="sidebar-widget mb-5 ">
				<h4 class="text-center widget-title">YOU MAY ALSO LİKE</h4>

				@forelse($randarticles as $randarticle) 

				<div class="media border-bottom py-3 sidebar-post-item">
					<a href="#"><img class="mr-4" src="storage/{{$randarticle->image}}" alt=""></a>
					<div class="media-body">
						<span class="text-muted letter-spacing text-uppercase font-sm">{{$randarticle->created_at->diffForHumans()}}</span>
						<h4 ><a href="blog-single.html">{{$randarticle->title}}</a></h4>
					</div>
				</div>

				@empty 

				Veri bulunamadı

				@endforelse	
				
			</div>


			<div class="sidebar-widget category mb-5">
				<h4 class="text-center widget-title">Kategoriler</h4>
				<ul class="list-unstyled">

					@forelse($categories as $category)

					<li class="align-items-center d-flex justify-content-between">
						<a href="#">{{$category->name}}</a>
						<span>{{$category->countArticle()}}</span>
					</li>

					@empty

					yok

					@endforelse


				</ul>
			</div>

		<!--	<div class="sidebar-widget subscribe mb-5">
				<h4 class="text-center widget-title">Newsletter</h4>
				<input type="text" class="form-control" placeholder="Email Address">
				<a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
			</div> -->

			<div class="sidebar-widget sidebar-adv mb-5">
				<a href="#"><img src="images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
			</div>

		</div>
	</div>
</div>