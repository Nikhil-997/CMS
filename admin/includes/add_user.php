<?php
if(isset($_POST['create_user']))
{
    $user_firstname = $_POST['user_firstname'];
    $user_lastname= $_POST['user_lastname'];
    $user_role = $_POST['user_role'];

    // $post_image = $_FILES['image']['name'];
    // $post_image_temp = $_FILES['image']['tmp_name'];

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
    // $post_date = date('d-m-y');
    //move_uploaded_file($post_image_temp, "../images/$post_image" );

    $query = "INSERT INTO users(user_firstname,user_lastname,user_role,
    user_name,user_email,user_password) ";
    $query .="VALUES('{$user_firstname}','{$user_lastname}',
    '{$user_role}','{$user_name}','{$user_email}','{$user_password}') ";

    $create_user_query = mysqli_query($connection,$query);
    confirm($create_user_query);

    echo "User Created: " . " " . "<a href = 'users.php'>View Users</a> ";
}


?>



<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
<label for="author">Firstname</label>
<input type="text"class="form-control"name="user_firstname">
</div>


<div class="form-group">
<label for="post_status">Lastname</label>
<input type="text"class="form-control"name="user_lastname">
</div>


<div class="form-group">
<select class="form-control me-1" name="user_role" id="">

<option value="subscriber">Select_Options</Option></option>
<option value="admin">Admin</option>
<option value="subscriber">Subscriber</option>
</select>
</div>




<!-- 
<div class="form-group">
<label for="image">Post Images</label>
<input type="file"class="form-control"name="image">
</div> -->


<div class="form-group">
<label for="post_tags">Username</label>
<input type="text"class="form-control"name="user_name">
</div>

<div class="form-group">
<label for="post_tags">Email</label>
<input type="email"class="form-control"name="user_email">
</div>

<div class="form-group">
<label for="post_tags">Password</label>
<input type="password"class="form-control"name="user_password">
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="create_user" value="Add_User">
</div>

</form>