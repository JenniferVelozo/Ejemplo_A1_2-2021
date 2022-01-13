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
                @foreach($subjects as $s)
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/167682/pexels-photo-167682.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Imagen de curso de matemática">
                        <div class="card-body">
                            <h5 class="card-title">{{$s->nombre}}</h5>
                            <p class="card-text">{{$s->id_asignatura ?? 'No hay descripción'}}</p>
                            <a href="#" class="btn btn-primary">Ir al curso</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    @include('includes.footer')
</body>

</html>