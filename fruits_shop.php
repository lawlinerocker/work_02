<!DOCTYPE html>
<html>
<body>
<?php
// function hello($name){
//     echo "Hello $name";
// }
      $fruits = array (
        array(1,"orange",40,"https://www.santosfood.com/wp-content/uploads/2020/01/img-7.jpg"),
        array(2,"mango",20,"http://postnoname.com/wp-content/uploads/2017/09/mango.jpg"),
        array(3,"strawberry",120,"https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Garden_strawberry_%28Fragaria_%C3%97_ananassa%29_single2.jpg/1200px-Garden_strawberry_%28Fragaria_%C3%97_ananassa%29_single2.jpg"),
        array(4,"rambutan",40,"https://static.bigc.co.th/media/catalog/product/0/2/0214304.jpg"),
        array(5,"longan",40,"https://thethaiger.com/wp-content/uploads/2021/08/Longan-ban-to-China-lifted-savoryexperiments.com_.jpg"),
        array(6,"watermelon",55,"https://image.makewebeasy.net/makeweb/0/qUs8Q7smr/Content/%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%81%E0%B8%B1%E0%B8%94%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B9%81%E0%B8%95%E0%B8%87%E0%B9%82%E0%B8%A1__Watermelon_Extract_5_%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%82%E0%B8%A2%E0%B8%8A%E0%B8%99%E0%B9%8C%E0%B8%8A%E0%B8%B1%E0%B9%89%E0%B8%99%E0%B9%80%E0%B8%A5%E0%B8%B4%E0%B8%A8_%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%87%E0%B8%B2%E0%B8%A1_%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%97%E0%B8%B8%E0%B8%81%E0%B8%84%E0%B8%99%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%84%E0%B8%A7%E0%B8%A3.jpg"),
        array(7,"durian",220,"https://healthiersteps.com/wp-content/uploads/2021/09/durian-1.jpg"),
        array(8,"apple",80,"https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Red_Apple.jpg/1200px-Red_Apple.jpg"),
        array(9,"kiwi",75,"https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Kiwi_%28Actinidia_chinensis%29_1_Luc_Viatour_edit.jpg/1200px-Kiwi_%28Actinidia_chinensis%29_1_Luc_Viatour_edit.jpg"),
        array(10,"banana",45,"https://image.makewebeasy.net/makeweb/0/aNSsujWTa/FruitandVegs/Picture14.png?v=202012190947")
      );
      echo '<h1 style="font-weight:bold; color:yellowgreen; text-align:center; font-size:50px;">Fruits Shop</h1>';
      echo '<h2 style="font-weight:bold; color:red; text-align:center; font-size:40px;">Shopping List</h2>';
      echo "<table border='3'
      style='text-align:center;
      font-weight:bold;
      margin-left:auto;
      margin-right:auto'>";
    //   echo "<table style='border:1px;'>"
      echo "<tr><td>ID</td><td>Name</td><td>Price</td><td>Picture</td>";
      for($i=0;$i<10;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
        echo "<tr  style='text-align:center; font-weight:bold;'>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][0]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][1]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][2]. "</p></td>
        <td><img src=".$fruits[$i][3]." width=100 height=100></td>
        </tr>";
      }
    //  hello(George);
      
?>

</body>
</html>