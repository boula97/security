		<!-- Team Members -->
		<div class="team-members-box">  
			<h2>فريقنا</h2>
			<div class="row">
				@foreach ($teams as $team)
				<div class="col-lg-4 mb-4">
				  <div class="card h-100 text-center">
					<img class="card-img-top" src="{{asset('public/'.$team->image)}}" alt="" />
					<div class="card-body">
						<h4 class="card-title">{{$team->title}}</h4>
						<h6 class="card-subtitle mb-2 text-muted">{{$team->subtitle}}</h6>
						<p class="card-text">{!! $team->description  !!}</p>
					</div>
					<div class="card-footer">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/zahratalbistan?t=xWf6sJLW9pUGKz0NjyeWcg&s=08" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				  </div>
				</div>			
				@endforeach
			</div>
			<!-- /.row -->
		</div>