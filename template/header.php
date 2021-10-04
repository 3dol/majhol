<?php require_once __DIR__.'/../config/app.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!doctype html>
<html lang="<?php echo $config['lang'] ?>" dir="<?php echo $config['dir']?>">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link id="styleSheet" rel="stylesheet">
    <script>
        let darkMode = window.localStorage.getItem('darkMode');
        let styleSheetElem = document.getElementById('styleSheet');

        if (darkMode){
            if (darkMode === '1'){
                styleSheetElem.href = 'css/dark_style.css';
            }else {
                styleSheetElem.href = 'css/style.css';
            }
        }else {
            styleSheetElem.href = 'css/style.css';
            window.localStorage.setItem('darkMode', '0')
        }

        function changeTheme() {
            let darkModeValue = window.localStorage.getItem('darkMode');
            if (darkModeValue === '1' || '0'){
                if (darkModeValue === '1'){
                    window.localStorage.setItem('darkMode', '0');
                    styleSheetElem.href = 'css/style.css';
                }else if (darkModeValue === '0') {
                    window.localStorage.setItem('darkMode', '1');
                    styleSheetElem.href = 'css/dark_style.css';
                }else{
                    window.localStorage.setItem('darkMode', '0');
                    changeTheme();
                }
            }
        }
    </script>
    <link rel="stylesheet" href="template/css/custom_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">