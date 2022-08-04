<html> 
    <head> 
        <title>TUGAS 1 </title> 
    </head> 
<body>

    <form method="post" action=""> 
    Masukkan tahun <input type="text" name="bil" /><br />
    <input type="submit" name="submit" value="cek" /> 
    </form> 

<?php
if(isset($_POST['submit'])){
    $tahun = $_POST['bil'];
    if ($tahun%4==0) {
        echo "$tahun tahun kabisat"; 
    } else if($tahun%4!=0) {
        echo "$tahun bukan tahun kabisat"; 
    }
}
?>
</body> 
</html> 