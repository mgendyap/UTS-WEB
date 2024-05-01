<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <title>Document</title>
</head>
<body>
    <p class="text-center text-2xl font-bold mt-20 mb-10">Our Catalog</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 justify-center mx-auto mt-10 pl-8 pr-8 hover">
      <div class="card w-full bg-base-100 shadow-xl">
        <figure>
          <img
            src="/assets/image/cookies.jpeg"
            alt="Cookies"
            class="rounded-xl w-full h-48 object-cover" 
            onclick="window.location.href = '/html/catalogKue.html'"
            style="cursor: pointer;"
          />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title text-lg font-bold">Cookies</h2>
          <div class="card-actions"></div>
        </div>
      </div>

      <div class="card w-full bg-base-100 shadow-xl">
        <figure>
          <img
            src="/assets/image/donut.jpeg"
            alt="Donut"
            class="rounded-xl w-full h-48 object-cover"
            onclick="window.location.href = '/html/catalogKue.html'"
            style="cursor: pointer;"
          />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title text-lg font-bold">Donut</h2>
          <div class="card-actions"></div>
        </div>
      </div>

      <div class="card w-full bg-base-100 shadow-xl">
        <figure>
          <img
            src="/assets/image/pastry.jpeg"
            alt="Pastry"
            class="rounded-xl w-full h-48 object-cover"
            onclick="window.location.href = '/html/catalogKue.html'"
            style="cursor: pointer;"
          />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title text-lg font-bold">Pastry</h2>
          <div class="card-actions"></div>
        </div>
      </div>

      <div class="card w-full bg-base-100 shadow-xl">
        <figure>
          <img
            src="/assets/image/cookies.jpeg"
            alt="Cookies"
            class="rounded-xl w-full h-48 object-cover"
            onclick="window.location.href = '/html/catalogKue.html'"
            style="cursor: pointer;"
          />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title text-lg font-bold">Kue Tart</h2>
          <div class="card-actions"></div>
        </div>
      </div>

      <div class="card w-full bg-base-100 shadow-xl">
        <figure>
          <img
            src="/assets/image/tradisional.jpeg"
            alt="tradisional"
            class="rounded-xl w-full h-48 object-cover"
            onclick="window.location.href = '/html/catalogKue.html'"
            style="cursor: pointer;"
          />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title text-lg font-bold">Kue tradisional</h2>
          <div class="card-actions"></div>
        </div>
      </div>

    </div>
</body>
</html>