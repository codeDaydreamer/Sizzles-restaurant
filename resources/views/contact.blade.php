@extends('layouts.app')

@section('content')
<section class="contact-us-page" style="background-image: url('{{ asset('images/contact.jpg') }}');">
    <div class="contact-us-background" >
        <div class="container">
            <div class="contact-us-content">
                <h2>Contact Us</h2>
                <p>Have questions or feedback? Reach out to us using the form below or visit our location.</p>
                <div class="contact-form">
                    <form action="{{ route('submitContact') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="button">Submit</button>
                    </form>
                </div>
                <div class="contact-details">
                    <div class="contact-column">
                        <h3>Our Location</h3>
                        <p>123 Main Street, Flavour Town</p>
                    </div>
                    <div class="contact-column">
                        <h3>Email Us</h3>
                        <p>info@sizzlesnsage.com</p>
                    </div>
                    <div class="contact-column">
                        <h3>Call Us</h3>
                        <p>+1 (123) 456-7890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
