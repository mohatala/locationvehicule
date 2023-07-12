<?php
include("model/Config.cls.php");
include("model/Vehicule.cls.php");
$base=new Connection();
$connect=$base->connect();
$vehicule=new Vehicule();
?>

<style>
    #MoreInfo{width:100%; height:90%; position:absolute;}
    #MoreInfo #navigation{width:30%; height:10%; position:absolute; top:-3%; left: 70%;}
    #table3{width:40%; height:90%; float:left;}
    #MoreInfo img{width:30%; height:40%; position:absolute; left:55%; top:2%;}
    #MoreInfo span{width:40%; height:20%; position:absolute; left:60%; top:60%;}
	#upload{ position:absolute; left:60%; top:60%;}
	#validerbtn{position:absolute; left:60%; top:80%; width:20%;}
</style>

<div id="MoreInfo">
    <?php $idV=$_GET["id"]?>
    <?php
    $res=$connect->query("select * from voiture where id='". $idV ."'");
    $ligne=$res->fetch();
    if(isset($_GET["mod"])){
    ?>
        <form action="controls/control.php" method="post" enctype="multipart/form-data" id="my_form">
            <table id="table3">
                <tbody>

                <tr> <input type="hidden" name="pg" value="modifier">
                    <td>ID:</td>
                    <td><input type="text" name="id" readonly value="<?php echo $idV;?>"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><input type="text" name="type" value="<?php echo $ligne["types"];?>"></td>
                </tr>
                <tr>
                    <td>MARQUE:</td>
                    <td><input type="text" name="marque" value="<?php echo $ligne["marque"];?>"></td>
                </tr>
                <tr>
                    <td>Prix/jour:</td>
                    <td><input type="text" name="prix" value="<?php echo $ligne["prix"];?>"></td>

                </tr>
                <tr>
                    <td>Nbr Personnes:</td>
                    <td><input type="text" name="nbpers" value="<?php echo $ligne["nbpersonne"];?>"></td>

                </tr>
                <tr>
                    <td>Nbr Bagage:</td>
                    <td><input type="text" name="bagage" value="<?php echo $ligne["bagage"];?>" ></td>

                </tr>
                <tr>
                    <td>Nbr Portes:</td>
                    <td><input type="text" name="porte"value="<?php echo $ligne["portes"];?>" ></td>

                </tr>
                <tr>
                    <td>BOITE DE VITESSES:</td>
                    <td><input type="text" name="boite" value="<?php echo $ligne["boite"];?>"></td>
                </tr>
                <tr>
                    <td>Disponible:</td>
                    <td><input type="text" name="reservation" value="<?php echo $ligne["reservation"];?>"></td>
                </tr>
                </tbody>
            </table>
            <input type="hidden" name="photo_old"  value="<?php echo $ligne["image"];?>">
            <img src="image/vehicules/<?php echo $ligne["image"];?>" alt="image de vehicule">

            <input type="file" name="photo" id="upload">

            <input type="submit" value="Modifier" id="validerbtn" class="btn btn-success btn-lg">
        </form>
   <?php }
	   ?>


</div>
<script type="text/javascript">
$(function () {
    // A chaque sélection de fichier
    $('#my_form').find('input[name="photo"]').on('change', function (e) {
        var files = $(this)[0].files;
 
        if (files.length > 0) {
            var file = files[0],
                $image_preview = $('#MoreInfo');
            $image_preview.find('img').attr('src', window.URL.createObjectURL(file));
          
        }})
    });
</script>