@extends('pageUser.master')
@section('title',$customer->customername)
@section('content')
<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center" style="font-family:Constantia">
			{{$customer->customername}}
		</h2>
	</section>	

	<!-- Content page -->		
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">					
						<div class="flex-w w-full p-b-42">	
							<span class="fs-18 cl5 txt-center size-211">
								<span class=""></span>
							</span>										
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2" style="font-family: Constantia ">
									{{$customer->customername}}
								</span>							
							</div>
						</div>

						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-map-marker"></span>
							</span>						
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Address
								</span>

								<p class="stext-115 cl6 size-213 p-t-18">
									{{$customer->Address}}
								</p>

							</div>
						</div>

						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-phone-handset"></span>
							</span>

							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Phone Number 
								</span>

								<p class="stext-115 cl6 size-213 p-t-18">
									{{$customer->Phone}}
								</p>
							</div>
						</div>

						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-envelope"></span>
							</span>

							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Email
								</span>								
								<p class="stext-115 cl6 size-213 p-t-18">
									{{$customer->email}}
								</p>
								
							</div>
						</div>

						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<img class="" src="images/icons/gender.jpg" alt="ICON">
							</span>

							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Gender
								</span>								
								<p class="stext-115 cl6 size-213 p-t-18">
									{{$customer->Gender}}
								</p>
							</div>
						</div>						
						
						<div class="flex-w w-full">
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">									
								</span>
								<p class="stext-115 cl6 size-213 p-t-18">									
								</p>								
							</div>
						</div>	
						<div class="flex-w w-full">
							<a href="{{asset('/profile/edit')}}" class="flex-c-m stext-101 cl0 size-116 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer">
										Edit Profile
							</a>	
						</div>	
							
				</div>
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
						<div class="flex-w w-full p-b-42">	
							<span class="fs-18 cl5 txt-center size-211">
								<span class=""></span>
							</span>										
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2" >
									YOUR BILLS
								</span>							
							</div>
						</div>
						@foreach ($bills as $bill)
						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<img class="" src="images/icons/bills.png" alt="ICON">
							</span>

							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Bill code : B000{{$bill->ID}}
								</span>									
							</div>									
							<!--------------------------------------------------------------------->
							<div class="flex-w w-full p-b-42">
								<span class="fs-18 cl5 txt-center size-211">									
								</span>						
								<div class=" p-t-2">
									<span class="stext-115 cl6 size-213 p-t-18">										
									</span>
								</div>
							</div>
							<!--------------------------------------------------------------------->
							<div class="flex-w w-full p-b-42">
								<span class="fs-18 cl5 txt-center size-211">
									<img class="" src="images/icons/orderdate.png" alt="ICON">
								</span>						
								<div class=" p-t-2">
									<span class="stext-115 cl1 size-213 p-t-18">
										Order date : {{$bill->updated_at}}
									</span>
								</div>
							</div>
							<!--------------------------------------------------------------------->
							<div class="flex-w w-full p-b-42">
								<span class="fs-18 cl5 txt-center size-211">
									<img class="" src="images/icons/price.png" alt="ICON">
								</span>						
								<div class=" p-t-2">
									<span class="stext-115 cl1 size-213 p-t-18">
										SubTotal price : {{number_format($bill->TotalPrice)}} VND
									</span>
								</div>
							</div>			
							<!--------------------------------------------------------------------->
							<div class="flex-w w-full p-b-42">
								<span class="fs-18 cl5 txt-center size-211">
									<img class="" src="images/icons/status.png" alt="ICON">
								</span>						
								<div class=" p-t-2">
									<span class="stext-115 cl1 size-213 p-t-18">
										Status :
										@foreach($status as $st)
											@if ($st->ID == $bill->StatusID) {{$st->Name}}
											@endif
										@endforeach
									</span>
								</div>
							</div>	
							<!--------------------------------------------------------------------->
							<div class="flex-c-m flex-w p-b-18">
								<div class="p-t-18">
									<a href="{{asset('/billdetail/'.$bill->ID)}}" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
										View bill detail
									</a>
								</div>	
															
							</div>
			
						</div>
						@endforeach
				</div>
		</div>
	</section>	
		
	
@endsection