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

                  </div>
                  <div class="main_menu">
                         <ul>
                                @foreach($menu as $item)
                                <li><a href="{{$item['href']}}">{{$item['text']}}</a></li>
                                @endforeach
                         </ul>
                  </div>
           </div>
    </nav>
 </header>
        <!-- /site header -->