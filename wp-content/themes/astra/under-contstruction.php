<?php /*Template name:Under Construction*/ ?>
<?php get_header()?>
<style>
.under-construction {
    height: 100vh;
    width: 100vw;
    background-image: URL("/nickzack/public_html/wp-content/uploads/2018/08/spaceloader.gif");
    background-repeat: no-repeat;
    background-position: center;
}

body {
    margin: 0px;
}
html, body {
  margin: 0px;
      background: #000;
      height: 100%;
  }
  canvas {
  display: block;
      width: 100%;
      height: 100%;
}
canvas {
    position: absolute ;
    top: 0px;
    z-index: 9;
}

.under-construction {
    position: relative;
    z-index: 99;
    background-size: 20% auto;
    background-position: bottom;
}
.para,.para a {
    font-family: 'M PLUS 1p', sans-serif;
    color:#fff3f3;
}
.para{

    display:flex;
    flex-direction:column;
    align-items:center;
    height:100vh;
    justify-content:center;
}

.para a{
    color:red;
    font-weight:600;
    text-decoration:none;
    padding-left:20px;
    font-size:20px;

}
.para a{


}
.para i{
    color:white;
}
.para a:hover i{
    transform:translateX(-20px) rotateZ(270deg);
    color:red;

}
.para i{
    transition:transform 0.35s ease,color 0.35s ease;

}
.under-construction{
    background-size:400px auto;
}
@media(max-width:600px){
    .under-construction{
        background-size:cover;
    }
    .para{
        justify-content:flex-end;
        position:relative;
        top:-30px;
    }
    .para h1{
        font-size:20px;
    }
}
</style>

<script src = '/nickzack/public_html/wp-content/themes/astra/assets/js/canvas.js'></script>
  <div class = 'under-construction'>
    <div class = 'para'>
      <h1>Site Currently Under Development</h1>
      <h3>Contact info:</h3>
      <div><a href = 'mailto:gertsberg@hotmail.com'><i class = 'fa fa-envelope'></i> gertsberg@hotmail.com</a></div>

    </div>

  </div>
    <canvas id="canvas" width="100%" height="100%"></canvas>
