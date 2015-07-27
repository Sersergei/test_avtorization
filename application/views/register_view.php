<div id="register" class="animate form">

                            <form  action="" autocomplete="on" method="POST"> 
                                <h1> <?php  echo($t['Sign up']); ?></h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"><?php  echo($t['Your username']); ?></label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" value="<?php echo $data->get_login() ?>" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" ><?php  echo($t['Your email']); ?> </label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com" value="<?php echo $data->get_email() ?>" /> 
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
									
									<a href="/user/avto" ><?php  echo($t['Go and log in']); ?>   </a>
								</p>
                            </form>
                        </div>