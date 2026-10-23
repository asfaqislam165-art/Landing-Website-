<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Website Fantox-Car-Wash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    @vite(['resources/css/app.css','resources/css/app.js'])
  </head>
  <body>
    
    <div class="model">
       <div class="bg-blue-200 p-3 text-center font-bold text-xl md:text-2xl"><i class="fa-solid fa-truck-fast"></i> Fantox Car Wash</div>
    </div>

    <div class="hero bg-base-200 min-h-96 px-4 py-8">
      <div class="hero-content flex-col lg:flex-row text-center lg:text-left">
        <img
          alt="Tailwind CSS hero component"
          src="Images\1.jpeg"
          class="max-w-xs sm:max-w-sm rounded-lg shadow-2xl w-full"
        />
        <div>
          <h1 class="text-3xl sm:text-5xl font-bold"> <i class="fa-solid fa-truck-fast"></i> Fantox Car Wash</h1>
          <p class="py-6 text-md">
            Make Your Car Neat & Clean , Perfect By Washing From Our Shop 
            <i class="fa-solid fa-shower"></i> <i class="fa-solid fa-wand-magic-sparkles"></i>
          </p>
        </div>
      </div>
    </div>

    <!-- Gallery Section -->
    <div class="container mx-auto px-4 my-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 justify-items-center">
        <div class="card bg-base-100 w-full max-w-xs shadow">
          <figure>
            <img src="Images\2.jpg" alt="Shoes" class="w-full h-auto object-cover" />
          </figure>
        </div>

        <div class="card bg-base-100 w-full max-w-xs shadow">
          <figure>
            <img src="Images\3.jpg" alt="Shoes" class="w-full h-auto object-cover" />
          </figure>
        </div>

        <div class="card bg-base-100 w-full max-w-xs shadow">
          <figure>
            <img src="Images\4.jpeg" alt="Shoes" class="w-full h-auto object-cover" />
          </figure>
        </div>

        <div class="card bg-base-100 w-full max-w-xs shadow">
          <figure>
            <img src="Images\5.jpeg" alt="Shoes" class="w-full h-auto object-cover" />
          </figure>
        </div>
      </div>
    </div>

    <!-- Pricing Section -->
    <div class="container mx-auto px-4 mt-10 mb-10">
      <div class="text-center font-bold text-3xl p-4"><i>Pricing</i></div>
      <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
        <div class="h-32 rounded bg-blue-200 p-8 flex text-center justify-center items-center">
          <h3>Normal:300 bdt</h3>
        </div>
        <div class="h-32 rounded bg-blue-200 p-8 flex text-center justify-center items-center">
          <h3>Harder:500 bdt</h3>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl/tight font-bold text-black sm:text-4xl"> <i class="fa-solid fa-truck-fast"></i> Fantox Car Wash</h2>
        <p class="mt-4 text-lg text-pretty text-black">
          At Fantox Car Wash, we believe every vehicle deserves exceptional care and attention. Our professional car cleaning services are designed to restore your vehicle's shine, remove stubborn dirt, and keep your car looking its absolute best. From a quick exterior wash to a complete interior and exterior cleaning, we deliver quality results that make every drive feel special.
        </p>
      </div>

      <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-3">
        <div class="rounded-lg border border-red-500 p-6 bg-blue-200">
          <h5 class="mt-4 text-lg font-semibold text-black"> <i class="fa-solid fa-star"></i> Premium Exterior Car Wash</h5>
          <p class="mt-2 text-pretty text-black">
            Give your vehicle a brilliant shine with our premium exterior car wash service. We carefully clean your car's body, windows, wheels, and tires to remove dirt, dust, and everyday road grime. Our attention to detail helps your vehicle look fresh, polished, and ready for the road.
          </p>
        </div>

        <div class="rounded-lg border border-red-500 bg-blue-200 p-6">
          <h5 class="mt-4 text-lg font-semibold text-black"><i class="fa-solid fa-spray-can-sparkles"></i> Deep Interior Cleaning</h5>
          <p class="mt-2 text-pretty text-black">
            Enjoy a cleaner, fresher, and more comfortable driving experience with our interior cleaning service. We focus on seats, carpets, dashboards, door panels, and other interior surfaces to remove accumulated dust and dirt. Our goal is to make your car's interior feel welcoming, hygienic, and well-maintained.
          </p>
        </div>

        <div class="rounded-lg border border-red-500 p-6 bg-blue-200">
          <h5 class="mt-4 text-lg font-semibold text-black"><i class="fa-solid fa-clover"></i> Professional Auto Detailing</h5>
          <p class="mt-2 text-pretty text-black">
            Give your vehicle the extra attention it deserves with our professional auto detailing services. We focus on the finer details of your car's appearance, helping improve its cleanliness, shine, and overall presentation. From detailed cleaning to a polished finish, Fantox Car Wash is dedicated to making your vehicle look its best.
          </p>
        </div>
      </div>
    </div>

    <!-- Why Us Section -->
    <div class="mb-10 mt-10 px-4 max-w-7xl mx-auto">
      <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 rounded-lg">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
          <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
            <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
              Why We Are Better ?
            </h2>
            <p class="text-black mt-4 block">
              At Fantox Car Wash, we go beyond ordinary car cleaning by delivering exceptional quality, professional care, and a customer-focused experience. Our dedicated team pays attention to every detail, ensuring your vehicle receives the care it deserves. From advanced cleaning techniques to reliable service and a commitment to customer satisfaction, we strive to make every visit worthwhile. We believe that a clean car reflects pride and comfort, which is why we work hard to deliver outstanding results, convenient services, and a sparkling finish you can be proud of. Choose Fantox Car Wash for a cleaner, fresher, and better driving experience every time.
            </p>
          </div>
        </div>
        <img
          alt=""
          src="Images\10.avif"
          class="h-56 w-full object-cover sm:h-full"
        />
      </section>
    </div>

    <!-- Reviews / Info Section -->
    <div class="bg-blue-200 h-auto w-auto mt-10 mb-10">
      <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
          <div class="col-span-1">
            <h2 class="text-3xl/tight font-bold text-gray-900 sm:text-4xl">What Client Say About Us ?</h2>
            <p class="mt-4 text-lg text-pretty text-black">
              We take pride in providing exceptional car wash services that keep our customers coming back. At Fantox Car Wash, customer satisfaction is at the heart of everything we do. From our professional cleaning services to our attention to every detail, we strive to deliver a smooth, reliable, and refreshing experience every time. Discover why our commitment to quality and care makes us a trusted choice for keeping your vehicle clean, shiny, and looking its best.
            </p>
          </div>

          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div>
                <h3 class="text-lg font-semibold text-gray-900">Exceptional Cleaning Service</h3>
                <p class="mt-1 text-gray-700">We provide exceptional car washing and detailing services designed to keep every vehicle clean, shiny, and well-maintained. Our team focuses on every detail to deliver outstanding cleaning results and a fresh, comfortable driving experience for our customers.</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div>
                <h3 class="text-lg font-semibold text-gray-900">Professional & Reliable Team</h3>
                <p class="mt-1 text-gray-700">We are committed to delivering professional, reliable, and convenient car care services. Our dedicated team works with attention and care to ensure every vehicle receives quality treatment and every customer enjoys a smooth and satisfying service experience.</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div>
                <h3 class="text-lg font-semibold text-gray-900">Great Value & Quality</h3>
                <p class="mt-1 text-gray-700">We believe that premium car care should offer excellent quality and great value. We strive to provide effective cleaning solutions, dependable service, and impressive results that help our customers maintain their vehicles' appearance and enjoy a cleaner, brighter ride.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials List -->
    <div class="mb-10 mt-10 px-4">
      <ul class="mx-auto grid max-w-6xl grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <li class="flex flex-col rounded-lg border border-gray-200 p-6 bg-blue-200">
          <blockquote class="flex-1 text-sm text-gray-700">
            &ldquo;Setup took less time than the coffee I made while doing it. The defaults are genuinely good, which is rare.&rdquo;
          </blockquote>
          <div class="mt-6 flex items-center gap-3">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?auto=format&fit=crop&q=80&w=200"
              class="size-9 rounded-full object-cover"
            />
            <div>
              <p class="text-sm font-medium text-gray-900">Marcus Boyle</p>
              <p class="text-xs text-gray-500">Founder, Northwind Studio</p>
            </div>
          </div>
        </li>

        <li class="flex flex-col rounded-lg border border-gray-200 p-6 bg-blue-200">
          <blockquote class="flex-1 text-sm text-gray-700">
            &ldquo;We tried three other tools before this one. It's the only one the whole team still opens without being reminded to.&rdquo;
          </blockquote>
          <div class="mt-6 flex items-center gap-3">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1601412436009-d964bd02edbc?auto=format&fit=crop&q=80&w=200"
              class="size-9 rounded-full object-cover"
            />
            <div>
              <p class="text-sm font-medium text-gray-900">Priya Natarajan</p>
              <p class="text-xs text-gray-500">Ops Lead, Orbitly</p>
            </div>
          </div>
        </li>

        <li class="flex flex-col rounded-lg border border-gray-200 p-6 bg-blue-200">
          <blockquote class="flex-1 text-sm text-gray-700">
            &ldquo;Migrating five years of data usually breaks something. Nothing broke. That's the whole review.&rdquo;
          </blockquote>
          <div class="mt-6 flex items-center gap-3">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=200"
              class="size-9 rounded-full object-cover"
            />
            <div>
              <p class="text-sm font-medium text-gray-900">Kwame Asante</p>
              <p class="text-xs text-gray-500">CTO, Fieldnote</p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <!-- Call to action -->
    <div class="mt-10 mb-10 flex items-center justify-center px-4">
      <div class="aura text-orange-600 w-full max-w-md">
        <div class="card bg-base-100 text-base-content shadow">
          <div class="card-body bg-blue-200 text-center">
            <p class="font-semibold">So Come Our Shop & Wash Your Car </p>
          </div>
        </div>
      </div>
    </div>

    <figure class="diff aspect-16/8" tabindex="0">
  <div class="diff-item-1" role="img" tabindex="0">
    <img alt="daisy" src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a.webp" />
  </div>
  <div class="diff-item-2" role="img">
    <img
      alt="daisy"
      src="Images\11.avif" />
  </div>
  <div class="diff-resizer"></div>
</figure>

    <!-- Footer -->
    <footer class="footer sm:footer-horizontal bg-blue-200 text-black p-10 flex flex-col sm:flex-row justify-between">
      <aside>
        <svg
          width="50"
          height="50"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          fill-rule="evenodd"
          clip-rule="evenodd"
          class="fill-current">
          <path
            d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
        </svg>
        <p>
          Mahin IT Ltd.
          <br />
          Providing reliable tech since 1992
        </p>
        <p>Address : Kawler, 1230 , Dhaka , Bangladesh</p>
      </aside>
      <nav>
        <h6 class="footer-title">Social</h6>
        <div class="grid grid-flow-col gap-4">
          <a href="#">
            <svg aria-label="Twitter" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
          </a>
          <a href="#">
            <svg aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
          </a>
          <a href="#">
            <svg aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg>
          </a>
        </div>
      </nav>
    </footer>

    <footer class="footer sm:footer-horizontal footer-center bg-blue-200 text-black p-4 border-t border-blue-300">
      <aside>
        <p>Copyright © Mahin Software Limited</p>
      </aside>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </body>
</html>