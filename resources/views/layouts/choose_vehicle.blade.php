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
          <option value="$make->id">{{$make->name}}</option>
        @endforeach
		  </select>
	  </div>
	  <div class="col-md-4">
		  <label>Kilometros do Veículo</label>
		  <p><input class="contact-form-input" type="text" placeholder="kilometragem" name="vehicel-millage"></p>
	  </div>
  </div>
</div>
