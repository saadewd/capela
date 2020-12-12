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
    .footerBackground {
      background-image: url(http://18.217.165.212/angular-tbwb-img/footer-img.jpg);
      background-repeat: no-repeat;
      background-position: center;
      height: 109px;
      position:absolute;
      /* bottom: 0; */
      width: 100%;
    }
    .footerContent {
      height: 94px;
      width: 1140px;
      /* border: 2px solid red; */
      margin: auto;
      display: flex;
    }
    .smGlobalBtn1 {
      display: inline-block;
      position: relative;
      cursor: pointer;
      width: 35px;
      height: 35px;
      padding: 0px;
      text-decoration: none;
      text-align: center;
      color: #bebebb !important;
      font-size: 16px;
      font-weight: normal;
      line-height: 2em;
      border-radius: 27px;
      border: 1px solid #bebebb;
      margin-right: 15px;
    }

    .smGlobalBtn1 i {
      margin-top: 8px;
    }

    .footer_social_icons {
      text-align: center;
    }

    .left_text {
      font-size: 16px;
      color: #fff;
      font-weight: 600;
      margin-bottom: 10px;
      /* letter-spacing: 1px; */
      font-family: "Myriad Pro Regular";
      padding-top: 10px;
    }

    .left_text p {
      margin-bottom: 0;
      line-height: 19px;
    }

    /* .white_line::after {
  content: "";
  position: absolute;
  height: 76px;
  border: 1px solid #fff;
  top: 21px;
  text-align: center;
  margin: 0 auto;
  right: 0px;
} */

    @media only screen and (min-width: 1200px) and (max-width: 1920px) {
      .footer_left {
        padding-left: 35px;
        padding-right: 35px;
      }

      .left_text {
        font-size: 12px;
      }
    }

    @media only screen and (max-width: 991px) {
      .footer-bg-image {
        height: 133px;
      }
    }

    @media only screen and (max-width: 767px) {
      .footer-bg-image {
        height: 201px;
      }

      .white_line::after {
        border: 0px solid #fff;
      }
    }

    @media only screen and (max-width: 635px) {
      .white_line::after {
        border: 0px solid #fff;
      }
    }

    @media only screen and (max-width: 480px) {
      .white_line::after {
        border: 0px solid #fff;
      }
    }

    @media only screen and (max-width: 450px) {
      .footer-bg-image {
        height: 248px;
      }

      .white_line::after {
        border: 0px solid #fff;
      }

      .smGlobalBtn1 {
        margin-right: 5px;
      }
    }
    /* .LT{
      padding-top: 0px;
    } */
  </style>
  <body style="margin: 0;">
    <footer>
      <div class="footerBackground">
        <div class="footerContent">
          <div class="col-md-6">
            <div
              class="footer_left white_line"
              style="
                height: 85px;
                border-right: white 1px solid;
                margin-top: 10px;
              "
            >
              <div class="left_text LT">
                <p style="text-align: center;color:#fff;font-family: Myriad Pro Regular">
                  Província Stella Matutina<br />
                  Rua São Benedito, 2146 - Santo Amaro - São Paulo - SP | Tel.
                  (11) 5547-7222
                </p>
              </div>
              <!-- Changes -->
              <div class="footer_social_icons">
                <div id="social1" style="display: flex;">
                  <div style="width: fit-content; margin-top: -5px;">
                    <a
                      href="https://www.facebook.com/sspsbrasilnorte"
                      target="_blank"
                    >
                      <img
                        src="../Footer/Icone_Facebook.png"
                        width="50%"
                        alt=""
                      />
                    </a>
                  </div>
                  <div style="width: fit-content; margin-top: -5px;">
                    <a
                      href="https://twitter.com/sspsbrasilnorte"
                      target="_blank"
                    >
                      <img
                        src="../Footer/Icone_Twitter.png"
                        width="50%"
                        alt=""
                      />
                    </a>
                  </div>
                  <div style="width: fit-content; margin-top: -5px;">
                    <a
                      href="https://www.instagram.com/sspsbrasilnorte/"
                      target="_blank"
                    >
                      <img src="../Footer/Icone_Insta.png" width="50%" alt="" />
                    </a>
                  </div>
                  <div style="width: fit-content; margin-top: -5px;">
                    <a href="https://blog.ssps.org.br/" target="_blank">
                      <img src="../Footer/Icone_Blog.png" width="50%" alt="" />
                    </a>
                  </div>
                  <div style="width: fit-content; margin-top: -5px;">
                    <a
                      href="https://www.youtube.com/SspsBrasilNorte"
                      target="_blank"
                    >
                      <img
                        src="../Footer/Icone_Youtube.png"
                        width="50%"
                        alt=""
                      />
                    </a>
                  </div>
                  <div style="width: fit-content; margin-top: -5px;">
                    <a href="http://www.ssps.org.br/" target="_blank">
                      <img src="../Footer/Icone_Site.png" width="50%" alt="" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer_left">
              <div class="left_text " style="padding-top: 20px;" >
                <p style="text-align: center; color:#fff;font-family: Myriad Pro Regular">
                  Província Spiritus Divinae Sapientiae<br />
                  Rua Arnaldo Janssen, 320 - Cara-Cara - Ponta Grossa - PR |
                  Tel. (42) 3326 4091
                </p>
              </div>

              <div class="footer_social_icons">
                <div
                  id="social"
                  style="display: flex; text-align: center; padding-left: 10%;"
                >
                  <div style="width: fit-content; margin-top: -5px;">
                    <a href="https://www.facebook.com/msspsbrs" target="_blank">
                      <img
                        src="../Footer/Icone_Facebook.png"
                        width="45%"
                        alt=""
                      />
                    </a>
                  </div>

                  <div style="width: fit-content; margin-top: -5px;">
                    <a href="https://www.mssps.org.br/noticias" target="_blank">
                      <img src="../Footer/Icone_Blog.png" width="45%" alt="" />
                    </a>
                  </div>
                  <div style="width: fit-content; margin-top: -5px;">
                    <a
                      href="https://www.youtube.com/channel/UCnqm-zZSlWgqrU4n9hiRIlA/videos?view_as=subscriber"
                      target="_blank"
                    >
                      <img
                        src="../Footer/Icone_Youtube.png"
                        width="45%"
                        alt=""
                      />
                    </a>
                  </div>
                  <div style="width: fit-content; margin-top: -5px;">
                    <a href="https://www.mssps.org.br/" target="_blank">
                      <img src="../Footer/Icone_Site.png" width="45%" alt="" />
                    </a>
                  </div>
                </div>
              </div>
              <!-- ..... -->
            </div>
          </div>
        </div>
      </div>
    </footer>
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
