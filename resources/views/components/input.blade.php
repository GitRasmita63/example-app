
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <div class="form-group">
        <label for="">{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" id="" class="form-control">
        <span class="text-danger">
         @error('password')
              {{$message}}
         @enderror
       </span>
     </div>
