@extends('layouts.app')



@section('page-title', 'series')



<!-- @section('custom-css')
<link rel="stylesheet" href="{{asset('css/layout.css')}}"> -->
@section('content')

<div class="app_section">
    <h3>Recently Updated</h3>
    <p>Curious what's new at Laracasts? The following series have been recently <br> updated.</p>
    
    <!-- single card -->
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
            <span><a href="{{ route('serie', ['id' => 1]) }}">Start series</a></span>
        </div>
    </div>
    
    <!-- single card -->
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

    <!-- recently series -->
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
      
    <!-- trending series -->
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
                            <h5>The PHP Practitioner</h5>
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
    
    <div class="mg-top_editor">
        <h3>Master Your Code Editor</h3>
        <p class="text_imp">A full understanding of your code editor will pay dividends throughout your entire career. Master your preferred editor below!</p>
        <div class="tool">
            <p class="frame">Tooling</p>
            <h2>Visual Studio Code for PHP Developers</h2>
            <p class="descrip">Out of the blue, Microsoft jumps into the editor wars with an incredible offering that gives Sublime Text an overwhelming run for its money. In fact, it just might surpass it! So come along, as I demonstrate the ins, the outs, the tips, the techniques. Say hello to...</p>
            <div class="symbols">
                <div class="item">
                 <img class="items" src="{{asset('img/item-02.svg')}}" alt="">
                 <div>Intermediate <br> Difficulty</div>
                </div>
             <div class="item">
                 <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                 <div>18 lessons</div>
                </div>
             <div class="item">
                 <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                 <div>1h 20m</div>
             </div>
            </div>
             <div class="play_series">
                 <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                 <span>Start series</span>
             </div>
        </div>
    </div>

    <div class="mg_top_violet">
        <div class="cont_cards">
            <div class="card_one">
                <div class="card_one_wrap">
                    <div class="label_card">
                        <p>Tooling</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/professional-php-workflow-in-sublime-text.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Professional PHP Workflow in Sublime Text 3</h3>
                    <p>This series is exclusively for the working developer who, though familiar with Sublime Text,...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>11 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>41m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
            </div>
            <div class="card_two">
                <div class="card_two_wrap">
                    <div class="label_card">
                        <p>Tooling</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/be-awesome-in-phpstorm.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Be Awesome in PHPStorm</h3>
                    <p>Think about how many hours each week you spend within your editor. Doesn't it make sense to unlock every inch of its capabilities?...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>27 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>1h 30m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
            <div class="card_three">

                    <div class="card_three_wrap">
                      <div class="label_card">
                        <p>Tooling</p>
                     </div>
                    <img class="circle_item" src="{{asset('img/vim-mastery.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Vim Mastery</h3>
                    <p>There's a reason why, after decades, countless developers still prefer Vim as their code editor of choice. That many people can't be wrong, right? I...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>22 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>2h 37m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="mg_top_grow">
        <h3>Grow TALL</h3>
            <p>Ready to embrace the TALL (Tailwind, AlpineJS, Laravel, Livewire) stack?</p>
        <div class="cont_learn"> 
            <div class="container_1">
                <div class="cont_text">
                    <h3 class="title_learn">Rebuild GitHub with Tailwind</h3>
                        <span class="text_learn">One of the best ways to improve your CSS is by rebuilding existing UIs. You’ll notice common patterns that occur and the best way to handle them...</span>
                 <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>5 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>1h 26m</div>
                        </div>
                 </div>
                 <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Start series</span>
                 </div>
                </div>
                
            </div>
            <div class="container_2">
                <div class="divider"></div>
            </div>
            <div class="container_3">
                <div class="cont_text">
                    <h3 class="title_learn">Alpine.js Essentials</h3>
                        <span class="text_learn">Alpine.js is a relatively new JavaScript framework for defining behavior directly in your markup. While similar to frameworks like Angular and Vue, you may find...</span>
                 <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>11 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>2h 29m</div>
                        </div>
                 </div>
                 <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Start series</span>
                 </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="mg_top_cards">
        <div class="cont_cards">
            <div class="card_one">
                <div class="card_one_wrap">
                    <div class="label_card">
                        <p>Frameworks</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/livewire-basics.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Livewire Basics</h3>
                    <p>Livewire has quickly become one of the most popular package for building Laravel applications. It allows you to create dynamic components...</p>
                    <div class="symbols">
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
                     <span>Play</span>
                   </div>
                </div>
            </div>
            <div class="card_two">
                <div class="card_two_wrap">
                    <div class="label_card">
                        <p>Techniques</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/modals-and-the-tall-stack.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Modals with the TALL Stack</h3>
                    <p>For such a simple concept, modals can often be tricky to implement. Where exactly do we place them? Where should the event listeners...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>9 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>1h 17m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
            <div class="card_three">

                    <div class="card_three_wrap">
                      <div class="label_card">
                        <p>Frameworks</p>
                     </div>
                    <img class="circle_item" src="{{asset('img/laravel-from-scratch-2021.svg')}}" alt="">
                   <div class="livel_series">
                       <h6>Beginner <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Laravel 8 From Scratch</h3>
                    <p>We don't learn tools for the sake of learning tools. Instead, we learn them because they help us accomplish...</p>
                    <div class="symbols">
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
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="mg-top_tool">
        <h3>Learn a Tools</h3>
        <p class="text_imp">You use your tools every single day. So take some time to master them.</p>
        <div class="tool">
            <p class="frame">Languages</p>
            <h2>CSS Grid for everyone</h2>
            <p class="descrip">The new CSS Grid spec offers unprecedented control when it comes to constructing layouts and components. In fact, this level of power and flexibility has never been available before now. That being said, there's a slight learning curve. Come along, as I...</p>
            <div class="symbols">
                <div class="item">
                 <img class="items" src="{{asset('img/item-02.svg')}}" alt="">
                 <div>Intermediate <br> Difficulty</div>
                </div>
             <div class="item">
                 <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                 <div>6 lessons</div>
                </div>
             <div class="item">
                 <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                 <div>37m</div>
             </div>
            </div>
             <div class="play_series">
                 <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                 <span>Start series</span>
             </div>
        </div>
    </div>

    <div class="mg_top_violet">
        <div class="cont_cards">
            <div class="card_one">
                <div class="card_one_wrap">
                    <div class="label_card">
                        <p>Tooling</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/professional-php-workflow-in-sublime-text.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Professional PHP Workflow in Sublime Text 3</h3>
                    <p>This series is exclusively for the working developer who, though familiar with Sublime Text,...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>11 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>41m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
            </div>
            <div class="card_two">
                <div class="card_two_wrap">
                    <div class="label_card">
                        <p>Tooling</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/be-awesome-in-phpstorm.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Be Awesome in PHPStorm</h3>
                    <p>Think about how many hours each week you spend within your editor. Doesn't it make sense to unlock every inch of its capabilities?...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>27 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>1h 30m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
            <div class="card_three">

                    <div class="card_three_wrap">
                      <div class="label_card">
                        <p>Tooling</p>
                     </div>
                    <img class="circle_item" src="{{asset('img/vim-mastery.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Vim Mastery</h3>
                    <p>There's a reason why, after decades, countless developers still prefer Vim as their code editor of choice. That many people can't be wrong, right? I...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>22 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>2h 37m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- double card -->
    <div class="mg_top_learn">
        <h3>Learn Laravel</h3>
            <p>There has never been a better time to dig in and get started learning.</p>
        <div class="cont_learn"> 
            <div class="container_1">
                <div class="cont_text">
                    <h3 class="title_learn">What's New in Laravel 8</h3>
                        <span class="text_learn">Laravel 8 is here! This release includes brand new application scaffolding, class-based model factories, migration squashing, time traveling, and so much more....</span>
                 <div class="symbols">
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
            <div class="container_2">
                <div class="divider"></div>
            </div>
            <div class="container_3">
                <div class="cont_text">
                    <h3 class="title_learn">Laravel 8 from Scratch</h3>
                        <span class="text_learn">We don't learn tools for the sake of learning tools. Instead, we learn them because they help us accomplish a particular goal. With that in mind, in this series,...</span>
                 <div class="symbols">
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
            
        </div>
    </div>

    <!-- three cards -->
    <div class="mg_top_cards">
        <div class="cont_cards">
            <div class="card_one">
                <div class="card_one_wrap">
                    <div class="label_card">
                        <p>Frameworks</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/livewire-basics.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Livewire Basics</h3>
                    <p>Livewire has quickly become one of the most popular package for building Laravel applications. It allows you to create dynamic components...</p>
                    <div class="symbols">
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
                     <span>Play</span>
                   </div>
                </div>
            </div>
            <div class="card_two">
                <div class="card_two_wrap">
                    <div class="label_card">
                        <p>Techniques</p>
                    </div>
                    <img class="circle_item" src="{{asset('img/modals-and-the-tall-stack.png')}}" alt="">
                   <div class="livel_series">
                       <h6>Intermediate <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Modals with the TALL Stack</h3>
                    <p>For such a simple concept, modals can often be tricky to implement. Where exactly do we place them? Where should the event listeners to toggle...</p>
                    <div class="symbols">
                     <div class="item">
                       <img class="items" src="{{asset('img/item-01.svg')}}" alt="">
                         <div>9 lessons</div>
                     </div>
                         <div class="item">
                                <img class="items" src="{{asset('img/item-03.svg')}}" alt="">
                                <div>1h 17m</div>
                        </div>
                    </div>
                   <div class="play_series">
                     <img class="play" src="{{asset('img/item-4.svg')}}" alt="">
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
            <div class="card_three">

                    <div class="card_three_wrap">
                      <div class="label_card">
                        <p>Frameworks</p>
                     </div>
                    <img class="circle_item" src="{{asset('img/laravel-from-scratch-2021.svg')}}" alt="">
                   <div class="livel_series">
                       <h6>Beginner <br> Difficulty</h6>
                       <div class="livel_grade">
                           <div class="livel_one"></div>
                           <div class="livel_two"></div>
                           <div class="livel_three"></div>
                       </div>
                   </div>
                </div>
                <div class="card_left">
                    <h3 class="title_h3">Laravel 8 From Scratch</h3>
                    <p>We don't learn tools for the sake of learning tools. Instead, we learn them because they help us accomplish a particular goal. With that in mind, in this series...</p>
                    <div class="symbols">
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
                     <span>Play</span>
                   </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="mg_top_forget">
        <div class="cont_recently_series">
            <p>Don't forget about these</p>
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
                
    </div>

    <div class="mg_top_test">
            <h3>Level Up Your Testing</h3>
            <p>Imagine a workflow that alerts you each time a particular refactor was unsuccessful. How much more might you get done with that level of confidence?</p>
            <div class="cont_test_series">
                <div class="wall_machine">
                    <img class="wall_test" src="{{asset('img/journey-testing.svg')}}" alt="">
                </div>
                
             <div class="cont_items">
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
                            <h5>The PHP Practitioner</h5>
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

    <div class="mg_top_topics">
            <h3>Explore Topics</h3>
            <p>Laracasts is categorized into a variety of topics.</p>
            <div class="cont_test_topics">
                <div class="cards">
                 <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/laravel-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Laravel</p>
                         <p class="desc_serie">57 series <span> • </span>733 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/symphony-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Symphony</p>
                         <p class="desc_serie">1 serie <span> • </span>4 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/js-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">JavaScript</p>
                         <p class="desc_serie">19 series <span> • </span>220 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/nova-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Nove</p>
                         <p class="desc_serie">1 serie <span> • </span>15 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/git-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Git</p>
                         <p class="desc_serie">2 series <span> • </span>35 videos</p>
                     </div>                                            
                 </div>
                 
                 
            </div>
            <div class="cards">
                 <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/vue-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Vue</p>
                         <p class="desc_serie">8 series <span> • </span>134 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/php-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">PHP</p>
                         <p class="desc_serie">26 series <span> • </span>264 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/visualstudio-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Visual Studio Code</p>
                         <p class="desc_serie">1 serie <span> • </span>18 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/phpunit-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">PHPUnit</p>
                         <p class="desc_serie">8 series <span> • </span>117 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/phpstorm-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">PHPStorm</p>
                         <p class="desc_serie">1 series <span> • </span>27 videos</p>
                     </div>                                            
                 </div>
                 
                 
            </div>
             
             <div class="cards">
                 <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/sublime-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Sublime Text</p>
                         <p class="desc_serie">2 series <span> • </span>22 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/css-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">CSS</p>
                         <p class="desc_serie">7 series <span> • </span>52 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/alpine-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">AlpineJS</p>
                         <p class="desc_serie">5 series <span> • </span>57 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/envoyer-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Envoyer</p>
                         <p class="desc_serie">1 series <span> • </span>10 videos</p>
                     </div>                                            
                 </div>
                  <div class="card">
                     <div class="circle">
                         <img class="topic" src="{{asset('img/vim-logo.svg')}}" alt="">
                     </div>
                     <div class="info_title">
                         <p class="title_serie">Vim</p>
                         <p class="desc_serie">1 series <span> • </span>22 videos</p>
                     </div>                                            
                 </div>
                 
                 
            </div>
            
            
                
             
               
            </div>
    </div>
            
 </div>
        
    
    
    </div>

   
</div>

@endsection