		<!-- عملائنا -->
		<div class="customers-box">
			<h2>عملائنا</h2>
			<div class="row">
				@foreach ($partners as $partner)
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="{{asset('public/'.$partner->image)}}" alt="" />
				</div>
				@endforeach
			</div>
			<!-- /.row -->
		</div>
