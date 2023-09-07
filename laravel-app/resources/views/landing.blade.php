@extends('layouts.app')

@section('title', 'Unleash Your Beard\'s Full Potential!')

@section('meta-description', 'Experience rapid and natural beard growth with our breakthrough formula. Designed specifically for men seeking a fuller, healthier beard.')

@section('content')
<div class="container">

    <!-- Header -->
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Beard Growth Magic Logo">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <img src="{{ asset('images/man-with-beard.jpg') }}" alt="Man with full beard">
        <h1>Unleash Your Beard's Full Potential!</h1>
        <p>Experience rapid and natural beard growth with our breakthrough formula.</p>
        <a href="/shop" class="cta-button">Shop Now</a>
    </section>

    <!-- Product Description Section -->
    <section class="product-description">
        <p>Our advanced hair care formula is specifically designed for men, promoting thicker and fuller beard growth.</p>
        <ul>
            <li>Biotin: For hair strength and vitality.</li>
            <li>Argan Oil: Nourishes and moisturizes.</li>
            <li>Vitamin E: Protects and revitalizes.</li>
        </ul>
    </section>

    <!-- ... Continue with other sections ... -->

    <!-- Footer -->
    <footer>
        <ul>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/terms">Terms of Service</a></li>
            <li><a href="/contact">Contact Us</a></li>
        </ul>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram"></a>
            <a href="#"><img src="{{ asset('images/twitter-icon.png') }}" alt="Twitter"></a>
        </div>
    </footer>

</div>
@endsection
