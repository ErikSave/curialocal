<?php
include 'includes/conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM USUARIOS WHERE CORREO='$email' AND CONTRASENA='$password'";
$result = $conn->query($sql);

// Verificar si se encontró un usuario con las credenciales proporcionadas
if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['email'] = $username;
    header("Location: index.php"); // Redirigir a la página de inicio
} else {
    // Error de inicio de sesión
    // echo "Nombre de usuario o contraseña incorrectos";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php
include 'includes/head.php'
    ?>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <div class="mb-12">
                    <img alt="Logo" src="assets/media/logos/arquidiocesis_bordes.png" class="img-fluid" style="width: 10rem;"/>
                </div>
                <!--end::Logo-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="loging.php"
                        method="post">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3"></h1>
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">CORREO</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="email"
                                autocomplete="off" />
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">CONTRASEÑA</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                name="password" autocomplete="off" />
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5"
                                name="submit">
                                <span class="indicator-label">INGRESAR</span>
                            </button>
                        </div>
                    </form>
                    <!--end::Form-->

                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
    <script>var hostUrl = "assets/";</script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <!-- <script src="assets/js/custom/authentication/sign-in/general.js"></script> -->
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>