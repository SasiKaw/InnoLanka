@extends('layout')

@section('content')
<!-- Main Hero Section -->
<section class="text-center py-16 min-h-96 text-white bg-cover bg-center" style="background-image: url('images/hero.png')">
    <div class="container mx-auto ">
        <h1 class="text-6xl text-blue-950 shadow-2xl font-bold mb-4 font-sans indent-4">Innovate, Connect, Succeed:Join the Future of Creativity</h1>
        <p class="mb-8 text-white shadow-2xl text-lg">Bringing Together Visionaries and Leaders</p>
        <button class="bg-orange-600 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-xl">Discover Innovations</button>
    </div>
</section>

<!-- Who We Are Section -->
<section class="container mx-auto my-8 p-12 bg-indigo-50 rounded-xl relative overflow-hidden">
    <div class="flex flex-col lg:flex-row justify-between">
      <!-- Text content -->
      <div class="lg:text-left lg:w-1/2">
        <h1 class="text-5xl text-indigo-900 font-bold mb-6 text-center">Who we are</h1>
        <p class="text-lg mb-6 text-center indent-2">Revolutionizing Collaboration in Innovation - InnovateConnect brings together the brightest minds, seasoned advisors, and visionary funders to transform groundbreaking ideas into successful realities. Discover a platform where creativity meets opportunity, and every connection has the potential to change the world.</p>
        <button class="bg-blue-600 hover:bg-blue-700 ml-64 text-white font-bold py-2 px-4 rounded transition duration-300 ">Explore Our path</button>
      </div>

      <!-- Images -->
      <div class="mt-6 lg:mt-0 lg:w-1/2 flex flex-row justify-center" style="border:1px so">
        <img src="https://placehold.co/500x300" alt="Group of creative people illustration" class="rounded-xl">
      </div>
    </div>
  </section>
</section>

<!-- Featured Projects Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Project 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="https://placehold.co/300x200" alt="EcoSmart Home project image" class="mb-4 rounded">
                <h3 class="font-bold mb-2">EcoSmart Home</h3>
                <p class="text-sm mb-4">EcoSmart Home is a revolutionary project that integrates advanced IoT technologies with sustainable living practices.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more</a>
            </div>
            <!-- Project 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="https://placehold.co/300x200" alt="HealthTrack Wearable project image" class="mb-4 rounded">
                <h3 class="font-bold mb-2">HealthTrack Wearable</h3>
                <p class="text-sm mb-4">HealthTrack Wearable is an innovative fitness tracker designed to monitor vital health metrics in real-time.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more</a>
            </div>
            <!-- Project 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="https://placehold.co/300x200" alt="AgriTech Revolution project image" class="mb-4 rounded">
                <h3 class="font-bold mb-2">AgriTech Revolution</h3>
                <p class="text-sm mb-4">AgriTech Revolution transforms traditional farming methods with AI-driven solutions.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16">
    <div class="container mx-auto text-center">
        <div class="max-w-2xl mx-auto">
            <img src="https://placehold.co/300x300" alt="Testimonial from Alexa R, Tech Entrepreneur" class="mb-4 rounded-full mx-auto">
            <blockquote class="italic">"InnovateConnect was instrumental in the growth of my project. The expert advice and funding connections I received were invaluable. Truly a hub for innovation!"</blockquote>
            <p class="font-bold mt-4">Alexa R, Tech Entrepreneur</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-900 text-white py-6">
    <div class="container mx-auto text-center">
        <p>© InnoLanka Technologies, Inc. All rights reserved</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="#" class="hover:underline">Why InnoLanka</a>
            <a href="#" class="hover:underline">Projects</a>
        </div>
    </div>
</footer>

@endsection
