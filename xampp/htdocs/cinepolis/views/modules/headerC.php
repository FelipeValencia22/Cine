<nav id="mainNav">
<div id="logo">
  <a href="<?php echo URL?>"><img src="http://static.cinepol.is/img/lg-cinepolis.png" alt="Logo"></a>
  
</div>
<?php if(isset($this->admin)): ?>
<div style="color:white;">
      <?php echo 'Bienvenido '.$this->admin->getUsername(); ?>
     <div id="logoutBtn" style="cursor: pointer; margin: auto; text-align: center; text-decoration: underline;">Cerrar Sesión</div>
</div>
    
    <script>
        $("#logoutBtn").click(function(){
           document.location = "<?php echo URL; ?>Usuario/logout";
        });
    </script>
<?php endif; ?>

</nav>
