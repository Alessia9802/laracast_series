@extends('layouts.app')



@section('page-title', 'series')



<!-- @section('custom-css')
<link rel="stylesheet" href="{{asset('css/layout.css')}}"> -->
@section('content')

<div class="app_section">
    <h3>Recently Updated</h3>
    <p>Curious what's new at Laracasts? The following series have been recently <br> updated.</p>
    
    <div class="mobile">
        <p class="frame">Frameworks</p>
        <h2><a href="{{ route('serie', ['id' => 1]) }}">Build Mobile Apps With React Native and Expo</a></h2>
        <p>React Native is a mobile app development framework that allows you to build and deploy native mobile apps to both iOS and Android devices. As web developers, leveraging the existing popularity of React can benefit many people who have no...</p>
        <div class="symbols">
            <div class="item">
                <img class="items" src="{{asset('img/item-02.svg')}}" alt="">
                <div>Intermediate <br> Difficulty</div>
            </div>
            <div class="item">
                <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                <div>24 lessons</div>
            </div>
            <div class="item">
                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                <div>6h 24m</div>
            </div>
        </div>
        <div class="play_series">
            <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
            <span>Start series</span>
        </div>
    </div>
    
    
    <div class="mg-top">
        <div class="tool">
            <p class="frame">Tooling</p>
            <h2>GraphQL with Laravel and Vue</h2>
            <p>GraphQL is often looked at as the successor to REST APIs. It provides a powerful query language and allows you to make requests for exactly the information you want, nothing more and nothing less. Many services now offer GraphQL APIs making it easier...</p>
            <div class="symbols">
                <div class="item">
                 <img class="items" src="{{asset('img/item-02.svg')}}" alt="">
                 <div>Advanced <br> Difficulty</div>
                </div>
             <div class="item">
                 <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                 <div>16 lessons</div>
                </div>
             <div class="item">
                 <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                 <div>2h 56m</div>
             </div>
            </div>
             <div class="play_series">
                 <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                 <span>Start series</span>
             </div>
        </div>
    </div>
    
    <div class="mg_top_series">
        <div class="cont_recently_series">
            <p>More recently updated series</p>
            <div class="cards">
                <div class="card">
                     <div class="circle">
                         <img class="rc_series" src="{{asset('img/inertia-and-spa-techniques.png')}}" alt="">
                     </div>
                        <p class="title_serie">Inertia and SPA Techniques</p>
                        <p class="date_serie">Dicember 14, 2021</p>
                        <p class="desc_serie">So you've mastered the basics of building an SPA with Laravel and Inertia? Nice work, but of course...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                    </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/modern-laravel-apps-using-inertia (1).png')}}" alt="">
                     </div>
                        <p class="title_serie">Build Modern Laravel Apps...</p>
                        <p class="date_serie">November 15, 2021</p>
                        <p class="desc_serie">Inertia.js, created by Jonathan Reinink, is an incredible tool that glues a server-side framework, lik...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/learn-docker.png')}}" alt="">
                     </div>
                        <p class="title_serie">The Docker Tutorial</p>
                        <p class="date_serie">October 13, 2021</p>
                        <p class="desc_serie">Docker makes development and deployment much easier, since it removes the need for installing...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/testing-jargon-2.png')}}" alt="">
                     </div>
                        <p class="title_serie">PHP Testing Jargon</p>
                        <p class="date_serie">September 15, 2021</p>
                        <p class="desc_serie">There's no two ways about it: terminology in the testing world is incredibly overwhelming. Mocks...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/learn-headless-ui.png')}}" alt="">
                     </div>
                        <p class="title_serie">Learn Headless UI</p>
                        <p class="date_serie">September 4, 2021</p>
                        <p class="desc_serie">Headless UI is a library that provides completely unstyled accessible UI components. Or in...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                </div>
                
                <div class="cards">
                <div class="card">
                     <div class="circle">
                         <img class="rc_series" src="{{asset('img/write-a-composer-package-with-me.png')}}" alt="">
                     </div>
                        <p class="title_serie">Write a Composer Package...</p>
                        <p class="date_serie">August 31, 2021</p>
                        <p class="desc_serie">If you'd like to come along for the ride, I need to build a small package for Laracasts to handle...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/reproduce-popular-web-components.png')}}" alt="">
                     </div>
                        <p class="title_serie">Reproduce Popular Web...</p>
                        <p class="date_serie">August 25, 2021</p>
                        <p class="desc_serie">This series is all about recreating the look and feel of popular or compelling web components that...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/laravel-from-scratch-2021.svg')}}" alt="">
                     </div>
                        <p class="title_serie">Laravel 8 from Scratch</p>
                        <p class="date_serie">August 5, 2021</p>
                        <p class="desc_serie">We don't learn tools for the sake of learning tools. Instead, we learn them because they help us...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/beginning-react.png')}}" alt="">
                     </div>
                        <p class="title_serie">Beginning React</p>
                        <p class="date_serie">July 19, 2021</p>
                        <p class="desc_serie">React continues to be extremely popular in the front-end world. Whether you’re in the job market...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
                <div class="card">
                    <div class="circle">
                         <img class="rc_series" src="{{asset('img/build-a-voting-app.png')}}" alt="">
                     </div>
                        <p class="title_serie">Build a Voting App</p>
                        <p class="date_serie">July 12, 2021</p>
                        <p class="desc_serie">In this workshop, we’ll build a voting app, similar to UserVoice, that allows you to create ideas,...</p>
                        <div class="start_series">
                                <span>Start series</span>
                        </div>
                </div>
            </div>
    </div>
            
    <div class="mg_top_trend">
            <h3>Trending Series</h3>
            <p>Here's what's your peers are binging.</p>
            <div class="cont_trend_series">
                <img class="wall_trend" src="{{asset('img/lary-trending.svg')}}" alt="">
                <div class="card_items">
                    <div class="card_item">
                     <div class="square">
                         <img class="trend_series" src="{{asset('img/laravel-from-scratch-2021.svg')}}" alt="">
                     </div>
                     <div class="text">
                         <h5>Laravel 8 from Scratch</h5>
                        <p class="desc_serie">We don't learn tools for the sake of learning tools. Instead, we learn them because they help us...</p>
                     </div>
                        
                   </div>
                   <div class="card_item">
                     <div class="square">
                         <img class="trend_series" src="{{asset('img/learning-vue-2-step-by-step.png')}}" alt="">
                     </div>
                     <div class="text">
                         <h5>Learn Vue 2: Step by Step</h5>
                        <p class="desc_serie">Vue is easily one of the most exciting additions to the front-end world in many years. With its intuitive...</p>
                     </div>
                        
                   </div>
                </div>
                <div class="card_items">
                    <div class="card_item">
                     <div class="square">
                         <img class="trend_series" src="{{asset('img/modern-laravel-apps-using-inertia (1).png')}}" alt="">
                     </div>
                        <div class="text">
                            <h5>Build Modern Laravel Apps Using...</h5>
                           <p class="desc_serie">Inertia.js, created by Jonathan Reinink, is an incredible tool that glues a server-side framework,...</p>
                        </div>
                        
                   </div>
                   <div class="card_item">
                     <div class="square">
                         <img class="trend_series" src="{{asset('img/the-php-practitioner.png')}}" alt="">
                     </div>
                        <div class="text">
                            <h5>The PHP Pratictioner</h5>
                           <p class="desc_serie">We all start somewhere. When it comes to web development with PHP, well, your first stop is this...</p>
                        </div>
                        
                   </div>
                </div>
                <div class="card_items">
                    <div class="card_item">
                     <div class="square">
                         <img class="trend_series" src="{{asset('img/laravel-6-from-scratch.png')}}" alt="">
                     </div>
                     <div class="text">
                         <h5>Laravel 6 from Scratch</h5>
                        <p class="desc_serie">In this series, step by step, I'll show you how to build web applications with Laravel. We'll start with the...</p>
                     </div>
                        
                   </div>
                   <div class="card_item">
                     <div class="square">
                         <img class="trend_series" src="{{asset('img/andrews-larabits.jpg')}}" alt="">
                     </div>
                        <div class="text">
                            <h5>Andrew's Larabits</h5>
                           <p class="desc_serie">Here, you'll find Andrew Schmelyun's personal collection of Larabits. If you're unfamiliar, Larabits...</p>
                        </div>
                        
                   </div>
                </div>
            </div>
    </div>   
            
        </div>
        
    
    
    </div>

   
</div>

@endsection