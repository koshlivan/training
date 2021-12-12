
        <?php
           
           
           $photo="./profile.png";
            $phoneNumber="+38(555)55-55-55";
            $email="myemail@mail.com";
            $adres="Ukraine, Zaporizhzhya";
            $education="Software developer";
            $educFacil="ItStep Academy";
            $educPeriod="2019-2022";
            $skills=array("php", "html", "css", "js");
            $fio="Ivan Koshlyak";
            $vacancy="web developer";
            $profileText="Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat tempora modi animi minima officiis sunt similique itaque quidem ab ut omnis porro nobis reiciendis eum maxime dolore sequi, sed vero.";
            $experiance="Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat tempora modi animi minima officiis sunt similique itaque quidem ab ut omnis porro nobis reiciendis eum maxime dolore sequi, sed vero.";

        ?>
        
        
        <div class="wraper">

            <div class="side-info">
                <img class="pr-photo" src="<?=$photo?>" alt="Profile">
                <h3 class="lblCont">Contact</h3>
                <p class="p-info"><?=$phoneNumber?><br>
                <?=$email?><br>
                <?=$adres?>
                </p>
                <h3 class="lblCont">Education</h3>
                <p class="p-info"><?=$education?><br>
                <?=$educFacil?><br>
                <?=$educPeriod?>
                </p>
                <h3 class="lblCont">Skills</h3>
                <ul class="ul-info">
                <?php
                    foreach($skills as $skill){
                       echo "<li>$skill</li>";
                    }
                    ?>
                </ul>
            </div>

            <div class="main-info">
                <div class="head">
                    <h1><?=$fio?></h1>
                    <h2><?=$vacancy?></h2>
                </div>
                <div class="remain-info">  
                    <h3>Profile</h3>
                    <p><?=$profileText?></p>
                    <h3>Professional experiance</h3>
                    <p><?=$experiance?></p>
                </div> 
            </div>

        </div>


        <!--
            <div class="wraper">

            <div class="side-info">
                <img class="pr-photo" src="./Photo.png" alt="Profile">
                <h3 class="lblCont">Contact</h3>
                <p class="p-info">+38(066)32-43-771<br>
                koshlivan@gmail.com<br>
                Ukraine, Zaporizhzhya
                </p>
                <h3 class="lblCont">Education</h3>
                <p class="p-info">Software developer<br>
                "IT Step" Academy<br>
                2019-2022
                </p>
                <h3 class="lblCont">Skills</h3>
                <ul class="ul-info">
                    <li>php</li>
                    <li>html</li>
                    <li>css</li>
                </ul>
            </div>

            <div class="main-info">
                <div class="head">
                    <h1>ivan koshliak</h1>
                    <h2>web developer</h2>
                </div>
                <div class="remain-info">  
                    <h3>Profile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat tempora modi animi minima officiis sunt similique itaque quidem ab ut omnis porro nobis reiciendis eum maxime dolore sequi, sed vero.</p>
                    <h3>Professional experiance</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta placeat quis iure modi nobis, repellat illum blanditiis, laboriosam, debitis ipsam eveniet saepe. Exercitationem, libero repellendus perferendis eveniet assumenda odit distinctio.</p>
                </div> 
            </div>

        </div>
         -->
    