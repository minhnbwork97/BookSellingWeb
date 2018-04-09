<?php ob_start();
$sql="select * from `book` group by `category_book` limit 20";
	  	$result=mysqli_query($link,$sql); ?>
        <br>

<div class = "col-lg-3" style="margin-left:7%">
  <form class="form-inline" method="POST" action="index.php?page=search" target="_blank">
  <div class="well col-sm-12">
  <div class="row">
    <select name="searchCat" class="form-control" style="width:25%; margin-left:3%">
    <option value="" disabled selected>Mục</option>
    <option value="name">Tên sách</option>
    <option value="author">Tác giả</option>
    <option value="seller">Người bán</option>
    <option value="categories">Thể loại</option>
    </select>
    <input name="searchtext" class="form-control mr-sm-2" type="text"  placeholder="Tìm kiếm" style="width:67%"> 
    </div> 
    <div style="float:right">
    <br>	
    <button name="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </div>
	</div>
  </form>

    <ul class="nav nav-pills nav-stacked">
      <h3>Danh Mục</h3>
<?php
		while($item=mysqli_fetch_assoc($result)){
			
	  ?>
      <li ><a href="index.php?page=danhmuc&id=<?= $item['category_book'];?>" class="list-group list-group-item list-group-item-success" target="_blank"><?= $item['category_book'];?></a></li>
      <?php };
	?>
    </ul>
</div>

<?php ob_flush(); ?>