@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="contact">
        <div class="contact__top">
            <h2>Contact Us</h2>
            <p class="cent">
                Get in touch with us! Please let us know what<br> services you need.
            </p>
        </div>

        <form class="contact__bottom" action="{{ route('contact.store') }}" method="post" id="contactForm">
            @csrf
            <input class="inp inp__name" type="text" name="name" placeholder="Full Name" required>
            <input class="inp inp__email" type="email" name="email" placeholder="Email" required>
            <select class="inp inp__service" name="service">
                <option id="color-dark" value="" disabled selected>Service</option>
                <option class="opt" value="branding">Branding</option>
                <option class="opt" value="uxui">UX UI Design</option>
                <option class="opt" value="frontend">Front-End Development</option>
                <option class="opt" value="backend">Back-End Development</option>
            </select>
            <textarea class="inp inp__message" name="message" placeholder="Message" required></textarea>

            <input class="button" type="submit" value="Submit">
        </form>

        <div id="successMessage" style="display: none;">
            Thanks for contacting us! We received your response and will get back to you as soon as possible.
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault();

            document.getElementById("successMessage").style.display = "block";

            document.getElementById("contactForm").reset();
        });
    </script>
@endsection
