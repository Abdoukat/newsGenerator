<meta content="text/html; charset=utf-8" />
<meta content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />


<style>
  .u-row {
    display: flex;
    flex-wrap: nowrap;
    margin-left: 0;
    margin-right: 0;
  }

  .u-row .u-col {
    position: relative;
    width: 100%;
    padding-right: 0;
    padding-left: 0;
  }


  .u-row .u-col.u-col-50 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .u-row .u-col.u-col-100 {
    flex: 0 0 100%;
    max-width: 100%;
  }


  body,
  html {
    padding: 0;
    margin: 0
  }

  html {
    box-sizing: border-box
  }

  *,
  :after,
  :before {
    box-sizing: inherit
  }

  html {
    font-size: 14px;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1rem;
    line-height: 1.5;
    color: #373a3c;
    background-color: #fff
  }

  p {
    margin: 0
  }

  form .error-field {
    -webkit-animation-name: shake;
    animation-name: shake;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
  }

  form .error-field input,
  form .error-field textarea {
    border-color: #a94442 !important;
    color: #a94442 !important
  }

  form .field-error {
    padding: 5px 10px;
    font-size: 14px;
    font-weight: 700;
    position: absolute;
    top: -20px;
    right: 10px
  }

  form .field-error:after {
    top: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(136, 183, 213, 0);
    border-top-color: #ebcccc;
    border-width: 5px;
    margin-left: -5px
  }

  form .spinner {
    margin: 0 auto;
    width: 70px;
    text-align: center
  }

  form .spinner>div {
    width: 12px;
    height: 12px;
    background-color: hsla(0, 0%, 100%, .5);
    margin: 0 2px;
    border-radius: 100%;
    display: inline-block;
    -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    animation: sk-bouncedelay 1.4s infinite ease-in-out both
  }

  form .spinner .bounce1 {
    -webkit-animation-delay: -.32s;
    animation-delay: -.32s
  }

  form .spinner .bounce2 {
    -webkit-animation-delay: -.16s;
    animation-delay: -.16s
  }

  @-webkit-keyframes sk-bouncedelay {

    0%,
    80%,
    to {
      -webkit-transform: scale(0)
    }

    40% {
      -webkit-transform: scale(1)
    }
  }

  @keyframes sk-bouncedelay {

    0%,
    80%,
    to {
      -webkit-transform: scale(0);
      transform: scale(0)
    }

    40% {
      -webkit-transform: scale(1);
      transform: scale(1)
    }
  }

  @-webkit-keyframes shake {

    0%,
    to {
      -webkit-transform: translateZ(0);
      transform: translateZ(0)
    }

    10%,
    30%,
    50%,
    70%,
    90% {
      -webkit-transform: translate3d(-10px, 0, 0);
      transform: translate3d(-10px, 0, 0)
    }

    20%,
    40%,
    60%,
    80% {
      -webkit-transform: translate3d(10px, 0, 0);
      transform: translate3d(10px, 0, 0)
    }
  }

  @keyframes shake {

    0%,
    to {
      -webkit-transform: translateZ(0);
      transform: translateZ(0)
    }

    10%,
    30%,
    50%,
    70%,
    90% {
      -webkit-transform: translate3d(-10px, 0, 0);
      transform: translate3d(-10px, 0, 0)
    }

    20%,
    40%,
    60%,
    80% {
      -webkit-transform: translate3d(10px, 0, 0);
      transform: translate3d(10px, 0, 0)
    }
  }

  @media only screen and (max-width:480px) {
    .container {
      max-width: 100% !important
    }
  }

  .container {
    width: 100%;
    padding-right: 0;
    padding-left: 0;
    margin-right: auto;
    margin-left: auto
  }

  @media (min-width:576px) {
    .container {
      max-width: 540px
    }
  }

  @media (min-width:768px) {
    .container {
      max-width: 720px
    }
  }

  @media (min-width:992px) {
    .container {
      max-width: 960px
    }
  }

  @media (min-width:1200px) {
    .container {
      max-width: 1140px
    }
  }

  a[onclick] {
    cursor: pointer;
  }

  a {
    color: #0000ee;
    text-decoration: underline;
  }

  a:hover {
    color: #0000ee;
    text-decoration: underline;
  }

  .u-popup-container .u-close-button .icon-cross {
    margin: 0;
    padding: 0;
    border: 0;
    background: none;
    position: relative;
    width: 20px;
    height: 20px;
  }

  .u-popup-container .u-close-button .icon-cross:before,
  .u-popup-container .u-close-button .icon-cross:after {
    content: "";
    position: absolute;
    top: 8px;
    left: 0;
    right: 0;
    height: 3px;
    background-color: #000000;
    border-radius: 6px;
  }

  .u-popup-container .u-close-button .icon-cross:before {
    transform: rotate(45deg);
  }

  .u-popup-container .u-close-button .icon-cross:after {
    transform: rotate(-45deg);
  }

  #u_content_text_9 a {
    color: #0072bb;
  }

  #u_content_heading_1 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_heading_1 a:hover {
    color: #222322;
  }

  #u_content_text_4 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_text_5 a {
    color: #0072bb;
  }

  #u_content_heading_2 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_heading_2 a:hover {
    color: #222322;
  }

  #u_content_text_6 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_text_7 a {
    color: #0072bb;
  }

  #u_content_heading_9 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_heading_9 a:hover {
    color: #222322;
  }

  #u_content_text_18 a {
    color: #222322;
    text-decoration: none;
  }
  #u_content_text_8 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_text_19 a {
    color: #0072bb;
  }

  #u_content_heading_10 a {
    color: #222322;
    text-decoration: none;
  }
  #u_content_heading_3 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_heading_10 a:hover {
    color: #222322;
  }

  #u_content_text_20 a {
    color: #222322;
    text-decoration: none;
  }

  #u_content_text_21 a {
    color: #0072bb;
  }
