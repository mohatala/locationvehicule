<?php
include("model/Config.cls.php");
$base=new Connection();
$connect=$base->connect();
?>
<div id="info_Container">
<style>
#table1{ height:70%; width:50%; color:rgba(15,3,116,1.00) ; position:absolute; left:25%; top:5%;}
#table1 input{width:100%; height:100%; border-radius:5px;}
#table1 input:focus{border:2px solid rgba(24,108,196,1.00);}
#table1 textarea{width:100%; height:100%; border-radius:5px;}
#table1 textarea:focus{border:2px solid rgba(24,108,196,1.00);}
#table2{position:absolute; left:25%; top:80%; width: 50%;}
#table2 input{width:80%; font-size: larger;}
</style>
<form  action="controls/control.php" method="post">
<table  id="table1">
  <tbody>
  <?php
  $res=$connect->query("select * from societe_infos ORDER BY  id DESC ");
  $ligne=$res->fetch();
  ?>
    <tr>
      <input type="hidden" name="pg" value="Nos_info" >
      <input type="hidden" name="ids" value="<?php echo $ligne["id"];?>" >
      <td>Nom Societé:</td>
      <td><input type="text" name="nom" value="<?php echo $ligne["nom"];?>" ></td>
    </tr>
    <tr>
      <td>Téléphone :</td>
      <td><input type="text" name="tel" value="<?php echo $ligne["tel"];?>"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" value="<?php echo $ligne["email"];?>"></td>
    </tr>
    <tr>
      <td>Adresse:</td>
      <td><textarea name="adr"><?php echo $ligne["adresse"];?></textarea></td>
    </tr>
  </tbody>
</table>
<table id="table2">   <tr>
    <td ><input type="submit" value="Modifier" id="btnsub" class="btn btn-success btn-lg" style=""></td>
    <td ><input type="reset" value="Vider" id="btnvid" class="btn btn-danger btn-lg" style="" ></td>
  </tr></table>
</form>
</div>
