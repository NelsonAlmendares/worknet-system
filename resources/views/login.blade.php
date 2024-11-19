<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form id="login-form">
                                @csrf
                                <div class="mb-3">
                                    <label for="user_name" class="form-label">Usuario</label>
                                    <input id="user_name" type="text" class="form-control" name="user_name" required autofocus>
                                    <div class="invalid-feedback">
                                        Usuario requerido.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="user_password" class="form-label">Password</label>
                                    <input id="user_password" type="password" class="form-control" name="user_password" required>
                                    <div class="invalid-feedback">
                                        Contraseña es requerida.
                                    </div>
                                </div>

                                <div class="form-check mb-3">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        Copyright &copy; 2024 &mdash; NelsonAlmendares.dev
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Evitar el envío estándar del formulario

            let formData = new FormData(this);

            fetch("{{ route('Usuario.LoginPost') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    let timerInterval;
                    Swal.fire({
                    title: "Generando sesión!",
                    html: "Redirigiendo al sitio principal ",
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                        timer.textContent = `${Swal.getTimerLeft()}`;
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                    }).then(() => {
                        window.location.href = '/welcome'; // Redirigir después del éxito
                    });

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message,
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
