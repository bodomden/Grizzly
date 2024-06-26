<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://libs.cdnjs.net/font-awesome/6.5.1/css/all.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <title>Phonebook</title>
</head>

<body>
    <div class="content mt-3 ms-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 border ps-2">
                    <form id="phoneform" method="post" name="form">
                        <div class="form-group mb-3">
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number:</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone number" maxlength="45"" required>
                            </div>                            
                            <div class=" mb-3">
                                <button type="submit" class="btn btn-secondary">Find</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <p>Страна: <span id="result"></span></p>
            </div>
        </div>
    </div>
    <div class=" container-fluid banner pt-3">
        <div class="row">
            <img class="banner-mobile" src="/assets/image/banner_bgr_mobile_main.png">
        </div>
        <div class="row banner-background">
            <div class="container">
                <p class="p-banner">Wysyłamy paczki pod klucz już od 4,5 zł.</p>
                <button class="btn btn-bd-banner mt-3">Uzyskaj konsultację teraz</button>
            </div>
        </div>
    </div>
    <div class="modal" id="cookies" tabindex="-1">
        <div class="modal-dialog" id="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Внимание!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>На этой странице используются кукисы.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary btn-cookie" data-bs-dismiss="modal">Понятно</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery.cookie.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>