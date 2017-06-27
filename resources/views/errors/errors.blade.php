@if(count($errors))

          <div class="alert alert-danger" style="background: rgba(255,0,0,0.1); border: none; color: #ff3333;">
              <b style="color: #ff0000; background: rgba(255,255,255,0.5);">We couldn't process your request</b>
              <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>

          </div>    
@endif       