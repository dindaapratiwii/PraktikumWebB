<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
<div class="container">
  <h2>Pagination</h2>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Departemen</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include "koneksi.php";
        if(isset($_GET['page']) && $_GET['page'] !="" ){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $total_data_page = 3;
        $offset = ($page - 1) * $total_data_page;
        $next_page = $page + 1;
        $prev_page = $page - 1;

        $result = $conn->query("SELECT * FROM pagination_table");
        $total_records = mysqli_num_rows($result);
        $total_no_page = ceil($total_records/$total_data_page);
        $second_last = $total_no_page - 1;
        $resultPerPage = $conn->query("SELECT * FROM pagination_table
            LIMIT $offset,$total_data_page");
        
    ?>
    <?php $no = $offset+1; ?>
    <?php  while($row = mysqli_fetch_assoc($resultPerPage)) : ?>
        <tr>
            <td><?= $no; ?></td> 
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['age']; ?></td>
            <td><?= $row['dept']; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>
    </tbody>
  </table>
  <strong><p>Halaman <?php echo $page; ?> Sampai <?php echo $total_no_page; ?></p></strong>
  
  <!-- pagination -->
  <ul class="pagination">
        <li <?php if($page <=1 ) {echo "class='disabled'";}  ?>>
            <a <?php if ($page > 1 ) { echo "href='?page=$prev_page'"; } ?>>Prev</a>
        </li>
        <?php 
            if ($total_no_page > 10){
                if($page<=4){
                    for($i = 1 ; $i < 8 ; $i++){
                        if($i == $page){
                            echo "<li class='active'><a>$i</a></li>";
                        }else{
                            echo "<li><a href='?page=$i'>$i</a><li>";
                        }
                    }
                    echo "<li><a>...</a></li>";
                    echo "<li><a href='?page=$total_no_page'>$total_no_page</a></li>";
                }
                else if ($page > 4 && $page < $total_no_page - 4 ){
                    echo "<li><a href='?page=1'>1</a></li>";
                    echo "<li><a>...</a></li>";
                    for ($i = $page - 3 ; $i<= $page + 3; $i++){
                        if($i == $page){
                            echo "<li class='active'><a>$i</a></li>";
                        }else{
                            echo "<li><a href='?page=$i'>$i</a><li>";
                        }
                    }
                    echo "<li><a>...</a></li>";
                    // echo "<li><a href='?page=$second_last'>$second_last</a></li>";
                    echo "<li><a href='?page=$total_no_page'>$total_no_page</a></li>";
                }
                else{
                    echo "<li><a href='?page=1'>1</a></li>";
                    echo "<li><a>...</a></li>";
                    for($i = $total_no_page - 7; $i <= $total_no_page; $i++ ){
                        if($i == $page){
                            echo "<li class='active'><a>$i</a></li>";
                        }else{
                            echo "<li><a href='?page=$i'>$i</a><li>";
                        }
                    }
                }
            }
            else if ( $total_no_page <= 10 ){
                for ($i = 1 ; $i <=$total_no_page;$i++){
                    if($i == $page){
                        echo "<li class='active'><a>$i</a></li>";
                    }else{
                        echo "<li><a href='?page=$i'>$i</a><li>";
                    }
                }
            }
           
        ?>
        <li <?php if($page >= $total_no_page) { echo "class='disabled'"; } ?>>
            <a <?php if ($page < $total_no_page ) { echo "href='?page=$next_page'"; }?>>Next</a>
        </li>
        <?php if ($page < $total_no_page){
           echo "<li><a href='?page=$total_no_page'>Last</a></li>";
        }?>
  </ul>
</div>
</body>
</html>