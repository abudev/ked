  @include('header')
   
  
<div class="col-xs-12 col-sm-6 col-md-10">
  <div id="vmap"></div>
</div>

    <script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery('#vmap').vectorMap({
          map: 'kenya',
          enableZoom: true,
          showTooltip: true,
          onResize: function (element, width, height) {
            console.log('Map Size: ' +  width + 'x' +  height);
          }
        });
      });
    </script>