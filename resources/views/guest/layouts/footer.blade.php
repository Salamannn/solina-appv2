<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-3">
                <h5 class="text-white mb-4">Our Visitor</h5>
                <p class="text-white mb-2">Today : {{ $todayVisitors }}</p>
                <p class="text-white mb-2">Yesterday : {{ $yesterdayVisitors }} </p>
                <p class="text-white mb-2">Total : {{ $totalVisitors }}</p>
            </div>
            <div class="col-lg-3 col-md-3">
                <h5 class="text-white mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Graha Sampurna Block E No. 5, Surabaya -
                    60227, East Java, Indonesia</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 8584 393 0007,
                    <br>+62 8124 768 1237
                </p>
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>admin@solina-energi.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('service') }}">Our Services</a>
                <a href="#" class="btn btn-link" id="open-popup">Company Legality</a>
            </div>
            <div class="col-lg-3 col-md-3 mb-5">
                <h5 class="text-white mb-4">Maps</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3698847195615!2d112.67914471062734!3d-7.312278571866095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fcf7af179423%3A0xaad6ac6da358e268!2sJl.%20Raya%20Babatan%20Sampurna%20No.5%2C%20Babatan%2C%20Kec.%20Wiyung%2C%20Surabaya%2C%20Jawa%20Timur%2060227!5e0!3m2!1sid!2sid!4v1728751298282!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Karya Putri Solina</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Develop By King Tech</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Link untuk SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Ketika tautan diklik, pop-up SweetAlert dengan gambar dan tanda silang muncul
    document.getElementById('open-popup').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default

        // Menampilkan SweetAlert pop-up dengan gambar dan tanda silang
        Swal.fire({
            imageUrl: 'img/legality.jpg', // Ganti dengan URL gambar yang ingin ditampilkan
            imageWidth: 650, // Lebar gambar
            imageHeight: 400, // Tinggi gambar
            imageAlt: 'Company Image', // Alt text untuk gambar
            showCloseButton: true,
            closeButtonAriaLabel: 'Close', // Atribut aria untuk tombol silang
            showConfirmButton: false // Menyembunyikan tombol konfirmasi (jika hanya ingin tanda silang)
        });
    });
</script>
