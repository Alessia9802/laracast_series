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

    <div class="mg_top_card">
        <div class="card_lesson">
            <div class="nav_text">
                <div class="teacher">
                     <p class="name">Your teacher |</p>
                     <p>Andre Madarang</p>
                </div>
               <div class="social_web">
                   <img src="{{asset('img/twitter.svg')}}" alt="">
                   <img src="{{asset('img/github.svg')}}" alt="">
                 <div class="website">
                   <p>Visit website</p>
                   </div>
               </div>
              
            </div>
            <div class="desc_lesson">
                <div class="profile">
                    <img class="profile_pic" src="{{asset('img/image.jpg')}}" alt="">
                </div>
                <div class="text_lesson">
                    <p>Greetings! I'm Andre, a full-stack web developer and Laracasts instructor. My other hobbies include playing guitar, videography and gaming.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mg_top_wrap_card">
        <div class="card_wrap">
            <span class="sc_one">Section 1</span>
            <span class="tw"></span>
            <span class="intro">Introduction</span>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>01</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Demo and Installation</h4>
                <p>Let's get started by taking a look at a simple Twitter clone that we'll be building throughout the series. After that, we'll install Expo and get the default project running on your local simulators as well as any physical devices you may have.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 1</span>
                              <span><i class="fas fa-clock"></i>7:21 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>02</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>React Native Components Overview</h4>
                <p>Next up, we'll play around with some of the common components available in React Native. We take a look at <code>View</code>, <code>Text</code>, <code>Button</code>,
                     <code>TouchableOpacity</code>, <code>Pressable</code>, <code>Flatlist</code> components and get familiar with how to use them in a project.
                </p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 2</span>
                              <span><i class="fas fa-clock"></i>20:15 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>03</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>React navigation</h4>
                <p>Moving on, we take a look at the popular React Navigation library to define the screens in our mobile app. We take a look at Stack Navigators, Tab Navigators, and Drawer Navigators in the process.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 3</span>
                              <span><i class="fas fa-clock"></i>19:17 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_wrap_card">
        <div class="card_wrap">
            <span class="sc_one">Section 2</span>
            <span class="tw"></span>
            <span class="intro">Twitter Clone Screens</span>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>04</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Setup Screens for Twitter Clone</h4>
                <p>Let's begin working on our Twitter clone app and start off by laying out our screens using React Navigation. Most of the functionality will be using a Stack Navigator, but we'll also make use of the Tab Navigator and Drawer Navigator as seen on the official Twitter mobile app.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 4</span>
                              <span><i class="fas fa-clock"></i>18:54 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>05</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the Home Screen</h4>
                <p>In this lesson, we'll practice styling in React Native by styling the Home page that contains our list of tweets. We’ll make use of the <code>TouchableOpacity</code> component as well as the Expo Vector Icons set.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 5</span>
                              <span><i class="fas fa-clock"></i>25:53 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>06</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the Single Tweet Screen</h4>
                <p>Let's continue by styling the second screen of our app: the single tweet screen.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 6</span>
                              <span><i class="fas fa-clock"></i>15:34 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>07</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the Profile Screen</h4>
                <p>Let's continue by styling the third screen of our app: the profile screen. We'll make use of a FlatList that has a header component for the user’s profile details.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 7</span>
                              <span><i class="fas fa-clock"></i>17:11 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>08</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 8</span>
                              <span><i class="fas fa-clock"></i>12:12 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_wrap_card">
        <div class="card_wrap">
            <span class="sc_one">Section 3</span>
            <span class="tw"></span>
            <span class="intro">Communication with the Backend</span>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>09</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 9</span>
                              <span><i class="fas fa-clock"></i>19:42 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>10</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 10</span>
                              <span><i class="fas fa-clock"></i>6:02 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>11</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 11</span>
                              <span><i class="fas fa-clock"></i>10:51 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>12</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 12</span>
                              <span><i class="fas fa-clock"></i>14:31 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>13</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 13</span>
                              <span><i class="fas fa-clock"></i>16:35 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>14</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 14</span>
                              <span><i class="fas fa-clock"></i>15:11 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>15</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 15</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_wrap_card">
        <div class="card_wrap">
            <span class="sc_one">Section 4</span>
            <span class="tw"></span>
            <span class="intro">Authentication</span>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>16</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 16</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>17</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 17</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>18</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 18</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>19</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 19</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_wrap_card">
        <div class="card_wrap">
            <span class="sc_one">Section 5</span>
            <span class="tw"></span>
            <span class="intro">Additional Featuers</span>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>20</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 20</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>21</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 21</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>22</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 22</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_wrap_card">
        <div class="card_wrap">
            <span class="sc_one">Section 6</span>
            <span class="tw"></span>
            <span class="intro">Wrapping up</span>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>23</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 23</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>

    <div class="mg_top_card_lesson">
        <div class="card_lesson">
            <div class="n_lesson">
                <div class="wrap_lesson">
                   <p>24</p>
                   <i class="fas fa-check"></i> 
                </div>
            </div>
            <div class="desc_lesson">
                <h4>Style the New Tweet Screen</h4>
                <p>Next, we'll style the fourth screen of our app: the new tweet screen. We'll also build a "character counter" component that displays how many characters are left for the tweet they are currently typing.</p>
                    <div class="wrap_info">
                         <div class="info_lesson">
                              <span class="episode">episode 24</span>
                              <span><i class="fas fa-clock"></i>21:57 minutes</span>
                        </div>
                         <div class="git">
                             <span>
                                 <i class="fab fa-github"></i>View source on Github</span>
                          </div>
                    </div>
               
            </div>
        </div>
    </div>
</div>


@endsection