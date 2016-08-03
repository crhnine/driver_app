    <div style="width:100%;height:35px;background-color:#f85708;border-bottom:1px solid white;">
        <!--  Hello username float right  -->
        <?php

        if($current_login !== " "){
            if($url === "lower_directory"){

            
            echo '<div class="show_username">Welcome ' . $current_login . '!</div>';

            }
            if($url === "top_directory"){

            }

        } 
        ?>
    </div>
    <div class="header_container">
        <p style="margin:0px;width:100%;text-align:center">
           Money-Tracker
        </p>
    </div>