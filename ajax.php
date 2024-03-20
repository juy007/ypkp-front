<?php 
    $id_jurusan =$_POST['id_jurusan'];
    $query = mysqli_query($conn,"SELECT * FROM p_daya_terpasang WHERE id_golongan_tarif='$id_golongan_tarif'");
    while($value=mysqli_fetch_array($query)){
        $HTML.="<option value='".$value['id_daya_terpasang']."'>".$value['label']."</option>";
    }

    echo $HTML;
?>