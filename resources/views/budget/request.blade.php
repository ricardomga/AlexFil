@extends('layouts.master')

@section('content')

  <section class="inner-banner">
    <div class="thm-container clearfix">
      <h2 class="pull-left">Pedir Orçamento</h2>
      <ul class="breadcumb pull-right">
	      <li><a href="/"><i class="fa fa-home"></i> Início</a></li>
	      <li><span>Pedir Orçamento</span></li>
      </ul>
    </div>
  </section>

  <section class="service-page-content sec-padding">
    <div class="thm-container">
      <div class="row">
	      <div class="sec-title sec-padding">
	        <div class="col-md-12">
	          <h2><span>Peça já o seu orçamento!</span></h2>
	        </div>
	        <div class="col-md-12">
	          <p>Disponha sempre dos nossos serviços, sempre que necessitar, estamos sempre prontos a recebê-lo</p>
	        </div>
	      </div>
      </div>
    </div>
  </section>

  <section class="sec-padding appoinment-page">
    <div class="thm-container">
      <form action="/orcamentos" method="POST" class="contact-form appoinment-page-form">
	      {{ csrf_field() }}
	      <div class="row">
          @include('layouts.choose_vehicle')
          @include('layouts.select_services')
          <br/>
          @include('layouts.contact')
	      </div>
      </form>
    </div>
  </section>


@endsection
