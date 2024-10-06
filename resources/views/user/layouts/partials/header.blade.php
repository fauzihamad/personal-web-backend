<div class="bg-white dark:bg-[#2ff] flex items-center py-4 rounded-b-lg shadow-lg relative">
  
  <div class="flex justify-between w-full px-8">
    <div class="flex gap-4 justify-self-start flex-none">
      <div class="flex flex-col relative">
        <a href="javascript:;" class="font-bold italic text-md">Home</a>
        <div class="underline-custom"></div>
      </div>
      <a href="javascript:;" class="font-lightgit a text-md">Project</a>
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
    <img src="{{asset('assets/images/logo/logo-whatsapp.svg')}}" alt="">
    <img src="{{asset('assets/images/logo/logo-upwork.svg')}}" alt="">
    <img src="{{asset('assets/images/logo/logo-linkedin.svg')}}" alt="">
    <img src="{{asset('assets/images/logo/logo-github.svg')}}" alt="">
    <img src="{{asset('assets/images/logo/logo-instagram.svg')}}" alt="">
  </div>

</div>

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