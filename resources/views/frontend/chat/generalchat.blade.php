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
        </div>
        <hr>
        <div class="modal-body">
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
			
	<!-- Main content -->
    <div class="row">
      <div class="col-lg-9 col-12">
            <div class="box">
              <div class="box-header">
              <div class="media align-items-top p-0">
                <a class="avatar avatar-lg status-success mx-0" href="#">
                <img src="{{asset('frontend/images/avatar/2.jpg')}}" class="rounded-circle" alt="...">
                </a>
                <div class="d-lg-flex d-block justify-content-between align-items-center w-p100">
                  <div class="media-body mb-lg-0 mb-20">
                    <p class="fs-16">
                      {{-- <a class="hover-primary" href="#"><strong>Theron Trump</strong></a> --}}
                      <h3 id="showUsername"></h3>
                    </p>
                  </div>
                  <div>
                  </div>
                </div>				  
              </div>             
              </div>

              <div class="box-body">
                {{-- <div class="chat-box-one">
                  <div class="card d-inline-block mb-3 float-start me-5 no-shadow bg-lighter max-w-p80">
                  <div class="position-absolute pt-1 pe-5 r-0">
                    <span class="text-muted">09:25</span>
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-row pb-2">
                      <div class="d-flex flex-grow-1">
                        <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                          <div>
                            <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-text-left ps-10">
                      <p class="mb-0">What do you think about our plans for this product launch? </p>
                    </div>
                  </div>
                  </div>	  
                  <div class="clearfix"></div>
                  
                </div> --}}
                <div class="chat-box-one2">
                  <div class="card d-inline-block mb-3 float-start me-5 no-shadow bg-lighter max-w-p80">
                    <div class="position-absolute pt-1 pe-5 r-0">
                      <span class="text-muted">09:25</span>
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-row pb-2">
                        <div class="d-flex flex-grow-1">
                          <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                            <div>
                              <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="chat-text-left ps-10">
                        <p class="mb-0">What do you think about our plans for this product launch? </p>
                      </div>
                    </div>
                    </div>
                  							  
                  
                  <div class="clearfix"></div>
                  <div class="card d-inline-block mb-3 float-start me-5 no-shadow bg-lighter max-w-p80">
                    <div class="position-absolute pt-1 pe-5 r-0">
                      <span class="text-muted">09:25</span>
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-row pb-2">
                        <div class="d-flex flex-grow-1">
                          <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                            <div>
                              <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="chat-text-left ps-10">
                        <p class="mb-0">What do you think about our plans for this product launch? </p>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
              <div class="box-footer">
                <div class="d-md-flex d-block justify-content-between align-items-center">
                  <input class="form-control b-0 py-10" type="text" placeholder="Say something...">
                  <div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">
                    <button type="button" class="waves-effect waves-circle btn btn-circle btn-primary">
                      <i class="mdi mdi-send"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="box">
          <div class="box-header no-border">
            <h4 class="box-title">
              Notification
            </h4>
          </div>
          <div class="box-body px-0 pt-0">
            <div class="notification-side">
              <div class="media-list media-list-hover">
                
                <div class="media">
                  <div class="media-body">
                  <p>
                    <a class="hover-primary" href="#"><strong>Online</strong></a>
                  </p>
                  <p>Proin iaculis eros non odio ornare efficitur.</p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-body">
                  <p>
                    <a class="hover-primary" href="#"><strong>News</strong></a>
                  </p>
                  <p>Proin iaculis eros non odio ornare efficitur.</p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-body">
                  <p>
                    <a class="hover-primary" href="#"><strong>Blog</strong></a>
                  </p>
                  <p>Proin iaculis eros non odio ornare efficitur.</p>
                  </div>
                </div>
                                      
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  <!-- /.content -->

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
                // alert(username.value);
                document.getElementById("showUsername").innerHTML = username.value;
              }
              // let username = document.getElementById('username').value;
                // $('#modal').removeClass('show');
                // alert(username);
            }
    </script>
    
    
@endsection