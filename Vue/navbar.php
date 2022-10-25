
<?php $username=shell_exec("echo %username%" );?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
crossorigin="anonymous"> 
<link href="C:\Users\pasca\Documents\GitHub\Projet_Web_3il\boostrap\Site.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #005067; border-color: #E84E0F;">
        <a class="navbar-brand ms-3" style="color:#E84E0F"  href="index.php">SUIVI-3il</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Liste des suivi</a>
                </li> 
             </ul>
        </div>
        <div class="user "  style="color:#E84E0F;font-weight: 600;font-size: var(--font-md);margin-right:10px;">
            <?php echo ("$username" );?>
        </div>
    </nav>
</body>
</html>