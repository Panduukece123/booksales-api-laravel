<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Genre</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
          crossorigin="anonymous">
</head>
<body>

    <div class="container py-5">
        <h1 class="text-center mb-5">Daftar Genre</h1>

        @foreach ($genres as $item)
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2 class="pb-2 border-bottom">{{ $item['name'] }}</h2>

                    <div class="row py-3">
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em" aria-hidden="true">
                                <use xlink:href="#book"></use>
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-1 fs-5 text-body-emphasis">Deskripsi</h3>
                                <p class="mb-0">{{ $item['descriptions'] }}</p>
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
