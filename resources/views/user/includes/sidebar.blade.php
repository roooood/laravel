<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{asset('user/images/faces/face1.jpg')}}" alt="profile">
          <span class="login-status online"></span>
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{$user->username()}}</span>
        </div>
        <i class="mdi {{$user->verified?'mdi-bookmark-check text-success':'mdi-bookmark-remove text-danger'}} nav-profile-badge"></i>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="/profile">
        <span class="menu-title">{{__("my profile")}}</span>
        <i class="mdi mdi-face menu-icon"></i>
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">{{__("my profile")}}</span>
        <i class="mdi mdi-face menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/profile/basic">{{__('basicInfo')}}</a></li>
          <li class="nav-item"> <a class="nav-link" href="/profile/advance">{{__('advanceInfo')}}</a></li>
          <li class="nav-item"> <a class="nav-link" href="/profile/account">{{__('accountInfo')}}</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Sample Pages</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item sidebar-actions">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-3"></h6>
        </div>
        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ {{__('makeAuction')}}</button>
        <div class="mt-4">
          <div class="border-bottom">
            <p class="text-secondary">Categories</p>
          </div>
          <ul class="gradient-bullet-list mt-4">
            <li>Free</li>
            <li>Pro</li>
          </ul>
        </div>
      </span>
    </li>
  </ul>
</nav>