<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright &copy; JatimLelungon <?= date('Y') ?> | All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= Config::BASEURL ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= Config::BASEURL ?>js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Additional Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script src="<?= Config::BASEURL ?>assets/js/custom.js"></script>
    <script src="<?= Config::BASEURL ?>assets/js/owl.js"></script>
    <script src="<?= Config::BASEURL ?>assets/js/slick.js"></script>
    <script src="<?= Config::BASEURL ?>assets/js/isotope.js"></script>
    <script src="<?= Config::BASEURL ?>assets/js/accordions.js"></script>
        
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
