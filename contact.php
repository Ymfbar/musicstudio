<?php
include 'config.php';
include 'includes/header.php';
?>

<section class="hero-section">
    <div class="hero-content">
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h2 class="text-center mb-4 display-4 fw-bold text-light">Contact Us</h2>
            <p class="lead text-center text-light mb-5">
                Punya pertanyaan atau ingin memesan sesi studio? Jangan ragu untuk menghubungi kami melalui form di bawah ini atau detail kontak yang tersedia.
            </p>

            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-light">Informasi Kontak</h4>
                    <ul class="list-unstyled text-light">
                        <li class="mb-3"><i class="fas fa-map-marker-alt me-2"></i> Alamat Studio Anda, Kota, Kode Pos</li>
                        <li class="mb-3"><i class="fas fa-phone me-2"></i> (123) 456-7890</li>
                        <li class="mb-3"><i class="fas fa-envelope me-2"></i> info@musicstudio.com</li>
                    </ul>
                    <h4 class="text-light mt-4">Jam Operasional</h4>
                    <ul class="list-unstyled text-light">
                        <li>Senin - Jumat: 09:00 - 22:00</li>
                        <li>Sabtu - Minggu: 10:00 - 20:00</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="card bg-dark text-light border-light">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label-contact">Nama Anda</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label-contact">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label-contact">Subjek</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label-contact">Pesan</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                    <button type="submit" class="btn btn-secondary btn-sm py-2">Kirim Pesan</button>
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