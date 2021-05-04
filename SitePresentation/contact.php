



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contact | Horeb Technology</title>
  <!-- MDB icon -->
  <link rel="shortcut icon" href="images/MLogo.png">
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Open+Sans:400,400i,600,600i">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="scss/style.css"> 
</head>


<body>
    <div>
        <div id="Langues" class="dotted-scrollspy">
            <ul class="nav flex-column">
                <a class="nav-link font-bold LangueActive p-1" href="#"><span><i class="fas fa-language"></i> Fr</span></a>
                <a class="nav-link LangueNonActive p-1" href="#"><span>Ang</span></a>
                <a class="nav-link LangueNonActive p-1" href="#"><span>Esp</span></a>
            </ul>
        </div>
    
        <header class="" id="NavBar" x-data="{ isOpen: false }">
            <nav class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="text-sm font-bold text-white transition-colors duration-300 transform md:text-sm hover:text-yellow-500"
                        href="/contact.html"><span class="Ht">HT</span>.horeb technology</a>
        
                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-yellow-500"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
        
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'"
                    class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                    <a class="text-sm font-medium text-gray-400 transition-colors duration-300 transform hover:text-yellow-500"
                        href="/accueil.html">Accueil</a>
                    <a class="text-sm font-medium text-gray-400 transition-colors duration-300 transform hover:text-yellow-500"
                        href="#">Qui sommes nous</a>
                    <a class="text-sm font-medium text-gray-400 transition-colors duration-300 transform hover:text-yellow-500"
                        href="#">Nos prestations</a>
                    <a class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border active rounded hover:text-yellow-500"
                        href="/contact.html">Contactez-nous</a>
                </div>
            </nav>
        </header>
    
        
        <section class="ContactSection">
            <div class="max-w-5xl px-6 py-10 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2 mt-5">

                        <section class="mb-4">
                            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                                a matter of hours to help you.</p>

                            <div class="row">
                                <div class="col-md-9 mb-md-0 mb-5">
                                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    <label for="name" class="">Your name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="email" name="email" class="form-control">
                                                    <label for="email" class="">Your email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="subject" name="subject" class="form-control">
                                                    <label for="subject" class="">Subject</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                    <label for="message">Your message</label>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="text-center text-md-left">
                                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                                    </div>
                                    <div class="status"></div>
                                </div>
                            </div>
                        </section>
                    </div>
        
                    <div class="md:mt-0 md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="w-full" style="height: 300px; width: 320px"
                                    src="images/section.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <footer class="border-t">
            <div class="container flex items-center justify-between px-6 py-8 mx-auto">
                <p class="text-gray-100">© 2019-2021 All Rights Reserved.</p>
                <p class="font-medium text-gray-100">Terms of Service</p>
            </div>
        </footer>
    </div>




<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>
