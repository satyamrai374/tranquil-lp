<?php
$page_title = "Tranquil Minds Mental Health - Rewiring hope--one pulse at a time!";
$page_description = "At our clinic, we use gentle, targeted magnetic pulses to help restore emotional balance, lift depression, and reconnect you with the life you deserve.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17988087500"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17988087500');
    </script>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Leaflet Map CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <!-- Custom compiled CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-900 min-h-screen relative">

    <!-- ---------------------------------------------------- -->
    <!-- 1. Header Navigation Component                      -->
    <!-- ---------------------------------------------------- -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand logo / title -->
                <div class="flex items-center cursor-pointer" data-scroll-to="home">
                    <!-- Wind Icon -->
                    <svg id="brand-icon" class="w-8 h-8 text-white transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path>
                    </svg>
                    <span id="brand-text" class="ml-2 text-xl font-bold tracking-tight text-white transition-colors duration-300">Tranquil Minds Mental Health</span>
                </div>
                
                <!-- Desktop nav items -->
                <div class="hidden md:flex items-center space-x-8">
                    <button data-scroll-to="about" class="desktop-nav-link text-base font-medium text-white/80 hover:text-white transition-colors duration-300">About</button>
                    <button data-scroll-to="practices" class="desktop-nav-link text-base font-medium text-white/80 hover:text-white transition-colors duration-300">Practices</button>
                    <button data-scroll-to="location" class="desktop-nav-link text-base font-medium text-white/80 hover:text-white transition-colors duration-300">Location</button>
                </div>

                <!-- Hamburger menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="p-2 rounded-md text-white/80 hover:bg-white/10 transition-colors duration-300">
                        <!-- Menu Open SVG -->
                        <svg id="open-menu-icon" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <!-- Menu Close SVG -->
                        <svg id="close-menu-icon" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <line x1="18" x2="6" y1="6" y2="18"></line>
                            <line x1="6" x2="18" y1="6" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-drawer" class="fixed inset-0 z-40 bg-white/95 backdrop-blur-sm md:hidden transition-all duration-300 -translate-y-full opacity-0 pointer-events-none">
        <div class="pt-24 px-4 flex flex-col items-center space-y-8">
            <button data-scroll-to="home" class="mobile-nav-link text-2xl font-semibold text-gray-800 hover:text-emerald-600 transition-colors">Home</button>
            <button data-scroll-to="about" class="mobile-nav-link text-2xl font-semibold text-gray-800 hover:text-emerald-600 transition-colors">About</button>
            <button data-scroll-to="practices" class="mobile-nav-link text-2xl font-semibold text-gray-800 hover:text-emerald-600 transition-colors">Practices</button>
            <button data-scroll-to="location" class="mobile-nav-link text-2xl font-semibold text-gray-800 hover:text-emerald-600 transition-colors">Location</button>
        </div>
    </div>

    <!-- ---------------------------------------------------- -->
    <!-- 2. Main Content Sections                             -->
    <!-- ---------------------------------------------------- -->
    <main>

        <!-- ---------------------------------------------------- -->
        <!-- Hero Section                                         -->
        <!-- ---------------------------------------------------- -->
        <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover" alt="Peaceful yoga studio with natural lighting and serene atmosphere" src="assets/hero-banner.jpg" />
                <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/30 to-black/50"></div>
            </div>
            
            <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight">
                    Rewiring hope--one pulse at a time!
                </h1>
                
                <p class="text-xl md:text-2xl text-white/90 mb-8 font-light leading-relaxed">
                    At our clinic, we use gentle, targeted magnetic pulses to help restore emotional balance, lift depression, and reconnect you with the life you deserve. Click the link below, fill out the form and we will call you for a free 15-minute consult!
                </p>
                
                <div>
                    <a href="https://phq9web.azurewebsites.net/PHQ9/Survey/89810" target="_blank" rel="noopener noreferrer" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-4 md:py-5 md:px-10 text-lg md:text-xl font-semibold rounded-full shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        Schedule a TMS Consult
                    </a>
                </div>
            </div>
        </section>

        <!-- ---------------------------------------------------- -->
        <!-- About Section                                        -->
        <!-- ---------------------------------------------------- -->
        <section id="about" class="py-20 px-4 bg-gradient-to-b from-white to-emerald-50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 tracking-tight">About Tranquil Minds Mental Health</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Tranquil Minds Mental Health is a visionary clinic in Monticello, MN, dedicated to expanding access to advanced, compassionate care—including TMS therapy—for underserved communities. Rooted in personal investment and equity-driven innovation, it provides a healing space where science and empathy converge to transform lives.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                            <!-- Heart Icon -->
                            <svg class="w-8 h-8 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">FDA-Cleared</h3>
                        <p class="text-gray-600 leading-relaxed">
                            TMS has been cleared by the FDA for treating clients 15 years and older. Both adolescents and adults can benefit from TMS.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                            <!-- Users Icon -->
                            <svg class="w-8 h-8 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Non-Medication</h3>
                        <p class="text-gray-600 leading-relaxed">
                            No medication is required for TMS. Magnetic Pulses stimulate the pre-frontal cortex waking up the neural pathways in the brain. It is recommended that all current medications stay the same throughout treatment as prescribed by your provider.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                            <!-- Sparkles Icon -->
                            <svg class="w-8 h-8 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Non-Invasive</h3>
                        <p class="text-gray-600 leading-relaxed">
                            TMS treatment is done without surgery or invasive procedures. Clients are able to drive themselves to and from treatment.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------------------------------------------------- -->
        <!-- Practices / Consider TMS Carousel Section            -->
        <!-- ---------------------------------------------------- -->
        <section id="practices" class="py-20 px-4 bg-white">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 tracking-tight">Why consider TMS?</h2>
                    <p class="text-xl text-gray-600">Explore how we can help at Tranquil Minds</p>
                </div>

                <div class="relative">
                    <!-- Carousel Container -->
                    <div class="overflow-hidden rounded-3xl shadow-2xl bg-gray-100 relative h-[500px] md:h-[600px] bg-black">
                        
                        <!-- Slide 1 -->
                        <div class="carousel-item absolute inset-0 transition-opacity duration-500 ease-in-out opacity-100 flex items-center justify-center">
                            <img src="assets/tms-treatment.jpg" alt="TMS Treatment" class="w-full h-full object-contain" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 text-white pointer-events-none">
                                <h3 class="carousel-title text-3xl md:text-4xl font-bold mb-4 drop-shadow-md transition-all duration-500">TMS Treatment</h3>
                                <p class="carousel-desc text-lg md:text-xl text-white/90 max-w-2xl drop-shadow-sm transition-all duration-500">Advanced therapy for mental health conditions</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item absolute inset-0 transition-opacity duration-500 ease-in-out opacity-0 pointer-events-none flex items-center justify-center">
                            <img src="assets/insurance-coverage.jpg" alt="Insurance Coverage" class="w-full h-full object-contain" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 text-white pointer-events-none">
                                <h3 class="carousel-title text-3xl md:text-4xl font-bold mb-4 drop-shadow-md transition-all duration-500 translate-y-5 opacity-0">Insurance Coverage</h3>
                                <p class="carousel-desc text-lg md:text-xl text-white/90 max-w-2xl drop-shadow-sm transition-all duration-500 translate-y-5 opacity-0">TMS is covered by most major insurance plans</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item absolute inset-0 transition-opacity duration-500 ease-in-out opacity-0 pointer-events-none flex items-center justify-center">
                            <img src="assets/neurostar-therapy.jpg" alt="NeuroStar Advanced Therapy" class="w-full h-full object-contain" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 text-white pointer-events-none">
                                <h3 class="carousel-title text-3xl md:text-4xl font-bold mb-4 drop-shadow-md transition-all duration-500 translate-y-5 opacity-0">NeuroStar Advanced Therapy</h3>
                                <p class="carousel-desc text-lg md:text-xl text-white/90 max-w-2xl drop-shadow-sm transition-all duration-500 translate-y-5 opacity-0">FDA-approved treatment for depression and other conditions</p>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="carousel-item absolute inset-0 transition-opacity duration-500 ease-in-out opacity-0 pointer-events-none flex items-center justify-center">
                            <img src="assets/how-tms-works.jpg" alt="How TMS Works" class="w-full h-full object-contain" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 text-white pointer-events-none">
                                <h3 class="carousel-title text-3xl md:text-4xl font-bold mb-4 drop-shadow-md transition-all duration-500 translate-y-5 opacity-0">How TMS Works</h3>
                                <p class="carousel-desc text-lg md:text-xl text-white/90 max-w-2xl drop-shadow-sm transition-all duration-500 translate-y-5 opacity-0">Stimulating neural activity in the brain</p>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="carousel-item absolute inset-0 transition-opacity duration-500 ease-in-out opacity-0 pointer-events-none flex items-center justify-center">
                            <img src="assets/clinical-evidence.jpg" alt="Clinical Evidence" class="w-full h-full object-contain" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 text-white pointer-events-none">
                                <h3 class="carousel-title text-3xl md:text-4xl font-bold mb-4 drop-shadow-md transition-all duration-500 translate-y-5 opacity-0">Clinical Evidence</h3>
                                <p class="carousel-desc text-lg md:text-xl text-white/90 max-w-2xl drop-shadow-sm transition-all duration-500 translate-y-5 opacity-0">PET scan showing increased brain activity after TMS treatment</p>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation buttons -->
                    <button id="carousel-prev" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/90 hover:bg-white shadow-lg z-10 border border-gray-200 flex items-center justify-center hover:scale-105 transition-all">
                        <!-- Chevron Left SVG -->
                        <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"/>
                        </svg>
                    </button>

                    <button id="carousel-next" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/90 hover:bg-white shadow-lg z-10 border border-gray-200 flex items-center justify-center hover:scale-105 transition-all">
                        <!-- Chevron Right SVG -->
                        <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </button>

                    <!-- Indicators -->
                    <div class="flex justify-center gap-2 mt-6">
                        <button class="carousel-dot h-3 rounded-full transition-all duration-300 bg-emerald-600 w-8" aria-label="Go to slide 1"></button>
                        <button class="carousel-dot h-3 rounded-full transition-all duration-300 bg-gray-300 w-3" aria-label="Go to slide 2"></button>
                        <button class="carousel-dot h-3 rounded-full transition-all duration-300 bg-gray-300 w-3" aria-label="Go to slide 3"></button>
                        <button class="carousel-dot h-3 rounded-full transition-all duration-300 bg-gray-300 w-3" aria-label="Go to slide 4"></button>
                        <button class="carousel-dot h-3 rounded-full transition-all duration-300 bg-gray-300 w-3" aria-label="Go to slide 5"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------------------------------------------------- -->
        <!-- Assessment QR Section                                -->
        <!-- ---------------------------------------------------- -->
        <section class="py-20 px-4 bg-gradient-to-r from-purple-600 to-purple-700 text-white overflow-hidden">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <!-- Left Content -->
                    <div class="space-y-8">
                        <h2 class="text-4xl md:text-5xl font-bold mb-8 tracking-tight">Assess Your Depression</h2>
                        
                        <div class="space-y-6">
                            <!-- Step 1 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500/50 flex items-center justify-center font-bold text-lg border border-purple-400">
                                    1
                                </div>
                                <div class="pt-1 flex items-start gap-2">
                                    <!-- Camera icon -->
                                    <svg class="w-6 h-6 text-purple-200 mt-1 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/>
                                    </svg>
                                    <p class="text-lg md:text-xl text-purple-50 font-medium leading-relaxed">
                                        Open your camera app on your smartphone
                                    </p>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500/50 flex items-center justify-center font-bold text-lg border border-purple-400">
                                    2
                                </div>
                                <div class="pt-1 flex items-start gap-2">
                                    <!-- Smartphone icon -->
                                    <svg class="w-6 h-6 text-purple-200 mt-1 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><line x1="12" x2="12" y1="18" y2="18"/>
                                    </svg>
                                    <p class="text-lg md:text-xl text-purple-50 font-medium leading-relaxed">
                                        Hold your smartphone camera up to the QR code
                                    </p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500/50 flex items-center justify-center font-bold text-lg border border-purple-400">
                                    3
                                </div>
                                <div class="pt-1 flex items-start gap-2">
                                    <!-- External Link icon -->
                                    <svg class="w-6 h-6 text-purple-200 mt-1 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/>
                                    </svg>
                                    <p class="text-lg md:text-xl text-purple-50 font-medium leading-relaxed">
                                        Click the link to open the questionnaire in your browser
                                    </p>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500/50 flex items-center justify-center font-bold text-lg border border-purple-400">
                                    4
                                </div>
                                <div class="pt-1 flex items-start gap-2">
                                    <!-- Send icon -->
                                    <svg class="w-6 h-6 text-purple-200 mt-1 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="22" x2="11" y1="2" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
                                    </svg>
                                    <p class="text-lg md:text-xl text-purple-50 font-medium leading-relaxed">
                                        Fill out the questionnaire and submit
                                    </p>
                                </div>
                            </div>
                        </div>

                        <p class="mt-8 text-purple-200 italic text-sm md:text-base max-w-md border-l-4 border-purple-400 pl-4 py-2 bg-purple-800/20 rounded-r-lg">
                            Your answers will be securely transmitted to your provider to review during your appointment.
                        </p>
                    </div>

                    <!-- Right Content (QR Visual) -->
                    <div class="flex flex-col items-center justify-center relative">
                        <div class="bg-white p-4 rounded-3xl shadow-2xl relative z-10 max-w-sm w-full mx-auto transform rotate-1 hover:rotate-0 transition-transform duration-500">
                            <img src="assets/qr-code.png" alt="QR Code for Depression Assessment" class="w-full h-auto rounded-lg" />
                        </div>
                        
                        <div class="mt-8 text-center">
                            <p class="text-5xl font-bold text-white/20 tracking-widest uppercase animate-pulse">
                                Scan Me
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ---------------------------------------------------- -->
        <!-- Location Section                                    -->
        <!-- ---------------------------------------------------- -->
        <section id="location" class="py-20 px-4 bg-gradient-to-b from-emerald-50 to-white">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 tracking-tight">Visit Our Office</h2>
                    <p class="text-xl text-gray-600">We'd love to give you a TMS demonstration and answer your questions.</p>
                </div>

                <div class="grid md:grid-cols-1 gap-8 mb-8">
                    <div class="space-y-6">
                        
                        <!-- Address -->
                        <div class="flex items-start gap-4 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <!-- MapPin Icon -->
                                <svg class="w-6 h-6 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Address</h3>
                                <p class="text-gray-600">154 East Broadway Street Suite 2, Monticello, MN 55362</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <!-- Phone Icon -->
                                <svg class="w-6 h-6 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Phone</h3>
                                <p class="text-gray-600"><a href="tel:+16124298280" class="hover:text-emerald-600 transition-colors">612-429-8280</a></p>
                            </div>
                        </div>

                        <!-- Fax -->
                        <div class="flex items-start gap-4 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <!-- Printer Icon -->
                                <svg class="w-6 h-6 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect width="12" height="8" x="6" y="14"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Fax</h3>
                                <p class="text-gray-600">855-239-8566</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <!-- Mail Icon -->
                                <svg class="w-6 h-6 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Email</h3>
                                <p class="text-gray-600"><a href="mailto:referrals@tranquilmindsmentalhealth.com" class="hover:text-emerald-600 transition-colors">referrals@tranquilmindsmentalhealth.com</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ---------------------------------------------------- -->
    <!-- 3. Footer Component                                  -->
    <!-- ---------------------------------------------------- -->
    <footer class="bg-gray-900 text-white py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <!-- Brand logo & info -->
                <div class="flex flex-col items-center md:items-start">
                    <div class="flex items-center cursor-pointer mb-4" data-scroll-to="home">
                        <!-- Wind Icon -->
                        <svg class="w-8 h-8 text-emerald-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path>
                        </svg>
                        <span class="ml-2 text-xl font-bold">Tranquil Minds Mental Health</span>
                    </div>
                    <p class="text-gray-400 max-w-xs leading-relaxed">
                        Find your balance, strength, and inner peace with us.
                    </p>
                </div>
                
                <!-- Quick Navigation -->
                <div>
                    <span class="font-bold text-lg text-emerald-500 uppercase tracking-wider">Navigate</span>
                    <ul class="mt-4 space-y-2">
                        <li>
                            <button data-scroll-to="about" class="text-gray-300 hover:text-white transition-colors duration-300">About</button>
                        </li>
                        <li>
                            <button data-scroll-to="practices" class="text-gray-300 hover:text-white transition-colors duration-300">Practices</button>
                        </li>
                        <li>
                            <button data-scroll-to="location" class="text-gray-300 hover:text-white transition-colors duration-300">Location</button>
                        </li>
                    </ul>
                </div>

                <!-- Contact Details -->
                <div>
                    <span class="font-bold text-lg text-emerald-500 uppercase tracking-wider">Contact</span>
                    <ul class="mt-4 space-y-2 text-gray-300">
                        <li>154 East Broadway Street Suite 2, Monticello, MN 55362</li>
                        <li><a href="tel:+16124298280" class="hover:text-white transition-colors">612-429-8280</a></li>
                        <li>855-239-8566 (Fax)</li>
                        <li><a href="mailto:referrals@tranquilmindsmentalhealth.com" class="hover:text-white transition-colors">referrals@tranquilmindsmentalhealth.com</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
                <p>&copy; <?php echo date("Y"); ?> Tranquil Minds Mental Health. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ---------------------------------------------------- -->
    <!-- 4. Floating Back To Top Button                       -->
    <!-- ---------------------------------------------------- -->
    <button id="back-to-top" class="fixed bottom-8 right-8 z-50 w-14 h-14 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform translate-y-5 opacity-0 pointer-events-none flex items-center justify-center hover:-translate-y-1">
        <!-- Arrow Up SVG -->
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"/><line x1="12" x2="12" y1="18" y2="9"/>
        </svg>
    </button>

    <!-- Client-side script -->
    <script src="js/main.js"></script>
</body>
</html>
