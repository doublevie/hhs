
<section class="bg-dark" id="galerie" style="background-color:#6d0202!important">
  <br>
<div class="container-fluid" align="center">
  <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-warning" onclick="setOnly('0')">TOUS</button>
    <button type="button" class="btn btn-warning" onclick="setOnly('1')">PICINE</button>
    <button type="button" class="btn btn-warning">NATURE</button>
    <button type="button" class="btn btn-warning">SAUNA</button>
  </div>
</div>


<div class="container-fluid">
<div class="row gallery">

<div class="  gallgrid" data-filter="1">
<img src="img\X600\birds.jpg" alt="">
</div>
<div class="  gallgrid" data-filter="3" width="0">
<img src="img\X600\ev.jpg" alt="">
</div>
<div class=" gallgrid " data-filter="1">
<img src="img\X600\khaima.jpg" alt="">
</div>


</div>
</div>

</section>


<script type="text/javascript">
  function setOnly(x){
var sels = document.querySelectorAll('[data-filter]');
for (var i = 0; i < sels.length; i++) {
  if (x == '0' || sels[i].getAttribute('data-filter') == x )  {
    sels[i].classList.remove('hidd');

  } else {

    sels[i].classList.add('hidd');
  }
}

  }
</script>
