<div class="bg-white dark:bg-[#0F172A] flex items-center py-4 rounded-b-lg shadow-lg relative">
  <div class="flex justify-between w-full px-8">
    <div class="flex gap-4 justify-self-start flex-none">
      <div class="flex flex-col">
        <a href="{{ route('index') }}" class="text-md cursor-pointer relative {{ Route::is('index') ? 'italic font-bold text-slate-800 dark:text-white' : 'font-light text-slate-600 dark:text-gray-300' }}">Home
          @if (Route::is('index'))
            <div class="underline-custom"></div>
          @endif
        </a>
      </div>
      <div class="flex flex-col">
        <a href="{{ route('projects') }}" class="text-md cursor-pointer relative {{ Route::is('projects') ? 'italic font-bold text-slate-800 dark:text-white' : 'font-light text-slate-600 dark:text-gray-300' }}">Project
          @if (Route::is('projects'))
            <div class="underline-custom"></div>
          @endif
        </a>
      </div>

    </div>
  
    <label class="toggle" id="themeToggle">
      <input type="checkbox" id="checkToogle" class="cursor-pointer">
      <span class="slider">
        <svg class="icon moon-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
        </svg>
        <svg class="icon sun-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
        </svg>
      </span>
    </label>
  </div>

  <div class="flex flex-1 gap-2 justify-self-center justify-center absolute mx-auto w-full">
    <a href="https://wa.me/0881025566452" target="_blank">
      <img class="cursor-pointer" src="{{asset('assets/images/logo/logo-whatsapp.svg')}}" alt="logo whatsapp">
    </a>
    <img class="cursor-pointer" src="{{asset('assets/images/logo/logo-upwork.svg')}}" alt="logo upwork">
    <a href="https://www.linkedin.com/in/hamad-fauzi-jessar-343989202/" target="_blank">
      <img class="cursor-pointer" src="{{asset('assets/images/logo/logo-linkedin.svg')}}" alt="logo linkedin">
    </a>
    <a href="https://github.com/fauzihamad?tab=repositories" target="_blank">
      <img class="cursor-pointer" src="{{asset('assets/images/logo/logo-github.svg')}}" alt="logo github">
    </a>
    <img class="cursor-pointer" src="{{asset('assets/images/logo/logo-instagram.svg')}}" alt="logo instagram">
  </div>
</div>

<style>
  .underline-custom {
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: currentColor;
    z-index: 1;
  }

  a {
    position: relative;
    z-index: 2;
  }
</style>
<script>
  const toggle = document.getElementById('themeToggle');
  const toggleCheckbox = document.getElementById('checkToogle');
  const htmlElement = document.documentElement;  // Selects the <html> element

  toggleCheckbox.addEventListener('change', function() {
      if (toggleCheckbox.checked) {
          htmlElement.classList.remove('dark');   // Add the 'dark' class
      } else {
          htmlElement.classList.add('dark'); // Remove the 'dark' class
      }
      toggle.classList.toggle('dark-mode');
  });

</script>