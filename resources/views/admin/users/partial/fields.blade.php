 <div class="form-group">
 {!! Form::label('firs_name', 'First Name') !!} 
 {!! Form::text('firs_name', null, ['class'=>'form-control', 'placeholder'=>'Type your Firs Name']) !!}
</div>
<div class="form-group">
 {!! Form::label('last_name', 'Last Name') !!} 
 {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Type your Last Name']) !!}
</div>
<div class="form-group">
 {!! Form::label('password', 'Password') !!}
 {!! Form::password('password',  ['class'=>'form-control', 'placeholder'=>'Type your Password']) !!}
</div>
<div class="form-group">
 {!! Form::label('email', 'E-Mail') !!} 
 {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Type your E-Mail']) !!}
</div>
<div class="form-group">
 {!! Form::label('type', 'User Rol') !!}
 {!! Form::select('type', 
 [''=>'Select Type', 'user'=>'user','admin'=>'admin','guest'=>'guest'],null,
  ['class'=>'form-control']) !!}
</div>