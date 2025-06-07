@extends('user.layouts.layout')

@section('title', 'HFJ')

@section('content')

<style>
  /* Custom CSS for image hover effects (not easily achievable with Tailwind) */
  .project-image-container {
    transition: transform 0.3s ease-in-out;
    overflow: hidden;
  }

  #resume:hover{
    background: linear-gradient(90deg, #60A5FA 0%, #2563EB 100%);
  }

  .project-image {
    transition: transform 0.5s ease, filter 0.5s ease;
  }

  .project-image-container:hover .project-image {
    transform: scale(1.05);
    filter: brightness(1.1);
  }

  /* Custom gradient text for light and dark modes */
  .gradient-text {
    background: linear-gradient(to right, #3B82F6, #60A5FA);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .gradient-text2 {
    background: linear-gradient(to right, #60A5FA, #93C5FD);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Fade-in animation keyframes */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes fadeInLeft {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes fadeInRight {
    from {
      opacity: 0;
      transform: translateX(30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  /* Animation classes */
  .animate-fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .animate-fade-in {
    animation: fadeIn 0.8s ease-out forwards;
  }

  .animate-fade-in-left {
    animation: fadeInLeft 0.8s ease-out forwards;
  }

  .animate-fade-in-right {
    animation: fadeInRight 0.8s ease-out forwards;
  }

  /* Staggered animation delays */
  .animate-delay-100 { animation-delay: 0.1s; }
  .animate-delay-200 { animation-delay: 0.2s; }
  .animate-delay-300 { animation-delay: 0.3s; }
  .animate-delay-400 { animation-delay: 0.4s; }
  .animate-delay-500 { animation-delay: 0.5s; }
  .animate-delay-600 { animation-delay: 0.6s; }
  .animate-delay-700 { animation-delay: 0.7s; }
  .animate-delay-800 { animation-delay: 0.8s; }

  /* Initial state for animated elements */
  [class*="animate-fade"] {
    opacity: 0;
  }
</style>

<section class="hero">
  <div class="bg-white dark:bg-[#0F172A] flex min-h-[600px] md:min-h-[500px] sm:min-h-[400px] items-center justify-center rounded-lg shadow-lg animate-fade-in"> 
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-[100px] max-w-[90%] lg:max-w-[80%] items-center">
      <div class="flex flex-col bg-[#1E293B] p-2 rounded-xl gap-2 drop-shadow-2xl shadow-blue-600 animate-fade-in-left animate-delay-200">
        <div class="bg-white dark:bg-[#1E293B] p-[1px] rounded-xl">
          <img src="{{asset('assets/images/logo/img-hero.svg')}}" alt="hfj image" class="w-full h-auto">
        </div>
        <div class="flex flex-col py-2">
          <p class="font-bold italic text-lg text-center w-full text-white">Hamad Fauzi Jessar</p>
          <p class="font-bold italic text-sm text-center w-full gradient-text">Full Stack Developer</p>
        </div>
      </div>

      <div class="flex flex-col gap-4 justify-center text-center lg:text-left animate-fade-in-right animate-delay-300">
        <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl italic text-black dark:text-white">Hi there, I'm Hamad!</h1>
        <p class="text-slate-600 dark:text-gray-300 text-base lg:text-lg font-light">A full stack web and mobile <span class="gradient-text2 font-bold">developer</span> passionate <br class="hidden lg:block"> about building seamless digital experiences.</p>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center lg:justify-start">
          <a href="javascript:;" class="bg-blue-600 rounded-xl flex items-center justify-center w-full sm:w-fit p-2 gap-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-600 transition-all duration-300">
            <p class="text-white font-bold italic text-lg">Explore</p>
            <img width="16px" src="{{asset('assets/images/icon/arrow-bot.svg')}}" alt="arrow">
          </a>

          <a id="resume" href="javascript:;" class="bg-white dark:bg-transparent border-2 border-blue-600 dark:border-blue-500 rounded-xl flex justify-center w-full sm:w-fit p-2 gap-4 hover:bg-blue-600  transition-all duration-300">
            <p class="text-blue-600 dark:text-white font-bold italic text-lg hover:text-white">Resume</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="total">
  <div class="bg-white dark:bg-[#0F172A] flex flex-col sm:flex-row items-center justify-around rounded-lg shadow-lg py-8 gap-6 sm:gap-0 animate-fade-in-up animate-delay-400"> 
    <div class="flex flex-col gap-0 items-center animate-fade-in-up animate-delay-500">
      <p class="gradient-text text-3xl sm:text-4xl lg:text-[48px] font-bold italic">12+</p>
      <p class="text-slate-600 dark:text-gray-300 font-medium text-center">Total Client</p>
    </div>

    <div class="flex flex-col gap-0 items-center animate-fade-in-up animate-delay-600">
      <p class="gradient-text text-3xl sm:text-4xl lg:text-[48px] font-bold italic">12+</p>
      <p class="text-slate-600 dark:text-gray-300 font-medium text-center">Projects Completed</p>
    </div>

    <div class="flex flex-col gap-0 items-center animate-fade-in-up animate-delay-700">
      <p class="gradient-text text-3xl sm:text-4xl lg:text-[48px] font-bold italic">4+</p>
      <p class="text-slate-600 dark:text-gray-300 font-medium text-center">Years of Experience</p>
    </div>

    <div class="flex flex-col gap-0 items-center animate-fade-in-up animate-delay-800">
      <p class="gradient-text text-3xl sm:text-4xl lg:text-[48px] font-bold italic">4</p>
      <p class="text-slate-600 dark:text-gray-300 font-medium text-center">Services Offered</p>
    </div>
  </div>
</section>

<section class="quote">
  <div class="bg-white dark:bg-[#0F172A] flex relative min-h-[400px] md:min-h-[300px] items-center justify-around rounded-lg shadow-lg py-8 px-4 animate-fade-in"> 
    <img src="{{asset('assets/images/icon/quote.svg')}}" alt="quote icon" class="absolute top-0 left-0 w-fit h-8 md:h-12">
    <img src="{{asset('assets/images/icon/quote.svg')}}" alt="quote icon" class="absolute bottom-0 right-0 rotate-180 w-fit h-8 md:h-12">
    <div class="flex flex-col animate-fade-in-up animate-delay-200">
      <p class="text-slate-800 dark:text-white font-bold text-2xl md:text-3xl lg:text-[48px] italic text-center leading-tight">"First, solve the problem. <br class="hidden md:block"> Then, write the code."</p>
      <p class="font-bold gradient-text2 text-center mt-4">John Johnson</p>
    </div>
  </div>
</section>

<section class="services-intro">
  <div class="bg-white dark:bg-[#0F172A] flex relative rounded-lg shadow-lg py-8 px-4 animate-fade-in-left"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute top-1/2 left-0 transform -translate-y-1/2 w-fit h-8 md:h-12">
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-[80px] items-center w-full lg:mx-32 text-center lg:text-left">
      <p class="text-slate-800 dark:text-white font-bold text-3xl md:text-4xl lg:text-[48px] italic">Services</p>
      <p class="font-medium text-slate-600 dark:text-gray-300">Offering tailored services to enhance your brand, from stunning web designs <br class="hidden lg:block"> to engaging apps. Let's bring your vision to life!</p>
    </div>
  </div>
</section>

<section class="services">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-white dark:bg-[#1E293B] flex flex-col items-center p-4 rounded-lg shadow-lg py-8 animate-fade-in-up animate-delay-100"> 
      <img src="{{asset('assets/images/icon/services-personal-web.svg')}}" alt="" class="flex-1 w-16 h-16 md:w-20 md:h-20">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-8 lg:mt-16 text-center">Personal Web</p>
      <p class="flex-none text-slate-600 dark:text-gray-300 text-center font-medium text-sm md:text-md">Custom sites that showcase your unique identity</p>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex flex-col items-center p-4 rounded-lg shadow-lg py-8 animate-fade-in-up animate-delay-200"> 
      <img src="{{asset('assets/images/icon/services-company-profile.svg')}}" alt="" class="flex-1 w-16 h-16 md:w-20 md:h-20">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-8 lg:mt-16 text-center">Company Profile</p>
      <p class="flex-none text-slate-600 dark:text-gray-300 text-center font-medium text-sm md:text-md">Custom sites that showcase your unique identity</p>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex flex-col items-center p-4 rounded-lg shadow-lg py-8 animate-fade-in-up animate-delay-300"> 
      <img src="{{asset('assets/images/icon/services-web.svg')}}" alt="" class="flex-1 w-16 h-16 md:w-20 md:h-20">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-8 lg:mt-16 text-center">Web</p>
      <p class="flex-none text-slate-600 dark:text-gray-300 text-center font-medium text-sm md:text-md">Custom sites that showcase your unique identity</p>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex flex-col items-center p-4 rounded-lg shadow-lg py-8 animate-fade-in-up animate-delay-400"> 
      <img src="{{asset('assets/images/icon/services-mobile.svg')}}" alt="" class="flex-1 w-16 h-16 md:w-20 md:h-20">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-8 lg:mt-16 text-center">Mobile</p>
      <p class="flex-none text-slate-600 dark:text-gray-300 text-center font-medium text-sm md:text-md">Custom sites that showcase your unique identity</p>
    </div>
  </div>
</section>

<section class="skils-intro">
  <div class="bg-white dark:bg-[#0F172A] flex relative rounded-lg shadow-lg py-8 px-4 animate-fade-in-right"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute top-1/2 right-0 rotate-180 transform -translate-y-1/2 w-fit h-8 md:h-12">
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-[80px] items-center justify-center lg:justify-end w-full lg:mx-32 text-center lg:text-right">
      <p class="font-medium text-slate-600 dark:text-gray-300 order-2 lg:order-1">Leveraging top industry technologies to create innovative web and mobile <br class="hidden lg:block"> solutions, ensuring high-quality, scalable applications.</p>
      <p class="text-slate-800 dark:text-white font-bold text-3xl md:text-4xl lg:text-[48px] italic order-1 lg:order-2">Skills</p>
    </div>
  </div>
</section>

<section class="skils">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    <div class="grid grid-cols-3 gap-4 animate-fade-in-left animate-delay-100">
      <div class="bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-html-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-css-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-js-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="col-span-1 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-php-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="col-span-2 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-mysql-light.svg')}}" alt="" class="w-12 h-8 md:w-auto md:h-auto">
      </div>
      <div class="col-span-2 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-tailwind-light.svg')}}" alt="" class="w-12 h-8 md:w-auto md:h-auto">
      </div>
      <div class="col-span-1 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-boostrap-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8 animate-fade-in-up animate-delay-200">
      <img src="{{asset('assets/images/logo/logo-laravel-light.svg')}}" alt="laravel" class="drop-shadow-lg shadow-red-900 w-16 h-16 md:w-auto md:h-auto">
    </div>

    <div class="grid grid-cols-3 gap-4 animate-fade-in-right animate-delay-300">
      <div class="col-span-2 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-flutter-light.svg')}}" alt="" class="w-12 h-8 md:w-auto md:h-auto">
      </div>
      <div class="col-span-1 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-react-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="col-span-1 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-vue-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="col-span-2 bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-node-js-light.svg')}}" alt="" class="w-12 h-8 md:w-auto md:h-auto">
      </div>
      <div class="bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-mongo-db-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-vs-code-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
      <div class="bg-white dark:bg-[#1E293B] flex items-center justify-center rounded-lg p-4 md:p-8">
        <img src="{{asset('assets/images/logo/logo-postman-light.svg')}}" alt="" class="w-8 h-8 md:w-auto md:h-auto">
      </div>
    </div>
  </div> 
</section>

<section class="project-intro">
  <div class="bg-white dark:bg-[#0F172A] flex relative rounded-lg shadow-lg py-8 px-4 animate-fade-in-left"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute top-1/2 left-0 transform -translate-y-1/2 w-fit h-8 md:h-12">
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-[80px] items-center w-full lg:mx-32 text-center lg:text-left">
      <p class="text-slate-800 dark:text-white font-bold text-3xl md:text-4xl lg:text-[48px] italic">Projects</p>
      <p class="font-medium text-slate-600 dark:text-gray-300">Offering tailored services to enhance your brand, from stunning web designs <br class="hidden lg:block"> to engaging apps. Let's bring your vision to life!</p>
    </div>
  </div>
</section>

<section class="filter-project">
  <div class="bg-white dark:bg-[#0F172A] flex relative rounded-lg shadow-lg py-8 h-[60px] md:h-[100px] animate-fade-in"> 
  </div>
</section>

<section class="project">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-4"> 
    <div class="bg-white dark:bg-[#1E293B] flex flex-col gap-4 justify-center rounded-lg px-8 lg:px-16 py-8 lg:py-[60px] items-center animate-fade-in-up animate-delay-100">
      <div class="w-full lg:w-[80%] bg-gradient-to-b from-blue-500 to-blue-800 rounded-t-[32px] flex h-[220px] rounded-b-[64px] overflow-hidden relative project-image-container">
        <img src="{{asset('assets/images/projects/dummy.png')}}" alt="img" class="rounded-bl-[1px] mx-auto mt-[30px] object-contain w-[95%] h-full project-image">
      </div> 
      <a href="javascript:;" class="border border-slate-600 dark:border-gray-400 rounded-[99px] w-fit px-4 text-slate-600 dark:text-gray-300 font-normal text-sm">
        Mobile App
      </a>
      <p class="text-xl lg:text-[24px] gradient-text2 font-bold italic mt-4 self-start text-start w-full">Company Profile Website #1</p>
      <p class="text-slate-600 dark:text-gray-300 font-normal text-sm lg:text-base">Here's a short copywriting text placeholder for a section showcasing your mobile and web app projects</p>
      <a href="javascript:;" class="text-slate-600 dark:text-blue-400 font-bold italic text-lg lg:text-[20px] self-start text-start underline underline-offset-4">View Project</a>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex flex-col gap-4 justify-center rounded-lg px-8 lg:px-16 py-8 lg:py-[60px] items-center animate-fade-in-up animate-delay-200">
      <div class="w-full lg:w-[80%] bg-gradient-to-b from-blue-500 to-blue-800 rounded-t-[32px] flex h-[220px] rounded-b-[64px] overflow-hidden relative project-image-container">
        <img src="{{asset('assets/images/projects/dummy.png')}}" alt="img" class="rounded-bl-[1px] mx-auto mt-[30px] object-cover w-[95%] h-full project-image">
      </div> 
      <a href="javascript:;" class="border border-slate-600 dark:border-gray-400 rounded-[99px] w-fit px-4 text-slate-600 dark:text-gray-300 font-normal text-sm">
        Mobile App
      </a>
      <p class="text-xl lg:text-[24px] gradient-text2 font-bold italic mt-4 self-start text-start w-full">Company Profile Website #1</p>
      <p class="text-slate-600 dark:text-gray-300 font-normal text-sm lg:text-base">Here's a short copywriting text placeholder for a section showcasing your mobile and web app projects</p>
      <a href="javascript:;" class="text-slate-600 dark:text-blue-400 font-bold italic text-lg lg:text-[20px] self-start text-start underline underline-offset-4">View Project</a>
    </div>
  </div>  
</section>

<section class="all-project">
  <div class="bg-white dark:bg-[#0F172A] flex relative rounded-lg shadow-lg py-8 h-[80px] md:h-[100px] items-center animate-fade-in"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute left-0 w-fit h-8 md:h-12">
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute right-0 rotate-180 w-fit h-8 md:h-12">
    <div class="flex items-center justify-center w-full">
      <a href="{{route('projects')}}">

        <button class="text-blue-600 dark:text-white border-2 border-blue-600 dark:border-blue-300 text-center font-extrabold italic px-4 py-2 rounded-xl flex gap-4 items-center hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-600 hover:text-white transition-all duration-300 text-sm md:text-base">
          View All Project
          <img width="16px" src="{{asset('assets/images/logo-all-project.png')}}" class="hidden dark:block hover:text-blue-600" alt="arrow">
          <img width="16px" src="{{asset('assets/images/icon/angle-circle-down.svg')}}" class="block dark:hidden hover:text-blue-600" alt="arrow">
        </button>
        </a>
    </div>
  </div>
</section>

<section class="contact">
  <div class="bg-white dark:bg-[#0F172A] flex min-h-[300px] lg:min-h-[400px] items-center justify-around rounded-lg shadow-lg py-8 px-4 animate-fade-in-up"> 
    <div class="flex flex-col gap-6 text-center">
      <p class="text-slate-800 dark:text-white font-bold text-2xl md:text-3xl lg:text-[48px] italic leading-tight">Ready to bring your ideas to life? <br class="hidden md:block"> Let's work together!</p>
      <button class="w-fit mx-auto text-blue-600 dark:text-white border-2 border-blue-600 dark:border-blue-400 text-center font-extrabold italic px-4 py-2 rounded-xl flex gap-4 items-center hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300 text-sm md:text-base">
        Say Hello on Whatsapp
        <img width="16px" src="{{asset('assets/images/logo-all-project.png')}}" class="hidden dark:block hover:text-blue-600" alt="arrow">
        <img width="16px" src="{{asset('assets/images/icon/angle-circle-down.svg')}}" class="block dark:hidden hover:text-blue-600" alt="arrow">
      </button>
    </div>
  </div>
</section>

@endsection

@section('js')

@endsection