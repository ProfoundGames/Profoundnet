<?php
    if (!empty(htmlspecialchars($_GET["p"]))) {
        $page = htmlspecialchars($_GET["p"]);
    }
?>

<head>
    <?php include '/include/head.php'; ?>
</head>

<body class="notScrolled">
    
    <?php include '/include/header.php'; ?>
    
    <div id="content">
        <?php 
        
        if (empty($page)) {
            include '/content/home.php';
        } elseif( $page == "test" ){
            include '/content/allotOfText.php';
        } else{
            include '/content/' . $page . '.php';
        }
         ?>
    </div>
    
    <footer>
        
    </footer>
    
</body>