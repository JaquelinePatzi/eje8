</div><!--Fin de Contenido-->
		  		</div>

		  	</div>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Derechos de Autor <?= date("Y") ?> - Sistema Creado por Jaqueline
            </div>
            
         </div>
      </footer>

      <script>
    const base_url = "<?= base_url(); ?>";
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url(); ?>js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>js/custom.js"></script>

    <?php if (isset($archivoJSCargar)) {

foreach ($archivoJSCargar as $js) {
    ?>
    <script src="<?= base_url(); ?><?= $js; ?>"></script>
<?php
}
}

?>

  </body>
</html>