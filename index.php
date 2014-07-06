<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>STUDENCKIE KOŁO NAUKOWE WESTA</title>
    <meta name="description" content="Example of a basic Ember.js application with a Router" />
    <meta name="author" content="http://codebrief.com" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
      <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/custom.css" />
  </head>

  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1&appId=618206168260151";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <script src="js/libs/jquery-1.7.1.js"></script>
    <script src="js/libs/jquery.lorem.js"></script>
    <script src="js/libs/handlebars-1.0.0.beta.6.js"></script>
    <script src="js/libs/ember.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  <div class="row fixed" style="background-color: #FFFFFF; width: 100%; padding-top: 10px; max-width:100%;">
    <div class="large-12 columns">
      <img src="img/logo.png" style="float: left;" width="120px" height="120px"/><h2 style="line-height: 124px; float: left;">&nbsp;STUDENCKIE KOŁO NAUKOWE WESTA&nbsp;</h2>
    </div>
  </div>

    <script type="text/x-handlebars" data-template-name="application">
    <nav class="top-bar" data-topbar style="margin-top: 145px; position:fixed; width:100%; z-index:100">
      <section class="top-bar-section center">
        <ul>
          <li class="home" {{bindAttr class="isHome:active"}}><a {{action "doHome"}}>Strona Główna</a></li>
          <li class="home" {{bindAttr class="isAboutus:active"}}><a {{action "doAboutus"}}>O nas</a></li>
          <li class="home" {{bindAttr class="isActivity:active"}}><a {{action "doActivity"}}>Działalność</a></li>
          <li class="sections" {{bindAttr class="isSections:active"}}><a {{action "doSections"}}>Członkowie</a></li>
          <li class="gallery" {{bindAttr class="isGallery:active"}}><a {{action "doGallery"}}>Galeria</a></li>
          <li class="home" {{bindAttr class="isConntact:active"}}><a {{action "doConntact"}}>Kontakt</a></li>
        </ul>
      </section>
    </nav>

      <div class="row padding_top_150" style="padding-top: 225px;">
          <div class="large-8 columns pre-line">
            <div class="row">
            {{outlet}}
            </div>
            <div class="row">
              <div class="fb-like-box" data-href="https://www.facebook.com/pages/SKN-WESTA/688852017842836" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
              </div>
          </div>
          <div class="large-4 columns pre-line">
              Linki<br/>
              <a href="http://www.polsl.pl/wydzialy/roz/Strony/Witamy.aspx">Wydział Organizacji i Zarządzania Politechniki Śląskiej</a>
              <a href="http://www.polsl.pl/Strony/Witamy.aspx">Politechnika Śląska</a>
              <a href="http://www.samorzad.polsl.pl/">Samorząd Studencki Politechniki Śląskiej</a>
              <a href="http://www.kariera.polsl.pl/">Biuro Karier Studenckich</a>
              <a href="http://www.pip.gov.pl/">Państwo Inspekcja Pracy</a>
              <a href="http://www.gis.gov.pl/?go=news">Państwowa Inspekcja Sanitarna</a>
              <a href="http://www.straz.gov.pl/page/index.php">Komenda Główna Państwowej Straży Pożarnej</a>
              <a href="http://www.policja.pl/">Komenda Główna Policji</a>
              <a href="http://www.ciop.pl/">Centralny Instytut Pracy</a>
              <a href="http://www.mpips.gov.pl/">Ministerstwo Pracy i Polityki Społecznej</a>
              <hr/>
              Serwisy informacyjne poświęcone tematyce BHP
              <a href="http://www.bhp.abc.com.pl/">http://www.bhp.abc.com.pl/</a>
              <a href="http://www.portalbhp.pl/">http://www.portalbhp.pl/</a>
              <a href="http://www.iso.org.pl/zarzadzanie-bhp">http://www.iso.org.pl/zarzadzanie-bhp</a>
         </div>
      </div>
    </script>

    <?php
      foreach (glob("years/2*.php") as $filename)
      {
        include $filename;
      }
    ?>
    <script type="text/x-handlebars" data-template-name="home"><h3>Witamy</h3>
Witamy na stronie koła naukowego <strong>WESTA!</strong>

