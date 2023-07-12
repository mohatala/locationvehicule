
<div id="AjoutForm">
<style>
#table1{float:left; height:70%; margin-left:1%; color:rgba(15,3,116,1.00)}
#table1 input{width:100%; height:100%; border-radius:5px; }
#table1 input:focus{border:2px solid rgba(24,108,196,1.00);}
#ajoutPhoto{width:40%;  height:70%;left:52%; position:absolute; overflow:hidden;}
#ajoutPhoto img{width:100%; height:80%; }
#ajoutPhoto input{width:98%;margin-left:1%; margin-top:6%;}
#table2{position:absolute; left:15%; top:80%;}
#table2 input{width:80%;}
</style>
<form action="controls/control.php" method="post" enctype="multipart/form-data" id="my_form" >
<table width="50%" id="table1">
  <tbody>
    <tr>
        <input type="hidden" name="pg" value="ajoutV">
      <td>Type:</td>
      <td><input type="text" name="type" placeholder="Economie-Low emission-..." required  list="typel">
      <datalist id="typel"><option>ECONOMY</option><option>LOW EMISSION</option><option>MINI</option><option>PREMUIM</option></datalist>
      </td>
    </tr>
    <tr>
      <td>Marque:</td>
      <td><input type="text" name="marque" placeholder="Marque" required></td>
    </tr>
    <tr>
      <td>Prix:</td>
      <td><input type="text" name="prix" placeholder="Prix/day" required></td>
    </tr>
    <tr>
      <td>Nombre de places:</td>
      <td><input type="text" name="nbpers" placeholder="Nombre de personnes" required></td>
    </tr>
    <tr>
      <td>Bagage:</td>
      <td><input type="text" name="bagage" placeholder="Nombre de bagage" required></td>
    </tr>
    <tr>
      <td>Nombre de Portes:</td>
      <td><input type="text" name="porte" placeholder="Nombre de portes" required></td>
    </tr>
    <tr>
      <td>Boite de vitesses:</td>
      <td> <select name="boite" required style="width:100%;"><option>A</option><option>M</option></select>
      </td>
    </tr>
    <tr>
      <td>Reserver Ou pas Reserver??</td>
      <td><input type="text" name="reservation" placeholder="Choisie" required></td>
    </tr>
  </tbody>
</table>
<span id="ajoutPhoto">
<img src="" name="affimage" alt="Choisie image">
<input type="file" name="photo" class="btn btn-primary btn-sm" required >
</span>
<table width="80%" border="0" cellpadding="5" id="table2" >
  <tbody>
    <tr>
      <td><input type="submit" value="Ajouter" class="btn btn-success btn-lg"></td>
      <td><input type="reset" class="btn btn-danger btn-lg"></td>
    </tr>
  </tbody>
</table>

</form>
<div>
    <script type="text/javascript">
$(function () {
    // A chaque sélection de fichier
    $('#my_form').find('input[name="photo"]').on('change', function (e) {
        var files = $(this)[0].files;
 
        if (files.length > 0) {
            var file = files[0],
                $image_preview = $('#ajoutPhoto');
            $image_preview.find('img').attr('src', window.URL.createObjectURL(file));

        }})
    });
    </script>