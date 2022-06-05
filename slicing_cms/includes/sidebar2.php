<div class="sidebar">
    
    <a href="javascript:void(0);"  class="hamburger-menu icn">
        <div class="icn-24 nav-ham"> </div>
    </a>

    <div class="break h20"></div>

    <div class="nav">

        <?php 

            $dataNav = array (

                1 => array
                    (
                        'navName' => 'Dashboard',
                        'styleName' => 'nav-home',
                        'linkNav' => 'index.php',
                    ),
                2 => array
                    (
                        'navName' => 'Upcoaming',
                        'styleName' => 'nav-upcoming',
                        'linkNav' => 'upcoming.php',
                    ),
                3 => array
                    (
                        'navName' => 'Explore',
                        'styleName' => 'nav-explore',
                        'linkNav' => 'explore.php',
                    ),
                4 => array
                    (
                        'navName' => 'Profile',
                        'styleName' => 'nav-Profile',
                        'linkNav' => 'profile.php',
                    ),
                5 => array
                    (
                        'navName' => 'Settings',
                        'styleName' => 'nav-setting',
                        'linkNav' => 'setting.php',
                    ),
                6 => array
                    (
                        'navName' => 'Logout',
                        'styleName' => 'nav-logout',
                        'linkNav' => 'logout.php',
                    ),
            );
                
            for ($x = 1; $x <= count( $dataNav ); $x++) { 
        ?>

        <a href="<?php echo $dataNav[$x]['linkNav'] ?>" class="nav-list icn <?php if( $page == $x ){echo ('actived') ;} ?>">
            <div class="nav-thumb">
                <div  class="icn-24 <?php echo $dataNav[$x]['styleName'] ;?>"></div>
            </div>
            <p> <?php echo $dataNav[$x]['navName'] ;?> </p>
        </a>

        <?php } ?>

    </div>

</div>