@if(count($errors)>0)
<div style="margin-left:260px;margin-top:70px;">
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" >
        {{$error}}
    </div>
    @endforeach
</div>
@endif
<div style="margin-left:260px;margin-top:70px;">
    @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
        </div>
    @endif
</div>
<div style="margin-left:260px;margin-top:70px;">
    @if(session('danger'))
        <div class="alert alert-danger">
            {{session('success')}}
        </div>
    @endif
</div>

