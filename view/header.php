<?php $xml = simplexml_load_file('language.xml');
$lang=isset($_SESSION['lang'])? $_SESSION['lang'] :'en';
$glob_host=new Constant();  $n=new Insert();?>

<!DOCTYPE html>
<html>
<head>
    <title>
        mvc
    </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>/design/style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<main>
    <header >
        <ul class="head_menu">


            <li class="menu"><a href="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>select/news"> <?php  echo $xml->News->$lang; ?></a></li>
            <li class="menu"><a href="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>registration/"><?php echo $xml->About_us->$lang; ?></a></li>
            <li class="menu" style="color:darkorange"><a href="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>contact"></a><?php echo $xml->Contact->$lang; ?></li>
            <li class="menu"><a href="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>select/all_select"><?php echo $xml->costumers->$lang; ?></a></li>
            <li class="menu"><a href="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>location" ><?php echo $xml->Location->$lang; ?></a></li>
        </ul>

             
        <ul class="ulli">
         
            <li>
                <img src="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>design/images/images.jpg" class="languages" width="20" height="20" title="0">
            </li>
           
            <li>
              <img src="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>design/images/rus.jpg" width="20" class="languages" height="20" title="2">
            </li>
            <li>
               <img src="<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>design/images/arm.jpg" width="20" class="languages" height="20" title="1">
            </li>
          
             

        </ul>

    </header>
    <section>
<aside>
<div class="sidebar">
    <ul>
        <li><a href=""><?php echo $xml->Site_map->$lang;?></a></li>
        <li><a href=""><?php echo $xml->Donate->$lang;?></a></li>
        <li><a href=""><?php echo $xml->Send_us_an_email->$lang;?></a></li>
        <li><a href=""><?php echo $xml->Buy_premium_version->$lang; ?></a></li>
    </ul>
</div>
</aside>
