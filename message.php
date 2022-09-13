<?php
    if(isset($_SESSION['message'])):
        ?>
        <div><?=$_SESSION['message']?></div>
<?php

endif;
unset($_SESSION['message']);

    
?>