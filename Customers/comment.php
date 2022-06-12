<?php
session_start();
require 'header.php';
include '../assets/PHP/comment.php';
$v = $_SESSION['name']; ?>
<center>
      <div class="row">
        <div class="container col s10 m6 l4 offset-s1 offset-m3 offset-l4 ">
            <div class="card  blue-grey lighten-5" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                <div class="card-content">
                    <h5 class="card-title center-align">Comment</h5>
                    <hr width="30%"><br>
                    <form action="comment.php" method="post" class="comment-form" id="form" autocomplete="off">
                        <!-- <div class="red-text center-align"><?php echo $errors['invalid']; ?></div> -->
                        <!-- <div class="row">
                                    <div class="input-field col s10">
                                        <!-- <i class="material-icons prefix">email</i> 
                                        <i class="mdi-social-person-outline prefix"></i>
                                        <input name="username" type="text" id="username" value="<?php echo $v ?>"  />
                                        <label for="username">User name</label>
                                        <div class="red-text right-align"><?php echo $errors['name']; ?></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s10">
                                        <i class="mdi-action-lock-outline prefix"></i>
                                        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
                                        <label for="email">Email</label>
                                        <div class="red-text right-align"><?php echo $errors['email']; ?></div>
                                    </div> -->
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="mdi-action-lock-outline prefix"></i>
                                <textarea name="body" id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                                <label for="textarea1">Comment</label>
                                <div class="red-text right-align"><?php echo $errors['tarea']; ?></div>
                            </div>
                            <div class="row center-align">
                                <button class="btn blue darken-2 waves-effect waves" type="submit" name="post">Post
                                    <i class="material-symbols-outlined"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- <p class="margin center medium-small sign-up">Not a customer yet? <a href="signup.php">Sign up</a> -->
            <!-- </p> -->
        </div>
    </div>
</center>
</main>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('textarea#textarea1').characterCounter();
        M.textareaAutoResize($('textarea#textarea1'));
    })
</script>
</body>

</html>