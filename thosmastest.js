<script type="text/javascript">


function switchStyle(){
 var style = document.getElementById("mycss").getAttribute("href")
    if(style == "style.css"){
       document.getElementById("mycss").setAttribute("href", "style2.css");
    }
    else{
       document.getElementById("mycss").setAttribute("href", "style.css");
    }



</script>

<link rel="stylesheet" type="text/css" href="style.css" id="mycss" />




<!-- bouton jour / nuit -->

     <div>

     <label class="switch">

  <input onchange="switchStyle()" type="checkbox">

   <div class="slider round"></div>

    </label>

    </div>
