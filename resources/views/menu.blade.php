@extends('layouts.app')

@section('content')
<section class="menu">
    <div class="container">
        <h2 class="menu-heading">Menu</h2>

        <!-- Menu Categories -->
        <div class="menu-categories">
            <a href="#appetizers" class="menu-category">Appetizers</a>
            <a href="#main-courses" class="menu-category">Main Courses</a>
            <a href="#desserts" class="menu-category">Desserts</a>
            <a href="#drinks" class="menu-category">Drinks</a>
        </div>

        <!-- Appetizers Section -->
        <section id="appetizers" class="menu-section">
            <h3 class="menu-section-heading">Appetizers</h3>
            <div class="menu-items">
                <div class="menu-item">
                    <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
                    <div class="menu-item-details">
                        <p class="menu-item-name">Appetizer 1</p>
                        <p class="menu-item-price">$10.99</p>
                        <a href="#" class="button">Order Now</a>
                    </div>
                </div>
                <!-- Repeat for other appetizers -->
                <!-- Example -->
                <div class="menu-item">
                    <img src="{{ asset('images/appetizer2.jpg') }}" alt="Appetizer 2">
                    <div class="menu-item-details">
                        <p class="menu-item-name">Appetizer 2</p>
                        <p class="menu-item-price">$12.99</p>
                        <a href="#" class="button">Order Now</a>
                    </div>
                </div>
                <!-- Repeat for other appetizers -->
                <!-- Example -->
                <div class="menu-item">
                    <img src="{{ asset('images/appetizer3.jpg') }}" alt="Appetizer 3">
                    <div class="menu-item-details">
                        <p class="menu-item-name">Appetizer 3</p>
                        <p class="menu-item-price">$9.99</p>
                        <a href="#" class="button">Order Now</a>
                    </div>
                </div>
                <!-- Repeat for other appetizers -->
                <!-- Example -->
                <div class="menu-item">
                    <img src="{{ asset('images/appetizer4.jpg') }}" alt="Appetizer 4">
                    <div class="menu-item-details">
                        <p class="menu-item-name">Appetizer 4</p>
                        <p class="menu-item-price">$11.99</p>
                        <a href="#" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Courses Section -->
        <section id="main-courses" class="menu-section">
            <h3 class="menu-section-heading">Main Courses</h3>
                <!-- Insert Main Courses Menu Items Here -->
                <div class="menu-item">
                    <img src="{{ asset('images/event1.jpeg') }}" alt="Appetizer 1">
                    <div class="menu-item-details">
                        <p class="menu-item-name">Appetizer 1</p>
                        <p class="menu-item-price">$10.99</p>
                        <a href="#" class="button">Order Now</a>
                    </div>
                </div>

        </section>

        <!-- Desserts Section -->
        <section id="desserts" class="menu-section">
            <h3 class="menu-section-heading">Desserts</h3>
            <div class="menu-items">
                <!-- Insert Desserts Menu Items Here -->
            </div>
        </section>

        <!-- Drinks Section -->
        <section id="drinks" class="menu-section">
            <h3 class="menu-section-heading">Drinks</h3>
            <div class="menu-items">
                <!-- Insert Drinks Menu Items Here -->
            </div>
        </section>
    </div>
</section>
@endsection
