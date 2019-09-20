<?php

  $current_data=$_POST;
  $path="./uploads/images";
  if (!is_dir($path)) {
    mkdir($path, 0777, true);
  }

$ext=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$file_name="image-".date('Ymdhis').rand(0,999).".".$ext;

if ($_FILES['image']['error']==0) {


    $return=move_uploaded_file($_FILES['image']['tmp_name'] , $path."/".$file_name);
    if ($return) {
      $current_data['image']=$path."/".$file_name;
      }
        
    }

  $file="keshab.json";

  if (!file_exists($file)) {
  	$too_write=array($current_data);
  }else{
  	$old_file=file_get_contents($file);
  	if ($old_file) {
  		$too_write=json_decode($old_file,true);
  		$too_write[]=$current_data;
  	}else{
  		$too_write=array($current_data);
  	}

  }
  $success=file_put_contents($file, json_encode($too_write));
  if ($success) {
  	echo "data stored successfully";
  }else{
  	echo "error in data inserting";
  }


  echo '<table border=1>';


  echo '<tbody>';
  echo '<tr>';
		echo '<th>SN.</th>';
	    echo '<th>Name</th>';
		echo '<th>Address</th>';
        echo '<th>Email</th>';
        echo '<th>Phone</th>';
        echo '<th>Date-Of-Birth</th>';
        echo '<th>About</th>';
        echo '<th>Image</th>';
  echo '</tr>';

  $i = 0;

    foreach ($too_write as $value) {
    	$i++;

    	 echo '<tr>';
            echo '<td>'.$i.'</td>';
            echo '<td>'.$value['name'].'</td>';
            echo '<td>'.$value['address'].'</td>';
            echo '<td>'.$value['email'].'</td>';
            echo '<td>'.$value['phone'].'</td>';
            echo '<td>'.$value['date'].'</td>';
            echo '<td>'.$value['about'].'</td>';
           
            if (isset($value['image'])) {
              echo "<td>";
            echo '<img class="img img-fluid img-thumbnail" height="100px" width="100px" src="'.$value['image'].'">';
              echo "</td>";
            }
         echo '</tr>';
    }


    echo "</table>";

?>