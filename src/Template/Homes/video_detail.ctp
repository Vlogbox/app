<div class="container">
    <div class="col-sm-12">
        <div class="panel panel-white post panel-shadow">
        <div class="post-heading">
             <video id="our-video" width="100%" height="400" controls>
                <?php $thumb = $this->Video->getVedioLink($video); ?>
                    
                <source src="<?= '/volg/'.$thumb ?>" type="<?= $video->type ?>">
                <source src="/volg/files/mov_bbb.ogg.ogv" type="video/ogg">
             </video>
               <div class="post-description"> 
                <p> 
                    <?php echo $video->name ?>
                </p>                       
             </div>
                <div class="row">
                   <div class="col-md-8">
                        <div class="pull-left image">
                            <!-- <img src="/img/home/user-1.png" class="img-circle avatar" alt="user profile image"> -->
                            <?= $this->Html->image('home/user-1.png', [
                                            'alt' =>'user profile image',
                                            'class' => 'img-circle avatar'
                                        ]) 
                                    ?>
                        </div>
                        <div class="pull-left meta">
                            <div class="title h5">
                                <a href="#"><b>Ryan Haywood</b></a>
                                made a post.
                            </div>
                            <h6 class="text-muted time">1 minute ago</h6>
                        </div>
                    </div>
                    <div class="col-md-4 action-button">
                    <div class="col-lg-12">
                         <a href="#" class="btn">
                            <i class="fa fa-save" aria-hidden="true"></i>
                           Save Video
                        </a>
                        <a href="#" class="btn">
                           <i class="fa fa-eye" aria-hidden="true"></i>
                           2541 Views
                        </a></div>
                        <div class="col-lg-12 ">
                         <a href="#" class="btn">
                           <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                           Like
                        </a>
                        <a href="#" class="btn">
                           <i class="fa fa-envelope-o" aria-hidden="true"></i>
                           Subscribe Now
                        </a>
                        
                        </div>
                    </div>
                </div>
            </div> 
               
           
            <div class="post-footer">
            <div class="post-description"> 
                                       
             </div>
                <div class="input-group col-lg-12"> 
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>  
                    </span>
                </div>
                <ul class="comments-list">
                    <li class="comment">
                        <a class="pull-left" href="#">
                            <!-- <img class="avatar" src="/img/home/user-3.jpg" alt="avatar"> -->
                            <?= $this->Html->image('home/user-3.png', [
                                            'alt' =>'avatar',
                                            'class' => 'avatar'
                                        ]) 
                                    ?>
                        </a>
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user">Gavino Free</h4>
                                <h5 class="time">5 minutes ago</h5>
                            </div>
                            <p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
                        </div>
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <!-- <img class="avatar" src="/img/home/user-2.png" alt="avatar"> -->
                                    <?= $this->Html->image('home/user-2.png', [
                                            'alt' =>'avatar',
                                            'class' => 'avatar'
                                        ]) 
                                    ?>
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li> 
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <!-- <img class="avatar" src="/img/home/user-1.png" alt="avatar"> -->
                                    <?= $this->Html->image('home/user-1.png', [
                                            'alt' =>'avatar',
                                            'class' => 'avatar'
                                        ]) 
                                    ?>
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li> 
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="margin-top">
    <div class="signup-bottom">
        <div class="container">
            <div class="col-sm-9">
                <p>Sign up and Get Your Platform to Sharing Ideas,</p>
                <p>Thoughts and Experience on you Vlog box Chanel</p>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-signup">Sign Up Now</button>
            </div>
        </div>
    </div>
</div>