</style>
<!-- debut //supprimer cette partie -->
<div style="text-align:center;">
    <button id = "btn_save" onclick="download_news()"  class="btn-save"><i class="fa fa-download fa-2x" aria-hidden="true"></i> Télécharger News</button>
    </div>
    <!-- la fin // cette partie -->

<?php $i = 0; ?>
    @foreach ( $news as $news_call )
    <?php $i++ ?>
    @if ( $i <= 1)


<div id="u_body" class="u_body" style="min-height: 100vh; color: #000000; background-color: #e7e7e7; font-family: arial,helvetica,sans-serif;">
  <div id="u_row_1" class="u_row" style="background-color: #ffffff; padding: 0px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">
        <div id="u_column_1" class="u-col u-col-100 u_column">
          <div style="padding: 0px;background-color:#ffffff;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
            <div id="u_content_image_1" class="u_content_image" style="overflow-wrap: break-word;padding: 10px;">
              <div style="position:relative;line-height:0px;text-align:left">
                <img alt src="https://assets.leadfox.co/5e6252decc079d2d6036a30a/editor_images/Groupe_73.png" style="width: 30%;max-width: 30%;" title />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="u_row_4" class="u_row" style="background-color: #ffffff; padding: 0px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">
        <div id="u_column_8" class="u-col u-col-100 u_column">
          <div style="padding: 0px;background-color:#ffffff;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
            <div id="u_content_text_2" class="u_content_text" style="overflow-wrap: break-word;padding: 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 38px; line-height: 53.2px;"><strong><span style="line-height: 53.2px; color: #222322; font-size: 38px;">Idées <span style="color: #0072bb; line-height: 53.2px; font-size: 38px;">Voyages</span></span></strong></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="u_row_5" class="u_row" style="background-color: #ffffff; padding: 0px 10px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">
        <div id="u_column_9" class="u-col u-col-100 u_column">
          <div style="padding: 0px;background-color:#ecf0f1;border-top: 15px solid #ffffff;border-left: 15px solid #ffffff;border-right: 15px solid #ffffff;border-bottom: 15px solid #ffffff;border-radius: 0px;">
            <div id="u_content_image_6" class="u_content_image" style="overflow-wrap: break-word;padding: 10px;">
              <div style="position:relative;line-height:0px;text-align:center">
                <a href="{{ $news_call->lienB_1 }}" target="_blank">
                  <img alt src="{{ $news_call->image_1 }}" style="width: 100%;max-width: 100%; height: 500px; max-height: 500px;" title />
                </a>
              </div>
            </div>
            <div id="u_content_heading_3" class="u_content_heading" style="overflow-wrap: break-word;padding: 10px 20px;">
              <h1 style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 22px;">
                <a href="{{ $news_call->lienB_1 }}" target="_blank">{{ $news_call->titre_1 }}</a>
              </h1>
            </div>
            <div id="u_content_text_8" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;">
                    <a href="{{ $news_call->lienB_1 }}" target="_blank">{{ $news_call->description_1 }}</a>
                </p>
              </div>
            </div>
            <div id="u_content_text_9" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 100%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 100%;"><span style="color: #0072bb; font-size: 14px; line-height: 14px;"><a href="{{ $news_call->lienB_1 }}" target="_blank" style="color: #0072bb;">Voir la sortie</a></span></p>
              </div>
            </div>
            <div id="u_content_image_7" class="u_content_image" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="position:relative;line-height:0px;text-align:right">
                <img alt src="https://assets.leadfox.co/5e6252decc079d2d6036a30a/editor_images/v1.png" style="width: 100%;max-width: 50px;" title />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="u_row_2" class="u_row" style="background-color: #ffffff; padding: 0px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">
        <div id="u_column_5" class="u-col u-col-100 u_column">
          <div style="padding: 0px;background-color:#ffffff;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
            <div id="u_content_text_1" class="u_content_text" style="overflow-wrap: break-word;padding: 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><span style="color: #222322; font-size: 38px; line-height: 53.2px;"><strong><span style="line-height: 53.2px; font-size: 38px;">Idées <span style="color: #0072bb; line-height: 53.2px; font-size: 38px;">Destinations</span></span></strong></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="u_row_3" class="u_row" style="background-color: #ffffff; padding: 0px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">
        <div id="u_column_6" class="u-col u-col-50 u_column">
          <div style="padding: 0px;background-color:#ecf0f1;border-top: 15px solid #ffffff;border-left: 15px solid #ffffff;border-right: 15px solid #ffffff;border-bottom: 15px solid #ffffff;border-radius: 0px;">
            <div id="u_content_image_2" class="u_content_image" style="overflow-wrap: break-word;padding: 10px;">
              <div style="position:relative;line-height:0px;text-align:center">
                <a href="{{ $news_call->lienB_2 }}" target="_blank">
                  <img alt src="{{ $news_call->image_2 }}" style="width: 100%;max-width: 100%; height: 250px; max-height: 250px;" title />
                </a>
              </div>
            </div>
            <div id="u_content_heading_1" class="u_content_heading" style="overflow-wrap: break-word;padding: 10px 20px;">
              <h1 style="margin: 0px; color: #222322; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 22px;">
                <a href="{{ $news_call->lienB_2 }}" target="_blank">{{ $news_call->titre_2 }}</a>
              </h1>
            </div>
            <div id="u_content_text_4" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><a href="{{ $news_call->lienB_2 }}" target="_blank">{{ $news_call->description_2 }}</a></p>
              </div>
            </div>
            <div id="u_content_text_5" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><span style="color: #0072bb; font-size: 14px; line-height: 19.6px;"><a href="{{ $news_call->lienB_2 }}" target="_blank" style="color: #0072bb;">Voir la sortie</a></span></p>
              </div>
            </div>
            <div id="u_content_image_3" class="u_content_image" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="position:relative;line-height:0px;text-align:right">
                <img alt src="https://assets.leadfox.co/5e6252decc079d2d6036a30a/editor_images/v2.png" style="width: 100%;max-width: 50px;" title />
              </div>
            </div>
          </div>
        </div>
        <div id="u_column_7" class="u-col u-col-50 u_column">
          <div style="padding: 0px;background-color:#ecf0f1;border-top: 15px solid #ffffff;border-left: 15px solid #ffffff;border-right: 15px solid #ffffff;border-bottom: 15px solid #ffffff;border-radius: 0px;">
            <div id="u_content_image_4" class="u_content_image" style="overflow-wrap: break-word;padding: 10px;">
              <div style="position:relative;line-height:0px;text-align:center">
                <a href="{{ $news_call->lienB_3 }}" target="_blank">
                  <img alt src="{{ $news_call->image_3 }}" style="width: 100%;max-width: 100%; height: 250px; max-height: 250px;" title />
                </a>
              </div>
            </div>
            <div id="u_content_heading_2" class="u_content_heading" style="overflow-wrap: break-word;padding: 10px 20px;">
              <h1 style="margin: 0px; color: #222322; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 22px;">
                <a href="{{ $news_call->lienB_3 }}" target="_blank">{{ $news_call->titre_3 }}</a>
              </h1>
            </div>
            <div id="u_content_text_6" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><a href="{{ $news_call->lienB_3 }}" target="_blank">{{ $news_call->description_3 }}</a></p>
              </div>
            </div>
            <div id="u_content_text_7" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><span style="color: #0072bb; font-size: 14px; line-height: 19.6px;"><a href="{{ $news_call->lienB_3 }}" target="_blank" style="color: #0072bb;">Voir la sortie</a></span></p>
              </div>
            </div>
            <div id="u_content_image_5" class="u_content_image" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="position:relative;line-height:0px;text-align:right">
                <img alt src="https://assets.leadfox.co/5e6252decc079d2d6036a30a/editor_images/v3.png" style="width: 100%;max-width: 50px;" title />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="u_row_6" class="u_row" style="background-color: #ffffff; padding: 0px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">
        <div id="u_column_12" class="u-col u-col-100 u_column">
          <div style="padding: 0px;background-color:#ffffff;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
            <div id="u_content_text_3" class="u_content_text" style="overflow-wrap: break-word;padding: 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 38px; line-height: 53.2px;"><strong><span style="line-height: 53.2px; color: #222322; font-size: 38px;">Idées <span style="color: #0072bb; line-height: 53.2px; font-size: 38px;">Hébergement</span></span></strong></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="u_row_11" class="u_row" style="background-color: #ffffff; padding: 0px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #ffffff;">
      <div class="u-row">
        <div id="u_column_20" class="u-col u-col-50 u_column">
          <div style="padding: 0px;background-color:#ecf0f1;border-top: 15px solid #ffffff;border-left: 15px solid #ffffff;border-right: 15px solid #ffffff;border-bottom: 15px solid #ffffff;border-radius: 0px;">
            <div id="u_content_image_16" class="u_content_image" style="overflow-wrap: break-word;padding: 10px;">
              <div style="position:relative;line-height:0px;text-align:center">
                <a href="{{ $news_call->lienB_4 }}" target="_blank">
                  <img alt src="{{ $news_call->image_4 }}" style="width: 100%;max-width: 100%; height: 250px; max-height: 250px;" title />
                </a>
              </div>
            </div>
            <div id="u_content_heading_9" class="u_content_heading" style="overflow-wrap: break-word;padding: 10px 20px;">
              <h1 style="margin: 0px; color: #222322; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 22px;">
                <a href="{{ $news_call->lienB_4 }}" target="_blank">{{ $news_call->titre_4 }}</a>
              </h1>
            </div>
            <div id="u_content_text_18" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><a href="{{ $news_call->lienB_4 }}" target="_blank">{{ $news_call->description_4 }}</a></p>
              </div>
            </div>
            <div id="u_content_text_19" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><span style="color: #0072bb; font-size: 14px; line-height: 19.6px;"><a href="{{ $news_call->lienB_4 }}" target="_blank" style="color: #0072bb;">Voir la sortie</a></span></p>
              </div>
            </div>
            <div id="u_content_image_17" class="u_content_image" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="position:relative;line-height:0px;text-align:right">
                <img alt src="https://assets.leadfox.co/5e6252decc079d2d6036a30a/editor_images/v4.png" style="width: 100%;max-width: 50px;" title />
              </div>
            </div>
          </div>
        </div>
        <div id="u_column_21" class="u-col u-col-50 u_column">
          <div style="padding: 0px;background-color:#ecf0f1;border-top: 15px solid #ffffff;border-left: 15px solid #ffffff;border-right: 15px solid #ffffff;border-bottom: 15px solid #ffffff;border-radius: 0px;">
            <div id="u_content_image_18" class="u_content_image" style="overflow-wrap: break-word;padding: 10px;">
              <div style="position:relative;line-height:0px;text-align:center">
                <a href="{{ $news_call->lienB_5 }}" target="_blank">
                  <img alt src="{{ $news_call->image_5 }}" style="width: 100%;max-width: 100%; height: 250px; max-height: 250px;" title />
                </a>
              </div>
            </div>
            <div id="u_content_heading_10" class="u_content_heading" style="overflow-wrap: break-word;padding: 10px 20px;">
              <h1 style="margin: 0px; color: #222322; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 22px;">
                <a href="{{ $news_call->lienB_5 }}" target="_blank">{{ $news_call->titre_5 }}</a>
              </h1>
            </div>
            <div id="u_content_text_20" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><a href="{{ $news_call->lienB_5 }}" target="_blank">{{ $news_call->description_5 }}</a></p>
              </div>
            </div>
            <div id="u_content_text_21" class="u_content_text" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                <p style="font-size: 14px; line-height: 140%;"><span style="color: #0072bb; font-size: 14px; line-height: 19.6px;"><a href="{{ $news_call->lienB_5 }}" target="_blank" style="color: #0072bb;">Voir la sortie</a></span></p>
              </div>
            </div>
            <div id="u_content_image_19" class="u_content_image" style="overflow-wrap: break-word;padding: 10px 20px;">
              <div style="position:relative;line-height:0px;text-align:right">
                <img alt src="https://assets.leadfox.co/5e6252decc079d2d6036a30a/editor_images/v5.png" style="width: 100%;max-width: 50px;" title />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="u_row_10" class="u_row" style="background-color: #ffffff; padding: 0px;">
    <div class="container" style="max-width: 800px;margin: 0 auto;background-color: #d37482;">
      <div class="u-row">
        <div id="u_column_19" class="u-col u-col-100 u_column">
          <div style="padding: 10px;background-color:#0072bb;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
            <div id="u_content_heading_8" class="u_content_heading" style="overflow-wrap: break-word;padding: 10px;">
              <h1 style="margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 25px;">
                <strong>Suivez nous pour plus d'actualités.</strong>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--le debut //  supprimer cette partie -->
