@extends('layouts.authentication.master')
@section('titlee', 'Login')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/2.jpg')}}" alt="looginpage"></div>
    
      <div class="col-xl-5 p-0">
         <div class="login-card">
            <div>
                    @if(\Session::has('alert-login'))
                 <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                    <i data-feather="alert-triangle"></i>   {{Session::get('alert-login')}}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
                   @endif
                   @if(\Session::has('alert-logout'))
                   <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                      <i data-feather="alert-triangle"></i>   {{Session::get('alert-logout')}}
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                     @endif
               <div class="login-main">
                  <form class="theme-form" method="post" action="{{ route('login') }}">
                    @csrf
                     <h4>LOGIN SPP APP v2</h4>
                     <p>Enter your email & password to login</p>
                     <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" id="email" required="" name="email" placeholder="Test@gmail.com">
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password" required="" placeholder="*********">
                        <div class="show-hide" style="margin-top:16px"><span class="show"></span></div>
                    
                     </div>
                     <div class="form-group mb-0">
                        <div class="checkbox p-0">
                           <input id="checkbox1" type="checkbox">
                           <label class="text-muted" for="checkbox1">Remember password</label>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                     </div>
                
                     <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                     <div class="social mt-4">
                        <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                     </div>
                
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection