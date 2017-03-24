<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/view/style.css">
    <script type="text/javascript" href="javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://local.exercise2.com"><img id="logo"  src="view/logo.jpg" alt=""></img></a>
        </div>
        <ul class="nav navbar-nav">
            <?php if (isset($_SESSION['customer_id'])) { ?>
                <li id="name"><strong><?= $_SESSION['first_name']?></strong></li>
                <li><a id="logout" href="http://local.exercise2.com/Logout">Logout</a></li>
            <?php } else { ?>
                <li><a id="login" href="http://local.exercise2.com/LoginRegistration">Login</a></li>
            <?php } ?>
                <li><a id="cart" href="http://local.exercise2.com/Cart">Cart</a></li>
        </ul>
    </div>
</nav>
</body>
</html>




