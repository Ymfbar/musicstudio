<?php
include 'config.php';
include 'includes/header.php';
?>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Contact Us</h2>
                <p class="lead text-white-50">
                    Have a question or want to book a session? Reach out to us!
                </p>
            </div>

            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="h-100 p-4 rounded-3 bg-dark border-secondary">
                        <h4 class="mb-3 text-primary"><i class="fas fa-info-circle me-2"></i>Information</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt fa-fw me-3 mt-1 text-primary"></i>Jl. Zainal Abidin Pagar Alam No.1, Bandar Lampung, Lampung</li>
                            <li class="mb-3 d-flex"><i class="fas fa-phone fa-fw me-3 mt-1 text-primary"></i>(123) 456-7890</li>
                            <li class="mb-3 d-flex"><i class="fas fa-envelope fa-fw me-3 mt-1 text-primary"></i>info@musicstudio.com</li>
                        </ul>
                        <hr class="border-secondary">
                        <h4 class="mt-4 mb-3 text-primary"><i class="fas fa-clock me-2"></i>Opening Hours</h4>
                        <ul class="list-unstyled">
                            <li>Mon - Fri: 09:00 - 22:00</li>
                            <li>Sat - Sun: 10:00 - 20:00</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card bg-dark border-secondary shadow-lg">
                        <div class="card-body p-4">
                            <h4 class="card-title text-center mb-4 text-primary">Send a Message</h4>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control bg-secondary text-white border-dark" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control bg-secondary text-white border-dark" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control bg-secondary text-white border-dark" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control bg-secondary text-white border-dark" id="message" rows="5" required></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>