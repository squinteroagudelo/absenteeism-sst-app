<div class="form-row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control form-control-sm',  'id' => "name", 'placeholder' => 'Nombre usuario']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('email', 'Correo electrónico') !!}
        {!! Form::email('email', null, ['class' => 'form-control form-control-sm',  'id' => "email", 'placeholder' => 'Correo electrónico']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control form-control-sm',  'id' => "password", 'placeholder' => 'Contraseña']) !!}
    </div>
    <div class="form-group col-lg-6 d-flex align-items-center justify-content-end m-0 mt-lg-3 text-right">
        <div>
            {!! Form::button('Cancelar', ['class' => 'btn btn-sm bg-danger', 'data-dismiss' => 'modal']) !!}
            {!! Form::submit('Guardar', ['class' => 'btn btn-sm bg-navy']) !!}
        </div>
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
