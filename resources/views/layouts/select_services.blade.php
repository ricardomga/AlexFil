<div class="row">
	<div class="col-md-12 special-checkbox-wrapper form-group">
	  <label>Selecione os Serviços pretendidos</label>
	  <ul class="special-checkbox">
		  @foreach($services as $service)
		    <li class="col-md-3 col-sm-6 col-xs-12">
	        <span class="input-checker">
		        <input type="checkbox" name="apt_vehicle_services_needed" value="{{$service->id}}">
	        </span>
		      {{$service->name}}
		    </li>
		  @endforeach
	  </ul>
	</div>
</div>
