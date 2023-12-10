<?php

include "header.php";

    
    if(isset($_GET['menu'])){ 
         if($_GET['menu']==1){
          include "profil.php";
         }else{
            echo "pilih menu";
         }
           



    
     }else{
        include "home.php";
    }

include "footer.php";

?>