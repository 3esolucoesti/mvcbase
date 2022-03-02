<style type="text/css">
	.atencion{width: 150px;}

      th{background: #e9e9e9;}
  .btn-default{background: #1F3F77;border:1px solid #1F3F77;color: white;padding: 11px;}
  .btn-default:hover{background: rgba(25,25,112,1);border:1px solid #1F3F77;color: white;}
  td{background: #FBFBFB;}
  
</style>

<center><h1>MINHAS LEADS</h1></center>
<br><br>


<div style="width: 100%;margin:auto;">

 <table class="table table-bordered">
    <thead>
      <tr>
        <th>E-MAIL</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($lista_leads_info as $li): ?>	
	      <tr>
	        <td><?php echo $li['email']; ?></td>
	      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="areaPaginacao">
    <?php for ($q=1; $q <=$paginas ; $q++): ?>
      <ul class="pagination">
        <li class="<?php echo($paginaAtual == $q)? 'active' : ''; ?>" style="cursor: pointer;" ><a href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_leads?p=<?php echo $q; ?>"><?php echo $q; ?></a></li>
      </ul>
    <?php endfor ?>
  </div>


</div>