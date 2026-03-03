@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-lg-12">
            <h2 style="text-align: center" >Welcome To Admin Dashboard</h2>
        </div>
    </div>
	<div class="row">
	  <div class="col-sm-6 col-xl-3 col-lg-6">
		<div class="card o-hidden">
		  <div class="bg_dark b-r-4 card-body">
			<div class="media static-top-widget">
			  <div class="align-self-center text-center text-light"><i data-feather="phone"></i></div>
			  <div class="media-body"><span class="m-0 text-light">Whatsapp</span>
	
					<h4 class="mb-0 counter text-light">550</h4><i class="icon-bg text-light" data-feather="phone"></i>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-xl-3 col-lg-6">
		<div class="card o-hidden">
		  <div class="bg_dark b-r-4 card-body">
			<div class="media static-top-widget">
			  <div class="align-self-center text-center text-light"><i data-feather="phone"></i></div>
			  <div class="media-body"><span class="m-0 text-light">Phone</span>
	
					<h4 class="mb-0 counter text-light">879</h4><i class="icon-bg text-light" data-feather="phone"></i>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6 col-xl-3 col-lg-6">
		<div class="card o-hidden">
		  <div class="bg_dark b-r-4 card-body">
			<div class="media static-top-widget">
			  <div class="align-self-center text-center text-light"><i data-feather="message-circle"></i></div>
			  <div class="media-body"><span class="m-0 text-light">Inquiries</span>
	
					 <h4 class="mb-0 counter text-light">91</h4><i class="icon-bg text-light" data-feather="message-circle"></i>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-xl-3 col-lg-6">
		<div class="card o-hidden">
		  <div class="bg_dark b-r-4 card-body">
			<div class="media static-top-widget">
			  <div class="align-self-center text-center text-light"><i class="fa fa-car fa-lg" aria-hidden="true"></i></div>
			  <div class="media-body"><span class="m-0 text-light">Our Fleet</span>
					<h4 class="mb-0 counter text-light">43</h4><i class="icon-bg text-light" data-feather="shopping-bag"></i>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!--<div class="col-xl-6 xl-100 box-col-12">-->
	  <!--  <div class="widget-joins card widget-arrow">-->
	  <!--    <div class="row">-->
	  <!--      <div class="col-sm-6 pe-0">-->
	  <!--        <div class="media border-after-xs">-->
	  <!--          <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>-->
	  <!--            <h5 class="mb-0">Today</h5>-->
	  <!--          </div>-->
	  <!--          <div class="media-body ammountRight">-->
	  <!--            <h5 class="mb-0">RM <span class="counter"></span></h5>-->
	  <!--          </div>-->
	  <!--        </div>-->
	  <!--      </div>-->
	  <!--      <div class="col-sm-6 ps-0">-->
	  <!--        <div class="media">-->
	  <!--          <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>-->
	  <!--            <h5 class="mb-0">Month</h5>-->
	  <!--          </div>-->
	  <!--          <div class="media-body ammountRight ps-2">-->
	  <!--            <h5 class="mb-0">RM <span class="counter"></span></h5>-->
	  <!--          </div>-->
	  <!--        </div>-->
	  <!--      </div>-->
	  <!--      <div class="col-sm-6 pe-0">-->
	  <!--        <div class="media border-after-xs">-->
	  <!--          <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>-->
	  <!--            <h5 class="mb-0">Week</h5>-->
	  <!--          </div>-->
	  <!--          <div class="media-body ammountRight">-->
	  <!--            <h5 class="mb-0">RM <span class="counter"></span></h5>-->
	  <!--          </div>-->
	  <!--        </div>-->
	  <!--      </div>-->
	  <!--      <div class="col-sm-6 ps-0">-->
	  <!--        <div class="media">-->
	  <!--          <div class="align-self-center me-3 text-start"><span class="mb-1">Sale</span>-->
	  <!--            <h5 class="mb-0">Year</h5>-->
	  <!--          </div>-->
	  <!--          <div class="media-body ammountRight ps-2">-->
	  <!--            <h5 class="mb-0">RM <span class="counter"></span></h5>-->
	  <!--          </div>-->
	  <!--        </div>-->
	  <!--      </div>-->
	  <!--    </div>-->
	  <!--  </div>-->
	  <!--</div>-->
	  <!--<div class="col-xl-6 xl-100 box-col-12">-->
	  <!--  <div class="widget-joins card">-->
	  <!--    <div class="row">-->
	  <!--      <div class="col-sm-6 pe-0">-->
	  <!--        <div class="media border-after-xs">-->
	  <!--          <div class="align-self-center me-3">%</div>-->
	  <!--          <div class="media-body details ps-3 text_dark"><a href="#"><span class="mb-1 text_dark">Pending</span></a>-->
	  <!--            <h5 class="mb-0 counter"></h5>-->
	  <!--          </div>-->
	  <!--          <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="shopping-bag"></i></div>-->
	  <!--        </div>-->
	  <!--      </div>-->
			
	  <!--      <div class="col-sm-6 pe-0">-->
	  <!--        <div class="media border-after-xs">-->
	  <!--          <div class="align-self-center me-3">%</div>-->
	  <!--          <div class="media-body details ps-3 pt-0 text_dark"><a href="#"><span class="mb-1 text_dark">Done</span></a>-->
	  <!--            <h5 class="mb-0 counter"></h5>-->
	  <!--          </div>-->
	  <!--          <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="shopping-cart"></i></div>-->
	  <!--        </div>-->
	  <!--      </div>-->
	  <!--      <div class="col-sm-6 pe-0">-->
	  <!--        <div class="media">-->
	  <!--          <div class="align-self-center me-3">%</div>-->
	  <!--          <div class="media-body details ps-3 pt-0 text_dark"><a href="#"><span class="mb-1 text_dark">Cancel</span></a>-->
	  <!--            <h5 class="mb-0 counter"></h5>-->
	  <!--          </div>-->
	  <!--          <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="dollar-sign"></i></div>-->
	  <!--        </div>-->
	  <!--      </div>-->
	  <!--    </div>-->
	  <!--  </div>-->
	  <!--</div>-->
	</div>
</div>

@endsection

