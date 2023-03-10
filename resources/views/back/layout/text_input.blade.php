<div class="form-group">
    <label>{{$label}}</label>
    <input value="{{old($name,$value)}}" type="{{$type}}" class="form-control  @error($name)is-invalid @enderror" placeholder="{{$placeholder}}" name="{{$name}}">
</div>