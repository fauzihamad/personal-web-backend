@extends('user.layouts.layout')

@section('title', 'HFJ')

@section('content')

<style>
  .gradient-text {
    background: linear-gradient(to right, #bfdbfe, #60a5fa); /* blue-200 to blue-400 */
    -webkit-background-clip: text;
    color: transparent;
  }

  .gradient-text2 {
    background: linear-gradient(to right, #60A5FA, #2563EB);
    -webkit-background-clip: text;
    color: transparent;
  }

  .btn-explore:hover{
    background: linear-gradient(to right, #bfdbfe, #60a5fa); /* blue-200 to blue-400 */
    color: white;
  }

</style>
<section class="hero">
  
  <div class="bg-white flex min-h-[600px] items-center justify-center rounded-lg shadow-lg"> 
    <div class="flex gap-[100px] max-w-[80%]">

      <div class="flex flex-col bg-[#1E293B] p-2 rounded-xl gap-2 drop-shadow-2xl shadow-blue-600">
        <div class="bg-white p-[1px] rounded-xl">
          <img src="{{asset('assets/images/logo/img-hero.svg')}}" alt="hfj image" class="">
        </div>
        <div class="flex flex-col py-2">
          <p class="font-bold italic text-lg text-center w-full text-white">Hamad Fauzi Jessar</p>
          <p class="font-bold italic text-sm text-center w-full gradient-text">Full Stack Developer</p>
        </div>
      </div>

      <div class="flex flex-col gap-4 justify-center">
        <h1 class="font-bold text-4xl italic">Hi there, I'm Hamad!</h1>
        <p class="text-slate-600 text-lg font-light">A full stack web and mobile <span class="gradient-text2 font-bold">developer</span> passionate <br> about building seamless digital experiences.</p>
        
        <div class="flex gap-6">
          <a href="javascript:;" class="bg-blue-600 rounded-xl flex items-center w-fit p-2 gap-4 hover:bg-gradient-to-r from-blue-400 to-blue-600">
            <p class="text-white font-bold italic text-lg">Explore</p>
            <img width="16px" src="{{asset('assets/images/icon/arrow-bot.svg')}}" alt="arrow">
          </a>

          <a href="javascript:;" class="bg-white border-[2px] border-blue-900 rounded-xl flex w-fit p-2 gap-4 hover:bg-blue-600 hover:text-white">
            <p class="text-blue-900 font-bold italic text-lg">Resume</p>
          </a>

        </div>

      </div>

    </div>
  </div>

</section>

<section class="total">
  <div class="bg-white flex items-center justify-around rounded-lg shadow-lg py-8"> 
    <div class="flex flex-col gap-0 items-center">
      <p class="gradient-text text-[48px] font-bold italic">12+</p>
      <p class="text-slate-600 font-medium">Total Client</p>
    </div>

    <div class="flex flex-col gap-0 items-center">
      <p class="gradient-text text-[48px] font-bold italic">12+</p>
      <p class="text-slate-600 font-medium">Projects Completed</p>
    </div>

    <div class="flex flex-col gap-0 items-center">
      <p class="gradient-text text-[48px] font-bold italic">4+</p>
      <p class="text-slate-600 font-medium">Years of Experience</p>
    </div>

    <div class="flex flex-col gap-0 items-center">
      <p class="gradient-text text-[48px] font-bold italic">4</p>
      <p class="text-slate-600 font-medium">Services Offered</p>
    </div>

  </div>
</section>

<section class="quote">
  <div class="bg-white flex relative min-h-[400px] items-center justify-around rounded-lg shadow-lg py-8"> 
      <img src="{{asset('assets/images/icon/quote.svg')}}" alt="quote icon" class="absolute top-0 left-0">
      <img src="{{asset('assets/images/icon/quote.svg')}}" alt="quote icon" class="absolute bottom-0 right-0 rotate-180	">
      <div class="flex flex-col">
        <p class="text-slate-800 font-bold text-[48px] italic text-center">“First, solve the problem. <br>
          Then, write the code.”</p>
        <p class="font-bold gradient-text2 text-center">John Johnson</p>
      </div>
  </div>
</section>

<section class="services-intro">
  <div class="bg-white flex relative  rounded-lg shadow-lg py-8"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute top-50 left-0">
    <div class="flex gap-[80px] items-center mx-32">
      <p class="text-slate-800 font-bold text-[48px] italic text-center">Services</p>
      <p class="font-medium text-slate-600 text-start">Offering tailored services to enhance your brand, from stunning web designs <br> to engaging apps. Let’s bring your vision to life!</p>
    </div>
  </div>
</section>

<section class="services">
  <div class="grid grid-cols-4 gap-4">
    <div class="bg-white flex flex-col items-center p-4 rounded-lg shadow-lg py-8"> 
      <img src="{{asset('assets/images/icon/services-personal-web.svg')}}" alt="" class="flex-1">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-16">Personal Web</p>
      <p class="flex-none text-slate-600 text-center font-medium text-md">Custom sites that showcase your unique identity</p>
    </div>

    <div class="bg-white flex flex-col items-center p-4 rounded-lg shadow-lg py-8"> 
      <img src="{{asset('assets/images/icon/services-company-profile.svg')}}" alt="" class="flex-1">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-16">Company Profile</p>
      <p class="flex-none text-slate-600 text-center font-medium text-md">Custom sites that showcase your unique identity</p>
    </div>

    <div class="bg-white flex flex-col items-center p-4 rounded-lg shadow-lg py-8"> 
      <img src="{{asset('assets/images/icon/services-web.svg')}}" alt="" class="flex-1">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-16">Web</p>
      <p class="flex-none text-slate-600 text-center font-medium text-md">Custom sites that showcase your unique identity</p>
    </div>

    <div class="bg-white flex flex-col items-center p-4 rounded-lg shadow-lg py-8"> 
      <img src="{{asset('assets/images/icon/services-mobile.svg')}}" alt="" class="flex-1">
      <p class="flex-none font-bold gradient-text2 text-[20px] mt-16">Mobile</p>
      <p class="flex-none text-slate-600 text-center font-medium text-md">Custom sites that showcase your unique identity</p>
    </div>
    
  </div>
</section>

<section class="skils-intro">
  <div class="bg-white flex relative  rounded-lg shadow-lg py-8"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute top-50 right-0 rotate-180">
    <div class="flex gap-[80px] items-center justify-end w-full mx-32">
      <p class="font-medium text-slate-600 text-end">Leveraging top industry technologies to create innovative web and mobile <br> solutions, ensuring high-quality, scalable applications.
        Skills</p>
      <p class="text-slate-800 font-bold text-[48px] italic text-center">Skills</p>
    </div>
  </div>
</section>

<section class="skils">
   <div class="grid grid-cols-3 gap-4">
      <div class="grid grid-cols-3 gap-4">
        <div class="bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-html-light.svg')}}" alt="">
        </div>
        <div class="bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-css-light.svg')}}" alt="">
        </div>
        <div class="bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-js-light.svg')}}" alt="">
        </div>
        <div class="col-span-1 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-php-light.svg')}}" alt="">
        </div>
        <div class="col-span-2 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-mysql-light.svg')}}" alt="">
        </div>
        <div class="col-span-2 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-tailwind-light.svg')}}" alt="">
        </div>
        <div class="col-span-1 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-boostrap-light.svg')}}" alt="">
        </div>
      </div>

      <div class="bg-white flex items-center justify-center rounded-lg p-8">
        <img src="{{asset('assets/images/logo/logo-laravel-light.svg')}}" alt="laravel" class="drop-shadow-lg shadow-red-900">
      </div>

      <div class="grid grid-cols-3 gap-4">

        <div class="col-span-2 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-flutter-light.svg')}}" alt="">
        </div>

        <div class="col-span-1 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-react-light.svg')}}" alt="">
        </div>

        <div class="col-span-1 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-vue-light.svg')}}" alt="">
        </div>

        <div class="col-span-2 bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-node-js-light.svg')}}" alt="">
        </div>

        <div class="bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-mongo-db-light.svg')}}" alt="">
        </div>

        <div class="bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-vs-code-light.svg')}}" alt="">
        </div>

        <div class="bg-white flex items-center justify-center rounded-lg p-8">
          <img src="{{asset('assets/images/logo/logo-postman-light.svg')}}" alt="">
        </div>
        
      </div>

   </div> 
</section>

<section class="project-intro">
  <div class="bg-white flex relative  rounded-lg shadow-lg py-8"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute top-50 left-0">
    <div class="flex gap-[80px] items-center mx-32">
      <p class="text-slate-800 font-bold text-[48px] italic text-center">Projects</p>
      <p class="font-medium text-slate-600 text-start">Offering tailored services to enhance your brand, from stunning web designs <br> to engaging apps. Let’s bring your vision to life!</p>
    </div>
  </div>
</section>

<section class="filter-project">

</section>

<section class="project">
  <div class="grid grid-cols-2 gap-4"> 
    <div class="bg-white flex justify-center rounded-lg px-8 py-[60px]">
      <div class="relative w-3/5 bg-blue-900 rounded-t-[32px] rounded-b-[64px] flex h-[240px]">
        <img src="{{asset('assets/images/logo/img-dummy-project.svg')}}" alt="" class="absolute left-8 top-[-30px] h-max">
        <img src="{{asset('assets/images/logo/img-dummy-project.svg')}}" alt="" class="absolute right-8 top-[-30px] h-max rounded-br-lg">
      </div>
    </div>
  </div>  
</section>

<section class="all-project">

</section>

<section class="contact">

</section>

@endsection

@section('js')

@endsection