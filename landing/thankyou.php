<?php
$page_title = "Thank You - Tranquil Minds Mental Health";
$page_description = "Thank you for your interest in Neurostar® TMS therapy. A clinical coordinator will reach out shortly.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17988087500"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17988087500');
    </script>
    <!-- Event snippet for Submit lead form conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-17988087500/vKtoCMeOidIcEMzdsYFD',
          'value': 1.0,
          'currency': 'USD'
      });
    </script>
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
            src: url("../landing/assets/BAUHAUS SOFT/BauhausSoftDisplay2.0-Regular.woff2") format("woff2"),
                 url("../landing/assets/BAUHAUS SOFT/BauhausSoftDisplay2.0-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .font-heading {
            font-family: "Bauhaus Soft", cursive;
        }
    </style>
</head>

<body class="bg-cream font-sans text-primary min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary">

    <!-- Header (Distraction-Free) -->
    <header class="w-full bg-[#0B0612] border-b border-white/10 py-4">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <!-- Brand Logo & Text -->
            <a href="index.php" class="flex items-center gap-1.5 md:gap-3 group">
                <img src="../landing/assets/logo/Tranquil-logo.png" alt="Tranquil Minds Mental Health Logo" class="h-8 md:h-12 w-auto object-contain filter brightness-0 invert">
                <span class="font-heading text-white font-bold text-base md:text-2xl tracking-tight leading-none group-hover:text-purple-300 transition-colors">Tranquil Minds</span>
            </a>

            <!-- Phone CTA -->
            <div>
                <a href="tel:+16124298280" class="inline-flex items-center gap-1.5 px-2.5 py-1.5 sm:px-4 sm:py-2 md:px-5 md:py-2.5 bg-white/10 hover:bg-white/20 text-white font-bold rounded-full transition-all text-[10px] sm:text-xs md:text-base border border-white/20">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="hidden sm:inline">Call Us:</span> 612-429-8280
                </a>
            </div>
        </div>
    </header>

    <!-- Thank You Content Container -->
    <main class="flex-grow flex items-center justify-center py-16 px-6">
        <div class="max-w-xl w-full bg-white rounded-3xl p-8 md:p-12 border border-primary/5 text-center shadow-xl">
            <!-- Icon -->
            <div class="w-20 h-20 bg-soft-purple rounded-full flex items-center justify-center text-primary mx-auto mb-6 shadow-sm">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <!-- Heading -->
            <h1 class="text-3xl sm:text-4xl font-heading text-primary mb-4 leading-tight">Request Received!</h1>
            <!-- Message -->
            <p class="text-sm sm:text-base text-primary/80 leading-relaxed mb-8 font-medium">
                Thank you for reaching out to Tranquil Minds Mental Health. A clinical coordinator will review your information and call you at the phone number provided within 24 hours to schedule your free Neurostar® TMS consultation.
            </p>
            <!-- CTA Button -->
            <a href="index.php" class="inline-block w-full py-4 bg-primary hover:bg-primary/95 text-white font-bold rounded-xl shadow-lg shadow-primary/15 transition-all text-base text-center">
                Return to Landing Page
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#0B0612] text-white/60 py-10 border-t border-white/10 text-xs">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center border-b border-white/5 pb-8 mb-8">
                <!-- Brand -->
                <div class="text-center md:text-left">
                    <img src="../landing/assets/logo/Tranquil-logo.png" alt="Tranquil Minds Logo" class="h-8 mx-auto md:mx-0 opacity-80 filter brightness-0 invert mb-3">
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
                    <a href="index.php" class="inline-block px-6 py-2.5 bg-primary hover:bg-primary/95 text-white font-bold rounded-full transition-all text-xs shadow-md">
                        Return Home
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

</body>

</html>
