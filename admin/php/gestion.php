<?php

if(isset($_GET['view_article']))        {  include("php/view_article.php");         }
elseif(isset($_GET['new_article']))     {  include("php/form_new_article.php");     }
elseif(isset($_GET['modifier']))        {  include("php/update_form_article.php");  }
else                                    {  include("php/view_article.php");         }

?>