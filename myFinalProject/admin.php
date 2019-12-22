<!DOCTYPE html>
<html lang="en">
<head>
<title>Furniture Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>
<?php
      include('navigation.php');
      include('serverAdmin.php');
      if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($mysql, "SELECT * FROM info WHERE id = $id");
        
        $record = mysqli_fetch_array($rec);
        
        $p_name = $record['p_name'];
        $address = $record['address'];
        $image = $record['image'];
        $price = $record['price'];
        $id = $record['id'];

      }
    ?>
<div class="row">
<div class="mainM" style="font-size: 19px;">
    <h2> Dashboard </h2>
    <div class="profile">
      <img src="photo_2019-11-09_09-10-00.jpg" />
      

      <div>
        <p> Surname:  Gylymmedden</p>
        <p> Name: Yerkebulan </p>
        <p> Birthday: February 7 2001</p>
        <p> Education: Suleyman Demirel University </p>
        <p> Email: 180107262@stu.sdu.edu.kz </p>
      </div>
    </div>
    <p> Sofas </p>
    <div class="containerCharts">
      <div class="skills sofas">90%</div>
    </div>

    <p> Bed </p>
    <div class="containerCharts">
      <div class="skills bed">80%</div>
    </div>

    <p> Dining Tables </p>
    <div class="containerCharts">
      <div class="skills table">67%</div>
    </div>

    <p> Dining Chairs  </p>
    <div class="containerCharts">
      <div class="skills chair">60%</div>
    </div>
    <p> Arm Chair </p>
    <div class="containerCharts">
      <div class="skills arm">52%</div>
    </div>
    <div class="crud">
      <?php if (isset($_SESSION['msg'])):?>
        <div class = "msg" style="margin: 30px auto; padding: 10px; border-radius: 5px; color: #3c763d; background: #dff0d8; border: 1px solid #3c763d; width: 50%; text-align: center;">
          <?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?> 

      </div>
      <?php endif ?>

      <table style="width: 50%; margin: 30px auto; border-collapse:collapse; text-align: center;">
            <thead>
                <tr style:="border-bottom: 1px solid #cbcbcb;">
                  <th style="border: none; height: 30px; padding: 2px;">Product name</th>
                  <th style="border: none; height: 30px; padding: 2px;">Address</th>
                  <th style="border: none; height: 30px; padding: 2px;">Image</th>
                  <th style="border: none; height: 30px; padding: 2px;">Price</th>  
                  <th style="border: none; height: 30px; padding: 2px;" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            
            while($row = mysqli_fetch_array($result)){ ?>
              <tr>
                <td style="border: none; height: 30px; padding: 2px;"> <?php echo $row['p_name']; ?> </td>
                <td style="border: none; height: 30px; padding: 2px;"> <?php echo $row['address']; ?>  </td> 
                <td style="height: 30px; width: 30px; "> <img src="<?php echo $row['image']; ?>"></td> 
                <td style="border: none; height: 30px; padding: 2px;"> <?php echo $row['price']; ?> </td>
                <td style="border: none; height: 30px; padding: 2px;"> <a href="admin.php?edit=<?php echo $row['id'] ?>" style="text-decoration: none; padding: 2px 5px; background: #2E8B57; color: white; border-radius: 3px;"> EDIT </td>
                <td style="border: none; height: 30px; padding: 2px;"> <a href="serverAdmin.php?del=<?php echo $row['id'] ?>" style = "text-decoration: none; padding: 2px 5px; background: #800000; color: white; border-radius: 3px;">  DELETE </td>
              </tr>
            <?php } ?>
            </tbody>
      </table>

    <form action="serverAdmin.php" method="post" class="formForAdmin">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <div class="input-group" style="margin: 10px 0px 10px 0px;">
        <label >Product Name</label>
        <input type="text" name="p_name" style="height: 30px;
                                              width: 93%;
                                              padding: 50px 10px;
                                              font-size: 16px;
                                              border-radius: 5px;
                                              border: 1px solid gray;"  value="<?php echo $p_name;?>">
      </div>
      <div class="input-group" style="margin: 10px 0px 10px 0px;">
        <label style="display: block; 
                      text-align: left; 
                      margin: 3px;">Address</label>
        <input type="text" name="address" style="height: 30px;
                                              width: 93%;
                                              padding: 50px 10px;
                                              font-size: 16px;
                                              border-radius: 5px;
                                              border: 1px solid gray;"  value="<?php echo $address;?>">
      </div>
      <div class="input-group" style="margin: 10px 0px 10px 0px;">
        <label style="display: block; 
                      text-align: left; 
                      margin: 3px;">URL</label>
        <input type="text" name="image" style="height: 30px;
                                              width: 93%;
                                              padding: 50px 10px;
                                              font-size: 16px;
                                              border-radius: 5px;"  value="<?php echo $image;?>">
      </div>
      <div class="input-group" style="margin: 10px 0px 10px 0px;">
        <label style="display: block; 
                      text-align: left; 
                      margin: 3px;">Price</label>
        <input type="text" name="price" style="height: 30px;
                                              width: 93%;
                                              padding: 50px 10px;
                                              font-size: 16px;
                                              border-radius: 5px;
                                              border: 1px solid gray;">
      </div>
      <div class="input-group" style="margin: 10px 0px 10px 0px;">
      <?php if($edit_state == false):?>
      <button type="submit" name="save" class="btn" style="padding: 10px;
                                                              font-size: 15px;
                                                              color: white;
                                                              background: #5F9EA0;
                                                              border: none;
                                                              border-radius: 5px;"> Save </button>
      <?php else:?>
        <button type="submit" name="update" class="btn" style="padding: 10px;
                                                              font-size: 15px;
                                                              color: white;
                                                              background: #5F9EA0;
                                                              border: none;
                                                              border-radius: 5px;">  Update  </button>
    
      <?php endif?>
      
      </div>
    </form>

    </div>
    </div>
    
</div>
<?php
      include('footer.php');
    ?>
</body>
</html>