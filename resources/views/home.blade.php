@extends('layouts.app')

@section('content')
<section class="hero" style="background-image: url('{{ asset('images/hero.jpeg') }}');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Sizzles & Sage</h1>
        <p>Create Unforgettable Moments at Sizzle & Sage – The Perfect Setting for Romantic Dinners and Special
            Celebrations. Taste the Magic of Every Meal.</p>
        <a href="{{ route('menu') }}" class="button">Explore Menu</a>
    </div>
</section>
<section class="about-section">
    <div class="container">
        <div class="about-columns">
            <div class="about-text">
                <h2>Welcome to Sizzles & Sage</h2>
                <p style="padding:10px;font: size 2em;line: height 2em;">Welcome to Sizzles & Sage, your premier dining
                    destination located in the heart of Flavour Town. For
                    over 20 years, we have been delighting our guests with exquisite culinary experiences, blending
                    traditional recipes with modern flavors. Our commitment to using the finest ingredients, paired with
                    our exceptional service, makes us a standout choice for food lovers. Whether you're here for a
                    special occasion or a casual meal, we aim to make every visit memorable. Join us and savor the taste
                    of excellence that has made Sizzles & Sage a beloved spot in our community.</p>
                <div class="cta-buttons">
                    <a href="{{ route('menu') }}" class="button">Visit Menu</a>
                    <a href="{{ route('book') }}" class="button">Make a Reservation</a>
                </div>
            </div>
            <div class="about-images">
                <div class="about-image" style="background-image: url('{{ asset('images/about-left.jpeg') }}');"></div>
                <div class="about-image" style="background-image: url('{{ asset('images/about-right.jpeg') }}');"></div>
            </div>
        </div>
    </div>
</section>
<section>

    <div class="container">
        <h2>Explore our Menu</h2>

        <div class="menu-items">
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
            <div class="menu-item-details">
                <p class="menu-item-name">Appetizer 1</p>
                <p class="menu-item-price">$10.99</p>
                <a href="#" class="button">Order Now</a>
            </div>
        </div>
        </div>
        
    </div>

</section>
<!-- Other sections can be added as per your design -->
@endsection
