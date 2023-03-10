<div class="form-group">
    <label>{{$label}}</label>
    <textarea class="form-control @error($name)is-invalid @enderror" rows="3" placeholder="{{$placeholder}}" name="{{$name}}">{{old($name,$value)}}</textarea>
</div>