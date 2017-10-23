<!--Images-->
<div class="container-fluid bgimg">
  <div class="container">
    <div class="row">
      <!--cột trái-->
      <div class="col background-center-item">
        <div class="">
          <h2 class="colortextwhite">Learn, Share, Build</h2>
          <h5 class="colortextwhite">Each month, over 50 million developers come to E-Learning to learn, share their knowledge, and build their careers.</h5>
          <h5 class="colortextwhite">Join the world’s largest developer community.</h5>
        </div>
      </div>
      <!--/cột trái-->

      <!--cột phải-->
      <div class="col background-center-item">
       <form action="index_submit" method="get" accept-charset="utf-8" @if(Auth::check()) style="visibility: hidden;" @endif>
        <div class="input-group form-group stylish-input-group1">
          <span class="input-group-addon col-sm-3">Display name</span>
          <input type="text" class="form-control" placeholder="Jonh">
        </div>
        <div class="input-group form-group stylish-input-group1">
          <span class="input-group-addon col-sm-3">Email address</span>
          <input type="text" class="form-control" placeholder="you@example.com">
        </div>
        <div class="input-group form-group stylish-input-group1">
          <span class="input-group-addon col-sm-3">Password</span>
          <input type="text" class="form-control" placeholder="******">
        </div>
        <div class="input-group">
          <div>
            <button type="submit" class="btn btn-default colr mr-sm-2">Sign Up</button>
          </div>
          <div class="col">
            <a href="#">
              <font>By registering, you agree to the privacy policy and terms of service.</font>
            </a>
          </div>
        </div>
        <br>
        <div>
          <form action="index_submit" method="get" accept-charset="utf-8" class="form-inline">
            <a href="http://google.com" target="_blank"> <img src="image/google.png" alt="" width="200px" height="35px"></a>
            <a href="http://facebook.com" target="_blank"><img src="image/facebook.png" alt="" width="200px" height="35px"></a>
          </form>
        </div>
      </form>
    </div>
    <!--/cột phải-->
  </div>
</div>
</div>
<!--/Images-->