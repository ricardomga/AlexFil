@extends('layouts.master')

@section('content')

  <section class="inner-banner">
    <div class="thm-container clearfix">
      <h2 class="pull-left">Marcar Serviço</h2>
      <ul class="breadcumb pull-right">
	      <li><a href="/"><i class="fa fa-home"></i> Início</a></li>
	      <li><span>Marcar Serviço</span></li>
      </ul>
    </div>
  </section>

  @include('layouts.make_appointment')

  <section class="service-page-content sec-padding">
    <div class="thm-container">
      <div class="row">
	      <div class="sec-title sec-padding">
	        <div class="col-md-12">
	          <h2><span>Faça já a sua marcação!</span></h2>
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
      <form action="/marcacoes" method="POST" class="contact-form appoinment-page-form">
	      {{ csrf_field() }}
	      <div class="row">
	          <div class="row">
	            <div class="date-wrapper form-group clearfix">
	              <div class="col-md-6">
		              <label>Data desejada</label>
		              <input class="contact-form-input date-picker" type="text" placeholder="DD/MM/AAAA">
	              </div>
	              <div class="col-md-6">
		              <label>Hora desejada</label>
		              <select class="select-menu" name="selectMenu">
		                <option value="" selected="selected">Escolha</option>
		                <option value="09:00">09:00</option>
		                <option value="09:00">09:30</option>
		                <option value="10:00">10:00</option>
		                <option value="10:00">10:30</option>
		                <option value="11:00">11:00</option>
		                <option value="11:00">11:30</option>
		                <option value="12:00">12:00</option>
		                <option value="14:00">14:00</option>
		                <option value="14:00">14:30</option>
		                <option value="15:00">15:00</option>
		                <option value="15:00">15:30</option>
		                <option value="16:00">16:00</option>
		                <option value="16:00">16:30</option>
		                <option value="17:00">17:00</option>
		                <option value="17:00">17:30</option>
		                <option value="18:00">18:00</option>
		              </select>
	              </div>
	            </div>
	          </div>
            <br/>
            @include('layouts.choose_vehicle')
            @include('layouts.select_services')
            <br/>
            @include('layouts.contact')
	      </div>
      </form>
    </div>
  </section>


@endsection
