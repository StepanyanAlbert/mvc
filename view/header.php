
<!DOCTYPE html>
<html>
<head>
    <title>
        mvc
    </title>
    <link rel="stylesheet" href="http://localhost/project_mvc/design/style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<main>
    <header>
        <ul>
           <?php
           
           var_dump(Lang::create_());die;
           
           require 'message/message_'.$_SESSION['lang'].'.php';?>
            <li class="menu"><a href="http://localhost/project_mvc/select/news"> <?= Lang::create_(); ?></a></li>
            <li class="menu"><a href="http://localhost/project_mvc/registration/"><?= $lang[1];?></a></li>
            <li class="menu"><a href="http://localhost/project_mvc/contact"></a><?= $lang[2];?></li>
            <li class="menu"><a href="http://localhost/project_mvc/select/all_select"><?= $lang[3];?></a></li>

        </ul>
             
        <ul>
            <form action="" method="post"> 
            <li>
                <img src="http://localhost/project_mvc/design/images/images.jpg" class="languages" width="20" height="20" title="en">
            </li>
           
            <li>
              <img src="http://localhost/project_mvc/design/images/rus.jpg" width="20" class="languages" height="20" title="rus">
            </li>
            <li>
               <img src="http://localhost/project_mvc/design/images/arm.jpg" width="20" class="languages" height="20" title="arm">
            </li>
          
             </form>
        </ul> 
       
    </header>
    <section>