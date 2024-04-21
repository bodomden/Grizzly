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
    <div class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 border ps-2">
                    <form method="post" name="form">
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



            <?php
            $source = 'https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json';

            $source_json = file_get_contents($source);
            $arr = json_decode($source_json, true);

            if ($_POST) {

                $inputNumber = $_POST['phone_number'];
                $inputNumber = editInputFormat($inputNumber);

                foreach ($arr as $elem) {
                    $mask = str_replace(["(", ")"], "-", $elem['mask']);
                    $mask = explode('-', $mask);
                    if (count($inputNumber) == count($mask)) {
                        if (compareNumbers($inputNumber, $mask)) {
                            echo $elem['name_ru'];
                            break;
                        }
                    } else {
                        continue;
                    }
                }
            }

            function editInputFormat($number)
            {
                $search = [' (', ') ', '(', ')', ' '];
                $number = str_replace($search, '-', $number);
                if (!str_starts_with($number, '+')) $number = '+' . $number;
                $number = explode('-', $number);
                return $number;
            }

            function compareNumbers($input, $mask)
            {
                foreach ($input as $key => $value) {
                    $a = $input[$key];
                    $b = $mask[$key];
                    if (strlen($a) == strlen($b)) {
                        if ($a == $b) continue;
                        for ($i = 0; $i < strlen($a); $i++) {
                            if ($a[$i] == $b[$i] or $b[$i] == '#') {
                                continue;
                            } else {
                                return False;
                            }
                        }
                    } else {
                        return False;
                    }
                }
                return True;
            }
            ?>




        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>