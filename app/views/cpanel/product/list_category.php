<h3 style="text-align: center;">Liệt kê danh mục sản phẩm</h3>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<table class="table table-striped" style = "margin-left: 280px; font-size: 18px; width: 73%;">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($category as $key => $cate){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category_product'] ?></td>
        <td><?php echo $cate['desc_category_product'] ?></td>
        <td><a href="<?php echo BASE_URL ?>/product/delete_category/<?php echo $cate['id_category_product'] ?>"><i class="fa-solid fa-trash"></i></a> || <a href="<?php echo BASE_URL ?>/product/edit_category/<?php echo $cate['id_category_product'] ?>"><i class="fa-solid fa-pen"></i></a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>