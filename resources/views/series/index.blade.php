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
        <div class="mobile">
        <p class="frame">Frameworks</p>
        <h2>Build Mobile Apps With React Native and Expo</h2>
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
    </div>
    
</div>

@endsection