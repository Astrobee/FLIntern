
<div id="contact_me" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Contact me</h4>
              </div>
   
<div class="modal-body">
    <div style="font-family: 'El Messiri', sans-serif; font-size: 16px; ">

        <form action="/developer/mail_me" method="POST"  role="form">

                    {{ csrf_field() }}

                @if(Auth::check())

                    <input type="hidden" name="name" id="name" class="form-control" value="{{Auth::user()->first_name.' '.Auth::user()->last_name}}">
         
                    <input type="hidden" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">

                @else

                <div class="form-group">
                    <label for="name" >Name:</label>
                    <input type="text" name="name" id="name" class="form-control" style="font-size: 18px">
                </div>

                <div class="form-group">
                    <label for="email" >Email:</label>
                    <input type="email" name="email" id="email" class="form-control" style="font-size: 18px">
                </div>

                @endif

                 <div class="form-group">
                    <label for="message" >Messasge:</label>
                   <textarea class="form-control" id="message" style="font-size: 18px" name="message"></textarea>
                </div>

                 <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="publish">Send Message</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>       

                 <p>@include('errors.errors')</p>   
       </form>
    </div>
</div>

        </div>
    </div>
</div>
