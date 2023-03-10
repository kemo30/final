
    <div class="form-group">
        <label>{{$label}}</label>
       
            <div class="mb-3">
                
                <textarea class="textarea @error($name)is-invalid @enderror" name="{{$name}}"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old($name,$value)}}</textarea>
            </div>
        
    </div>
    
