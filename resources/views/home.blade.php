@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero__top">
            <div class="hero__top-left">
                <h2>Digital Solutions for Business Success!</h2>
            </div>

            <div class="hero__top-right">
                <p>
                    Agency that builds amazing products from design to development and from conception to completion
                </p>
                <div class="hero__top-cta">
                    <a href="/htmls/contact.html"> <button class="button">Contact</button></a>
                </div>
            </div>
        </div>

        <div class="hero__bottom">
            <a href="index.html">
                <video src="{{ asset('images/video1.mp4') }}" autoplay loop muted playsinline></video>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="services__top">
            <h4>Our Services</h4>
            <p class="cent">
                We are a team of professionals who are passionate about building great products.
            </p>
        </div>

        <div class="services__bottom">
            <div class="services__card">
                <img class="svgs" src="{{ asset('icons/branding.svg') }}" alt="Branding SVG" />
                <h5>Branding</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="services__card">
                <img class="svgs" src="{{ asset('icons/uxui.svg') }}" alt="Branding SVG">
                <h6>UX UI Design</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="services__card">
                <img class="svgs" src="{{ asset('icons/frontend.svg') }}" alt="Branding SVG" />
                <h6>Front-End Development</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="services__card">
                <img class="svgs" src="{{ asset('icons/nocode.svg') }}" alt="Branding SVG" />
                <h6>No-Code Development</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>

    <!-- Work Section -->
    <section class="work">
        <div class="work__top">
            <h4>Recent Work</h4>
            <p class="cent">
                We are a team of professionals who are passionate about building great products.
            </p>
        </div>

        <div class="work__bottom">
            <div class="work__card">
                <img class="work-images" src="{{ asset('images/work01.png') }}"
                    alt="A site of to build stylesheets in a few clicks." />
                <p class="text-small">UX UI Design</p>
                <h5>xCommerce</h5>
                <p>Landing page for a website builder.</p>
            </div>

            <div class="work__card">
                <img class="work-images" src="{{ asset('images/work02.png') }}"
                    alt="A site of to build stylesheets in a few clicks." />
                <p class="text-small">Front-End Development</p>
                <h5>FlashSparks</h5>
                <p>A site of to build stylesheets in a few clicks.</p>
            </div>
        </div>
    </section>
@endsection
