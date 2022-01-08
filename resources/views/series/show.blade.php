@extends('layouts.app')


@section('page-title', 'series')
@section('content')
<div class="serie">
    <div class="cont_show">
        <div class="first_cont">
            <div class="img">
              <img class="icon" src="{{asset('img/mobile-apps-with-react-native.svg')}}" alt="">
          </div>
            <div class="text_show">
               <h1>Build Mobile Apps With React Native and Expo</h1>
                    <p><b>React Native</b> is a mobile app development framework that allows you to build and deploy native mobile apps to both iOS and Android devices. As web developers, leveraging the existing popularity of React can benefit many people who have no experience building mobile apps. Developers only have to maintain one codebase and can quickly get started using existing JavaScript and CSS knowledge. <b>Expo</b> is a framework on top of React Native, which provides even more tools and services that make your development experience similar to the experience of creating web applications.</p>
                     <p>In this series, we’ll learn how to use tools within the React Native ecosystem to build robust and maintainable mobile apps. We’ll create a simple clone of the Twitter mobile app, along with a Laravel API backend that powers it.</p>
                      <div class="buttons">
                <div class="begin">Begin</div>
                <div class="add"><i class="fas fa-bookmark"></i>Add to watchlist</div>
                </div>
        </div>
        <div class="num_show">
            <div class="card_num">
                <div class="num">
                    <div class="circle_lesson">
                        <p class="lessons">24</p>
                    </div>
                    
                    <h4>Latest episode in this series</h4>
                    <p>Added Dec 24th, 2021</p>
                </div>
                <div class="conclusion">
                    <p class="title_cln">Conclusion</p>
                    <p>Thanks for making it this far! In this final video, we'll review what we've learned and the...</p>
                    <div class="watch">
                        
                        <div class="watch_text">
                            <img class="watch_play" src="{{asset('img/item-4.svg')}}" alt="">
                            <p>Watch</p>
                        </div> 
                    </div>
                </div>
                </div>
          </div>
        
        </div>
        
        <br>
        <div class="details">
            <div class="symbols_bottom">
                <div class="int">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line_bw"></div>
                    <p>Intermediate</p>
                </div>
                <div class="episodes">
                    <img class="ep_items" src="{{asset('img/item-01.svg')}}" alt="">
                    <p>24 episodes</p>
                </div>
                <div class="time_ep">
                    <img class="time_item" src="{{asset('img/item-03.svg')}}" alt="">
                    <p>6h 34m</p>
                </div>
                <div class="text_frame">
                    <p>Frameworks</p>
                </div>
            </div>
            <div class="social_icons">
                <img src="{{asset('img/logo-facebook.svg')}}" alt="">
                <img src="{{asset('img/twitter.svg')}}" alt="">
            </div>
        </div>
    </div>
</div>


@endsection