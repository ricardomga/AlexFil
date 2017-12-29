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

  <section class="service-page-content sec-padding">
    <div class="thm-container">
      <div class="row">
	      <div class="sec-title sec-padding">
	        <div class="col-md-12">
	          <h2><span>Faça já a sua marcação!</span></h2>
	        </div>
	        <div class="col-md-12">
	          <p>Disponha sempre dos nossos serviços sempre que necessitar, estamos sempre prontos a recebê-lo</p>
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
	        <div class="vehicle-wrapper clearfix form-group">
	          <div class="row">
	            <div class="col-md-4">
		            <label>Ano do Veículo</label>
		            <div class="vehicle-year">
	                <div class="thm-spinner" data-min-value="1950" data-max-value="2018" data-default-value="2010">
	                  <!-- loaded content via jquery ui -->
	                </div>
	                <input type="text" readonly class="vehicle-year-input">
		            </div>
	            </div>
	            <div class="col-md-4">
		            <label>Marca do Veículo</label>
		            <select class="select-menu" name="selectMenu">
		              <option value="-1" selected="selected">Escolha...</option>
                  @foreach ($makes as $make)
                    <option value="$make->id">{{$make->make}}</option>
                  @endforeach
		            </select>
	            </div>
	            <div class="col-md-4">
		            <label>Kilometros do Veículo</label>
		            <p><input class="contact-form-input" type="text" placeholder="kilometragem" name="vehicel-millage"></p>
	            </div>
	          </div>
	        </div>
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
	        <div class="row">
	          <div class="col-md-12 special-checkbox-wrapper form-group">
	            <label>Selecione os Serviços pretendidos</label>
	            <ul class="special-checkbox">
		            @foreach($services as $service)
		              <li class="col-md-3 col-sm-6 col-xs-12">
	                  <span class="input-checker">
		                  <input type="checkbox" name="apt_vehicle_services_needed" value="">
	                  </span>
		                {{$service->name}}
		              </li>
		            @endforeach
	            </ul>
	          </div>
	        </div>
	        <div class="row">
	          <div class="main-cf form-group clearfix">
	            <div class="col-md-12"><label>Detalhes de Contacto</label></div>
	            <div class="col-md-6">
		            <p><input class="contact-form-input" type="text" placeholder="Primeiro Nome" name="fname"></p>
	            </div>
	            <div class="col-md-6">
		            <p><input class="contact-form-input" type="text" placeholder="Último Nome" name="lname"></p>
	            </div>

	            <div class="col-md-6">
		            <p><input class="contact-form-input" type="text" placeholder="Email" name="email"></p>
	            </div>
	            <div class="col-md-6">
		            <p><input class="contact-form-input" type="text" placeholder="Número Telm." name="phone"></p>
	            </div>
	            <div class="col-md-12">
		            <p><textarea class="contact-form-textarea" name="message" placeholder="Mensagem"></textarea></p>
		            <button type="submit" class="thm-btn">Submeter<i class="fa fa-arrow-right"></i></button>
	            </div>
	          </div>
	        </div>
	      </div>
      </form>
    </div>
  </section>


@endsection
