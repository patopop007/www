<?php
/*
 * ##############CHANGELOG###########################################################################
 * April 23 - Created view
 *
 * ###################################################################################################
 * +
 */

?>
<html>
<head>
    <title>IB CAS Organizer</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css"/>
</head>
<body>
<center>
<div class="pageContent">
    <div id="main">
        <div class="container">
            <h1>IB CAS Organizer</h1>
        </div>
        <?php $this->load->view("menu"); ?>
        <div class="container">
            <?php //echo validation_errors(); ?>

            <?php echo form_open('home/signup'); ?>
            
            <table align="center">
                <tr>
                    <td align="right">Username: </td>
                    <td><input type="text" class="input2" name="username" value="<?php echo set_value('username'); ?>" size="50" /></td>
                </tr>
                <tr><th colspan="2"><?=form_error('username')?></th></tr>
                <tr>
                    <td align="right">Password: </td>
                    <td><input type="password" class="input2" name="password" value="<?php //echo set_value('password'); ?>" size="50" /></td>
                </tr>
                <tr><th colspan="2"><?=form_error('password')?></th></tr>
                <tr>
                    <td align="right">Password Confirm: </td>
                    <td><input type="password" class="input2" name="passconf" value="<?php //echo set_value('passconf'); ?>" size="50" /></td>
                </tr>
                <tr><th colspan="2"><?=form_error('passconf')?></th></tr>
                <tr>
                    <td align="right">Email Address: </td>
                    <td><input type="text" class="input2" name="email" value="<?php echo set_value('email'); ?>" size="50" /></td>
                </tr>
                <tr><th colspan="2"><?=form_error('email')?></th></tr>
                
            </table>
            <input type="submit" value="Sign Up" class="register"/>
            </form>
            </div>
        <?php $this->load->view("footer"); ?>
    </div>
</div>
</center>
</body>
</html>