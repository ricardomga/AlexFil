@extends('layouts.master')

@section('content')

  <section class="inner-banner">
    <div class="thm-container clearfix">
      <h2 class="pull-left">Sobre Nós</h2>
      <ul class="breadcumb pull-right">
	      <li><a href="/"><i class="fa fa-home"></i> Início</a></li>
	      <li><span>Sobre nós</span></li>
      </ul>
    </div>
  </section>

  @include('layouts.make_appointment')

  <section class="about-tab-box sec-padding">
    <div class="container">
      <div class="row">
	      <div class="col-md-12">
	        <div class="tab-title-box">
	          <ul class="clearfix" role="tablist">
	            <li class="active" data-tab-name="history">
		            <a href="#history" aria-controls="history" role="tab" data-toggle="tab">História</a>
	            </li>
	            <li data-tab-name="mission">
		            <a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">Missão</a>
	            </li>
	            <li data-tab-name="vision">
		            <a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Visão</a>
	            </li>
	          </ul>
	        </div>
	        <div class="tab-content-box tab-content">
	          <div class="single-tab-content tab-pane fade in active row" id="history">
	            <div class="col-md-3 hidden-sm hidden-xs">
		            <img src="images/about-tab-1.jpg" alt="Awesome Image"/>
	            </div>
	            <div class="col-md-9">
		            <div class="content-box">
		              <p> Contar a história da oficina!!!</p>
		              <br>
		            </div>
	            </div>
	          </div>
	          <div class="single-tab-content tab-pane fade row" id="mission">
	            <div class="col-md-3 hidden-sm hidden-xs">
		            <img src="images/about-tab-1.jpg" alt="Awesome Image"/>
	            </div>
	            <div class="col-md-9">
		            <div class="content-box">
		              <p>Actuar no ramo automóvel como empresa comercial e de
		              reparação de veiculos com atitude de consultora de serviço ao
		              cliente desenvolvendo serviços de elevada qualidade, com
		              recurso a métodos e meios inovadores, com a vista à conquista
		              da satisfação total do cliente e à confiança dos fornecedores.</p>
		              <br>
		            </div>
	            </div>
	          </div>
	          <div class="single-tab-content tab-pane fade row" id="vision">
	            <div class="col-md-3 hidden-sm hidden-xs">
		            <img src="images/about-tab-1.jpg" alt="Awesome Image"/>
	            </div>
	            <div class="col-md-9">
		            <div class="content-box">
		              <p>Desenvolver a curto prazo um volume de negócios resultante
		              da afirmação local da imagem da empresa e dos seu serviços,
		              reconhecidos pelo cliente e pelos parceiros de negócios
		              através da melhor divulgação e estruturação dos serviços da
		              empresa.</p>
		              <br>
		            </div>
	            </div>
	          </div>
	        </div>
	      </div>
      </div>
    </div>
  </section>

  @include('layouts.team')

  @include('layouts.core_values')

@endsection

