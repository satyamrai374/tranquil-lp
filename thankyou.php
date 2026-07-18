<?php
$page_title = "Thank You - Tranquil Minds Mental Health";
$page_description = "Thank you for reaching out to Tranquil Minds Mental Health. We will review your info and contact you shortly.";
?>
<!DOCTYPE html>
<html lang="en">
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
    <!-- Event snippet for Submit lead form conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-17988087500/vKtoCMeOidIcEMzdsYFD',
          'value': 1.0,
          'currency': 'USD'
      });
    </script>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom compiled CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-emerald-50/30 text-gray-900 flex flex-col">

    <!-- Header (Distraction-Free) -->
    <header class="w-full bg-white border-b border-gray-100 py-5 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="index.php" class="flex items-center group">
                <svg class="w-8 h-8 text-emerald-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path>
                </svg>
                <span class="ml-2 text-xl font-bold tracking-tight text-gray-900 group-hover:text-emerald-600 transition-colors">Tranquil Minds Mental Health</span>
            </a>
            
            <!-- Phone Call Link -->
            <div>
                <a href="tel:+16124298280" class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 text-emerald-700 hover:bg-emerald-100 font-semibold rounded-full transition-all duration-300 text-sm border border-emerald-100">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <span>612-429-8280</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Thank You Content Container -->
    <main class="flex-grow flex items-center justify-center py-16 px-4">
        <div class="max-w-xl w-full bg-white rounded-3xl p-8 md:p-12 border border-emerald-100 text-center shadow-xl">
            <!-- Icon -->
            <div class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center text-emerald-600 mx-auto mb-6 shadow-sm">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <!-- Heading -->
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4 tracking-tight leading-tight">Request Received!</h1>
            <!-- Message -->
            <p class="text-base text-gray-600 leading-relaxed mb-8 font-medium">
                Thank you for reaching out to Tranquil Minds Mental Health. A clinical coordinator will review your information and call you at the phone number provided within 24 hours to schedule your free Neurostar TMS consultation.
            </p>
            <!-- CTA Button -->
            <a href="index.php" class="inline-block w-full py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 text-base text-center">
                Return to Landing Page
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white/70 py-10 border-t border-gray-800 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center border-b border-gray-800 pb-8 mb-8">
                <!-- Brand -->
                <div class="text-center md:text-left flex flex-col items-center md:items-start">
                    <div class="flex items-center mb-3">
                        <svg class="w-6 h-6 text-emerald-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path>
                        </svg>
                        <span class="ml-2 text-base font-bold text-white">Tranquil Minds</span>
                    </div>
                    <p class="text-gray-400">Realigning the rhythms of the mind.</p>
                </div>
                <!-- Contact Info -->
                <div class="text-center leading-relaxed space-y-1.5">
                    <p class="font-bold text-white mb-1">Monticello Clinic Location</p>
                    <p class="text-gray-300">154 East Broadway Street Suite 2, Monticello, MN 55362</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-x-3 text-gray-300">
                        <a href="tel:+16124298280" class="text-emerald-400 hover:text-emerald-300 transition-colors font-semibold">612-429-8280</a>
                        <span class="hidden sm:inline text-gray-700">|</span>
                        <span>Fax: 855-239-8566</span>
                    </div>
                    <a href="mailto:referrals@tranquilmindsmentalhealth.com" class="text-emerald-400 hover:text-emerald-300 transition-colors block">referrals@tranquilmindsmentalhealth.com</a>
                </div>
                <!-- Action -->
                <div class="text-center md:text-right">
                    <a href="index.php" class="inline-block px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full transition-all duration-300 text-xs shadow-md">
                        Return Home
                    </a>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-gray-500 font-medium">
                <div>&copy; <?php echo date("Y"); ?> Tranquil Minds Mental Health. All rights reserved.</div>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
