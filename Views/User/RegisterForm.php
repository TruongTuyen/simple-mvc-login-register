<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf8" />
	<title>Register Form</title>
    <link type="text/css" href="<?php echo BASE_URL ?>/Views/Assets/style.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <?php if( isset( $_SESSION['__errors'] ) && is_array( $_SESSION['__errors'] ) && !empty( $_SESSION['__errors'] ) ) :  ?>
            <div class="message_box">
                <?php 
                    echo implode( '<br/>', $_SESSION['__errors'] ); 
                    unset( $_SESSION['__errors'] );
                ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo BASE_URL ?>/User/ProcessRegister">
        
            <div class="form-group">
                <label>Full name</label>
                <input type="text" name="fullname" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Re-Password</label>
                <input type="password" name="re-password" value="" required="required" />
            </div>
            
            <div class="btn-group">
                <input type="submit" name="submit" class="btn-primary" value="Register" />
                <input type="reset" name="reset" value="Reset" />
                <a class="register-btn" href="<?php echo BASE_URL ?>/User/Login">Đăng nhập </a>
            </div>
            
        </form>
    </div>
</body>
</html>