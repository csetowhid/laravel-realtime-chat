@extends('frontend.layouts.app')
@section('chatname')
    General Chat
@endsection
@section('content')
<section class="content">
    <!-- Modal -->
  <div class="modal modal-fill fade" id="modal" data-backdrop="false" id="modal-fill" tabindex="-1" style="background-color: #737373">
    {{-- <div class="modal modal-fill fade show" data-backdrop="false" id="modal-fill" tabindex="-1" aria-modal="true" role="dialog" style="display: block; padding-left: 0px;"> --}}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">General Chat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <hr>
        <div class="modal-body">
          {{-- <p>Your content comes here</p> --}}
          <form action="">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <h5>Enter Username</h5>
                  <div class="controls">
                    <input type="text" name="username" id="username" class="form-control" required>
                    <br>
                    <span class="d-none text-danger" id="validate">Please Enter a Username</span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" onclick="closeButton()" class="btn btn-success float-end">Subnit</button></button>
        </div>
      </div>
    </div>
  </div>
<!-- /.modal -->
			
	<div class="row">

		</div>

</section>
@endsection
@section('script')
    <script>
        window.addEventListener('load', (event) => {
            $('#modal').addClass('show');
            });

            let username = document.getElementById("username");
            function closeButton(){
              if(username.value == ''){
                $('#validate').removeClass('d-none');
                $('#validate').addClass('d-block');
              }else{
                $('#modal').removeClass('show');
                alert(username.value);
              }
              // let username = document.getElementById('username').value;
                // $('#modal').removeClass('show');
                // alert(username);
            }
    </script>
    
    
@endsection