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
    <div class="flex gap-20 max-w-[50%]">

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

@endsection

@section('js')

@endsection