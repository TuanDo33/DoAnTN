<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Home2.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="icon" href="/Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="box">
        <?php
        include "view/header.php";
        //    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case "login";
            include "view/login1.php";
            if(isset($_POST['txtsub'])&&($_POST['txtsub'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                session_start();
                ob_start();
            if (isset($_SESSION['userName'])) {
               header('location:..view/trangchu.html');
            }else{

            }break;
            }
            //     // case 'trangchu';
            //     // include "view/trangchu.html";
            //     // break;
            //     case 'login';
            //     include "view/login1.php";
            //     break;
            //    }
            // }else{
            //     include "view/trangchu.html";
        }
        include "view/footer.php";
        ?>
    </div>
</body>

</html>