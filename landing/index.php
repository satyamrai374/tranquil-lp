<?php
$page_title = "Free Consultation - Tranquil Minds Mental Health";
$page_description = "Schedule a free consultation for Neurostar® TMS therapy at Tranquil Minds Mental Health. Drug-free, non-invasive treatment for depression & anxiety in Monticello, MN.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Quicksand Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#502882',
                        accent: '#c55e2a',
                        'accent-light': '#d66a35',
                        'soft-purple': '#F3EFFF',
                        'cream': '#FAFAFF',
                    },
                    fontFamily: {
                        sans: ['Quicksand', 'sans-serif'],
                        heading: ['Bauhaus Soft', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Load Bauhaus Soft Font */
        @font-face {
            font-family: "Bauhaus Soft";
            src: url("assets/BAUHAUS SOFT/BauhausSoftDisplay2.0-Regular.woff2") format("woff2"),
                 url("assets/BAUHAUS SOFT/BauhausSoftDisplay2.0-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .font-heading {
            font-family: "Bauhaus Soft", cursive;
        }

        /* Smooth inputs focus */
        input:focus, select:focus, textarea:focus {
            box-shadow: 0 0 0 3px rgba(197, 94, 42, 0.15);
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>

<body class="bg-cream font-sans text-primary min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary">

    <!-- Header (Distraction-Free & Section Navigation) -->
    <header class="w-full bg-transparent border-b border-white/10 absolute top-0 left-0 z-40 py-4">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <!-- Brand Logo & Text -->
            <a href="../index.html" class="flex items-center gap-1.5 md:gap-3 group">
                <img src="assets/logo/Tranquil-logo.png" alt="Tranquil Minds Mental Health Logo" class="h-8 md:h-12 w-auto object-contain filter brightness-0 invert">
                <span class="font-heading text-white font-bold text-base md:text-2xl tracking-tight leading-none group-hover:text-purple-300 transition-colors">Tranquil Minds</span>
            </a>

            <!-- Section Navigation (Desktop) -->
            <nav class="hidden lg:flex items-center gap-8 font-semibold text-white/80">
                <a href="#conditions" class="hover:text-purple-300 transition-colors">Conditions</a>
                <a href="#process" class="hover:text-purple-300 transition-colors">How It Works</a>
                <a href="#doctor" class="hover:text-purple-300 transition-colors">About</a>
                <a href="#faq" class="hover:text-purple-300 transition-colors">FAQs</a>
            </nav>

            <!-- Call Out CTA & Mobile Menu Trigger -->
            <div class="flex items-center gap-2 md:gap-3">
                <a href="tel:+16124298280" class="inline-flex items-center gap-1.5 px-2.5 py-1.5 sm:px-4 sm:py-2 md:px-5 md:py-2.5 bg-white/10 hover:bg-white/20 text-white font-bold rounded-full transition-all text-[10px] sm:text-xs md:text-base border border-white/20">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="hidden sm:inline">Call Us:</span> 612-429-8280
                </a>

                <!-- Mobile Menu Button (Hamburger) -->
                <button id="mobile-menu-toggle" type="button" class="lg:hidden p-2 text-white hover:text-purple-300 focus:outline-none" aria-label="Toggle Navigation Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Drawer Overlay -->
    <div id="mobile-menu-drawer" class="fixed inset-0 z-50 flex justify-end bg-black/60 backdrop-blur-xs opacity-0 pointer-events-none transition-opacity duration-300">
        <!-- Close trigger by clicking outside -->
        <div class="absolute inset-0 bg-transparent" id="mobile-menu-overlay-click"></div>
        <div class="relative w-72 bg-white h-full shadow-2xl p-6 flex flex-col justify-between transform translate-x-full transition-transform duration-300">
            <div>
                <!-- Close Button & Brand Title -->
                <div class="flex items-center justify-between pb-6 border-b border-primary/5">
                    <span class="font-heading text-primary font-bold text-xl">Navigation</span>
                    <button id="mobile-menu-close" type="button" class="p-2 text-primary hover:text-primary focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav class="flex flex-col gap-5 pt-8 font-semibold text-lg text-primary/80">
                    <a href="#conditions" class="mobile-nav-link hover:text-purple-300 transition-colors">Conditions</a>
                    <a href="#process" class="mobile-nav-link hover:text-purple-300 transition-colors">How It Works</a>
                    <a href="#doctor" class="mobile-nav-link hover:text-primary transition-colors">About Doctor</a>
                    <a href="#faq" class="mobile-nav-link hover:text-purple-300 transition-colors">FAQs</a>
                </nav>
            </div>

            <!-- Footer Clinic Info inside mobile menu drawer -->
            <div class="pt-6 border-t border-primary/5 text-xs text-primary/60 space-y-2">
                <p class="font-bold text-primary">Tranquil Minds</p>
                <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors block hover:underline">154 East Broadway Street Suite 2,<br>Monticello, MN 55362
                </a>
                <div class="space-y-1">
                    <a href="tel:+16124298280" class="block text-primary font-bold">612-429-8280</a>
                    <p>Fax: 855-239-8566</p>
                    <a href="mailto:roxannedpmhnp@gmail.com" class="block text-primary hover:underline break-all">roxannedpmhnp@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <main class="flex-grow">
        
        <!-- Hero Section + Lead Form Split -->
        <section class="relative pt-24 pb-8 md:pt-32 md:pb-12 overflow-hidden bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(15, 10, 25, 0.65), rgba(15, 10, 25, 0.65)), url('assets/tranquilminds-hero-banner.webp');">
            <!-- Background Blurs -->
            <div class="absolute top-1/4 left-0 w-72 h-72 bg-primary/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-10 right-0 w-96 h-96 bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left: Ad Copy Header (Col Span 7) -->
                    <div class="lg:col-span-7 lg:col-start-1 lg:row-start-1 order-1 space-y-4 sm:space-y-6">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading text-white leading-[1.15]">
                            Rewiring Hope. <br>
                            <span class="text-purple-300">One Pulse at a Time.</span>
                        </h1>

                        <p class="text-base md:text-lg text-white/90 leading-relaxed max-w-2xl font-medium">
                            If depression or anxiety has been holding you back, Neurostar® TMS offers an FDA-cleared, non-medication, non-invasive path to long-lasting relief.
                        </p>
                    </div>

                    <!-- Right: Lead Capture Form Card (Col Span 5) -->
                    <div class="lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:row-span-2 order-2 lg:order-3" id="consultation-form">
                        <div class="bg-white p-5 sm:p-6 md:p-8 rounded-3xl shadow-xl shadow-primary/5 border border-primary/5 relative">
                            <h3 class="text-xl sm:text-2xl font-heading text-primary mb-1.5 text-start">Schedule a Consultation</h3>
                            <p class="text-[11px] sm:text-xs text-primary/90 font-semibold mb-5 leading-normal">Fill out the secure form below to check if you qualify for TMS therapy. Our clinical coordinator will reach out shortly.</p>
                            
                            <form id="lead-form" class="space-y-3.5" accept-charset="UTF-8" action="https://app.formester.com/forms/Qau9z2FwN/submissions" method="POST">
                                <!-- Name -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="space-y-1.5">
                                        <label for="first-name" class="text-xs font-bold text-primary tracking-wide block">First Name *</label>
                                        <input type="text" id="first-name" name="first-name" required placeholder="First name"
                                            class="w-full px-4 py-2.5 bg-cream/40 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                    <div class="space-y-1.5">
                                        <label for="last-name" class="text-xs font-bold text-primary tracking-wide block">Last Name *</label>
                                        <input type="text" id="last-name" name="last-name" required placeholder="Last name"
                                            class="w-full px-4 py-2.5 bg-cream/40 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                </div>

                                <!-- Email / Phone -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="space-y-1.5">
                                        <label for="email" class="text-xs font-bold text-primary tracking-wide block">Email *</label>
                                        <input type="email" id="email" name="email" required placeholder="name@example.com"
                                            class="w-full px-4 py-2.5 bg-cream/40 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                    <div class="space-y-1.5">
                                        <label for="phone" class="text-xs font-bold text-primary tracking-wide block">Phone Number *</label>
                                        <input type="tel" id="phone" name="phone" required placeholder="Phone number"
                                            class="w-full px-4 py-2.5 bg-cream/40 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                </div>

                                <!-- Treatment/Condition Preference -->
                                <div class="space-y-1.5">
                                    <label for="condition" class="text-xs font-bold text-primary tracking-wide block">Treatment Interest *</label>
                                    <select id="condition" name="condition" required
                                        class="w-full px-4 py-2.5 bg-cream/40 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all text-sm text-primary cursor-pointer">
                                        <option value="" disabled selected>Select primary concern...</option>
                                        <option value="Depression">Depression / Major Depressive Disorder</option>
                                        <option value="Anxiety">Anxiety / GAD</option>
                                        <option value="ADHD">ADHD / Focus Challenges</option>
                                        <option value="OCD">OCD (Obsessive Compulsive)</option>
                                        <option value="Medication Management">Medication Management Only</option>
                                        <option value="Other">Other Consultation / General Inquiry</option>
                                    </select>
                                </div>

                                <!-- Comments -->
                                <div class="space-y-1.5">
                                    <label for="comments" class="text-xs font-bold text-primary tracking-wide block">Message (Optional)</label>
                                    <textarea id="comments" name="comments" rows="3" placeholder="Tell us how we can help you..."
                                        class="w-full px-4 py-2.5 bg-cream/40 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary resize-none"></textarea>
                                </div>

                                <!-- SMS Consent -->
                                <div class="flex items-start gap-2.5 pt-2">
                                    <div class="flex items-center h-5 mt-0.5">
                                        <input id="consent" name="consent" type="checkbox" required
                                            class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary accent-primary cursor-pointer">
                                    </div>
                                    <label for="consent" class="text-[10px] text-gray-700 font-medium leading-normal cursor-pointer select-none text-justify block">
                                        I consent to receive SMS notifications, alerts, and appointment updates from Tranquil Minds Mental Health. Message frequency varies. Message & data rates may apply. Reply STOP to unsubscribe at any time. View our <a href="#" class="text-primary underline font-semibold">Privacy Policy</a>.
                                    </label>
                                </div>

                                <!-- Submit -->
                                <button type="submit"
                                    class="w-full py-3.5 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl shadow-lg shadow-primary/15 active:scale-[0.99] transition-all text-base tracking-wide mt-4">
                                    Schedule a Free 15-Min Consultation
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Left: Highlights & Quote (Col Span 7) -->
                    <div class="lg:col-span-7 lg:col-start-1 lg:row-start-2 order-3 lg:order-2 space-y-6">
                        <!-- Highlights Grid -->
                        <div class="grid grid-cols-2 gap-3 pt-2 sm:pt-4">
                            <!-- Card 1 -->
                            <div class="bg-white/5 border border-white/5 p-3 rounded-2xl flex flex-col justify-between">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">FDA-Cleared</h4>
                                    <p class="text-[10px] sm:text-xs text-white/70 leading-snug mt-0.5 font-medium">For teens & adults (15+)</p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white/5 border border-white/5 p-3 rounded-2xl flex flex-col justify-between">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">Non-Medication</h4>
                                    <p class="text-[10px] sm:text-xs text-white/70 leading-snug mt-0.5 font-medium">No drug side effects</p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white/5 border border-white/5 p-3 rounded-2xl flex flex-col justify-between">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">Non-Invasive</h4>
                                    <p class="text-[10px] sm:text-xs text-white/70 leading-snug mt-0.5 font-medium">No downtime, drive yourself home</p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-white/5 border border-white/5 p-3 rounded-2xl flex flex-col justify-between">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">Highly Effective</h4>
                                    <p class="text-[10px] sm:text-xs text-white/70 leading-snug mt-0.5 font-medium">83%+ clinical trials response</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sub-info -->
                        <div class="p-4 sm:p-6 bg-white/10 border border-white/10 rounded-2xl max-w-xl shadow-sm">
                            <p class="text-xs sm:text-sm text-white font-semibold leading-relaxed italic mb-0">
                                Our clinic is dedicated to expanding access to advanced, compassionate mental health care, bringing FDA-cleared TMS therapy to Monticello and surrounding MN communities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conditions Treated Section -->
        <section id="conditions" class="py-10 md:py-14 bg-white border-b border-primary/5">
            <div class="container mx-auto px-6">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">Healing Spectrum</span>
                    <h2 class="text-3xl md:text-5xl font-heading text-primary mt-2">Conditions We Treat</h2>
                    <p class="text-sm md:text-base text-primary/95 font-medium mt-4 leading-relaxed">
                        Specialized care for conditions where neural pathways can be realigned using Neurostar® TMS therapy and integrated clinical protocols.
                    </p>
                </div>

                <!-- Conditions Grid (Swipeable Slider on Mobile) -->
                <div class="flex overflow-x-auto gap-6 max-w-6xl mx-auto snap-x snap-mandatory lg:grid lg:grid-cols-3 lg:gap-8 lg:overflow-x-visible no-scrollbar pb-6 lg:pb-0 px-2 lg:px-0">
                    <!-- Depression -->
                    <div class="group bg-cream/30 border border-primary/5 rounded-[2rem] p-5 hover:bg-white hover:shadow-xl hover:scale-[1.01] transition-all duration-300 flex flex-col w-[85%] sm:w-[55%] flex-shrink-0 snap-center lg:w-auto lg:flex-shrink">
                        <div class="h-44 md:h-52 w-full rounded-2xl overflow-hidden mb-5">
                            <img src="assets/home/depression.png" alt="Depression Treatment" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-primary transition-colors">Depression</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Clinical protocols designed for Treatment-Resistant Depression to restore emotional balance.</p>
                    </div>
 
                    <!-- Anxiety -->
                    <div class="group bg-cream/30 border border-primary/5 rounded-[2rem] p-5 hover:bg-white hover:shadow-xl hover:scale-[1.01] transition-all duration-300 flex flex-col w-[85%] sm:w-[55%] flex-shrink-0 snap-center lg:w-auto lg:flex-shrink">
                        <div class="h-44 md:h-52 w-full rounded-2xl overflow-hidden mb-5">
                            <img src="assets/home/anxiety.png" alt="Anxiety Relief" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-primary transition-colors">Anxiety</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Providing deep, physiological relief from chronic panic, worry, and overactive fear pathways.</p>
                    </div>
 
                    <!-- ADHD -->
                    <div class="group bg-cream/30 border border-primary/5 rounded-[2rem] p-5 hover:bg-white hover:shadow-xl hover:scale-[1.01] transition-all duration-300 flex flex-col w-[85%] sm:w-[55%] flex-shrink-0 snap-center lg:w-auto lg:flex-shrink">
                        <div class="h-44 md:h-52 w-full rounded-2xl overflow-hidden mb-5">
                            <img src="assets/home/adhd.png" alt="ADHD & Executive Function" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-primary transition-colors">ADHD / ADD</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Rewiring focus, attention, and executive cognitive functioning through targeted neurostimulation.</p>
                    </div>
 
                    <!-- PTSD -->
                    <div class="group bg-cream/30 border border-primary/5 rounded-[2rem] p-5 hover:bg-white hover:shadow-xl hover:scale-[1.01] transition-all duration-300 flex flex-col w-[85%] sm:w-[55%] flex-shrink-0 snap-center lg:w-auto lg:flex-shrink">
                        <div class="h-44 md:h-52 w-full rounded-2xl overflow-hidden mb-5">
                            <img src="assets/home/ptsd.png" alt="PTSD Recovery" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-primary transition-colors">PTSD</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Helping clients process trauma safely by calming hyper-aroused neurological systems.</p>
                    </div>
 
                    <!-- OCD -->
                    <div class="group bg-cream/30 border border-primary/5 rounded-[2rem] p-5 hover:bg-white hover:shadow-xl hover:scale-[1.01] transition-all duration-300 flex flex-col w-[85%] sm:w-[55%] flex-shrink-0 snap-center lg:w-auto lg:flex-shrink">
                        <div class="h-44 md:h-52 w-full rounded-2xl overflow-hidden mb-5">
                            <img src="assets/home/ocd.png" alt="OCD Treatment" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-primary transition-colors">OCD</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Breaking intrusive loops and compulsive thought cycles at their source in the prefrontal cortex.</p>
                    </div>
 
                    <!-- Bipolar -->
                    <div class="group bg-cream/30 border border-primary/5 rounded-[2rem] p-5 hover:bg-white hover:shadow-xl hover:scale-[1.01] transition-all duration-300 flex flex-col w-[85%] sm:w-[55%] flex-shrink-0 snap-center lg:w-auto lg:flex-shrink">
                        <div class="h-44 md:h-52 w-full rounded-2xl overflow-hidden mb-5">
                            <img src="assets/home/bipolar.png" alt="Bipolar Disorder Specialized Care" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-primary transition-colors">Bipolar Disorder</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Specialized, safe mood stabilization protocols integrated with your existing care structure.</p>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="text-center mt-10">
                    <a href="#consultation-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-primary hover:bg-primary/95 text-white font-bold rounded-full transition-all hover:-translate-y-0.5 shadow-lg shadow-primary/15">
                        Check If You Qualify
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- The 3-Step Simple Process -->
        <section id="process" class="py-10 bg-cream/20 border-b border-primary/5">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">How it works</span>
                    <h2 class="text-3xl md:text-4xl font-heading text-primary mt-1">Starting Your Healing Journey</h2>
                    <p class="text-sm text-primary/95 font-medium mt-3">We make starting treatment as simple and stress-free as possible. Here is what to expect.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Step 1 -->
                    <div class="bg-white p-6 rounded-2xl border border-primary/5 text-center relative group hover:border-primary/15 transition-all">
                        <div class="w-12 h-12 rounded-full bg-primary text-white font-heading text-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            1
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Free 15-Min Phone Consultation</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Speak with a clinical coordinator to review your goals, discuss insurance eligibility, and answer questions.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-white p-6 rounded-2xl border border-primary/5 text-center relative group hover:border-primary/15 transition-all">
                        <div class="w-12 h-12 rounded-full bg-primary text-white font-heading text-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            2
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Clinical Evaluation</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Meet our medical director to perform brain mapping and customize your specific Neurostar® TMS prescription.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-white p-6 rounded-2xl border border-primary/5 text-center relative group hover:border-primary/15 transition-all">
                        <div class="w-12 h-12 rounded-full bg-primary text-white font-heading text-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            3
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Daily Healing Sessions</h3>
                        <p class="text-sm text-primary/90 font-medium leading-relaxed">Relax comfortably in our clinic for short, daily sessions while gentle magnetic pulses awaken dormant pathways.</p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="text-center mt-10">
                    <a href="#consultation-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-primary hover:bg-primary/95 text-white font-bold rounded-full transition-all hover:-translate-y-0.5 shadow-lg shadow-primary/10">
                        Schedule a Consultation
                        <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- About Doctor / Practitioner Section -->
        <section id="doctor" class="py-10 md:py-14 bg-white border-b border-primary/5">
            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-5xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    
                    <!-- Doctor Image Composition (Left) -->
                    <div class="w-full lg:w-5/12 relative group max-w-sm lg:max-w-none">
                        <!-- Frame -->
                        <div class="absolute inset-0 border border-primary/10 rounded-tl-[3.5rem] rounded-br-[3.5rem] transform translate-x-4 translate-y-4 group-hover:translate-x-2 group-hover:translate-y-2 transition-transform duration-500">
                        </div>
                        <!-- Image -->
                        <div class="relative rounded-tl-[3.5rem] rounded-br-[3.5rem] overflow-hidden shadow-lg group-hover:shadow-xl transition-all duration-700">
                            <img src="assets/home/rox-image.png" alt="Roxanne DoBrava, APRN-CNP, PMHNP-BC"
                                class="w-full h-auto object-cover transform scale-100 group-hover:scale-105 transition-transform duration-700 max-h-[500px]">
                        </div>
                    </div>
     
                    <!-- Doctor Info (Right) -->
                    <div class="w-full lg:w-7/12 text-primary">
                        <div class="mb-4 flex items-center gap-3">
                            <span class="h-px w-10 bg-primary"></span><span class="text-primary font-bold tracking-wider uppercase text-xs">Visionary Leadership</span>
                        </div>
     
                        <h2 class="text-4xl md:text-5xl font-heading text-primary leading-tight">Roxanne DoBrava</h2>
                        <p class="text-lg text-primary/90 font-semibold mb-6 italic">APRN-CNP, PMHNP-BC &bull; Clinic Founder</p>
    
                        <!-- Quote Box -->
                        <div class="bg-cream border-l-4 border-primary p-6 mb-8 rounded-r-2xl shadow-sm">
                            <p class="text-base md:text-lg text-primary leading-relaxed font-semibold">
                                "I founded Tranquil Minds Mental Health with a simple belief: that every patient deserves to feel truly heard. Combining clinical expertise with deep compassion, we've created a space where healing is not just a medical procedure, but a human experience."
                            </p>
                        </div>
    
                        <!-- Clinical Focus List -->
                        <div>
                            <h4 class="font-bold text-primary text-base mb-3">Clinical Specialties</h4>
                            <div class="grid grid-cols-2 gap-3 text-sm text-primary/95 font-semibold">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Medication Management
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Neurostar® TMS Therapy
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Psychotherapy
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Comprehensive Assessments
                                </div>
                            </div>
                        </div>

                        <!-- CTA button -->
                        <div class="mt-8">
                            <a href="#consultation-form" class="inline-flex items-center gap-2 px-6 py-3 bg-primary hover:bg-primary/95 text-white font-bold rounded-full transition-all hover:-translate-y-0.5 shadow-md shadow-primary/10 group">
                                Schedule a Consultation
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Insurance Verification Block -->
        <section class="py-10 bg-cream/30">
            <div class="container mx-auto px-6 text-center">
                <div class="max-w-3xl mx-auto bg-white border border-primary/5 p-8 md:p-12 rounded-3xl shadow-sm">
                    <h2 class="text-2xl md:text-3xl font-heading text-primary mb-4">Will My Insurance Cover TMS?</h2>
                    <p class="text-base text-primary/95 font-medium mb-8 max-w-xl mx-auto leading-relaxed">
                        Neurostar® TMS therapy is covered by most major insurance providers and Medicare. When you fill out the consultation form, our billing specialists will contact your provider to verify coverage at no cost to you.
                    </p>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 items-center justify-center max-w-3xl mx-auto opacity-95">
                        <!-- Blue Cross Blue Shield -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/blue-cross-logo.png" alt="Blue Cross Blue Shield" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- Aetna -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/aetna-logo.png" alt="Aetna" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- Cigna Healthcare -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/cigna.webp" alt="Cigna Healthcare" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- UnitedHealthcare -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/unitedhealthcare.png" alt="UnitedHealthcare" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- Optum -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/optum-logo.png" alt="Optum" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- Medica -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/medica.webp" alt="Medica" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- Medicare -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/medicare.webp" alt="Medicare" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- Medicaid.gov -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <img src="assets/insurances/medicaid-gov-logo.png" alt="Medicaid.gov" class="max-h-full max-w-full object-contain filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                        </div>
                        <!-- And More -->
                        <div class="bg-cream rounded-2xl border border-primary/5 p-3 md:p-4 flex items-center justify-center h-16 md:h-20 shadow-xs hover:shadow-md hover:scale-[1.02] transition-all duration-300">
                            <span class="text-xs sm:text-sm font-bold text-primary/70">And More</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Accordion Section -->
        <section id="faq" class="py-10 md:py-14 bg-white border-t border-primary/5">
            <div class="container mx-auto px-6 max-w-4xl">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">Clarity & Comfort</span>
                    <h2 class="text-3xl md:text-5xl font-heading text-primary mt-2">Frequently Asked Questions</h2>
                    <p class="text-sm text-primary/95 font-semibold mt-3">Transparent, scientifically-backed answers to help you feel confident in your care path.</p>
                </div>

                <!-- Accordion Items -->
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button type="button" class="accordion-header w-full py-5 text-left flex justify-between items-center bg-transparent hover:text-primary transition-colors focus:outline-none">
                            <span class="text-lg font-bold text-primary group-hover:text-primary transition-colors">Is Neurostar® TMS therapy painful?</span>
                            <svg class="w-5 h-5 text-primary group-hover:text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pb-6 text-primary font-medium leading-relaxed text-sm md:text-base">
                                Most patients report a mild tapping sensation on the scalp resembling a woodpecker tapping. It is generally not painful, requires no anesthesia, and you can drive yourself home immediately after each session.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button type="button" class="accordion-header w-full py-5 text-left flex justify-between items-center bg-transparent hover:text-primary transition-colors focus:outline-none">
                            <span class="text-lg font-bold text-primary group-hover:text-primary transition-colors">Does insurance cover Neurostar® TMS?</span>
                            <svg class="w-5 h-5 text-primary group-hover:text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pb-6 text-primary font-medium leading-relaxed text-sm md:text-base">
                                Yes, most major insurance providers (including Medicare, Blue Cross Blue Shield, United Healthcare, and Aetna) cover TMS for Treatment-Resistant Depression. Our care coordinators handle the entire pre-authorization process for you to ensure seamless coverage.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button type="button" class="accordion-header w-full py-5 text-left flex justify-between items-center bg-transparent hover:text-primary transition-colors focus:outline-none">
                            <span class="text-lg font-bold text-primary group-hover:text-primary transition-colors">How long does a course take?</span>
                            <svg class="w-5 h-5 text-primary group-hover:text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pb-6 text-primary font-medium leading-relaxed text-sm md:text-base">
                                A standard course typically involves daily sessions (Monday-Friday) for about 6 weeks, followed by a 3-week tapering phase. Each session lasts between 19 to 37 minutes, integrating perfectly into your daily routine.
                            </p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="border-b border-primary/10 overflow-hidden group">
                        <button type="button" class="accordion-header w-full py-5 text-left flex justify-between items-center bg-transparent hover:text-primary transition-colors focus:outline-none">
                            <span class="text-lg font-bold text-primary group-hover:text-primary transition-colors">Are there any side effects?</span>
                            <svg class="w-5 h-5 text-primary group-hover:text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pb-6 text-primary font-medium leading-relaxed text-sm md:text-base">
                                Neurostar® TMS is extremely well-tolerated. The most common side effect is mild scalp discomfort during the first few sessions, which typically resolves quickly. Unlike medications, there are no systemic side effects like weight gain, drowsiness, or sexual dysfunction.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Footer CTA -->
                <div class="text-center mt-12 bg-cream/40 p-6 md:p-8 rounded-3xl border border-primary/5 max-w-xl mx-auto shadow-sm">
                    <h4 class="font-bold text-primary text-lg mb-2">Still have questions?</h4>
                    <p class="text-sm text-primary/80 mb-5 leading-relaxed">Our care coordinators are here to help you navigate your mental health journey.</p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <a href="#consultation-form" class="px-6 py-3 bg-primary hover:bg-primary/95 text-white font-bold rounded-full text-sm transition-all shadow-md text-center">
                           Book a Free 15-Min Consultation
                        </a>
                        <a href="tel:+16124298280" class="px-6 py-3 bg-white border border-primary/10 hover:bg-cream text-primary font-bold rounded-full text-sm transition-all flex items-center justify-center gap-2 text-center">
                            <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Call 612-429-8280
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Minimalist Footer (Distraction-Free) -->
    <footer class="bg-[#0B0612] text-white/60 py-10 border-t border-white/10 text-xs">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center border-b border-white/5 pb-8 mb-8">
                <!-- Brand -->
                <div class="text-center md:text-left">
                    <a href="../index.html" class="flex items-center justify-center md:justify-start gap-1.5 md:gap-3 mb-3 group">
                        <img src="assets/logo/Tranquil-logo.png" alt="Tranquil Minds Logo" class="h-8 md:h-12 w-auto object-contain opacity-80 filter brightness-0 invert group-hover:opacity-100 transition-opacity">
                        <span class="font-heading text-white font-bold text-base md:text-2xl tracking-tight leading-none group-hover:text-purple-300 transition-colors">Tranquil Minds</span>
                    </a>
                    <p class="leading-relaxed">Realigning the rhythms of the mind.</p>
                </div>
                <!-- Contact Info -->
                <div class="text-center leading-relaxed space-y-1.5">
                    <p class="font-bold text-white mb-1">Monticello Clinic Location</p>
                    <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener noreferrer" class="text-white/85 hover:text-purple-300 transition-colors block hover:underline">154 East Broadway Street Suite 2, Monticello, MN 55362
                    </a>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-x-3 text-white/70">
                        <a href="tel:+16124298280" class="text-purple-300 hover:text-purple-200 transition-colors font-bold">612-429-8280</a>
                        <span class="hidden sm:inline text-white/20">|</span>
                        <span>Fax: 855-239-8566</span>
                    </div>
                    <a href="mailto:roxannedpmhnp@gmail.com" class="text-purple-300 hover:text-purple-200 transition-colors block">roxannedpmhnp@gmail.com
                    </a>
                </div>
                <!-- Action -->
                <div class="text-center md:text-right">
                    <a href="#consultation-form" class="inline-block px-6 py-2.5 bg-primary hover:bg-primary/95 text-white font-bold rounded-full transition-all text-xs shadow-md">
                        Schedule a Consultation


                    </a>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-[10px] uppercase tracking-wider text-white/30 font-medium">
                <div>&copy; 2026 Tranquil Minds Mental Health Inc. All rights reserved.</div>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Client-Side Form Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Accordion Logic
            const accordions = document.querySelectorAll(".accordion-header");
            accordions.forEach((header) => {
                header.addEventListener("click", () => {
                    const content = header.nextElementSibling;
                    const icon = header.querySelector("svg");
                    
                    // Toggle Active state
                    const isActive = header.classList.contains("active");
                    
                    // Close all others
                    accordions.forEach((h) => {
                        h.classList.remove("active");
                        h.nextElementSibling.style.maxHeight = null;
                        h.querySelector("svg").classList.remove("rotate-90");
                    });
                    
                    if (!isActive) {
                        header.classList.add("active");
                        content.style.maxHeight = content.scrollHeight + "px";
                        icon.classList.add("rotate-90");
                    }
                });
            });

            // Mobile Menu Toggle Logic
            const menuToggle = document.getElementById("mobile-menu-toggle");
            const menuClose = document.getElementById("mobile-menu-close");
            const overlayClick = document.getElementById("mobile-menu-overlay-click");
            const drawer = document.getElementById("mobile-menu-drawer");
            const drawerContent = drawer.querySelector("div.relative");
            const mobileLinks = document.querySelectorAll(".mobile-nav-link");

            const openDrawer = () => {
                drawer.classList.remove("opacity-0", "pointer-events-none");
                drawerContent.classList.remove("translate-x-full");
                drawerContent.classList.add("translate-x-0");
                document.body.style.overflow = "hidden"; // Disable scroll
            };

            const closeDrawer = () => {
                drawer.classList.add("opacity-0", "pointer-events-none");
                drawerContent.classList.remove("translate-x-0");
                drawerContent.classList.add("translate-x-full");
                document.body.style.overflow = ""; // Restore scroll
            };

            menuToggle.addEventListener("click", openDrawer);
            menuClose.addEventListener("click", closeDrawer);
            overlayClick.addEventListener("click", closeDrawer);

            // Close drawer when clicking a mobile nav link
            mobileLinks.forEach((link) => {
                link.addEventListener("click", closeDrawer);
            });
        });
    </script>

</body>

</html>
