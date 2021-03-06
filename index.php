<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/player.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/perspective.css">
    <link rel="stylesheet" href="css/aboutUs.css">
    <link rel="stylesheet" href="css/schedule.css">
    <link rel="stylesheet" href="css/smallplayer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Studio FM1 105.4 Ραδιοφωνικός Σταθμός Ελ.Με.Πα.</title>
</head>

<body id="page-top" onload="test()">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-md navbar-dark  fixed-top  mb-5 " id="mainNav">

        <div class="container mb-5">
            <a class="navbar-brand" href="#page-top">
                <img class="logo horizontal-logo" style="width:150%;" src="assets/STUDIO FM1 svg/178x40 svg/2.svg"
                    alt="forecastr logo">
            </a>
            <hr>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse text-center row " id="navbarResponsive">
                <ul class="navbar-nav navbar-collapse text-uppercase m-auto ">
                    <li class="navbar nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>

        </div>

    </nav>
    <!-- small_player -->
    <section class="masthead-small container mt-5 col-12 position-static">

        <div class="player-container2 container mt-5">
            <main>
                <div class="container player m-5 position-relative col-12">
                    <i onclick="SetVolumeDown(0.2)" class="fa fa-volume-down"></i>
                   
                    <i id="buttonPlay" class="fa fa-play" onclick="Play()"></i>
                    <i id="buttonPause" class="fa fa-pause" onclick="Pause()"></i>
                    <i onclick="SetVolumeUp(0.2)" style="left:45%;top:7%;" class="fa fa-volume-up"></i>
                    <i onclick="SetVolume(0)" class="fa fa-volume-mute"></i>
                </div>
            </main>

        </div>

    </section>
    <!-- Masthead-->
    <header class="masthead row col-12 mt-5">
        <div id="cool-text" class="wrapper container col-4 ">
            <h1 data-heading="LISTEN NOW">LISTEN NOW</h1>

        </div>

        <!-- --------------player------------------------ -->
        <div class="player-container container col-4 mt-5 bg-dark">
            <header>
                <div class="playlist">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="setting">
                    <i class="fa fa-cog"></i>
                </div>
            </header>
            <main>
                <div class="album-art">
                    <img src="https://upload.wikimedia.org/wikipedia/en/0/00/TheVines_WinningDays.jpg" alt="" />
                </div>
                <div class="player">
                    <i onclick="SetVolumeDown(0.2)" class="fa fa-volume-down"></i>
                    <i onclick="showHistory()" class="fa fa-history"></i>
                    <i id="buttonPlay1" class="fa fa-play" onclick="Play()"></i>
                    <i id="buttonPause1" class="fa fa-pause" onclick="Pause()"></i>
                    <i onclick="SetVolumeUp(0.2)" style="left:45%;top:7%;" class="fa fa-volume-up"></i>
                    <i onclick="SetVolume(0)" class="fa fa-volume-mute"></i>
                </div>
            </main>
            <footer>
                <div class="title">
                    <b id="artist"></b> - <b id="song"></b>
                    <b id="nextSong">fewfw</b>
                </div>
                <div class="time-tracker">

                    <ul id="historyList" class="text-muted" id="list">

                    </ul>


                </div>

            </footer>
        </div>
        <!-- --------------/player------------------------ -->




    </header>
    <div id="chat-div" class="container row p-0 m-0 col-2">
        <div id="chat-svg" class="svg-chat col-1 p-0 mt-5 col-2" style="width:10%;">
            <svg style="width:60%" onclick="toggleChat()" id="Layer_1" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 375 375">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                        }

                        .cls-2 {
                            fill: #fff;
                        }

                        .cls-3 {
                            clip-path: url(#clip-path);
                        }

                        .cls-4 {
                            fill: #ffc966;
                        }

                        .cls-5 {
                            clip-path: url(#clip-path-2);
                        }
                    </style>
                    <clipPath id="clip-path">
                        <rect class="cls-1" width="187.5" height="375" />
                    </clipPath>
                    <clipPath id="clip-path-2">
                        <rect class="cls-1" x="21.2" y="141.58" width="91.5" height="91.42" />
                    </clipPath>
                </defs>
                <title>chat</title>
                <g id="surface1">

                    <g class="cls-3">
                        <path class="cls-4"
                            d="M0,.16a187.48,187.48,0,0,1,187.5,187.5c0,103.57-83.93,187.18-187.5,187.18Z" />
                    </g>
                    <g class="cls-5">
                        <path class="cls-2"
                            d="M67.18,141.75c-25.14,0-45.52,18.68-45.52,41.73a39.2,39.2,0,0,0,8.51,24.23L22,227.55A3.77,3.77,0,0,0,24,232.5a3.7,3.7,0,0,0,2.9,0l24.21-10a49,49,0,0,0,16.07,2.73c25.15,0,45.52-18.69,45.52-41.73S92.33,141.75,67.18,141.75Zm-19,47.42a5.69,5.69,0,1,1,5.69-5.69A5.69,5.69,0,0,1,48.21,189.17Zm19,0a5.69,5.69,0,1,1,5.69-5.69A5.69,5.69,0,0,1,67.18,189.17Zm19,0a5.69,5.69,0,1,1,5.69-5.69A5.69,5.69,0,0,1,86.15,189.17Z" />
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <div id="chat-card" class="card col-6 border-0 " style="background-color: #FFC966;border-radius: 1%;">
        <div class="card-body text-center ">
            <iframe class="p-0" src="https://www5.cbox.ws/box/?boxid=924633&boxtag=eAt0lJ" width="505" height="505"
                allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0"
                scrolling="auto"></iframe>
        </div>
    </div>

    <!-- About-->
    <section class="row text-center mb-5" id="about">

        <div class="container col-12">
            <h2>
                ΛΙΓΑ ΛΟΓΙΑ ΓΙΑ ΕΜΑΣ
            </h2>
            <h3>
                Η απάντηση στο "Γιατί είστε έτσι;"
            </h3>
            <div class="container">
                <div class="red-border">
                    &nbsp;
                </div>
                <div class="container mt-4 ">
                    <div class="card bg-transparent col-xl-12">
                        <div class="card-body mostly-customized-scrollbar">
                            <h2>Η Ιδέα</h2>
                            <div class="blueish-border">
                                &nbsp;
                            </div>
                            Στις 18 Σεπτεμβρίου 1989 μια ομαδα σπουδαστών του Τ.Ε.Ι. Ηρακλείου έχοντας την ανάγκη να
                            εποικοινωνήσει με τον κόσμο της πόλης του Ηρακλείου, αλλα περισσότερο μεταξύ της, να
                            διοχετεύσει τη δημιουργικότητα της, συγκέντρωσε τα απαραίτητα μηχανήματα για δοκιμαστικές
                            εκπομπές στα FM.
                            Η πρωτοφανής αγάπη, η υψηλή ακροαματικότητα και η μεγαλή συμετοχη απο σπουδαστές και
                            φοιτητές μας έδωσε κουράγιο παρ' όλες τις αντίξοες συνθήκες εκπομπής (οι εκπομπές γίνονταν
                            μέσα από δωμάτια των εστιών και εκεί δεν υπήρχε ηχομόνωση, οι υπάρχουσες ηλεκτρολογικές
                            εγκαταστάσεις όντας ελαττωματικές προκαλούσαν πτώση τάσης για αρκετές ώρεs την ημέρα, στο
                            δωμάτιο αυτό διέμεναν σπουδαστές, ο χώρος δεν ήταν καθόλου λειτουργικός, κ.α), να
                            συνεχίσουμε την προσπάθεια αυτή για τρείς μήνες.
                            Μετά από αυτό το χρονικό διάστημα και βλέποντας ότι η προσπάθεια αυτή είχε απήχηση στον
                            κόσμο, κινήσαμε την διαδικασία νομιμοποίησης και στεγασης του σταθμού στόν χώρο του Τ.Ε.Ι.
                            Ηρακλείου.
                            Έπειτα από συζητήσεις, επισκέψεις σε κρατικούς ραδιοφωνικούς σταθμούς του Ηρακλείου με την
                            συνεργασία του εκπαιδευτικού προσωπικού του Τ.Ε.Ι., στις αρχές του εαρινού εξαμήνου
                            ολοκληρώθηκε η σύνταξη του εσωτερικού κανονισμού του ραδιοφωνικού σταθμού STUDIO FM1.
                            Παράλληλα συγκεντρώσαμε τα απαραίτητα δικαιολογητικά και αιτήσεις για την έγκριση της άδειας
                            ίδρυσης και λειτουργίας του σταθμού.
                            Μετά από σύσκεψη του συμβουλίου του Τ.Ε.Ι. στις 22-03-1990 παραχωρήθηκε μια αίθουσα
                            διδασκαλίας 60 τ.μ. για τη στέγαση του σταθμού. Η τεχνική υπηρεσία προθυμοποιήθηκε να
                            βοηθήσει στη μελέτη για τη διαμόρφωση του χώρου του Ρ.Σ.

                            <h2>Η συνέχεια:</h2>
                            <div class="blueish-border">
                                &nbsp;
                            </div>
                            Έτσι η νέα στέγη της ραδιοφωνικής ομάδας γίνεται η αίθουσα 12 της Σ.Ε.Υ.Π. Μέσα εκεί,στον
                            μικρό χώρο, στήθηκε, πάνω σε 2 θρανία ένα υποτυπώδες σύστημα μηχανημάτων που κάλυπτε
                            πρόχειρα της ανάγκες παραγωγής εκπομπών. Το σύστημα αποτελούνταν από 2 πικάπ ένα μικρό
                            μείκτη, 2 μικρόφωνα, 2 κασετόφωνα και ένα ερασιτεχνικό equalizer. Όλα αυτά βέβαια μαζί με το
                            σύστημα εκπομπής - το οποίο ήταν μια ιδιοκατασκευή και η ισχύς του έφτανε τα 30 watt - δεν
                            πληρούσαν τις απαραίτητες προϋποθέσεις για την άρτια λειτουργεία ενός ραδιοφωνικού σταθμού.
                            Παρ' όλες όμως τις δυσκολίες χάρη στο μεράκι, την υπομονή και την αγάπη των σπουδαστών για
                            τη μουσική και την επικοινωνία, ο STUDIO FΜ1 παρέμεινε ζωντανός έχωντας τις βάσεις για την
                            περαιτέρω εξέλιξή του.

                            <h2>Η προσπάθεια:</h2>
                            <div class="blueish-border">
                                &nbsp;
                            </div>
                            Η προσπάθεια συνεχίστηκε με αργά αλλά σταθερά βήματα αφού βρήκε και ανταπόκριση απο μεγάλη
                            μάζα σπουδαστών, γεγονός που έδωσε κουράγιο στην ομάδα να εργαστεί με περισσότερο πείσμα και
                            αφοσίωση. Αυτά τα παιδιά με τις θυσίες τους, με τις προσωπικές οικονομικές εισφορές τους
                            αλλά και με τις δωρεές των σπουδαστών μέσω των Δ.Σ. των σχολών και κυρίως τα έσοδα απο τις
                            εκδηλώσεις που πραγματοποίησαν, πέτυχαν να εξοπλίσουν το σταθμό με μηχανήματα που καλύπτουν
                            το minimum των απαιτήσεων μιας παρουσίας στα ερτζιανά. Αργότερα με την πρώτη σοβαρή βοήθεια
                            από τη διοίκηση του Τ.Ε.Ι., που συνειδητοποίησε ότι η προσπάθεια των σπουδαστών δεν ήταν
                            επιπόλαιη κατάφεραν να κατασκευάσουν ραδιοθάλαμο.
                            Με τις νέες συνθήκες ο σταθμός παρουσίασε νέο πρόσωπο, πιο σοβαρό και πιο κοντά στα
                            επαγγελματικά πρότυπα. Τότε ήταν που έγινε και η πρώτη σημαντική προσέγγιση στα σύγχρονα
                            κοινωνικά προβλήματα με την ζωντανή συζήτηση στο studio, με θέμα τα ναρκωτικά και
                            καλεσμένους ειδικούς απο διάφορους χώρους. Αυτές οι εξελίξεις οδήγησαν τη διοίκηση του
                            Τ.Ε.Ι. να δεί ακόμα πιο σοβαρά τον ρόλο της ραδιοφωνικής ομάδας με αποτέλεσμα να ενισχύσει
                            ακόμα περισσότερο τις προσπάθειες της.
                            Αποκτήθηκε έτσι νέο συστημα εκπομπής με απόδωση σαφώς ανώτερη απο το προηγούμενο και
                            ικανότητα κάλυψης του μεγαλύτερου τμήματος της πόλης. Η προσπάθεια όμως δε σταματάει εδώ.

                            <h2>Σήμερα:</h2>
                            <div class="blueish-border">
                                &nbsp;
                            </div>
                            Σήμερα 30 χρόνια μετά, οι προσπάθειες των φοιτητών για καλή και διαφορετική μουσική
                            συνεχίζονται. Η μεγάλη ανταπόκριση και η υψηλή ακροαματικότητα έδωσε το ερέθισμα στον Studio
                            Fm1 να επικοινωνήσει με τον κόσμο του Ηρακλείου (και όχι μόνο) ώστε να προάγει την
                            πολιτισμική πλευρά του.
                            Τα τελευταία χρόνια διοργανώνει εκδηλώσεις, πάρτυ και φυσικά το Radioactive Festival, το
                            μεγαλύτερο μουσικό-πολιτιστικό γεγονός της Κρήτης, το οποίο κάθε χρόνο φιλοξενεί μεγάλα
                            ονόματα της ελληνικής -και όχι μόνο- μουσικής σκηνής
                        </div>
                    </div>

                </div>
                <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
            </div>

        </div>

    </section>

    <!-- Contact-->
    <section class="page-section p-3" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Στείλε μας ένα email</h3>
                <hr>
                </hr>
            </div>

            <form method="POST" action="email.php" id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *"
                                required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *"
                                required="required"
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="subject" name="subject" type="text" placeholder="Subject *"
                                required="required" data-validation-required-message="Please enter a Subject." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" name="message" placeholder="Your Message *"
                                required="required"
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center m-4">
                    <div id="success"></div>
                    <input class="submit" type="submit" name="contact_submitted" value="send >"
                        id="sbmt_button"></input>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left text-muted">© <text id="year" style="font-size: 14px;"></text>
                    Copyright Studio Fm1 105.4
                    Ραδιοφωνικός
                    Σταθμός
                    Ελ.Mε.Πα
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <!-- <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/user/fm1studio"
                        target="_blank"><i class="fab fa-youtube"></i></a> -->
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/fm1.hmu" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/studiofm1/"
                        target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a href="https://www.youtube.com/watch?v=I5e6ftNpGsU" target="_blank" class="mr-3" href="">Γενικά
                        μοιράζουμε μπισκότα <i class="fas fa-cookie " style="width: 10%;"></i></a>
                </div>
            </div>
        </div>
    </footer>


</body>
<script>
    function onSubmit(token) {
        console.log("hey")
        grecaptcha.ready(function () {

            document.getElementById("demo-form").submit();
        });
    }
    document.getElementById("year").innerText = (new Date().getFullYear());
</script>

<script src="js/player.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jazzler.js"></script>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->

</html>