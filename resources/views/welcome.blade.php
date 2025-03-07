<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przykładowa Strona Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Własne style CSS */
        body {
            background-color: #f8f9fa;
        }
        .custom-button {
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Nagłówek strony -->
        <div class="row mb-4">
            <div class="col text-center">
                <h1>Witaj w Laravelu!</h1>
                <p>Przykładowa strona stworzona z użyciem Blade i Bootstrap.</p>
            </div>
        </div>
        <!-- Główna zawartość -->
        <div class="row">
            <div class="col-md-6">
                <img src="https://cdn.pixabay.com/photo/2023/11/17/16/54/boat-8394639_1280.jpg" alt="Przykładowy obrazek" class="img-fluid rounded">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <button class="btn btn-primary custom-button" onclick="alert('Przycisk 1 został kliknięty!')">Przycisk 1</button>
                <button class="btn btn-success custom-button" onclick="alert('Przycisk 2 został kliknięty!')">Przycisk 2</button>
                <button class="btn btn-danger custom-button" onclick="alert('Przycisk 3 został kliknięty!')">Przycisk 3</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Własny skrypt JS
        console.log('Strona została załadowana poprawnie!');
    </script>
</body>
</html>
