<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 about-experts">
                <div class="heading vlog-logo-footer">Vlog Box</div>
                <p>
                    Term and conditions  and policy ©2017-2018 vlogboxcom. 
                    Inc. All rights reserved. 
                </p>
            </div>
            <div class="col-sm-5 services ">
                <div class="heading">Quick Links</div>
                <div class="col-sm-6 zero-padding">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"> Home </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#login"> Sign In </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#signup">  Sign Up </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"> Policy </a>
                        </li>
                        <li>
                            <a href="#"> Link </a>
                        </li>
                        <li>
                            <a href="#">Term and Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 news-letter">
                <div class="heading">Follow Us On</div>
                <p>
                <ul class="list-inline social-link">
                    <li>
                        <a href="#"><?= $this->Html->image('home/fb.png')?></a>
                    </li>
                    <li>
                        <a href="#"><?= $this->Html->image('home/google-plus.png')?></a>
                    </li>
                    <li>
                        <a href="#"><?= $this->Html->image('home/instagram.png')?></a>
                    </li>
                    <li>
                        <a href="#"><?= $this->Html->image('home/twitter.png')?></a>
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
        <div class="modal signup fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true"></i></span></button>
                    <h3 class="text-center">Create An Account</h3>
                </div>
                <div class="modal-body clearfix">
                    <div class="login-wraper clearfix">
                        <p class="text-center">You are just a few steps away from joining the  
                            <span class="red-text">Vlogbox </span> Community        
                        </p>
                        <div class="form-group col-sm-12 clearfix">
                            <input tpe="text" class="form-control input-lg" placeholder="First Name">
                        </div>
                        <div class="form-group col-sm-12">
                            <input tpe="text" class="form-control input-lg" placeholder="Username">
                        </div>
                        <div class="form-group col-sm-12">
                            <input tpe="text" class="form-control input-lg" placeholder="Email Address">
                        </div>
                        <div class="form-group col-sm-12">
                            <input tpe="text" class="form-control input-lg" placeholder="Password">
                        </div>
                        <div class="form-group col-sm-12">
                            <input tpe="text" class="form-control input-lg" placeholder="Confirm Password">
                        </div>
                        <div class="col-sm-12 text-center or-text">OR You Can Also Signup With</div>
                        <div class="col-sm-12">
                            <div class="btn-google">
                                <a href="#">
                                    <?= $this->Html->image('home/sign-up-facebook.png', ['class' => 'img-responsive'])?>

                                </a>              
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="btn-google">
                                <a href="#" class="img-responsive">
                                    <?= $this->Html->image('home/sign-up-google.png', ['class' => 'img-responsive'])?></a>            
                            </div>
                        </div>
                        <div class="col-sm-12 signup-text-chk">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox"  value="1" aria-required="true">I have read and accept the User Agreement and Privacy Policy 
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                <input type="checkbox"  value="1" aria-required="true">I am at least 18 years years old
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-white btn-block sign-up-btn">Register Now</button>
                        </div>
                        <div class="col-sm-12 login-bottom-text text-center">Already A Member ?
                            <a href="#">Click Here</a>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal signup fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true"></i></span></button>
                    <h3 class="text-center">Sign In</h3>
                </div>
                <div class="modal-body clearfix">
                    <div class="login-wraper clearfix">
                        <p class="text-center">Welcome Back  
                            <span class="red-text">Vlogbox </span>      
                        </p>
                        <div class="form-group col-sm-12 clearfix">
                            <input tpe="text" class="form-control input-lg" placeholder="Username Or Email Address">
                        </div>
                        <div class="form-group col-sm-12">
                            <input tpe="text" class="form-control input-lg" placeholder="Password">
                        </div>
                        <div class="col-sm-12 form-group clearfix">
                <div class="row">
                    <div class="col-xs-6">
                       <div class="checkbox">
  <label><input type="checkbox" value="">Remember me</label>
</div>                  
                    </div>
                    <div class="col-xs-6 text-right forget-pass">
                        <a href="#">Forgot Password?</a>                    
                    </div>
                </div>
            </div>
                       
                        <div class="col-sm-12 text-center or-text">OR You Can Also Sign In With</div>
                        <div class="col-sm-12">
                            <div class="btn-google">
                                <a href="#"><img src="img/home/facebbok-sign.png" alt="Facebook Logo" class="img-responsive"></a>              
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="btn-google">
                                <a href="#" class="img-responsive"><img src="img/home/google-btn.png" alt="Google Logo" class="img-responsive"></a>            
                            </div>
                        </div>
                        
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-white btn-block sign-up-btn">Login</button>
                        </div>
                        <div class="col-sm-12 login-bottom-text text-center">Create an Account ?
                            <a href="#">Click Here</a>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>