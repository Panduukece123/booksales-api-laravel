<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
          crossorigin="anonymous">
</head>
<body>

    <div class="container py-5">
        <h1 class="text-center mb-5">Daftar Penulis</h1>

        @foreach ($authors as $item)
            <div class="card mb-5 shadow-sm">
                <div class="card-body">
                    <h2 class="pb-2 border-bottom">{{ $item['name'] }}</h2>

                    <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" aria-hidden="true">
                                <use xlink:href="#person"></use>
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Bio</h3>
                                <p>{{ $item['bio'] }}</p>
                            </div>
                        </div>

                        <div class="col d-flex align-items-start">
                            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" aria-hidden="true">
                                <use xlink:href="#calendar3"></use>
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Age</h3>
                                <p>{{ $item['age'] }}</p>
                            </div>
                        </div>

                        <div class="col d-flex align-items-start">
                            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" aria-hidden="true">
                                <use xlink:href="#flag"></use>
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Flag</h3>
                                <p>{{ $item['flag'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
            integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" 
            crossorigin="anonymous"></script>
</body>
</html>
