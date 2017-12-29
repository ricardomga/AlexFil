<script>

 function initMap() {
   var myLatLng = {lat: 41.546143, lng: -8.509533};
   var map = new google.maps.Map(document.getElementById('map'), {
     center: myLatLng,
     zoom: 17
   });

   var marker = new google.maps.Marker({
     map: map,
     position: myLatLng,
     title: "Alexfil, Lda"
   });
   marker.setMap(map);
 }
</script>
@extends('layouts.master')

@section('content')

  <section class="inner-banner">
    <div class="thm-container clearfix">
      <h2 class="pull-left">Contactos</h2>
      <ul class="breadcumb pull-right">
	      <li><a href="/"><i class="fa fa-home"></i> Início</a></li>
	      <li><span>Contactos</span></li>
      </ul>
    </div>
  </section>

  @include('layouts.make_appointment')

  <section class="sec-padding contact-page-content ">
    <div class="thm-container">
      <div class="sec-title">
        <h2><span>Entre em contacto</span></h2>
      </div>
      <br/>
      <br/>
      <div class="row">
        <div class="col-md-3">
	        <div class="contact-info">
	          <ul>
	            <li>
	              <div class="icon-box">
		              <i class="fa fa-map-marker"></i>
	              </div>
	              <div class="content">
		              <p>Rua Quinta das Matas nº252<br> 4755-417 Pousa-Barcelos</p>
	              </div>
	            </li>
	          </ul>
	        </div>
        </div>
        <div class="col-md-3">
	        <div class="contact-info">
	          <ul>
	            <li>
	              <div class="icon-box">
		              <i class="fa fa-envelope-o"></i>
	              </div>
	              <div class="content">
		              <p>geral@alexfil.pt</p>
	              </div>
	            </li>
	          </ul>
	        </div>
        </div>
        <div class="col-md-3">
	        <div class="contact-info">
	          <ul>
	            <li>
	              <div class="icon-box">
		              <i class="fa fa-phone"></i>
	              </div>
	              <div class="content">
		              <p>934678773<br>934678772<br/>919237459</p>
	              </div>
	            </li>
	          </ul>
	        </div>
        </div>
        <div class="col-md-3">
	        <div class="contact-info">
	          <ul>
	            <li>
	              <div class="icon-box">
		              <i class="fa fa-calendar"></i>
	              </div>
	              <div class="content">
                  <p>Segunda a Sábado</p>
		              <p>09:00 às 19:00</p>
	              </div>
	            </li>
	          </ul>
	        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="map"></div>
          <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD9vBeEWzadKVJTpf9N1SKb9GPazl5oSM&callback=initMap">
          </script>
          <br/>
          <br/>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
            <h3>Envie uma mensagem</h3>
            <br/>
            <form class="contact-form contact-page">
              <div class="form-group">
                <input type="text" class="contact-form-input" name="name" placeholder="Nome">
              </div>
              <div class="form-group">
                <input type="email" class="contact-form-input" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="contact-form-input" placeholder="Assunto">
              </div>
              <div class="form-group">
                <textarea name="message" placeholder="Mensagem" class="contact-form-textarea">
                </textarea>
              </div>
              <button type="submit" class="thm-btn">Submeter <i class="fa fa-arrow-right"></i></button>
            </form>
          </div>
      </div>
    </div>
  </section>
@endsection
