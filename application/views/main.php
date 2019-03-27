<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
$this->load->library('form_validation');
?>
<!DOCTYPE html>
<html>
<title>Jens Weißkopf</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/w3-4.10/w3.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free-5.2.0-web/css/all.min.css');?>">
<script src="<?php echo base_url('assets/jquery-3.3.1/jquery-3.3.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/jquery-3.3.1/jquery.form.min.js');?>"></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url(<?php echo base_url('/images/1600x1200-weisskopfklein.jpg');?>);
  min-height: 100%;
}
#contactPic {
  background-size: cover;
  height: 100%;
}
</style>
<body>

<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Portfolio</a>
    <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Über mich</a>
    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Kontakt</a>
  </div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-xxlarge"><b>Jens Weißkopf</b></h1>
    <p>Software developer / System technician</p>
    <img src="/images/1600x1200-weisskopfklein.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
    <img src="/images/1600x1200-weisskopfklein.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">
  </header>

  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="portfolio">
    <h2 class="w3-text-grey">Mein Portfolio</h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="<?php echo base_url('/images/1600x1200-helloquence-61189-unsplash.jpg');?>" style="width:100%">
        <div class="w3-xlarge">Softwareprojekte:</br>Projektierung und Beratung</div>

        <img src="<?php echo base_url('/images/1600x1200-ilya-pavlov-87438-unsplash.jpg');?>" style="width:100%">
        <div class="w3-xlarge">Software:</br>Maßgeschneiderte Softwarelösungen</div>
        <div class="w3-xlarge">Wordpress, Shopsysteme, Datenerfassung und verarbeitung</div>
      </div>

      <div class="w3-half w3-xlarge">
        <img src="<?php echo base_url('/images/1600x1200-echo-grid-255638-unsplash.jpg');?>" style="width:100%">
        <div class="w3-xlarge">Telekommunikation:</br>Fehleranalyse und Beratung</div>
        <img src="<?php echo base_url('/images/mathew-schwartz-792851-unsplash.jpg');?>" style="width:100%">
        <div class="w3-xlarge">Hardware:</br>Entwicklung ( ESP8266, Arduino, Raspberry Pi )</div>


      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <h2>Über mich</h2>
    <hr class="w3-opacity">
    <p>Beruflich entwickelte ich ein starke Beharrlichkeit beim Auffinden und Beheben von Fehlern.
    Von Neugier getrieben möchte ich die Welt und deren Funktion um mich herum verstehen.
    Ideen Realität werden zu lassen ist meine Motivation und Antrieb.
    Hinter jedem Problem versteckt sich eine kreative Lösung und eine Chance zu Wachsen.
    Stellen Sie mich auf die Probe. Ich würde mich freuen von Ihnen zu hören...
    </p>
    <h3 class="w3-padding-16">Mein Werdegang</h3>
    <p>
      Servicetechniker Fieldservice</br>
      9/2007 - Bis heute</br>
      M-net Telekommunikations GmbH</br>
      Telekommunikation</br>
      Wartung und Instandhaltung, so wie Entstörung von Systemtechnik und Kundenanschlüsse.</br>
      <hr class="w3-opacity">
      Energieelektroniker</br>
      5/2007 - 8/2007</br>
      Freier Elektrotechnik</br>
      Elektrotechnik, Feinmechanik & Optik</br>
      <hr class="w3-opacity">
      Servicetechniker Fieldservice</br>
      3/2001 - 4/2007</br>
      Arcor Mannesmann / übernahme durch die DB Telematik GmbH</br>
      Telekommunikation</br>
    </p>
    <h3 class="w3-padding-16">Ausbildung</h3>
    <p>
      Deutsche Bahn AG</br>
      2001</br>
      Energieelektroniker fachrichtung Anlagentechnik</br>
      Abgeschlossene Ausbildung</br>
      <hr class="w3-opacity">
      Realschule</br>
      1997</br>
      Naturwissenschaftlicher Zweig</br>
      Mittlere Reife</br>
    </p>
    <h3 class="w3-padding-16">Meine Befähigungen</h3>
    <p class="w3-wide">C++</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:85%">85%</div>
    </div>
    <p class="w3-wide">C</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:95%">95%</div>
    </div>
    <p class="w3-wide">PHP</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:90%">90%</div>
    </div>
    <p class="w3-wide">javascript</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:80%">80%</div>
    </div>
    <p class="w3-wide">css</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:70%">70%</div>
    </div>
    <p class="w3-wide">HTML5</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:80%">80%</div>
    </div>
    <p class="w3-wide">java</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:60%">60%</div>
    </div>
    <p class="w3-wide">SQL</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:70%">70%</div>
    </div>
    <p class="w3-wide">Python</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:40%">40%</div>
    </div>
    <br>

    <!--<div class="w3-row w3-center w3-dark-grey w3-padding-16 w3-section">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">14+</span><br>
        Linux
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
      </div>
    </div>-->

    <!-- Testimonials -->
    <!-- Grid for pricing tables -->


  <!-- Contact Section -->
  <div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
    <h2>Kontakt</h2>
    <hr class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Langenfeld, Germany</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Telefon: +49 179 9099272</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: jens@familieweisskopf.de</p>
    </div>

    <!-- Image of location/map -->
    <img id="contactPic" src="<?php echo base_url('/images/pavan-trikutam-1660-unsplash.jpg');?>" class="w3-image w3-greyscale" style="width:100%;margin:32px 0">

    <p>Lassen Sie mir eine Nachricht zukommen:</p>
    <!-- Display the status message -->

    <div id="formMessage"></div>
    <?php echo form_open('contact', 'id="contactForm"'); ?>
      <div>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" value="<?php echo !empty($postData['Name'])?$postData['Name']:''; ?>" placeholder="Name" name="Name"></p>
        <div id="nameerror"></div>
      </div>
      <div>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" value="<?php echo !empty($postData['Email'])?$postData['Email']:''; ?>" placeholder="Email" name="Email"></p>
        <div id="emailerror"></div>
      </div>
      <div>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" value="<?php echo !empty($postData['Subject'])?$postData['Subject']:''; ?>" placeholder="Betreff" name="Subject"></p>
        <div id="subjecterror"></div>
      </div>
      <div>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" value="<?php echo !empty($postData['Message'])?$postData['Message']:''; ?>" placeholder="Nachricht" name="Message"></p>
        <div id="messageerror"></div>
      </div>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" name="contactSubmit" type="submit">
          <i class="fa fa-paper-plane"></i> Nachricht senden
        </button>
      </p>
      <div id="submitmessage"></div>
    </form>
  <!-- End Contact Section -->
  </div>

  <!-- Disclaimer Section -->
  <button onclick="accordion('disclaimer')" class="w3-button w3-light-grey w3-block w3-left-align"><i class="fas fa-file-signature"></i> Disclaimer / Nutzungsbedingungen</button>
  <div id="disclaimer" class="w3-container w3-hide">
    <div class="w3-padding-32 w3-content w3-text-grey">
      <h3>Haftung für Inhalte</h3><p>Die auf den Web-Seiten abrufbaren Beiträge dienen nur der allgemeinen Information und nicht der Beratung in konkreten Fällen. Wir sind bemüht, für die Richtigkeit und Aktualität aller auf der Website enthaltenen Informationen und Daten gemäß § 7 Abs.1 TMG zu sorgen. Für die Korrektheit, die Vollständigkeit, die Aktualität oder Qualität der bereitgestellten Informationen und Daten wird jedoch keine Gewähr nach § 8 bis 10 TMG übernommen. Die Haftung für den Inhalt der abrufbaren Informationen wird ausgeschlossen, soweit es sich nicht um vorsätzliche oder grob fahrlässige Falschinformation handelt. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p><h3>Haftung für Links</h3><p>Wir sind für den Inhalt von Webseiten, die über einen Hyperlink erreicht werden, nicht verantwortlich. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich. Wir machen uns die Inhalte dieser Internetseiten ausdrücklich nicht zu eigen und können deshalb für die inhaltliche Korrektheit, Vollständigkeit und Verfügbarkeit keine Gewähr leisten. Wir haben bei der erstmaligen Verknüpfung zwar den fremden Inhalt daraufhin überprüft, ob durch ihn eine mögliche zivilrechtliche oder strafrechtliche Verantwortlichkeit ausgelöst wird. Wir sind aber nicht dazu verpflichtet, die Inhalte, auf die wir unserem Angebot verweisen, ständig auf Veränderungen zu überprüfen, die eine Verantwortlichkeit neu begründen könnten. Erst wenn wir feststellen oder von anderen darauf hingewiesen werden, dass ein konkretes Angebot, zu dem wir einen Link bereitgestellt haben, eine zivil- oder strafrechtliche Verantwortlichkeit auslöst, werden wir den Verweis auf dieses Angebot aufheben, soweit uns dies technisch möglich und zumutbar ist.</p><h3>Urheberrecht</h3><p>Die durch den Betreiber dieser Seite erstellten Inhalte und Werke auf diesen Webseiten unterliegen dem deutschen Urheberrecht. Sämtliche Beiträge Dritter sind als solche gekennzeichnet. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechts bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Kopien von diesen Seiten sind nur für den privaten Bereich gestattet, nicht jedoch für kommerzielle Zwecke.</p><h3>Datenschutz</h3><p>Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben. </p><p>In Verbindung mit Ihrem Zugriff werden in unserem Server für Zwecke der Datensicherheit vorübergehend Daten gespeichert, die möglicherweise eine Identifizierung zulassen (zum Beispiel IP-Adresse, Datum, Uhrzeit und Name der angeforderten Datei). Eine Auswertung, mit Ausnahme für statistische Zwecke in anonymisierter Form, erfolgt nicht.</p><p>Sollten Sie bei uns Informationsmaterialien bestellen, benötigen wir von Ihnen Name, E-Mail-Adresse sowie Angaben zur Lieferung und Rechnungsstellung. So können wir Ihre Bestellung bearbeiten und ausführen. Diese Daten werden für die Dauer der Auftragsabwicklung in elektronischer Form gespeichert. Eine weitergehende Nutzung personenbezogener Daten oder eine Weitergabe an Dritte erfolgt ohne Ihre ausdrückliche Einwilligung nicht.</p><p>Mit der Bestellung willigen Sie in die genannte Verarbeitung Ihrer personenbezogenen Daten ein, soweit dies für den Zweck des Vertrages erforderlich ist. Sie können diese Einwilligung schriftlich oder per E-Mail uns gegenüber jederzeit mit Wirkung für die Zukunft widerrufen.</p><h3>Datenschutzerklärung für die Nutzung von Facebook-Plugins (Like-Button)</h3><p>Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook, 1601 South California Avenue, Palo Alto, CA 94304, USA integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo oder dem "Like-Button" ("Gefällt mir") auf unserer Seite. Eine Übersicht über die Facebook-Plugins finden Sie hier: http://developers.facebook.com/docs/plugins/. Wenn Sie unsere Seiten besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem Browser und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse unsere Seite besucht haben.</p><p>Wenn Sie den Facebook "Like-Button" anklicken während Sie in Ihrem Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Seiten auf Ihrem Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von facebook unter http://de-de.facebook.com/policy.php Wenn Sie nicht wünschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto zuordnen kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.</p><h3>Datenschutzerklärung für die Nutzung von Twitter</h3><p>Auf unseren Seiten sind Funktionen des Dienstes Twitter eingebunden. Diese Funktionen werden angeboten durch die Twitter Inc., 795 Folsom St., Suite 600, San Francisco, CA 94107, USA. Durch das Benutzen von Twitter und der Funktion "Re-Tweet" werden die von Ihnen besuchten Webseiten mit Ihrem Twitter-Account verknüpft und anderen Nutzern bekannt gegeben. Dabei werden auch Daten an Twitter übertragen.</p><p>Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Twitter erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Twitter unter http://twitter.com/privacy.</p><p>Ihre Datenschutzeinstellungen bei Twitter können Sie in den Konto-Einstellungen unter http://twitter.com/account/settings ändern.</p><h3>Datenschutzerklärung für die Nutzung von Google +1</h3><p><b>Erfassung und Weitergabe von Informationen:</b><br>Mithilfe der Google +1-Schaltfläche können Sie Informationen weltweit veröffentlichen. Über die Google +1-Schaltfläche erhalten Sie und andere Nutzer personalisierte Inhalte von Google und unseren Partnern. Google speichert sowohl die Information, dass Sie für einen Inhalt +1 gegeben haben, als auch Informationen über die Seite, die Sie beim Klicken auf +1 angesehen haben. Ihre +1 können als Hinweise zusammen mit Ihrem Profilnamen und Ihrem Foto in Google-Diensten, wie etwa in Suchergebnissen oder in Ihrem Google-Profil, oder an anderen Stellen auf Websites und Anzeigen im Internet eingeblendet werden. Google zeichnet Informationen über Ihre +1-Aktivitäten auf, um die Google-Dienste für Sie und andere zu verbessern.</p><p>Um die Google +1-Schaltfläche verwenden zu können, benötigen Sie ein weltweit sichtbares, öffentliches Google-Profil, das zumindest den für das Profil gewählten Namen enthalten muss. Dieser Name wird in allen Google-Diensten verwendet. In manchen Fällen kann dieser Name auch einen anderen Namen ersetzen, den Sie beim Teilen von Inhalten über Ihr Google-Konto verwendet haben. Die Identität Ihres Google-Profils kann Nutzern angezeigt werden, die Ihre E-Mail-Adresse kennen oder über andere identifizierende Informationen von Ihnen verfügen.</p><p><b>Verwendung der erfassten Informationen:</b><br>Neben den oben erläuterten Verwendungszwecken werden die von Ihnen bereitgestellten Informationen gemäß den geltenden Google-Datenschutzbestimmungen genutzt. Google veröffentlicht möglicherweise zusammengefasste Statistiken über die +1-Aktivitäten der Nutzer bzw. gibt diese an Nutzer und Partner weiter, wie etwa Publisher, Inserenten oder verbundene Websites.</p><h3>Datenschutzerklärung für die Nutzung von Google Adsense</h3><p>Diese Website benutzt Google AdSense, einen Dienst zum Einbinden von Werbeanzeigen der Google Inc. ("Google"). Google AdSense verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website ermöglicht. Google AdSense verwendet auch so genannte Web Beacons (unsichtbare Grafiken). Durch diese Web Beacons können Informationen wie der Besucherverkehr auf diesen Seiten ausgewertet werden. Die durch Cookies und Web Beacons erzeugten Informationen über die Benutzung dieser Website (einschließlich Ihrer IP-Adresse) und Auslieferung von Werbeformaten werden an einen Server von Google in den USA übertragen und dort gespeichert.</p><p>Diese Informationen können von Google an Vertragspartner von Google weiter gegeben werden. Google wird Ihre IP-Adresse jedoch nicht mit anderen von Ihnen gespeicherten Daten zusammenführen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.</p><h3>Datenschutzerklärung für die Nutzung von Google Analytics</h3><p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert.</p><p>Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite, wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringenDie im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. </p><p>Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren http://tools.google.com/dlpage/gaoptout?hl=de.</p>Quelle: <a href="http://www.disclaimervorlage.de/link-disclaimer.html">Link Disclaimer</a>, <a href="https://www.haendlerschutz.com/news/software/programmierung">Programmierung</a>
    </div>
  </div>
  </br>
  </br>
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
    <a href="https://www.xing.com/profile/Jens_Weisskopf4" target="_blank"><i class="fab fa-xing w3-hover-opacity"></i></a>
    <a href="mailto:jens@familieweisskopf.de"><i class="far fa-envelope w3-hover-opacity"></i></a>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    <p class="w3-medium">Created by Jens Weißkopf</p>


  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}

