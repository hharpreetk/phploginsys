<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Bootstrap website homepage</title>
    <!-- Custom styles for this template -->
    <link href="assets/styles/global.css" rel="stylesheet">
    <link href="assets/styles/home.css" rel="stylesheet">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="cpu-fill" viewBox="0 0 16 16">
            <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
            <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
        </symbol>

        <symbol id="toggles2" viewBox="0 0 16 16">
            <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
            <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
        </symbol>

        <symbol id="tools" viewBox="0 0 16 16">
            <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
        </symbol>

        <symbol id="backtotop" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
        </symbol>
    </svg>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <img src="https://img.icons8.com/color/48/000000/b-cute.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler01" aria-controls="navbarToggler01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarToggler01">
                    <ul class="navbar-nav mr-auto mt-0 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <div class=" my-2 my-lg-0">
                        <a href="/signin.php" role="button" class="btn btn-outline-light mr-3">Log In</a>
                        <a href="/signup.php" role="button" class="btn btn-warning">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Full Page Image Header with Vertically Centered Content -->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="hero-heading">Website Template</h1>
                        <p class="p-md">A great starter layout for a landing page. A great starter layout for a landing page.</p>
                        <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Coming Soon</a>

                    </div>
                </div>
            </div>
        </header>
    </header>

    <main>
        <!-- Marketing -->
        <div class="container marketing px-2 px-lg-4 pt-5" id="hanging-icons">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3 mr-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#toggles2" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="marketing-heading">Content</h2>
                        <p class="p-md">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="btn btn-md btn-primary py-2 disabled" role="button" aria-disabled="true">View Details</a>
                    </div>
                </div>

                <hr class="marketing-divider d-lg-none">

                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3 mr-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#cpu-fill" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="marketing-heading">Promotion</h2>
                        <p class="p-md">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="btn btn-md py-2 btn-primary disabled" role="button" aria-disabled="true">View Details</a>
                    </div>
                </div>

                <hr class="marketing-divider d-lg-none">

                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3 mr-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#tools" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="marketing-heading">Design</h2>
                        <p class="p-md">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="btn btn-md py-2 btn-primary disabled" role="button" aria-disabled="true">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="container features">

            <hr class="featurette-divider">

            <div class="row featurette align-items-center" data-aos="fade-up">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="p-md">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <!-- Start of Unsplash Image Embed Code-->

                    <img src="https://images.unsplash.com/photo-1516131206008-dd041a9764fd?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMjA3fDB8MXxzZWFyY2h8M3x8ZGVzaWdufHwwfDJ8fHwxNjMzOTM1ODI1&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=360" class="img-responsive img-fluid img-sml" alt="MacBook Pro " title="MacBook Pro ">

                    <!-- End of Unsplash Image Embed Code -->
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center" data-aos="fade-up">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="p-md">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <!-- Start of Unsplash Image Embed Code-->

                    <img src="https://images.unsplash.com/photo-1523465322945-c6b0013393bd?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMjA3fDB8MXxzZWFyY2h8MjN8fGJsb2d8ZW58MHwyfHx8MTYzMzkzNTgyMg&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=360" class="img-responsive img-fluid img-sml" alt="click pen beside laptop computer " title="click pen beside laptop computer ">

                    <!-- End of Unsplash Image Embed Code -->

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center" data-aos="fade-up">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="p-md">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <!-- Start of Unsplash Image Embed Code-->

                    <img src="https://images.unsplash.com/photo-1617035969033-a5c113b6f0d5?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjMzOTM2MzM4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=360" class="img-responsive img-fluid img-sml" alt="person using macbook air on lap " title="person using macbook air on lap ">

                    <!-- End of Unsplash Image Embed Code -->
                </div>
            </div>

            <hr class="featurette-divider">

        </div>
        <!-- Back to top button -->
        <a href="#" id="toTopBtn" role="button" class="btn cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true">
            <svg class="bi" width="1.5em" height="1.5em">
                <use xlink:href="#backtotop" />
            </svg>
        </a>
    </main>

    <!-- Footer -->
    <?php require_once "inc/footer.php"; ?>
</body>

</html>