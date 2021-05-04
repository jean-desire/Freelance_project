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
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Open+Sans:400,400i,600,600i">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.css"> 
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
                        href="/contact.php">Contactez-nous</a>
                </div>
            </nav>
        </header>
    
        
        <section class="ContactSection">
            <div class="max-w-5xl px-6 py-10 mx-auto">
                
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2 mt-5">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="w-full" style="height: 200px; width: 350px"
                                src="images/contactImage1.png">
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 mt-5 text-center">
                <p class="p-Contact font-weight-bold -mb-3 text-gray-400">Vous souhaitez réaliser un projet web ?<br />
                Vous recherchez une agence pour la mise en place d'une application mobile<br />
                Vous rechercher des experts en solution Data-to-Everything</p>
                    <h2 class="h5-responsive font-weight-bold text-center"><span class="Ht">HT</span>.Horeb Technology vient à votre aide</h2>
                        <p class="text-center w-responsive mx-auto font-weight-bold text-gray-400">Vous souhaitez nous poser une question ?Contactez-nous sans plus tarder,nous vous repondons dans les meilleurs délais !</p>
                </div>
            </div>

                <div class="items-center md:flex md:space-x-6">
                    <div class="md:mt-0 md:w-1/2">
                        <h2 class="h4-responsive font-weight-bold text-center my-1">Contactez-nous</h2>
                        <p class="text-center w-responsive mx-auto mb-5">Veuillez remplir ce formulaire en complétant tous les champs requis. Nous vous contacterons dès que possible.</p>
                        <div class="text-center items-center justify-center">
                            <img src="https://img.icons8.com/ios-glyphs/90/000000/worldwide-location.png" class="m-auto"/>
                            <h6 class="h6-responsive text-center my-1">E-mail</h6>
                            <h6 class="h6-responsive text-center my-1">Contact</h6>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <section class="Formulaire">
                            <div class="row">
                                <div class="">

                                    <form id="contact-form" name="contact-form" action="mail.php" method="POST" onsubmit="return validateForm()">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <input type="text" id="name" name="name" style="border:none" autocomplete="off" class="form-control appearance-none" required placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <input type="text" id="email" name="email" class="form-control appearance-none" autocomplete="off" required placeholder="E-mail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <input type="text" id="subject" name="subject" class="form-control appearance-none" autocomplete="off" required placeholder="Telephone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <input type="text" id="name" name="site" class="form-control appearance-none" autocomplete="off" required placeholder="Entreprise">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <input type="text" id="subject" name="pays" class="form-control appearance-none" autocomplete="off" required placeholder="Pays/Ville">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2 SelectOp">
                                                    <div class="select-outline">
                                                        <select class="mdb-select md-form md-outline colorful-select dropdown-warning" required>
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea" required placeholder="Decrivez votre demande"></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="status font-weight-bold text-red-400" id="status"></div>

                                    <div class="text-center text-md-left mt-5 flex items-center justify-center">
                                        <a id="ButtonEnSavoirPlus" class="px-8 py-2 text-lg font-medium transition-colors duration-300 transform rounded-full" onclick="validateForm();">Envoyer</a>
                                    
                                    <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="updates" id="updates" value="1">
                                    <label for="updates" class="form-check-label">Je ne suis pas un robot</label>
                                    </div>
                                    </div>
                                    

                                </div>
                            </div>
                        </section>
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
  <script type="text/javascript">
    new WOW().init();
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
 </script> 
  <script>
    function validateForm() {
        document.getElementById('status').innerHTML = "Sending...";
        formData = {
            'name'     : $('input[name=name]').val(),
            'email'    : $('input[name=email]').val(),
            'subject'  : $('input[name=subject]').val(),
            'message'  : $('textarea[name=message]').val()
        };
       $.ajax({
        url : "mail.php",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {
            $('#status').text(data.message);
            if (data.code) //If mail was sent successfully, reset the form.
            $('#contact-form').closest('form').find("input[type=text], textarea").val("");
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            $('#status').text(jqXHR);
        }
    });
    }
</script>

</body>
</html>
