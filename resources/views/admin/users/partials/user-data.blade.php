<div class="form-row">
    <div class="form-group col-lg-6">
        {!! Form::label('user-name', 'Nombre', ['class' => 'awesome']) !!}

        <input type="text" class="form-control" id="user-name" name="user-name">
    </div>
    <div class="form-group col-lg-6">
        <label for="user-email">Email</label>
        <input type="email" class="form-control" id="user-email" name="user-email">
    </div>
</div>

{{--<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
    </div>
</div>--}}

<button type="submit" class="d-none"></button>
