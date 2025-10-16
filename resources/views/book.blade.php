<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Buku Album</h1>
                    <p class="lead text-body-secondary">Selamat Datang dan Selamat Menjelajah Di Website Kami.</p>
                    <p> <a href="#" class="btn btn-primary my-2"></a> <a href="#"
                            class="btn btn-secondary my-2"></a> <a href="#" class="btn btn-primary my-2"></a> <a
                            href="#" class="btn btn-secondary my-2"></a> </p>
                </div>
            </div>
        </section>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach ($books as $item)
                        <div class="col">
                            <div class="card shadow-sm h-100">
                                <img src="{{ $item['cover_photo'] }}" class="bd-placeholder-img card-img-top"
                                    alt="{{ $item['title'] }}" width="100%" height="225" style="object-fit:fill;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item['title'] }}</h5>
                                    <p class="card-text">
                                        <strong>Author:</strong> {{ $item['author_id'] }} <br>
                                        <strong>Genre:</strong> {{ $item['genre_id'] }} <br>
                                        <strong>Description:</strong> {{ $item['description'] }} <br>
                                        <strong>Price:</strong> ${{ $item['price'] }} <br>
                                        <strong>Stock:</strong> {{ $item['stock'] }} <br>
                                    </p>
                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
        </div>
    </main>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</body>

</html>
