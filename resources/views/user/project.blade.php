@extends('user.layouts.layout')

@section('title', 'All Projects')

@section('content')

<style>
  /* Custom CSS for image hover effects */
  .project-image-container {
    transition: transform 0.3s ease-in-out;
    overflow: hidden;
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

  /* Staggered animation delays */
  .animate-delay-100 { animation-delay: 0.1s; }
  .animate-delay-200 { animation-delay: 0.2s; }
  .animate-delay-300 { animation-delay: 0.3s; }
  .animate-delay-400 { animation-delay: 0.4s; }
  .animate-delay-500 { animation-delay: 0.5s; }
  .animate-delay-600 { animation-delay: 0.6s; }

  /* Initial state for animated elements */
  [class*="animate-fade"] {
    opacity: 0;
  }

  /* Modal styles */
  .modal-overlay {
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
    transition: opacity 0.3s ease;
  }

  .modal-content {
    transform: scale(0.7);
    opacity: 0;
    transition: all 0.3s ease;
  }

  .modal-open .modal-content {
    transform: scale(1);
    opacity: 1;
  }

  .modal-open .modal-overlay {
    opacity: 1;
  }

  .hidden {
    display: none;
  }
</style>

<section class="project-intro">
  <div class="bg-white dark:bg-[#0F172A] flex relative rounded-lg shadow-lg py-8 px-4 animate-fade-in-left"> 
    <img src="{{asset('assets/images/icon/blue-icon.svg')}}" alt="quote icon" class="absolute top-1/2 left-0 transform -translate-y-1/2 w-8 h-8 md:w-12 md:h-12">
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-[80px] items-center w-full lg:mx-32 text-center lg:text-left">
      <p class="text-slate-800 dark:text-white font-bold text-3xl md:text-4xl lg:text-[48px] italic">All Projects</p>
      <p class="font-medium text-slate-600 dark:text-gray-300">Explore my portfolio of web and mobile applications, crafted to deliver seamless and engaging user experiences.</p>
    </div>
  </div>
</section>

<section class="project">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-4"> 
    <div class="bg-white dark:bg-[#1E293B] flex flex-col gap-4 justify-center rounded-lg px-8 lg:px-16 py-8 lg:py-[60px] items-center animate-fade-in-up animate-delay-100">
      <div class="w-full lg:w-[80%] bg-gradient-to-b from-blue-500 to-blue-800 rounded-t-[32px] flex h-[220px] rounded-b-[64px] overflow-hidden relative project-image-container">
        <img src="{{asset('assets/images/projects/dummy.png')}}" alt="Project 1" class="rounded-bl-[1px] mx-auto mt-[30px] object-contain w-[95%] h-full project-image">
      </div> 
      <a href="javascript:;" class="border border-slate-600 dark:border-gray-400 rounded-[99px] w-fit px-4 text-slate-600 dark:text-gray-300 font-normal text-sm">
        Mobile App
      </a>
      <p class="text-xl lg:text-[24px] gradient-text2 font-bold italic mt-4 self-start text-start w-full">Company Profile Website #1</p>
      <p class="text-slate-600 dark:text-gray-300 font-normal text-sm lg:text-base">A dynamic company profile website designed to showcase brand identity with modern UI/UX.</p>
      <a href="javascript:;" onclick="openModal(1)" class="text-slate-600 dark:text-blue-400 font-bold italic text-lg lg:text-[20px] self-start text-start underline underline-offset-4">View Project</a>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex flex-col gap-4 justify-center rounded-lg px-8 lg:px-16 py-8 lg:py-[60px] items-center animate-fade-in-up animate-delay-200">
      <div class="w-full lg:w-[80%] bg-gradient-to-b from-blue-500 to-blue-800 rounded-t-[32px] flex h-[220px] rounded-b-[64px] overflow-hidden relative project-image-container">
        <img src="{{asset('assets/images/projects/dummy.png')}}" alt="Project 2" class="rounded-bl-[1px] mx-auto mt-[30px] object-cover w-[95%] h-full project-image">
      </div> 
      <a href="javascript:;" class="border border-slate-600 dark:border-gray-400 rounded-[99px] w-fit px-4 text-slate-600 dark:text-gray-300 font-normal text-sm">
        Web App
      </a>
      <p class="text-xl lg:text-[24px] gradient-text2 font-bold italic mt-4 self-start text-start w-full">E-Commerce Platform</p>
      <p class="text-slate-600 dark:text-gray-300 font-normal text-sm lg:text-base">A robust e-commerce solution with seamless payment integration and responsive design.</p>
      <a href="javascript:;" onclick="openModal(2)" class="text-slate-600 dark:text-blueunkat-blue-400 font-bold italic text-lg lg:text-[20px] self-start text-start underline underline-offset-4">View Project</a>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex flex-col gap-4 justify-center rounded-lg px-8 lg:px-16 py-8 lg:py-[60px] items-center animate-fade-in-up animate-delay-300">
      <div class="w-full lg:w-[80%] bg-gradient-to-b from-blue-500 to-blue-800 rounded-t-[32px] flex h-[220px] rounded-b-[64px] overflow-hidden relative project-image-container">
        <img src="{{asset('assets/images/projects/dummy.png')}}" alt="Project 3" class="rounded-bl-[1px] mx-auto mt-[30px] object-contain w-[95%] h-full project-image">
      </div> 
      <a href="javascript:;" class="border border-slate-600 dark:border-gray-400 rounded-[99px] w-fit px-4 text-slate-600 dark:text-gray-300 font-normal text-sm">
        Mobile App
      </a>
      <p class="text-xl lg:text-[24px] gradient-text2 font-bold italic mt-4 self-start text-start w-full">Task Management App</p>
      <p class="text-slate-600 dark:text-gray-300 font-normal text-sm lg:text-base">A mobile app for efficient task tracking and team collaboration, built with Flutter.</p>
      <a href="javascript:;" onclick="openModal(3)" class="text-slate-600 dark:text-blue-400 font-bold italic text-lg lg:text-[20px] self-start text-start underline underline-offset-4">View Project</a>
    </div>

    <div class="bg-white dark:bg-[#1E293B] flex flex-col gap-4 justify-center rounded-lg px-8 lg:px-16 py-8 lg:py-[60px] items-center animate-fade-in-up animate-delay-400">
      <div class="w-full lg:w-[80%] bg-gradient-to-b from-blue-500 to-blue-800 rounded-t-[32px] flex h-[220px] rounded-b-[64px] overflow-hidden relative project-image-container">
        <img src="{{asset('assets/images/projects/dummy.png')}}" alt="Project 4" class="rounded-bl-[1px] mx-auto mt-[30px] object-cover w-[95%] h-full project-image">
      </div> 
      <a href="javascript:;" class="border border-slate-600 dark:border-gray-400 rounded-[99px] w-fit px-4 text-slate-600 dark:text-gray-300 font-normal text-sm">
        Web App
      </a>
      <p class="text-xl lg:text-[24px] gradient-text2 font-bold italic mt-4 self-start text-start w-full">Portfolio Website</p>
      <p class="text-slate-600 dark:text-gray-300 font-normal text-sm lg:text-base">A sleek portfolio website to highlight professional achievements and skills.</p>
      <a href="javascript:;" onclick="openModal(4)" class="text-slate-600 dark:text-blue-400 font-bold italic text-lg lg:text-[20px] self-start text-start underline underline-offset-4">View Project</a>
    </div>
  </div>  
</section>

<section class="contact">
  <div class="bg-white dark:bg-[#0F172A] flex min-h-[300px] lg:min-h-[400px] items-center justify-around rounded-lg shadow-lg py-8 px-4 animate-fade-in-up"> 
    <div class="flex flex-col gap-6 text-center">
      <p class="text-slate-800 dark:text-white font-bold text-2xl md:text-3xl lg:text-[48px] italic leading-tight">Ready to bring your ideas to life? <br class="hidden md:block"> Let's work together!</p>
      <button class="w-fit mx-auto text-blue-600 dark:text-blue-400 border-4 border-blue-600 dark:border-blue-400 text-center font-extrabold italic px-4 py-2 rounded-xl flex gap-4 items-center hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300 text-sm md:text-base">
        Say Hello on Whatsapp
        <img width="16px" src="{{asset('assets/images/icon/angle-circle-down.svg')}}" class="hover:bg-white hover:text-blue-600" alt="arrow">
      </button>
    </div>
  </div>
</section>

<div id="projectModal" class="fixed inset-0 z-50 hidden">
  <div class="modal-overlay fixed inset-0" onclick="closeModal()"></div>
  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="modal-content bg-white dark:bg-slate-800 rounded-xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
      <!-- Modal Header -->
      <div class="flex items-center justify-between p-6 border-b border-gray-200 dark:border-gray-700">
        <h2 class="text-2xl font-bold text-slate-800 dark:text-white">Project Detail</h2>
        <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-2xl font-bold">
          ×
        </button>
      </div>

      <!-- Modal Content -->
      <div class="modal-scroll overflow-y-auto max-h-[calc(90vh-80px)]">
        <div class="p-6">
          <!-- Project Image Section -->
          <div class="relative mb-8">
            <div class="w-full lg:w-[80%] mx-auto bg-gradient-to-b from-blue-500 to-blue-800 rounded-t-[32px] flex h-[300px] rounded-b-[64px] overflow-hidden relative project-image-container">
              <!-- Navigation Arrows -->
              <button id="prevButton" onclick="previousImage()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 rounded-full p-3 text-white transition-all duration-200 z-10">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M15 18l-6-6 6-6v12z"/>
                </svg>
              </button>
              
              <!-- Project Image -->
              <img id="modalProjectImage" src="" alt="Project Image" class="rounded-bl-[1px] mx-auto mt-[30px] object-contain w-[95%] h-full project-image transition-opacity duration-300">

              <button id="nextButton" onclick="nextImage()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 rounded-full p-3 text-white transition-all duration-200 z-10">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M9 18l6-6-6-6v12z"/>
                </svg>
              </button>
            </div>
            
            <!-- Image Counter -->
            <div class="flex justify-center mt-4">
              <span id="imageCounter" class="text-slate-600 dark:text-gray-300 text-sm">1 / 1</span>
            </div>
            
            <!-- Project Type Badge -->
            <div class="flex justify-center mt-4">
              <span id="modalProjectType" class="border border-slate-600 dark:border-gray-400 rounded-full px-4 py-2 text-slate-600 dark:text-gray-300 font-normal text-sm">
                Mobile App
              </span>
            </div>
          </div>

          <!-- Tech Stack Icons -->
          <div id="modalTechStack" class="flex justify-center gap-4 mb-8">
            <!-- Tech stack icons will be dynamically populated -->
          </div>

          <!-- Project Title and Description -->
          <div class="text-center mb-8">
            <h3 id="modalProjectTitle" class="text-3xl font-bold gradient-text2 italic mb-4">Complete Project Name</h3>
            <p id="modalProjectDescription" class="text-slate-600 dark:text-gray-300 text-lg leading-relaxed max-w-3xl mx-auto">
              Project description will be populated here.
            </p>
          </div>

          <!-- Project Features or Details -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg p-6">
              <h4 class="font-bold text-slate-800 dark:text-white mb-3">Key Features</h4>
              <ul id="modalKeyFeatures" class="space-y-2 text-slate-600 dark:text-gray-300">
                <!-- Features will be dynamically populated -->
              </ul>
            </div>
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg p-6">
              <h4 class="font-bold text-slate-800 dark:text-white mb-3">Technologies Used</h4>
              <ul id="modalTechnologies" class="space-y-2 text-slate-600 dark:text-gray-300">
                <!-- Technologies will be dynamically populated -->
              </ul>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button id="modalLiveDemo" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-colors duration-200">
              View Live Demo
            </button>
            <button id="modalSourceCode" class="border-2 border-blue-600 text-blue-600 dark:text-blue-400 hover:bg-blue-600 hover:text-white font-bold py-3 px-8 rounded-lg transition-all duration-200">
              View Source Code
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script>
  // Project data
  const projects = [
    {
      id: 1,
      title: "Company Profile Website #1",
      type: "Mobile App",
      shortDescription: "A dynamic company profile website designed to showcase brand identity with modern UI/UX.",
      fullDescription: "Introducing Company Profile Website #1, a cutting-edge mobile application designed to revolutionize the way businesses present their brand. This app combines intuitive design with powerful functionality, allowing users to explore company details, services, and achievements effortlessly with a user-friendly interface and seamless performance.",
      images: [
        "{{asset('assets/images/projects/dummy.png')}}",
        "{{asset('assets/images/projects/dummy2.png')}}",
        "{{asset('assets/images/projects/dummy3.png')}}"
      ],
      keyFeatures: [
        "Responsive Design",
        "Modern UI/UX",
        "Cross-platform Compatibility",
        "Performance Optimized"
      ],
      technologies: [
        "React",
        "Node.js",
        "MySQL",
        "AWS"
      ],
      techIcons: [
        { color: "bg-green-500", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" },
        { color: "bg-blue-500", path: "M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" },
        { color: "bg-indigo-500", pathtiff: "M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" },
        { color: "bg-orange-500", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" }
      ],
      liveDemoUrl: "https://example.com/demo1",
      sourceCodeUrl: "https://github.com/example/project1"
    },
    {
      id: 2,
      title: "E-Commerce Platform",
      type: "Web App",
      shortDescription: "A robust e-commerce solution with seamless payment integration and responsive design.",
      fullDescription: "The E-Commerce Platform is a comprehensive web application designed to provide a seamless shopping experience. With integrated payment gateways, responsive design, and a robust backend, this platform ensures a smooth and secure transaction process for users across devices.",
      images: [
        "{{asset('assets/images/projects/dummy.png')}}",
        "{{asset('assets/images/projects/dummy4.png')}}"
      ],
      keyFeatures: [
        "Secure Payment Integration",
        "Responsive Design",
        "Inventory Management",
        "User Authentication"
      ],
      technologies: [
        "Laravel",
        "Vue.js",
        "MySQL",
        "Docker"
      ],
      techIcons: [
        { color: "bg-red-500", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" },
        { color: "bg-green-500", path: "M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" },
        { color: "bg-blue-500", path: "M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" },
        { color: "bg-gray-500", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" }
      ],
      liveDemoUrl: "https://example.com/demo2",
      sourceCodeUrl: "https://github.com/example/project2"
    },
    {
      id: 3,
      title: "Task Management App",
      type: "Mobile App",
      shortDescription: "A mobile app for efficient task tracking and team collaboration, built with Flutter.",
      fullDescription: "Task Management App is a powerful mobile application built with Flutter, designed to streamline task tracking and enhance team collaboration. With features like real-time updates, task prioritization, and cross-platform support, it empowers teams to stay organized and productive.",
      images: [
        "{{asset('assets/images/projects/dummy.png')}}",
        "{{asset('assets/images/projects/dummy5.png')}}",
        "{{asset('assets/images/projects/dummy6.png')}}"
      ],
      keyFeatures: [
        "Real-time Task Updates",
        "Task Prioritization",
        "Team Collaboration Tools",
        "Cross-platform Support"
      ],
      technologies: [
        "Flutter",
        "Firebase",
        "Dart",
        "Google Cloud"
      ],
      techIcons: [
        { color: "bg-blue-400", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" },
        { color: "bg-orange-500", path: "M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" },
        { color: "bg-purple-500", path: "M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" },
        { color: "bg-gray-500", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" }
      ],
      liveDemoUrl: "https://example.com/demo3",
      sourceCodeUrl: "https://github.com/example/project3"
    },
    {
      id: 4,
      title: "Portfolio Website",
      type: "Web App",
      shortDescription: "A sleek portfolio website to highlight professional achievements and skills.",
      fullDescription: "Portfolio Website is a modern web application designed to showcase professional achievements, skills, and projects in an elegant and user-friendly manner. Built with responsive design principles, it ensures a seamless experience across all devices.",
      images: [
        "{{asset('assets/images/projects/dummy.png')}}"
      ],
      keyFeatures: [
        "Responsive Design",
        "Interactive UI",
        "SEO Optimized",
        "Fast Load Times"
      ],
      technologies: [
        "React",
        "Tailwind CSS",
        "Node.js",
        "Vercel"
      ],
      techIcons: [
        { color: "bg-green-500", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" },
        { color: "bg-blue-500", path: "M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" },
        { color: "bg-indigo-500", path: "M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" },
        { color: "bg-gray-500", path: "M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" }
      ],
      liveDemoUrl: "https://example.com/demo4",
      sourceCodeUrl: "https://github.com/example/project4"
    }
  ];

  let currentProjectId = null;
  let currentImageIndex = 0;

  function openModal(projectId) {
    const project = projects.find(p => p.id === projectId);
    if (!project) return;

    currentProjectId = projectId;
    currentImageIndex = 0;

    // Update modal content
    document.getElementById('modalProjectTitle').textContent = project.title;
    document.getElementById('modalProjectDescription').textContent = project.fullDescription;
    document.getElementById('modalProjectType').textContent = project.type;
    document.getElementById('modalProjectImage').src = project.images[0];
    document.getElementById('imageCounter').textContent = `1 / ${project.images.length}`;

    // Update navigation buttons visibility
    document.getElementById('prevButton').style.display = project.images.length > 1 ? 'block' : 'none';
    document.getElementById('nextButton').style.display = project.images.length > 1 ? 'block' : 'none';

    // Populate tech stack icons
    const techStackContainer = document.getElementById('modalTechStack');
    techStackContainer.innerHTML = project.techIcons.map(icon => `
      <div class="w-12 h-12 ${icon.color} rounded-full flex items-center justify-center">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
          <path d="${icon.path}"/>
        </svg>
      </div>
    `).join('');

    // Populate key features
    const keyFeaturesContainer = document.getElementById('modalKeyFeatures');
    keyFeaturesContainer.innerHTML = project.keyFeatures.map(feature => `<li>• ${feature}</li>`).join('');

    // Populate technologies
    const technologiesContainer = document.getElementById('modalTechnologies');
    technologiesContainer.innerHTML = project.technologies.map(tech => `<li>• ${tech}</li>`).join('');

    // Update action buttons
    const liveDemoButton = document.getElementById('modalLiveDemo');
    const sourceCodeButton = document.getElementById('modalSourceCode');
    liveDemoButton.onclick = () => window.open(project.liveDemoUrl, '_blank');
    sourceCodeButton.onclick = () => window.open(project.sourceCodeUrl, '_blank');

    // Show modal
    const modal = document.getElementById('projectModal');
    modal.classList.remove('hidden');
    setTimeout(() => {
      modal.classList.add('modal-open');
    }, 10);

    // Prevent body scroll
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    const modal = document.getElementById('projectModal');
    modal.classList.remove('modal-open');
    setTimeout(() => {
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
      currentProjectId = null;
      currentImageIndex = 0;
    }, 300);
  }

  function previousImage() {
    if (!currentProjectId) return;
    const project = projects.find(p => p.id === currentProjectId);
    if (!project) return;

    currentImageIndex = (currentImageIndex - 1 + project.images.length) % project.images.length;
    document.getElementById('modalProjectImage').src = project.images[currentImageIndex];
    document.getElementById('imageCounter').textContent = `${currentImageIndex + 1} / ${project.images.length}`;
  }

  function nextImage() {
    if (!currentProjectId) return;
    const project = projects.find(p => p.id === currentProjectId);
    if (!project) return;

    currentImageIndex = (currentImageIndex + 1) % project.images.length;
    document.getElementById('modalProjectImage').src = project.images[currentImageIndex];
    document.getElementById('imageCounter').textContent = `${currentImageIndex + 1} / ${project.images.length}`;
  }

  // Close modal when pressing Escape
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeModal();
    }
  });
</script>

@endsection