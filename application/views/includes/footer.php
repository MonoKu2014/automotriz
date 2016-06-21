<script src="<?=base_url().JS_PATH;?>materialize.min.js"></script>
<script src="<?=base_url().ANGULARJS_PATH;?>angular.min.js"></script>
<script src="<?=base_url().ANGULARJS_PATH;?>angular-route.min.js"></script>
<script src="<?=base_url().ANGULARJS_PATH;?>angular-animate.min.js"></script>
<script src="<?=base_url().ANGULARJSCONTROLLERS_PATH.$this->functions->setAngularFile();?>.js"></script>
<script>
    
$(document).ready(function(){
    
    $('.tooltipped').tooltip({delay: 50});

    $('.collapsible').collapsible({
      accordion : false
    });




});

</script>

</body>
</html>