Zapraszamy do polubienia naszej strony na facebooku! (link poniżej)
    </script>


    <script type="text/x-handlebars" data-template-name="news">
      Content for News
    </script>

    <script type="text/x-handlebars" data-template-name="activity">
      Wybierz rok, który Cię interesuje
      <?php
        include 'years/list.html';
      ?>
    </script>

    <script type="text/x-handlebars" data-template-name="meetings">
      Content for Meetings
    </script>

    <script type="text/x-handlebars" data-template-name="aboutus">
        <h3>O NAS</h3>Studenckie Koło Naukowe WESTA zostało założone 7 czerwca 2004 roku przy Katedrze Zarządzania Środowiskiem i Bezpieczeństwem na Wydziale Organizacji i Zarządzania Politechniki Śląskiej w Zabrzu. Pierwszym opiekunem SKN WESTA była Pani dr Anna Gembalska-Kwiecień, w roku ?? nowym opiekunem został Pan dr inż. Zbigniew Żurakowski. Obecnie SKN WESTA działa przy Zakładzie Zarządzania Jakością i Bezpieczeństwem w Instytucie Inżynierii Produkcji.

        Koło Naukowe WESTA skupia studentów zainteresowanych szeroką tematyką związaną z bezpieczeństwem, działalność koła obejmuje:
        <ul>
          <li>Poszerzanie i propagowanie wiedzy związanej z bezpieczeństwem</li>
          <li>Poznawanie i nawiązywanie współpracy z organizacjami, które zajmują się zagadnieniami bezpieczeństwa</li>
          <li>Organizowanie wyjazdów i spotkań naukowych</li>
          <li>Uczestnictwo w konferencjach, wykładach i sympozjach poświęconych problematyce bezpieczeństwa</li>
        </ul>
    </script>

    <script type="text/x-handlebars" data-template-name="conntact">
  KONTAKT

  Możecie kontaktować się z nami mailowo pod adresem <a href="mailto:sknwesta@hotmail.com">sknwesta@hotmail.com</a> lub słać nam prywatne wiadomości na naszej stronie facebookowej.

  Jeżeli zależy Wam na bezpośrednim kontakcie dzwońcie do Przewodniczącego SKN WESTA Mateusza Wadowskiego na numer telefonu 535 078 451, koszt połączenia zgodny z taryfą operatora.
    </script>

    <script type="text/x-handlebars" data-template-name="gallery">
      Dni wydziału 2009
      <hr/>
      <ul class="clearing-thumbs" data-clearing style="display:inline-block;white-space:nowrap">
        <li><a class="th" href="img/gallery/dni_wydzialu_2009/PIC_0418.JPG"><img src="img/gallery/dni_wydzialu_2009/PIC_0418.JPG" width="150px;" height="150px"></a></li>
        <li><a class="th" href="img/gallery/dni_wydzialu_2009/PIC_0421.JPG"><img src="img/gallery/dni_wydzialu_2009/PIC_0421.JPG" width="150px;" height="150px"></a></li>
        <li><a class="th" href="img/gallery/dni_wydzialu_2009/PIC_0419.JPG"><img src="img/gallery/dni_wydzialu_2009/PIC_0419.JPG" width="150px;" height="150px"></a></li>
        <li><a class="th" href="img/gallery/dni_wydzialu_2009/PIC_0422.JPG"><img src="img/gallery/dni_wydzialu_2009/PIC_0422.JPG" width="150px;" height="150px"></a></li>
        <li><a class="th" href="img/gallery/dni_wydzialu_2009/PIC_0417.JPG"><img src="img/gallery/dni_wydzialu_2009/PIC_0417.JPG" width="150px;" height="150px"></a></li>
        <li><a class="th" href="img/gallery/dni_wydzialu_2009/PIC_0420 (1).JPG"><img src="img/gallery/dni_wydzialu_2009/PIC_0420 (1).JPG" width="150px;" height="150px"></a></li>
      </ul>
    </script>



        <script type="text/x-handlebars" data-template-name="sections">
      CZŁONKOWIE

      <strong>Przewodniczący:</strong>
      Mateusz Wadowski <i>kontakt: 535 078 451</i>

      <strong>Zastępca:</strong>
      ??

      <strong>Sekcja finansowa:</strong>
      Magdalena Kostecka <i>kontakt: 723 880 515</i>
       …..

      <strong>Sekcja organizacyjna:   </strong>
      Alan Kowalik <i>kontakt: 664 384 168</i>
      Karolina Karwat
      Anna Dunikowska
      Magdalena Pietrasz
      Sławomir Kotynia
      Sekcja szkoleniowa:
      Hanna Kołodziej <i>kontakt: 793 577 236</i>
      Aleksandra Moćko

      <strong>Sekcja marketingowa:</strong>
      Monika Stępień <i>kontakt: 606 383 698</i>
      Marcin Wilczek
      Adam Średniawa

      <strong>Administrator strony internetowej:</strong>
      Wojciech Krauzy <i>kontakt: 668 606 944</i>

      <strong>Pozostali członkowie:</strong>
      Joanna Choinica
      Anita Domagała
      Katarzyna Kalinowska
      Justyna Zdzieblik
      Sylwia Zendla
    </script>

    <script type="text/x-handlebars" data-template-name="sectionA">
      <section>
        <h1>Section A</h1>
        {{lorem type=paragraph amount=4}}
      </section>
    </script>

    <script type="text/x-handlebars" data-template-name="sectionB">
      <section>
        <h1>Section B</h1>
        {{lorem type=paragraph amount=4}}
      </section>
    </script>

    <script type="text/x-handlebars" data-template-name="sectionC">
      <section>
        <h1>Section C</h1>
        {{lorem type=paragraph amount=4}}
      </section>
    </script>

    <script type="text/x-handlebars" data-template-name="sectionD">
      <section>
        <h1>Section D</h1>
        {{lorem type=paragraph amount=4}}
      </section>
    </script>


    <script type="text/x-handlebars" data-template-name="items">
      <header class="jumbotron subhead">
        <h1>Route Parameters</h1>
        <p>Named parameters can be extracted from routes defined with <code>:property_name</code> segments.</p>
      </header>
      <ul class="nav nav-tabs nav-stacked">
        {{#each item in content}}
          <li><a {{action "doItem" context="item"}}>{{item.title}}</a></li>
        {{/each}}
      </ul>
    </script>

    <script type="text/x-handlebars" data-template-name="item">
      <h1>{{title}}</h1>
      {{{description}}}
    </script>




  </body>
</html>
