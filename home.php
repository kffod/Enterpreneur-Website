<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />

  <title>Social Network For Entrepreneur</title>
</head>

<body>
  <!-- header -->
  <header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <img src="https://images.assetsdelivery.com/compings_v2/mamun25g/mamun25g2207/mamun25g220712542.jpg"
          width="50px" height="50px" class="rounded-full" style alt="logo">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
       
        <p align:center></p><span class="ml-3 text-xl"><b>Social Networking For Entrepreneurs</b></span>
      </a></p>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-white"></a>
        <a href="profile.html" target="_blank"class="mr-5 hover:text-white">Profile</a>
        <a href="subscription.html" target="_blank"class="mr-5 hover:text-white">Subscribe</a>
        <a href="signin.html" target="_blank"class="mr-5 hover:text-white"> Login</a>
        <a href="signup.html"class="mr-5 hover:text-white">Sign up</a>
        <a href="contact.html" target="_blank"class="mr-5 hover:text-white">Contact us</a>
      </nav>
    </div>
  </header>
  <!-- header close -->
  <!-- hero 1 -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
          <br class="hidden lg:inline-block" />How SNE Works ?
        </h1>
        <p class="mb-8 leading-relaxed">
          This application is meant for Entrepreneurs where they can interact
          with other entrepreneurs and meet new people who share your
          interest. Here you can join groups to enhance your entrepreneurship skills
          . You can also buy and sell products to increase your business and you can also
          creat your group where other people can join and exchange their ideas and to build up a community
        </p>
        <div class="flex justify-center">

        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero"
          src="https://source.unsplash.com/760x600/?entrepreneur,business" />
      </div>
    </div>
  </section>
  <!-- groups -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col">
       
          <div class="w-24 h-full bg-indigo-500"></div>
        </div>
        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">


        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full"
              src="https://cdni.iconscout.com/illustration/premium/thumb/man-choosing-to-join-between-two-teams-or-two-group-of-people-1841820-1562035.png" />
          </div>
          <h2 class="text-xl font-medium title-font text-white mt-5">
            Join a group
          </h2>
          <p class="text-base leading-relaxed mt-2">
            Find the group who share your same interest
            and enhance your entrepreneurship skills
          </p>
          <a href="group.html" class="text-indigo-400 inline-flex items-center mt-3">Click here to join a group
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full"
              src="https://png.pngtree.com/png-vector/20220707/ourmid/pngtree-tiny-people-stock-traders-at-laptop-with-graph-chart-buy-and-png-image_5740903.png" />
          </div>
          <h2 class="text-xl font-medium title-font text-white mt-5">
            Buy and sell products
          </h2>
          <p class="text-base leading-relaxed mt-2">
            Here you can search for products which you want to buy
            and can also sell your own products
          </p>
          <a href="product.html"class="text-indigo-400 inline-flex items-center mt-3">Click here to sell or buy
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full"
              src="data:image/jpeg;base64,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"/></div>
          <h2 class="text-xl font-medium title-font text-white mt-5">
            Stary your own group
          </h2>
          <p class="text-base leading-relaxed mt-2">
            With this you can create your own group where other people can join and build your community
          </p>
          <a href="https://t.me/enterpreneur_world"class="text-indigo-400 inline-flex items-center mt-3">Click here to create your group
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- products -->
  <div class="flex justify-center">
    <div class="flex flex-col max-w-7xl justify-center items-center">
      <div class="overflow-hidden w-3/4 bg-white m-4 shadow-lg flex flex-col md:flex-row justify-center">
        <div class="h-26 w-full overflow-hidden"> 
          <a href="https://groww.in" target="_blank">
            <img
              src="https://avatars.githubusercontent.com/u/46338701?s=280&v=4"
              alt="" class="" />
            </a>
          <!--  -->
        </div>
        <div class="grid p-2">
          <div class="font-bold text-lg text-black m-2 mt-10">Groww is the simple Demat & stock trading app that allows
            you to open a free Demat account & trade listed stocks in the share market at a low brokerage on stock
            orders. </div>
          <div class="text-gray-500 m-2 text-sm"><a href="">The company raised $83 million in 2021 and entered into the
              Unicorn club. This company is looking forward to investing this amount in new products, recruiting new
              talent, and building education platforms for investors.</a></div>
        </div>
      </div>
      <div class="overflow-hidden w-3/4 bg-white m-4 shadow-lg flex flex-col md:flex-row justify-center">
        <div class="grid p-2">
          <div class="font-bold text-lg text-black m-2 mt-10">CRED is an Indian fintech company, based in Bangalore.
            Founded in 2018 by Kunal Shah, it is a reward-based credit card payments app. </div>
          <div class="text-gray-500 m-2 text-sm"><a href="">According to TechCrunch, CRED is the youngest Indian startup
              to be valued at around $2.2 billion. This 2-year-old startup has more than 6 million customers and about
              22% of all credit card holders. As per the founder and CEO, Kunal Shah, the company is targeting affluent
              customers and has become one of the most talked-about startups. </a></div>
        </div>
        <div class="h-26 w-full overflow-hidden"> 
          <a href="https://cred.club" target="_blank">
          <img
            src="https://avatars.githubusercontent.com/u/66770243?s=280&v=4"
            alt="" class="" />
          </a>
         </div>
      </div>
      <div class="overflow-hidden w-3/4 bg-white m-4 shadow-lg flex flex-col md:flex-row justify-center">
        <div class="h-26 w-full overflow-hidden">
          <a href="https://www.meesho.com" target="_blank">
          <img
            src="https://avatars.githubusercontent.com/u/19436680?s=280&v=4"
            alt="" class="" />
        </a>
      </div>
        <div class="grid p-2">
          <div class="font-bold text-lg text-black m-2 mt-10">Meesho is India's largest and most trusted marketplace for
            Resellers, who sell products online through WhatsApp and Facebook. </div>
          <div class="text-gray-500 m-2 text-sm"><a href="">Founded in 2015 by IIT-Delhi Graduates, Meesho is the
              reseller platform that is all set to become the big e-commerce distribution channel where the homepreneurs
              sell products through WhatsApp, Facebook, and Instagram. The company is valued at $2.1 billion after
              raising funds of $300 million.</a></div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.tailwindcss.com"></script>
  <br>
  <br>
  <!-- footer -->
  <div>
    <div class="bg-gray-900 p-3 space-y-10 md:grid grid-cols-2 md:-mt-6 lg:grid-cols-4">
      <div class="w-1/2 md:ml-24 md:mt-9 md:w-3/4">
        <h1 class="text-indigo-400 text-xl font-medium">Company</h1> <br />
        <p class="text-gray-300/80 text-base hover:text-yellow-300 cursor-none"> SNE(Social Networking for
          Entrepreneur)<br /> Vidyavardhini College Of
          Engineering<br /> India </p> <br />
        <p class="text-gray-200/80 text-base hover:text-yellow-300 cursor-pointer"> <strong
            class="tracking-wide text-indigo-400 font-normal">Phone:</strong> +91 8208425394 </p>
        <p class="text-gray-200/80 text-base hover:text-yellow-300 cursor-pointer"> <strong
            class="tracking-wide text-indigo-400 font-normal">Email:</strong> nikhil.212708111@vcet.edu.in</p>
      </div>
      <div class="leading-9 md:w-2/4 md:order-3 md:ml-24">
        <h1 class="text-indigo-400 text-xl font-medium tracking-[0.030rem]"> Useful Links </h1>
        <ul class="mt-2 text-gray-300/80">
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              Home</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              About Us</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              Services</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              Terms of service</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              Privacy policy</a> </li>
        </ul>
      </div>
      <div class="leading-9 md:w-3/4 md:order-4">
        <h1 class="text-indigo-400 text-xl font-medium tracking-[0.030rem]"> Our Services </h1>
        <ul class="mt-2 text-gray-300/80">
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300"> Web
              Design</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300"> Web
              Development</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              Product Management</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              Marketing</a> </li>
          <li> <i class="fa fa-chevron-right text-indigo-400"></i> <a href="#" class="hover:text-yellow-300">
              Graphic Design</a> </li>
        </ul>
      </div>
      <div class="md:order-2 lg:order-last">
        <h1 class="text-indigo-400 text-xl font-medium tracking-[0.030rem]"> Join Our Newsletter </h1> <br />
        <p class="text-gray-300/80 w-3/5 leading-7 mb-5 md:w-3/4"> Join 25,000+ others and never miss out on new
          tips,tutorials, and more. </p> <input type="email" placeholder="Enter E-mail Here"
          class="py-1 px-2 placeholder-gray-400 rounded-tl-xl focus: outline-none focus:border border-indigo-600 md:w-1/2 lg:w-3/5" />
        <button class="text-white bg-indigo-400 p-1 -translate-x-1 rounded-br-xl hover:bg-indigo-500"> Subscribe
        </button>
      </div>
    </div>
    <div class="bg-gray-900 p-3 flex flex-col text-center pt-5 space-y-8 md:flex-row md:justify-between md:space-y-0">
      <div
        class="flex mx-3 justify-between space-x-20 md:flex-row text-gray-200 md:space-x-28 md:ml-20 lg:ml-24 lg:space-x-[13rem] xl:space-x-72 xl:ml-24">
        <p>@ Copyright <strong>Company.</strong>All Rights Reserved</p>

      </div>
      <div
        class="text-white pb-4 text-center text-xl space-x-2 md:w-2/4 md:pb-0 md:pl-2 md:space-x-1 lg:pl-[171px] lg:space-x-2 xl:pl-44">
        <a href="#"
          class="w-8 h-8 bg-indigo-500 hover:text-indigo-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i
            class="fa fa-twitter"></i></a> <a href="https://instagram.com/saste_coders2?igshid=YmMyMTA2M2Y="
          class="w-8 h-8 bg-indigo-500 hover:text-indigo-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i
            class="fa fa-instagram"></i></a> <a href="#"
          class="w-8 h-8 bg-indigo-500 hover:text-indigo-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i
            class="fa fa-facebook"></i></a> <a href="#"
          class="w-8 h-8 bg-indigo-500 hover:text-indigo-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i
            class="fa fa-google"></i></a> <a href="#"
          class="w-8 h-8 bg-indigo-500 hover:text-indigo-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i
            class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>
  <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>