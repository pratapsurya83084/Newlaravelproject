<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>BISJHINTUS SERVICE INQUIRY FORM</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Link the external CSS -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/inquiryForm.css') }}"> -->
</head>

<body>
  <div class="select-none">
    <!-- header -->
    <div class='bg-gray-100 shadow-lg pb-2'>
      <div class='flex justify-between items-center'>

        <div class='flex justify-center items-center w-full'>
          <img
            class='h-20 p- m-2'
            src="\assets\images\logo.png"
            alt="Logo" />
        </div>

      </div>
    </div>

    <div class="container mx-auto px-4 py-10 md:py-20 mb-20">
      <h2 class="text-2xl sm:text-3xl md:text-3xl lg:text-4xl font-bold mb-5 sm:mb-20 md:mb-20 text-center">
        Your Success Story Starts With BISJHINTUS Group
      </h2>


      <!-- ----------------inquiry form  ------------------------------------>
      <form action="{{ route('inquiry.post') }}" method="POST" id="inquiryForm" class="max-w-lg mx-auto bg-[#009bb5] p-8 rounded-lg shadow-md">
    @csrf
    <div class="mb-6">
        <label for="courseName" class="block text-white font-bold mb-2">Your Desired Course / Training</label>
        <input name="courseName" id="course" type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Course You Are Signing Up For" required />
    </div>

    <div class="mb-6">
        <label for="course_Enroll_Date" class="block text-white font-bold mb-2">Course Journey Begins With Us</label>
        <input name="course_Enroll_Date" id="course_enroll_date" type="date" class="w-full p-3 border border-gray-300 rounded" required />
    </div>

    <div class="mb-6">
        <label for="username" class="block text-white font-bold mb-2">Your Full Name</label>
        <input name="username" id="username" type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter your username" required />
    </div>

    <div class="mb-6">
        <label for="email" class="block text-white font-bold mb-2">Your Email</label>
        <input name="email" id="email" type="email" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter your email" required />
    </div>

    <div class="mb-6">
        <label for="phone_Number" class="block text-white font-bold mb-2">Your Phone Number</label>
        <input name="phone_Number" id="phone_Number" type="tel" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter your phone number" pattern="\d{10}" inputmode="numeric" title="Phone number must be 10 digits" required />
    </div>

    <div class="mb-6">
        <label for="country" class="block text-white font-bold mb-2">Your Country</label>
        <input name="country" id="country" type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter your country" required />
    </div>

    <div class="mb-6">
        <label for="job_role" class="block text-white font-bold mb-2">Your Job Role</label>
        <input name="job_role" id="job_role" type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter your job role" required />
    </div>

    <div class="mb-6">
        <label for="service" class="block text-white font-bold mb-2">Select Your Service</label>
        <select name="service" id="service" required class="w-full p-2 border border-gray-300 rounded text-gray-700">
            <option value="" class="text-gray-400">Select a service</option>
            <option value="BusinessToCustomer">Business to Customer</option>
            <option value="BusinessToBusiness">Business to Business</option>
        </select>
    </div>

    <div class="text-center">
        <button type="submit" class="w-full text-xl bg-[#009bb5] border text-white shadow-xl font-bold py-3 px-10 rounded">ACT NOW</button>
    </div>
</form>


    </div>


    <!-- footer -->

    <footer class='mb-0 bg-gray-100'>

      <!-- {/* logo and soial media icons */} -->
      <div class="flex justify-center gap-0">
        <div class="flex flex-col  ">
          <div class=" xl:flex">

            <img
              src="\assets\images\logo.png"
              alt="BISJHINTUS Logo"
              className=" h-15 mt-5 " />


          </div>



        </div>
      </div>


      <!-- {/* hidden lg: */} -->
      <div class="flex flex-col  justify-center">
        <div class="flex flex-col md:flex-row justify-center r space-y-8 md:space-y-0 md:space-x-1 max-w-6xl w-full mx-auto p-10 ">
          <!-- {/* Contact info */} -->
          <div class="text-center md:text-left md:mb-4 mb-  text-lg font-semibold w-full md:w-1/3">
            <h1>M/s BISJHINTUS PRIVATE LIMITED</h1>
            <br />
            <h1>CIN: U80904TR2021PTC013885</h1>
            <br />
            <h1>ISO:9001:2015, Certificate Number: 21IQGQ82</h1>
            <br />
            <p class="mt-10">
              All Rights Reserved | Copyright © BISJHINTUS | 2024
            </p>
          </div>

          <!-- {/* Startup logo */} -->
          <div class="flex justify-center items-center w-full md:w-1/3">
            <img
              src="\assets\images\startupIndia_vowlink_logo.png"
              alt="Logo"
              class="h-32 mb-4 md:mb-0" />
          </div>

          <!-- {/* Address info */} -->
          <div class="text-lg w-full md:w-1/3 text-center md:text-right">
            <h1 class="text-cyan-500 mb-4 md:mb-10 text-xl">CONTACT</h1>
            <ul class="space-y-4">
              <li class="text-xl font-bold">Registered Office</li>
              <li>C/O Jhintu Baidya Adhikari,</li>
              <li>Ramakrishna Colony, Belonia,</li>
              <li>South Tripura, Tripura – 799155</li>
            </ul>

            <ul class="space-y-4 mt-10">
              <li class="text-xl font-bold">Corporate Office</li>
              <li>KUDCEMP Building, 2nd Floor,</li>
              <li>MCC Commercial Complex,</li>
              <li>Mallikatte, Kadri, Mangalore,</li>
              <li>Karnataka – 575002</li>
            </ul>

            <ul class="space-y-4 mt-10">
              <li>Ph: +91 9353383517</li>
              <li>Mail: adoreforgrowth@bisjhintus.com</li>
            </ul>
          </div>
        </div>




    </footer>
</body>


<script>





</script>

</html>