<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('assets/img/ukt1logo.png') }}" />
    <title>Aset UKT 1 | Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/asset-login/style.css') }}" />
    <style>
        /* ========================= */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            max-width: 320px;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.2s ease-in-out;
            display: block;
            margin: 0.5rem auto;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
        }

        input::placeholder {
            color: #9ca3af;
        }

        /* Center form horizontal */
        form.login {
            text-align: center;
        }
    </style>
</head>

<body>
    <form class="login" method="POST" action="#">
        @csrf

        <div class="logo-container">
            <img src="{{ asset('assets/img/ukt1logo.png') }}" alt="Sigma Logo" class="logo" />
        </div>

        <h2 class="text-center">ASET APP - UKT 1</h2>
        <p class="text-center">Sistem Manajamen Aset</p>
        <div class="trial-warning text-center mb-3">

            <i class="fa fa-exclamation-triangle"></i>

            WEB TRIAL / DEMO
            <br>

            Data tidak tersimpan ke database
            dan transaksi tidak bersifat aktual.

        </div>

        @error('email')
            <span class="badge" role="alert"
                style="
                    display: block;
                    background-color: #dc3545;
                    color: white;
                    padding: 0.5rem 1rem;
                    margin-bottom: 0.75rem;
                    font-size: 1rem;
                    border-radius: 0.375rem;
                    text-align: left;
                    word-wrap: break-word;
                ">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="email" name="email" id="email" placeholder="admin@ukt1.org" required
            value="{{ old('email') }}" />

        <input type="password" name="password" id="password" placeholder="********" required />
        @error('password')
            <span class="badge bg-danger p-2 mb-3 text-start fs-6 w-100 text-wrap" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="button" class="login-btn" data-toggle="modal" data-target="#Opsi">
            Login
        </button>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="Opsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Opsi Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Admin -->
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('godmode.dashbboard') }}" class="text-decoration-none">
                                <div class="card shadow-sm border-0 h-100 text-center p-3 option-card">
                                    <div class="card-body">
                                        <p class="card-title font-weight-bold">
                                            Admin
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- User -->
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('pjlp.dashboard') }}" class="text-decoration-none">
                                <div class="card shadow-sm border-0 h-100 text-center p-3 option-card">
                                    <div class="card-body">
                                        <p class="card-title font-weight-bold">
                                            User / PJLP
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Kasi -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
