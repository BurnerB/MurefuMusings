<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('Person') ? 'has-error' : '' }}">
            {!! Form::label('Person') !!}
            {!! Form::text('Person', null, ['class' => 'form-control']) !!}

            @if($errors->has('Person'))
                <span class="help-block">{{ $errors->first('Person') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('Occupation') ? 'has-error' : '' }}">
            {!! Form::label('Occupation') !!}
            {!! Form::text('Occupation', null, ['class' => 'form-control']) !!}

            @if($errors->has('Occupation'))
                <span class="help-block">{{ $errors->first('Occupation') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('Testimony') ? 'has-error' : '' }} excerpt ">
            {!! Form::label('Testimony') !!}
            {!! Form::textarea('Testimony', null, ['class' => 'form-control']) !!}

            @if($errors->has('Testimony'))
                <span class="help-block">{{ $errors->first('Testimony') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $testimony->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.testimony.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
