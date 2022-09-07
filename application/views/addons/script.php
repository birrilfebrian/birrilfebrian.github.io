<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="<?= base_url(); ?>assets/js/isotope.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/owl-carousel.js"></script>
  <script src="<?= base_url(); ?>assets/js/wow.js"></script>
  <script src="<?= base_url(); ?>assets/js/tabs.js"></script>
  <script src="<?= base_url(); ?>assets/js/popup.js"></script>
  <script src="<?= base_url(); ?>assets/js/custom.js"></script>
  <script>
    $(document).ready(function (){
      $('#form2').hide();
      $('#detailtiket').hide();$('#headerregist').html('<h2>Fill<em> The Form</em> Below Here.</h2>')
      
      
  })

  $('#addpart').click(function (){
    $('#name').last().clone().appendTo('#formname')
  });

  $('#agency').click(function (){
    $('#form2').fadeIn();
    $('#form1').hide();
    $('#headerregist').html('<h2>You Must<em> Choose One</em> Competition</h2>')
  })

  $('#yourself').click(function (){
    $('#form2').fadeIn();
    $('#form1').hide();
    $('#your').hide()
  })

  $('#detail').click(function (){
    $('#detailtiket').fadeIn();
  })
  
  </script>

  </body>
</html>