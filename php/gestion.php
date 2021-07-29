<?php
  
    if(isset($_GET['accueil']))         {  include("php/accueil.php");      }
elseif(isset($_GET['articles']))        {  include("php/articles.php");     }
elseif(isset($_GET['apropos']))         {  include("php/apropos.php");      }
elseif(isset($_GET['contact']))         {  include("php/contact.php");      }
else                                    {  include("php/accueil.php");      }

?>
   