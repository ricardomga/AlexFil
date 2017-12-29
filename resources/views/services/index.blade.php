@extends('layouts.master')

@section('content')

  <section class="inner-banner">
    <div class="thm-container clearfix">
      <h2 class="pull-left">Serviços</h2>
      <ul class="breadcumb pull-right">
	<li><a href="/"><i class="fa fa-home"></i> Início</a></li>
	<li><span>Serviços</span></li>
      </ul>
    </div>
  </section>

  @include('layouts.make_appointment')

  <section class="services-section service-page sec-padding">
    <div class="thm-container">
      <div class="sec-title">
	<h2><span>Os nossos serviços</span></h2>
	<br>
      </div>

      <div class="row">
	@foreach($services as $service)
	  <div class="col-md-4 col-sm-6">
	    <div class="single-services img-cap-effect">
	      <div class="img-box">
		<img src="images/services-page/1.jpg" alt={{ $service->image }}/>
		<div class="img-caption">
		  <div class="box-holder">
		  </div>
		</div>
	      </div>
	      <h3><span>{{ $service->name }}</span></h3>
	      <p>{{ $service->description }}</p>
	      <a href={{ "/servicos/" . $service->id }}>Saber Mais <i class="fa fa-angle-right"></i></a>
	    </div>
	  </div>
	@endforeach

      </div>
  </section>


  <section class="fact-counter-wrapper">
    <div class="thm-container">
      <div class="row">
	<div class="col-md-3 col-sm-6">
	  <div class="single-fact-counter">
	    <div class="counter">
	      <span class="timer"  data-from="10" data-to="9035" data-speed="5000" data-refresh-interval="50">9035</span>
	    </div>
	    <p>Clientes Satisfeitos</p>
	  </div>
	</div>
	<div class="col-md-3 col-sm-6">
	  <div class="single-fact-counter">
	    <div class="counter">
	      <span class="timer"  data-from="0" data-to="523" data-speed="5000" data-refresh-interval="50">523</span>
	    </div>
	    <p>Motores Reparados</p>
	  </div>
	</div>
	<div class="col-md-3 col-sm-6">
	  <div class="single-fact-counter">
	    <div class="counter">
	      <span class="timer"  data-from="0" data-to="344" data-speed="5000" data-refresh-interval="50">344</span>
	    </div>
	    <p>Inspeções Realizadas</p>
	  </div>
	</div>
	<div class="col-md-3 col-sm-6">
	  <div class="single-fact-counter">
	    <div class="counter">
	      <span class="timer"  data-from="100" data-to="5967" data-speed="5000" data-refresh-interval="50">5967</span>
	    </div>
	    <p>Carros Vendidos</p>
	  </div>
	</div>
      </div>
    </div>
  </section>
  <br/>
@endsection
