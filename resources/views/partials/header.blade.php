 @php
 $menu = [
       [
          'href'  => '/' , 
          'text' => 'home',
       ],
       [
          'href'  => 'topics' , 
          'text' => 'topics',
       ],
       [
          'href'  => 'series' , 
          'text' => 'series',
       ],
       [
          'href'  => 'larabits' , 
          'text' => 'larabits',
       ],
       [
          'href'  => 'discussions' , 
          'text' => 'discussions',
       ],
       [
          'href'  => 'podcast' , 
          'text' => 'podcast',
       ]
 ]

 @endphp
 
 
 <header id="site_header">
    <nav>
           <div class="container">
                  <div class="logo">
                     <a class="home" href="{{ route('home') }}"><img class="site_logo" src="{{asset('img/negative-logo.svg')}}" alt=""></a>
                  
                  </div>
                  <div class="main_menu">
                         <ul>
                                <li><a href="{{ route('topics') }}">Topics</a></li>
                                <li><a href="{{ route('series') }}">Series</a></li>
                                <li><a class="larabits" href="{{ route('larabits') }}">Larabits <span>New!</span></a></li>
                                <li><a href="{{ route('discussions') }}">Discussions</a></li>
                                <li><a href="{{ route('podcast') }}">Podcast</a></li>
                         </ul>
                  </div>
                  <div class="nav_menu">
                     <div class="search">
                        <img class="search_icon" src="{{asset('img/search_icon.svg')}}" alt="">
                     </div>
                     <span href="#">Sign in</span>
                     <span class="start" href="#">Get started</span>
                  </div>
           </div>
    </nav>
 </header>
        <!-- /site header -->