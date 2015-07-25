
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" lang="<?php $t=t::gett(); echo($t['language']); ?>en" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title><?php echo($t['title']); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1><?php  echo($t['title']); ?></h1>
				<nav class="codrops-demos">
					<span><?php  echo($t['Choose']); ?></span>
					<a href="/main/languige?languige=ru">RU</a>
					<a href="/main/languige?languige=en">EN</a>
				
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="user/auto" autocomplete="on" > 
                                <h1><?php  echo($t['Log in']); ?></h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > <?php  echo($t['Your email']); ?></label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"><?php  echo($t['Your password']); ?>  </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="<?php  echo($t['Log in']); ?>" /> 
								</p>
                                <p class="change_link">
                                <?php  echo($t['Not a member yet ?']); ?>
									
									<a href="#toregister" class="to_register"><?php  echo($t['join us']); ?></a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="user/auto" autocomplete="on" method="POST"> 
                                <h1> <?php  echo($t['Sign up']); ?></h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"><?php  echo($t['Your username']); ?></label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" ><?php  echo($t['Your email']); ?> </label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p"><?php  echo($t['Your password']); ?> </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p"><?php  echo($t['Please confirm your password']); ?></label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                               
                                <p class="signin button"> 
									<input type="submit" value="<?php  echo($t['Sign up']); ?>"/> 
								</p>
                                <p class="change_link"> 
                                    <?php  echo($t['Already a member ?']); ?> 
									
									<a href="#tologin" class="to_register"><?php  echo($t['Go and log in']); ?>   </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>