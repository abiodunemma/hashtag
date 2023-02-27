@extends('layouts.profile')
@section('profile')

<div class="header_wrapper">
     
     <div class="cols_container">
     
         <div class="left_col">
            
             <div class="img_container">
              
             <img src="/img/dp.jpg" alt="dp" />
              

                 <span> </span>
             </div>
             @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          
                                </a>
             <h5>  {{ Auth::user()->name }}  <h5>
             
                
             
             <p>{{ Auth::user()->email }}</p>

             <div class="content">
                 <p>
                     Lorem ipsum dolor sit amet, consectetur
                      adipisicing elit. Vitae minus labore officia? Minima 
                      tempore debitis soluta praesentium libero?
                       Dolores eveniet odio dicta reiciendis ea alias 
                       ipsam rem ducimus minima! Nobis?
                 </p>

                 <ul>
                     <li><img src="/img/facebook.png" alt="facebook"></li>
                     <li><img src="/img/facebook.png" alt="facebook"></li>
                     <li><img src="/img/facebook.png" alt="facebook"></li>
                 </ul>
             </div>
         </div>
         <div class="right_col">
         <nav>
             <ul>
                 <li><a href="#">books</a></li>
                 <li><a href="#">comment</a></li>
                 <li><a href="#">about</a></li>
                 <li><a href="#">follow</a></li>
             </ul>
             <button>Update profile</button>
             <button>follow</button>
          
         </nav>

    <div class="photos">

     <img src="/img/dp.jpg" alt="photo">
     <img src="/img/dp.jpg" alt="photo">
     <img src="/img/dp.jpg" alt="photo">
    </div>     
     </div>
 </div>
 </div>


 @endguest
@endsection