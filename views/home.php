<style>

  .container-fluid{
    display: flex;
    justify-content: center;
    margin-top: 30px;
    flex-direction: column;
    margin: 0px;
    padding: 0px;
  }

  .controllogo{
    max-width: 1000px;
    width: 100%;
    margin-top: 20px;
  }
  .controllogo img{
    width: 100%;
  }
  .depoimentos{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  .boxdepoimentos{
    background: red;
    width: 100%;
    margin-bottom: 5px;
    border: 1px solid rgba(255,255,255,.2);
    /* margin-right: 15px; */
    height: 250px;
  }
  .boxdepoimentos iframe{
    width: 100%;
    height: 100%;
  }

  @media all and (min-width: 640px){
    .boxdepoimentos{
      max-width: 350px;
    }
    .boxdepoimentos{
      margin-right: 5px; 
    }
  }

</style>

<div class="container-fluid" >
  <div class="controllogo" >
    <img src="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/LogoDrConexoesVerticalFoto.png" alt="">
  </div>
</div>

<div class="depoimentos" >
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/B8jqtyWDsEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/ZyMSY2tcQBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/T5Q1qwAfkAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/peruGi-V2ao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/z-ZJkXhNvjo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/ibhTxLkJpnM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/nZ4NKvDpvQs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="boxdepoimentos" ><iframe src="https://www.youtube.com/embed/pjZ6ueiy9Q0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>

<br>
<br>
<br>
<br>
<center>
  <div class="footer">
      <div class="copyright" style="color:white;" >
          <p>Copyright &copy; <strong style="color:red;" >Dr Conexões</strong> & Desenvolvido por <a href="https://www.3esolucoesti.com.br/portifolio">
              <img src="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/icon.png" border="0" height="12" alt="" />
          </a> </p>
      </div>
  </div>
</center>


<a href="https://app.drconexoes.com.br" target="_blank" class="btn btn-danger" style="position:fixed;z-index:9;padding:25px;left:15px;bottom: 15px;" > <i class="fa fa-user" style="font-size: 35px;" ></i> <br> Login</a>