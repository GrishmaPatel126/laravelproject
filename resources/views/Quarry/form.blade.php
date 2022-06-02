<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
        value="{{ $quarry->name ?? '' }}">
</div>

<div class="form-group">
    <label for="number">Number</label>
    <input type="text" name="number" id="number" class="form-control" placeholder="Number"
        value="{{ $quarry->number ?? '' }}">
</div>

<div class="form-group">
    <label for="address">Address</label>
    <Textarea type="textarea"class="form-control" name="address" id="address" rows="3">{{ $quarry->address ?? ' ' }}</Textarea>
</div>

<div class="form-group">
    <label for="material">Material</label>
    <select class="form-control" name="material" id="material">
        <option value="{{ $quarry->material ?? '' }}">{{ $quarry->material ?? 'Select Material' }}</option>
        <option value="Greet">Greet</option>
        <option value="Rubble">Rubble</option>
        <option value="Kapchi">Kapchi</option>
        <option value="Sand">Sand</option>
    </select>
</div>

<div class="form-group">
    <label for="material_type">Material Type</label>
    <select class="form-control" name="material_type" id="material_type" >
        <option value="{{ $quarry->material_type ?? '' }}">{{ $quarry->material_type ?? 'Select Type' }}</option>
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="1 & 2">1 & 2 (mix)</option>
        <option value=" Black sand"> Black Sand</option>
        <option value=" Normal sand"> Normal Sand</option>
    </select>
</div>

<div class="form-group">
    <label for="gross_weight">Gross Weight</label>
    <input type="text" name="gross_weight" id="gross_weight" class="form-control " placeholder="" value="{{ $quarry->gross_weight ?? '' }}">
    <label for="tar_weight">Tar Weight</label>
    <input type="text" name="tar_weight" id="tar_weight" class="form-control  " placeholder="" value="{{ $quarry->tar_weight ?? '' }}">
    <label for="net_weight">Net Weight</label>
    <input type="text" name="net_weight" id="net_weight" class="form-control" placeholder="" value="{{ $quarry->net_weight ?? '' }}">
</div>

<div class="form-group">
    <label for="payment">Payment Amount</label>
    <input type="text" name="payment" id="payment" class="form-control" placeholder="Payment" value=" {{ $quarry->payment ?? '' }}">
    <label for="payment_status">Payment Status</label>
    <select class="form-control" name="payment_status" id="payment_status" value = "">
        <option value="{{ $quarry->payment_status ?? '' }}">{{ $quarry->payment_status ?? 'Select Payment Status' }}</option>
        <option value="Payment Left">Payment Left</option>
        <option value="Payment Done">Payment Done</option>
    </select>
</div>

<div class="form-group">
  <label for="material_delivery_status">Delivery Status</label>
  <select class="form-control" name="material_delivery_status" id="material_delivery_status" value= " ">
    <option value="{{ $quarry->material_delivery_status ?? '' }}"> {{ $quarry->material_delivery_status ?? 'Select Delivery Status' }}</option>
    <option value="Deliverd">Deliverd</option>
    <option value="Not Delivered">Not Deliverd</option>
  </select>
</div>

<script type="text/javascript" src="{{ asset('bundle/js/form.js') }}"></script>