<input type="hidden" value="before" id="print_it"/>
<input type="hidden" value="{{ $news_call->num_news }}" id="num_news_name_file"/>
<script>



function download_news(){
var el_down = document.getElementById("print_it");
var get_action = document.getElementById("print_it").value;
var name_file = document.getElementById("num_news_name_file").value;
//alert(get_action);

if(get_action == "before"){
    document.getElementById("btn_save").style.display = 'none';
    el_down.setAttribute('value', 'after');
    //document.getElementById("print_it").value = "after";
    var source = document.documentElement.outerHTML;
    console.log(source);


    var textFile = null, makeTextFile = function (text) {
    var data = new Blob([text], {type: 'text/plain'});

    // If we are replacing a previously generated file we need to
    // manually revoke the object URL to avoid memory leaks.
    if (textFile !== null) {
        window.URL.revokeObjectURL(textFile);
    }

    textFile = window.URL.createObjectURL(data);

    // returns a URL you can use as a href
    return textFile;
    };

    var link = document.createElement('a');
    link.setAttribute('download', 'news_sante_1_'+name_file+'.html');
    link.href = makeTextFile(source);
    document.body.appendChild(link);

    // wait for the link to be added to the document
    window.requestAnimationFrame(function () {
        var event = new MouseEvent('click');
        link.dispatchEvent(event);
        document.body.removeChild(link);
    });
}
}


</script>
<!-- la fin // supprimer cette partie -->


@endif
@endforeach