function accordion(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// prepare the form when the DOM is ready
$(document).ready(function() {
    // bind form using ajaxForm
    $('#contactForm').ajaxForm({
        // dataType identifies the expected content type of the server response
        dataType:  'json',

        // success identifies the function to invoke when the server response
        // has been received
        success:   processJson
    });
});

function processJson(data) {
    // 'data' is the json object returned from the server
    document.getElementById("nameerror").innerHTML="";
    document.getElementById("emailerror").innerHTML="";
    document.getElementById("subjecterror").innerHTML="";
    document.getElementById("messageerror").innerHTML="";
    if(data.status.type=="inputerror") {
      document.getElementById("nameerror").innerHTML=data.inputerror.name;
      document.getElementById("emailerror").innerHTML=data.inputerror.email;
      document.getElementById("subjecterror").innerHTML=data.inputerror.subject;
      document.getElementById("messageerror").innerHTML=data.inputerror.message;
      var msg = '<div class="w3-panel w3-red w3-card-4">';
          msg+= '<p>'+data.status.msg+'</p></div>';
    } else if(data.status.type=="error") {
      var msg = '<div class="w3-panel w3-red w3-card-4">';
          msg+= '<p>'+data.status.msg+'</p></div>';
    } else {
      var msg = '<div class="w3-panel w3-green w3-card-4">';
          msg+= '<p>'+data.status.msg+'</p></div>';
    }
    document.getElementById("submitmessage").innerHTML=msg;
    setTimeout(function(){ document.getElementById("submitmessage").innerHTML=""; }, 5000);
}
</script>

</body>
</html>
