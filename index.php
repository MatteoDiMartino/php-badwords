<!-- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <main>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="m-3">
                    <form action="response.php">
                        <label class="fw-bold">
                            Scrivi il tuo testo
                        </label>
                
                        <div>
                            <input type="text" class="my-2 rounded-1 px-2" required>
                        </div>

                        <button type="submit" class="rounded-1 border-0 bg-black text-white px-3 py-1">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
</html>