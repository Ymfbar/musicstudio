<?php
include 'config.php';
include 'includes/header.php';
?>

<div class="p-5 text-center bg-image" style="
    background-image: url('https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
    height: 500px;
    background-size: cover;
    background-position: center;
    border-radius: .3rem; /* Optional: adds rounded corners */
    ">
    <div class="mask d-flex justify-content-center align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="text-white">
            <h1 class="display-2 fw-bold mb-3">Make Your Music Shine</h1>
            <p class="lead mb-4">Discover, Create, and Record Your Sound with Our Professional Studio.</p>
            <a class="btn btn-primary btn-lg rounded-pill px-4" href="register.php" role="button">Get Started Now</a>
        </div>
    </div>
</div>

<section class="container my-5">
    <h2 class="text-center mb-5 display-4 fw-bold">What We Offer</h2>
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 text-center text-white bg-dark shadow-lg border-secondary">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 mt-2">
                        <i class="fas fa-microphone-alt fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Professional Recording</h5>
                    <p class="card-text">Capture your sound with crystal-clear quality using our state-of-the-art equipment.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 text-center text-white bg-dark shadow-lg border-secondary">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 mt-2">
                        <i class="fas fa-music fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Practice Rooms</h5>
                    <p class="card-text">Hone your skills in comfortable and acoustically treated practice spaces.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 text-center text-white bg-dark shadow-lg border-secondary">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 mt-2">
                        <i class="fas fa-headphones-alt fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Mixing & Mastering</h5>
                    <p class="card-text">Bring your tracks to life with our expert mixing and mastering services.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 text-center text-white bg-dark shadow-lg border-secondary">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 mt-2">
                        <i class="fas fa-chalkboard-teacher fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Music Lessons</h5>
                    <p class="card-text">Learn from experienced instructors in various instruments and music genres.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>