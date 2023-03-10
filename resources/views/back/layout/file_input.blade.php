<div class="form-group">
<label>{{$label}}</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file"  class="custom-file-input @error($name)is-invalid @enderror"  name="{{$name}}" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
       
    </div>
</div>