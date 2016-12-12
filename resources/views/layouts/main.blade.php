<!DOCTYPE html>
<html lang="en">
@include('header')

  <body>
  <div class="container-fluid">
    
  <!-- Jumbotron and email subscribe --> 
 <div class="row">
      <div class="jumbotron">
          <h2>Kenya Votes</h2>
          <p>Reatime Election Results. Dont miss out ! Subscribe Now for Email PDF Updates.</p>
          <form class="form-inline">
          <div class="form-group">
          <input type="text" class="form-control" id="exampleInputName2" placeholder="Name">
          </div>
          <div class="form-group">
           <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email@example.com">
          </div>
          <button type="submit" class="btn btn-primary">Subscribe</button>
          </form></div></div><br>
 <!-- Map and counties(MAIN CONENT) -->
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-10">
  <div class="well  well-sm"><strong><h1 class="text-center">2017 Presidential Election Results</h1></strong></div>
   <div class="progress">
  <div class="progress-bar progress-bar-danger" style="width: 50%">
    <span class="sr-only">50% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning " style="width: 50%">
    <span class="sr-only">50% Complete (warning)</span>
  </div>
  </div>

<div class="col-md-4">
<div class="media">
<div class="media-left media-middle">
<img src="images/uhuru.png" alt="uhuru" class="img-circle media-oblect" width="70" height="70">
</div>
 <div class="media-body">
    <storng><h4 class="media-heading">Uhuru Kenyatta(JP)</h4></strong>
    <storng><h1 class="media-heading text-danger">6,173,433</h1></strong> 
    <span class="label label-info">Popular Vote</span>
  </div>
</div></div>

<div class="col-md-4 col-md-offset-4 text-right">
<div class="media">
 <div class="media-body">
    <strong><h4 class="media-heading">Raila Odinga(ODM)</h4></strong>
    <storng><h1 class="media-heading text-warning">5,340,546</h1></strong>
    <span class="label label-info">Popular Vote</span>
  </div>
  <div class="media-right media-middle">
  <img  src="images/raila.png" alt="raila" class="img-circle media-oblect"  width="70" height="70">
</div>
</div></div>
      
  </div>
  
  <!-- Ads -->
  <div class="col-xs-6 col-md-2">

  @yield('ads')
  </div> </div><br>
  
   <!-- map -->
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-10" >
<script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery('#vmap').vectorMap({
          map: 'kenya',
          backgroundColor: '#fff',
          borderColor: '#000000',
          borderOpacity: 0.25,
          borderWidth: 1,
          color: '#a5bfdd',
          enableZoom: false,
          hoverColor: '#c9dfaf',
          hoverOpacity: null,
          normalizeFunction: 'linear',
          selectedColor: '#fff',
          showTooltip: true,
          onResize: function (element, width, height) {
            console.log('Map Size: ' +  width + 'x' +  height);
          }
        });
      });
    </script>
  <div id="vmap"></div>
</div>
 <!-- Ads2 -->
  <div class="col-xs-6 col-md-2">  
  <img src="images/ad.png" width="180" height="600">
  </div>
  </div><br>

  <!-- counties -->
   <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-10">
  <!-- panel list one -->
  <div class="col-md-6">
  <div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">Nairobi County</div>
  <div class="panel-body">
    <p>...</p>
  </div>
  <!-- panel Table -->
  <table class="table">
    ...
  </table>
  
   <div class="panel-footer text-right"><div class="fb-share-button" data-href="http://kenyametrics.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkenyametrics.com%2F&amp;src=sdkpreparse">
   <span class="label label-primary">f</span></a></div></div>
  </div></div>

<!-- panel list two-->
  <div class="col-md-6">
  <div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">Mombasa County</div>
  <div class="panel-body">
  <!-- panel Table -->


  <iframe width="100%" height="600" frameBorder="0" src="http://ph.rappler.com/elections/2016/results/philippines/position/2/vice-president?embed=true&image=1&title=2016%20Vice%20Presidential%20Election%20Results%20%7C%20Philippines&desc=Maria%20Leonor%20Robredo%20%20is%20leading%20as%20Vice%20President%20as%20of%20May%2018th%202016,%207:56:15%20pm%20based%20on%20Comelec%20Unofficial%20Partial%20Results%20%7C%20Philippine%20Elections"> </iframe>
  <table class="table table-striped custab">
    <thead>
        <tr>
            <th>Candidate</th>
           <th></th>
            <th class="text-center">Popluar Vote</th>
        </tr>
    </thead>
            <tr>
                <td>Uhuru Kenyatta</td>
                <td><div class="progress-bar progress-bar-warning " style="width: 50%">
                <span class="sr-only">50% Complete (warning)</span>
                </div></td>
                <td>100,000</td>
            </tr>
            <tr>
                <td>Rail Odinga</td>
                
                <td><div class="progress-bar progress-bar-warning " style="width: 50%">
                <span class="sr-only">50% Complete (warning)</span>
                </div></td>
                <td>100,000</td>
            </tr>
            
    </table></div>

 <div class="panel-footer text-right"><div class="fb-share-button" data-href="http://kenyametrics.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkenyametrics.com%2F&amp;src=sdkpreparse">
   <span class="label label-primary">f</span></a></div></div>
  </div>

  </div></div>
<!-- Ads3 -->
  <div class="col-xs-6 col-md-2">  
  <img src="images/ad.png" width="180" height="600">
  </div>
  </div>
 
  @include('footer')
    <!-- Bootstrap core JavaScript-->
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src=="{{ asset ("js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
     
  
</div>
</body>
</html>
