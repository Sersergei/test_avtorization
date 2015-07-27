<div id="login" class="animate form">
     <form  action="user/auto" autocomplete="on" > 
                                <h1><?php echo ($t['Log in']); ?></h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > <?php echo ($t['Your email']); ?></label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"><?php echo ($t['Your password']); ?>  </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                              </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="<?php echo ($t['Log in']); ?>" /> 
								</p>
                                <p class="change_link">
                                <?php echo ($t['Not a member yet ?']); ?>
									
									<a href="/user/reg" ><?php echo ($t['join us']); ?></a>
								</p>
                            </form>                       
</div>