<!-- title Form imput -->
<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',NULL,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Body:') !!}
    {!! Form::textarea('body',NULL,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('publish_at','Publish On') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
