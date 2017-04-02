@extends('layouts.master')

@section('title', 'Personal Web Page')

@section('content')
<div class="wrapper">
  <div class="header" style="background-image:url('{{ asset('img/bg3.jpeg') }}')">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2">
  				<div class="brand">
  					<h1>Material Kit.</h1>
  					<h3>A Badass Bootstrap UI Kit based on Material Design.</h3>
  				</div>
  			</div>
  		</div>

  	</div>
  </div>
</div>

<div class="main main-raised">
  <div class="section">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>Completed with examples</h2>
                    <h4>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful kit.</h4>
                </div>
            </div>
    </div>
  </div>

<hr>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h3>Articles</h3>
						</div>


            <!-- Tabs with icons on Card -->
            @foreach($blogs as $blog)
            <div class="col-md-3">
            <div class="card card-nav-tabs card-raised section-tabs">

              <div class="content" style="background-image:url('{{ asset('img/'.$blog->image.'') }}'); background-size:cover; background-repeat:no-repeat;background-position:center center">
                <br><br><br><br><br><br><br>
                <h3 style="color:white">{{$blog->title}}</h3>
              </div>
                <div class="content">
                <div class="tab-content text-center">
                  <div class="tab-pane active" id="profile">
                    <p> {{ substr($blog->description,0,100)}} ... </p>
                  </div>
                  <a href="/blog/{{$blog->id}}" class="btn btn-simple btn-sm btn-info" role="button">Read More</a>
                  </div>
                </div>
              </div>
              </div>
            @endforeach





							</div>
						</div>
						<!-- End Tabs with icons on Card -->
					</div>


				</div>

		<!-- End Section Tabs -->





	    <div class="section" id="carousel">

		</div>



		<div class="section section-full-screen section-signup" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center; min-height: 700px;">
      <div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">

						<!-- Carousel Card -->
						<div class="card card-raised card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    @php
                    $i = 0;
                    @endphp
                    @foreach($sliders as $slider)
                      @if($i==0)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                      @else
                        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"></li>

                      @php
                      $i = $i + 1;
                      @endphp

                      @endif
                    @endforeach
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
                      @php
                      $i = 0;
                      @endphp
                      @foreach($sliders as $slider)
                        @if($i== 0)
                          <div class="item active">
                        @else
                          <div class="item">
                        @endif
                          <img src="{{ asset('img/'.$slider->image.'') }}" alt="{{$slider->location}}">
                          <div class="carousel-caption">
                            <h4><i class="material-icons">location_on</i> {{$slider->location}}</h4>
                          </div>
                        </div>
                        @php
                        $i = $i + 1;
                        @endphp
                      @endforeach
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>
						</div>
						<!-- End Carousel Card -->
					</div>
          <div class="container text-center">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center" style="color:white">
                      <h2>Completed with examples</h2>
                      <h4>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful kit.</h4>
                  </div>
              </div>
            </div>
				</div>
			</div>
		</div>





	</div>
@endsection
