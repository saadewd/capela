<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link
rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
<link
rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
/>
<link
href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
rel="stylesheet"
/>
<link
href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap"
rel="stylesheet"
/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Document</title>
</head>
<style>


@font-face {
font-family: "Myriad Pro Regular";
src: url("../fonts/MYRIADPRO-REGULAR.OTF");
}
.headerBackground {
background: url("http://18.217.165.212/angular-tbwb-img/header-background.png");
background-repeat: no-repeat;
width: 100%;
background-size: cover;
object-fit: cover;
height: 133.09px;
}
.headerContent {
/* / border: 2px solid red; / */
text-align: center;
width: fit-content;
margin: auto;
display: flex;
padding-top: 20px;
}
.centerIcon {
margin-top: 15px;
margin-left: 30px;
margin-right: 30px;
}
.menueBar {
max-width: 1140px;
/* / border: 2px solid red; / */
height: 54px;
margin: auto;
background-image: linear-gradient(#83b6dc, #307ebe);
}
.nav-link{
padding: 15px 1rem;
color: white;
font-family: "Myriad Pro Regular" ;
}
</style>
<body style="margin: 0;">
<header>
<div class="headerBackground">
<div class="headerContent">
<div class="leftIcon">
<img src="../img/img6.png" width="100" alt="" />
</div>
<div class="centerIcon">
<img src="../img/capela.png" width="365" alt="" />
</div>
<div class="rightIcon">
<img
src="http://18.217.165.212/angular-tbwb-img/header-logo.png"
width="100"
height="98"
alt=""
/>
</div>
</div>
</div>
</header>
<div class="menueBar">
<div class="">
<ul class="nav nav-pills nav-fill pills-shadow">
<li class="nav-item">
<a class="nav-link" href="../index.html" style="padding-top: 11px;">
<img
src="http://18.217.165.212/angular-tbwb-img/home-icon.png"
alt="Logo"
style="width: 25px;"
/>
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="../capela-virtual-quem-somos.html" >
<span style="font-family: Myriad Pro Regular">Quem Somos </span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../oracoes-missionarias/capela-virtual-oracoes-missionarias.html" id="oracoes">
<span style="font-family: Myriad Pro Regular">Orações Missionárias </span>
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="../Santo-Do-Dia_September.html">
<span style="font-family: Myriad Pro Regular">Dia de Santo</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../capela-virtual-Vocacoes.html">
<span style="font-family: Myriad Pro Regular">Vocações</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../capela-virtual-nossa-missao.html">
<span style="font-family: Myriad Pro Regular">Missão</span>
</a>
</li>
<li class="nav-item">
<a
class="nav-link"
href="" id="espirual-link"
>
<span style="font-family: Myriad Pro Regular">Espiritualidade</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../capela-virtual-contato.html">
<span style="font-family: Myriad Pro Regular">Contatos</span>
</a>
</li>
</ul>
</div>
</div>
</body>
<script src="../post-data-json.js"></script>
<script>
 
  
    arr.reverse()
  for(date in arr){
  console.log(arr[date]);
  for(cateryLayout in categoryDate_title){
    var mypost = categoryDate_title[cateryLayout][arr[date]];
    if(mypost){
      console.log(mypost)
      document.getElementById("destaquesPortion").innerHTML += `<div class="CV-Video-Link-Post ${cateryLayout}">
                <a href="${mypost.route}">
                  <img src="${mypost.img}" alt="" class="thubmailVideo-Image" />
                  <p class="add-mt-15-CV-Video" style="font-size: 13px;">
                    ${mypost.title}
                  </p>
                  <p class="date date-text" style="font-size: 11px;font-family:Gotham-Book-italic">
                    <span class="cal-icon fa fa-calendar date-text"></span>
                    on ${mypost.date}
                  </p>
                </a>
              </div>
              <div class="hr3"></div>
              `

      
    }
    $('.'+cateryLayout).not(':last').remove();
  }

}


 

</script>

</html>