<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importación de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    @include('includes.navbar')
    <section class="mt-5">
        <div class="container ">
            <h4 class="mb-5">Elige un curso:</h4>
            <div class="row text-center mb-4">
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/167682/pexels-photo-167682.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Imagen de curso de matemática">
                        <div class="card-body">
                            <h5 class="card-title">Curso de matemática</h5>
                            <p class="card-text">Explicación genérica del curso.</p>
                            <a href="#" class="btn btn-primary">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/4503273/pexels-photo-4503273.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Imagen de curso de jardineria">
                        <div class="card-body">
                            <h5 class="card-title">Curso de jardineria</h5>
                            <p class="card-text">Explicación genérica del curso.</p>
                            <a href="#" class="btn btn-primary">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/267669/pexels-photo-267669.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Imagen de curso de ingles">
                        <div class="card-body">
                            <h5 class="card-title">Curso de inglés</h5>
                            <p class="card-text">Explicación genérica del curso.</p>
                            <a href="#" class="btn btn-primary">Ir al curso</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mb-4">
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/4695929/pexels-photo-4695929.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Imagen curso de astronomia">
                        <div class="card-body">
                            <h5 class="card-title">Curso de astronomia</h5>
                            <p class="card-text">Explicación genérica del curso.</p>
                            <a href="#" class="btn btn-primary">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/2280571/pexels-photo-2280571.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Imagen curso de ciencias">
                        <div class="card-body">
                            <h5 class="card-title">Curso de ciencias</h5>
                            <p class="card-text">Explicación genérica del curso.</p>
                            <a href="#" class="btn btn-primary">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/177598/pexels-photo-177598.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Imagen curso de programación">
                        <div class="card-body">
                            <h5 class="card-title">Curso de programación</h5>
                            <p class="card-text">Explicación genérica del curso.</p>
                            <a href="#" class="btn btn-primary">Ir al curso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @include('includes.footer')
</body>

</html>