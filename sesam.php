<?php include 'header.php';?>

<!-- Sida: Anhörigsängen Sesam -->
<div id="omsesam">
  <div id="omSesam1stRow" class="jumbotron">
    <div id="omSesamCarouselColumn">
      <div id="omSesamCarousel" class="carousel fade" data-ride="carousel">
        <!-- Indicators -->
        <!--
        <ol id="omSesamCarouselIndicators" class="carousel-indicators">
          <li data-target="#omSesamCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#omSesamCarousel" data-slide-to="1"></li>
          <li data-target="#omSesamCarousel" data-slide-to="2"></li>
          <li data-target="#omSesamCarousel" data-slide-to="3"></li>
          <li data-target="#omSesamCarousel" data-slide-to="4"></li>
          <li data-target="#omSesamCarousel" data-slide-to="5"></li>
        </ol>
      -->
        <!-- Wrapper for slides -->
        <div id="omSesamCarouselInner" class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="item active">
            <div id="omSesamCarouselSlide1" class="omSesamCarouselSlide"></div>
          </div>
          <!-- Slide 2 -->
          <div class="item">
            <div id="omSesamCarouselSlide2" class="omSesamCarouselSlide"></div>
          </div>
          <!-- Slide 3 -->
          <div class="item">
            <div id="omSesamCarouselSlide3" class="omSesamCarouselSlide"></div>
          </div>
          <!-- Slide 4 -->
          <div class="item">
            <div id="omSesamCarouselSlide4" class="omSesamCarouselSlide"></div>
          </div>
          <!-- Slide 5 -->
          <div class="item">
            <div id="omSesamCarouselSlide5" class="omSesamCarouselSlide"></div>
          </div>
          <!-- Slide 6 -->
          <div class="item">
            <div id="omSesamCarouselSlide6" class="omSesamCarouselSlide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div id="OmSesamMenyAndTextColumn">
        <div id="omSesamText">
          <div style="font-size: 24px;">
            Om Anhörigsängen Sesam
            <hr>
          </div>
          Anhörigsängen Sesam är ett sängskåp speciellt framtaget för sjukhus och vårdmiljöer. Samtliga komponenter är valda med omsorg för lång hållbarhet över tid och uppfyller hygienklass 2. Sängskåpet förflyttas mjukt och följsamt samtidigt som ut- och infällning sker genom intuitiva och ergonomiska rörelser. Bäddens sitthöjd är 53 cm över golv med madrass vilket ger anhöriga möjlighet att vara väldigt nära varandra. Ladda ner vårt <a style="font-weight: 600; color: white;" href="./pdf/anhorigsangen_med_engelska.pdf">produktblad som pdf</a>.
        </div>
        <div id="omSesamMenyKnappgrupp">
          <a href="#anvandning">
            <div class="omSesamMenyKnapp">
              <div class="omSesamMenyKnapptext">
                Användning
              </div>
            </div>
          </a>
          <a href="#sangensdelar">
            <div class="omSesamMenyKnapp">
              <div class="omSesamMenyKnapptext">
                Sängens Delar
              </div>
            </div>
          </a>
          <a href="#tekniskspec">
            <div id="omSesamMenyKnappSista" class="omSesamMenyKnapp">
              <div class="omSesamMenyKnapptext">
                Teknisk Specifikation
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <a name ="anvandning"></a>
  <div name="anvandning" class="container">
    <div id="omSesam2ndRow" class="row">
      <div class="col-md-6">
        <div id="anvandning_text">
          <div style="width: 50%; color: #1f7294; font-size: 24px;">
            Användning
            <hr id="sesam11_hr">
          </div>
          Sängskåpet har en öppen sida, vilken ställs mot vägg när skåpet inte används. Lösningen ger ett smidigt skåp med bra ventilation som tar liten plats i rummet. Skåpet rullas mjukt och styrvänligt även i utfällt läge och kan därför placeras var som helst i rummet så att exempelvis ögonkontakt kan hållas med anhörig. Den goda höjden över golvet på bädden gör att anhöriga kan komma väldigt nära varandra eftersom patientbädden oftast är högre än vad sängar normalt är. Allt för en bra kontakt mellan anhörig och patient!
          <br><br>
          Bädden fälls ut med hjälp av ett långt och greppvänligt stålhandtag. I nästa moment viks fotdelen ut med hjälp av att lyfta fotändens benbåge från horisontalläget så att nedre delen frigörs från stängt läge och viks ut. Benbågarna kommer i båda momenten automatiskt till sina slutpositioner när bädden fälls och viks ut. När bädden ska fällas in görs det omvända. Fotändens rambygel används för att lyfta upp den nedre madrassdelen som viks in och ned mot den övre. Benbågen fungerar då som hävarm och stänger bädden med hjälp av excenterrörelsen. Därefter fälls mekanismen med madrass och sängkläder in i skåpet med hjälp av det breda handtaget som sitter väl placerat ytterst på bäddens mittre dels undersida. Madrass och sängkläder hålls på plats genom hela momentet och rörelserna är både logiska och ergonomiska.
        </div>
      </div>
      <div class="col-md-6">
        <div id="anvandning_cirkel"></div>
      </div>
    </div>
  </div>
  <a name="sangensdelar"></a>
  <noscript>
    <div id="omSesamBGjumbo2PHP" class="jumbotron"> <!-- Bakgrund Rad 3 -->
      <div id="sangensDelarBildContainer"> <!-- innehåll: bilder -->
        <div v-show="visaDel == 'stommen'" transition="fadeIn" id="stommePHP" class="sangensDelarBildPHP"></div>
        <div v-show="visaDel == 'bottnen'" transition="fadeIn" id="bottenPHP" class="sangensDelarBildPHP"></div>
        <div v-show="visaDel == 'hjulen'" transition="fadeIn" id="hjulPHP" class="sangensDelarBildPHP"></div>
        <div v-show="visaDel == 'madrassen'" transition="fadeIn" id="madrassPHP" class="sangensDelarBildPHP"></div>
        <div v-show="visaDel == 'mekaniken'" transition="fadeIn" id="mekanismPHP" class="sangensDelarBildPHP"></div>
      </div>
      <div class="container">
        <div id="sangensDelarMenyOchTextPHP">

          <a href=#><div id="sangensDelarUpp">&#8743 &nbsp  Tillbaka Upp</div></a>
          <div id="sangensDelarRubrikOchTextPHP">
            <div id="sangensDelarRubrik">
              <div style="width: 50%; color: #1f7294; font-size: 24px; font-weight:300; margin-top:40px;">
                Sängens Delar
                <hr id="sesam11_hr">
              </div>
            </div>
            <div id ="skapstommenTextPHP" class="sangensDelarTextPHP">
              <div style="width: 50%; color: #1f7294; font-size: 18px; font-weight:300">
                Skåpstommen
              </div>
              <br>
              Skåpstommen är producerad av en 19mm tjock MDF stomme där alla delar är högtryckslaminerade med Formica högtryckslaminat F6463SHE NCS S 0500-N. Laminatet håller hög kvalitet och är Byggvarubedömt i Sverige, registrerat i BASTA-registret för utfasningen av farliga kemiska ämnen och har Svanens Miljömärkningslicens. Laminatet är även CE-märkt och stödjer kemikalielagstiftningen. Reach och Formicas produkter innehåller inga av de högriskämnen som är listade av den europeiska kemikalieinspektionen. För att göra skåpet mer stöttåligt har kanterna försetts med PVC-fria ABS-lister.
              <br><br>
              MDF-skivan som är fuktresistent, produceras av Medite Europe LTD och har varumärksnamnet Medite Industrial MR. Skivan har Nordisk ECO Svanen-märkt licens, förhåller sig till lågnivåvärden för formaldehyd enligt CARB phase 2 och är således en helt giftfri möbelkomponent med extremt låga emissionsvärden. Medite Europe LTD följer krav och riktlinjer för att tillverka sina produkter genom återvinning av bland annat träflis för sin produktion istället för att fälla skog i enligthet med FSC Forest Chain of Custody systems klassificeringar. Medite Europe LTD är även certificierade av BM TRADA.
            </div>
            <div id = "sangbottenTextPHP" class="sangensDelarTextPHP">
              <div style="width: 50%; color: #1f7294; font-size: 18px; font-weight:300">
                Sängbotten
              </div>
              <br>
              Sängbotten består av rostfri polerad stålplåt, AISI 304, formgiven efter mekanismens rör och konstruktion. Botten är uppdelad i tre sektioner där varje sektion är formad efter rörramen vilket förstärker konstruktionen, ökar stabiliteten i de rörliga delarna samt utesluter att skruvande kraft uppstår på gångjärn och genomgående axlar för vikfunktionen.
              <br><br>
              Plåtarna hänger på rörramen och är fastskruvade med rostfri välvd torxskruv. Madrassen ligger stabilt förankrad i de nedsänkta plåtarna som är förstärkta med dubbelbockad kant mellan rörramens huvud och fotände. Madrassen rör sig därmed inte i bädden vilket alltid är uppskattat hos användaren.
            </div>
            <div id="hjulenTextPHP" class="sangensDelarTextPHP">
              <div style="width: 50%; color: #1f7294; font-size: 18px; font-weight:300">
                Hjulen
              </div>
              <br>
              Skåpet har fyra stycken länkhjul med dubbla svängkranslager och förzinkade byglar med uppfylld hygienklass för sjukhusmiljö. Hjulen har en ljusgrå fälg och grå hjulbana av termoplastisktgummi med en hårdhet på 70 shore för att förhindra märken på golv. Samtliga hjul är kapslade med trådskydd och de hjul som är placerade mot skåpets öppna sida är försedda med fotbroms. Skåpet står mycket stabilt på de länkhjul vi har valt att använda.
              <br><br>
              En ny typ av fot på benbågarna har framtagits som inte ger märken på golv när skåpet efterjusteras. Hjulen har egenskaper som kan klara ojämnheter i golv och övergångar och de rullar tyst, mjukt och följsamt. Hjulen behöver inte vara låsta när skåpet fälls ut och används, det är endast vid momentet att fälla in skåpet som behovet att låsa det främre hjulparet skulle kunna uppstå.
              <br><br>
              Hjulen tål 80 grader varmt vatten och tål att spritas med 45% Isopropanol-lösning. Hjulen uppfyller hygien krav nivå 2 för vårdmiljö.
            </div>
            <div id = "madrassenTextPHP" class="sangensDelarTextPHP">
              <div style="width: 50%; color: #1f7294; font-size: 18px; font-weight:300">
                Madrassen
              </div>
              <br>
              Madrassen är 12cm hög, helsvetsad och uppfyller hygienkrav nivå 2. Madrassens kärna är tillverkad i kallskum av typen CME (Combustion Modified Elastic Polyeter) med öppna celler för att säkerställa brandsäkerhet och komfort. Kallskumskärnan produceras av Rectiel på ett miljövänligt sätt helt utan halogenerade flamskyddsmedel (CFC-fri) och är både fysiskt och kemiskt återvinningsbar. Benämningen som ”Flexible Foam”, FR Foam EN-597 uppfyller högsta brandklass standard enligt test metod BS 5852 Crib 5.
              <br><br>
              Madrassöverdraget/PU-omslaget är 100% antibakteriellt i enlighet med JIS Z 2801 "ingen tillväxt" och enligt SN 195920. PU-Omslagets märke är Techmaflex IPA FRC (T151) eller (T174) och blå i färgen.Tyget är permanent elastiskt mot veckbildning och tål 70% alkoholkoncentration men kan också rengöras med klorlösning (13 000 ppm). PU–omslaget är ånggenomsläpplig i båda riktningarna och madrassen klassas därför inte som duschbar men tål att rengöras med 95 grader hett vatten.
            </div>
            <div id = "mekanismenTextPHP" class="sangensDelarTextPHP">
              <div style="width: 50%; color: #1f7294; font-size: 18px; font-weight:300">
                Mekanismen
              </div>
              <br>
              Mekanismen till Sesam anhörigsäng är utvecklad från Sedaflex 12M, vilken är utvecklad för att uppfylla testnorm EN-1725 och har testats enligt norm DD ENV 13759:2001 enligt Rapport TSSF35115, daterad 10 september 2010 för rörliga sammansatta delar av metallrör och platta metallkomponenter utan anmärkningar. Sedaflex 12M har också genomgått mer långtgående tester, bland annat FIRA Test Method For Contract Beds enligt TEST (Bs EN 1725:1998) och TEST (BS 7397:1991). Ett ytterligare säkerhetstest för sängar och madrasser har Sedaflex mekanismen prövats för enligt TEST BS EN 15373:2007. Rapporten för dessa tre tester är daterad 29 oktober 2010 med referens nr TSBDF35221 (Fira:s referensnummer).
              <br><br>
              Leverantören av mekanismens delar har 0% emissionsutsläpp till miljön från underarbete, lackering och utrustning. Täckfärgen är grå och hård där ytan har ett minimum av 80 micron på de lackerade ytorna av fällmekanismens rör- och stagdelar. Infästningen och formanpassningen av de rostfria plåtarna i sängbotten täcker större delen av mekanismens delar och håller hygienkrav nivå 2 även på mekanismens sinsemellan rörliga delar.
            </div>
          </div>
        </div>
      </div>
    </div>
  </noscript>

  <div id="omSesamBGjumbo2" class="jumbotron" style="display: none;"> <!-- Bakgrund Rad 3 -->
    <div id="sangensDelarBildContainer"> <!-- innehåll: bilder -->
      <div id="hjulenbild" class="sangensDelarBild" style="display: none;"></div>
      <div id="madrassenbild" class="sangensDelarBild" style="display: none;"></div>
      <div id="mekanismenbild" class="sangensDelarBild" style="display: none;"></div>
      <div id="stommenbild" class="sangensDelarBild"></div>
      <div id="bottenbild" class="sangensDelarBild" style="display: none;"></div>
    </div>
    <div class="container">
      <div id="sangensDelarMenyOchText">
        <a href=#><div id="sangensDelarUpp">&#8743 &nbsp  Tillbaka Upp</div></a>
        <div id="sangensDelarMenyKnappgrupp">
          <div class="sangensDelarMenyKnapp">
            <a id='stommenknapp' class='active'>Om Skåpstommen</a>
          </div>
          <div class="sangensDelarMenyKnapp">
            <a id="bottenknapp">Om Sängbotten</a>
          </div>
		  <div class="sangensDelarMenyKnapp">
            <a id='mekanismenknapp'>Om Mekanismen</a>
          </div>
          <div class="sangensDelarMenyKnapp">
            <a id='hjulenknapp'>Om Hjulen</a>
          </div>
          <div class="sangensDelarMenyKnapp">
            <a id='madrassenknapp'>Om Madrassen</a>
          </div>
        </div>
        <div id="sangensDelarRubrikOchText">
          <div id="sangensDelarRubrik">
            <div id="sangensDelarRubrikStatisk">Sängens Delar</div>
            <div id='hjulenrubrik' class="sangensDelarRubrikVal" style="display: none;">Hjulen</div>
            <div id='mekanismenrubrik' class="sangensDelarRubrikVal" style="display: none;">Mekanismen</div>
            <div id='madrassenrubrik' class="sangensDelarRubrikVal" style="display: none;">Madrassen</div>
            <div id='stommenrubrik' class="sangensDelarRubrikVal">Stommen</div>
            <div id='bottenrubrik' class="sangensDelarRubrikVal" style="display: none;">Botten</div>
            <div class="dropdown" id="sangensDelarDropdown">
              <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div id='hjulendrop' class="sangensDelarDropVal" style="display: none;">Hjulen</div>
                <div id='madrassendrop' class="sangensDelarDropVal" style="display: none;">Madrassen</div>
                <div id='mekanismendrop' class="sangensDelarDropVal" style="display: none;">Mekanismen</div>
                <div id='stommendrop' class="sangensDelarDropVal">Stommen</div>
                <div id='bottendrop' class="sangensDelarDropVal" style="display: none;">Botten</div>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="sangensDelarMenyKnapp">
                  <a onClick="setData('hjulen', 'small')">Om Hjulen</a>
                </div>
                <div class="sangensDelarMenyKnapp">
                  <a onClick="setData('madrassen', 'small')">Om Madrassen</a>
                </div>
                <div class="sangensDelarMenyKnapp">
                  <a onClick="setData('mekanismen', 'small')">Om Mekanismen</a>
                </div>
                <div class="sangensDelarMenyKnapp">
                  <a onClick="setData('stommen', 'small')">Om Skåpstommen</a>
                </div>
                <div class="sangensDelarMenyKnapp">
                  <a onClick="setData('botten', 'small')">Om Sängbotten</a>
                </div>
              </div>
            </div>
          </div>
          <div id='hjulentext' transition="fadeIn" class="sangensDelarText" style='display: none;'>
            Skåpet har fyra stycken länkhjul med dubbla svängkranslager och förzinkade byglar med uppfylld hygienklass för sjukhusmiljö. Hjulen har en ljusgrå fälg och grå hjulbana av termoplastisktgummi med en hårdhet på 70 shore för att förhindra märken på golv. Samtliga hjul är kapslade med trådskydd och de hjul som är placerade mot skåpets öppna sida är försedda med fotbroms. Skåpet står mycket stabilt på de länkhjul vi har valt att använda.
            <br><br>
            En ny typ av fot på benbågarna har framtagits som inte ger märken på golv när skåpet efterjusteras. Hjulen har egenskaper som kan klara ojämnheter i golv och övergångar och de rullar tyst, mjukt och följsamt. Hjulen behöver inte vara låsta när skåpet fälls ut och används, det är endast vid momentet att fälla in skåpet som behovet att låsa det främre hjulparet skulle kunna uppstå.
            <br><br>
            Hjulen tål 80 grader varmt vatten och tål att spritas med 45% Isopropanol-lösning. Hjulen uppfyller hygien krav nivå 2 för vårdmiljö.
          </div>
          <div id='madrassentext' transition="fadeIn" class="sangensDelarText" style='display: none;'>
            Madrassen är 12cm hög, helsvetsad och uppfyller hygienkrav nivå 2. Madrassens kärna är tillverkad i kallskum av typen CME (Combustion Modified Elastic Polyeter) med öppna celler för att säkerställa brandsäkerhet och komfort. Kallskumskärnan produceras av Rectiel på ett miljövänligt sätt helt utan halogenerade flamskyddsmedel (CFC-fri) och är både fysiskt och kemiskt återvinningsbar. Benämningen som ”Flexible Foam”, FR Foam EN-597 uppfyller högsta brandklass standard enligt test metod BS 5852 Crib 5.
            <br><br>
            Madrassöverdraget/PU-omslaget är 100% antibakteriellt i enlighet med JIS Z 2801 "ingen tillväxt" och enligt SN 195920. PU-Omslagets märke är Techmaflex IPA FRC (T151) eller (T174) och blå i färgen.Tyget är permanent elastiskt mot veckbildning och tål 70% alkoholkoncentration men kan också rengöras med klorlösning (13 000 ppm). PU–omslaget är ånggenomsläpplig i båda riktningarna och madrassen klassas därför inte som duschbar men tål att rengöras med 95 grader hett vatten.
          </div>
          <div id='mekanismentext' transition="fadeIn" class="sangensDelarText" style='display: none;'>
            Mekanismen till Sesam anhörigsäng är utvecklad från Sedaflex 12M, vilken är utvecklad för att uppfylla testnorm EN-1725 och har testats enligt norm DD ENV 13759:2001 enligt Rapport TSSF35115, daterad 10 september 2010 för rörliga sammansatta delar av metallrör och platta metallkomponenter utan anmärkningar. Sedaflex 12M har också genomgått mer långtgående tester, bland annat FIRA Test Method For Contract Beds enligt TEST (Bs EN 1725:1998) och TEST (BS 7397:1991). Ett ytterligare säkerhetstest för sängar och madrasser har Sedaflex mekanismen prövats för enligt TEST BS EN 15373:2007. Rapporten för dessa tre tester är daterad 29 oktober 2010 med referens nr TSBDF35221 (Fira:s referensnummer).
            <br><br>
            Leverantören av mekanismens delar har 0% emissionsutsläpp till miljön från underarbete, lackering och utrustning. Täckfärgen är grå och hård där ytan har ett minimum av 80 micron på de lackerade ytorna av fällmekanismens rör- och stagdelar. Infästningen och formanpassningen av de rostfria plåtarna i sängbotten täcker större delen av mekanismens delar och håller hygienkrav nivå 2 även på mekanismens sinsemellan rörliga delar.
          </div>
          <div id='stommentext' transition="fadeIn" class="sangensDelarText">
            Skåpstommen är producerad av en 19mm tjock MDF stomme där alla delar är högtryckslaminerade med Formica högtryckslaminat F6463SHE NCS S 0500-N. Laminatet håller hög kvalitet och är Byggvarubedömt i Sverige, registrerat i BASTA-registret för utfasningen av farliga kemiska ämnen och har Svanens Miljömärkningslicens. Laminatet är även CE-märkt och stödjer kemikalielagstiftningen. Reach och Formicas produkter innehåller inga av de högriskämnen som är listade av den europeiska kemikalieinspektionen. För att göra skåpet mer stöttåligt har kanterna försetts med PVC-fria ABS-lister.
            <br><br>
            MDF-skivan som är fuktresistent, produceras av Medite Europe LTD och har varumärksnamnet Medite Industrial MR. Skivan har Nordisk ECO Svanen-märkt licens, förhåller sig till lågnivåvärden för formaldehyd enligt CARB phase 2 och är således en helt giftfri möbelkomponent med extremt låga emissionsvärden. Medite Europe LTD följer krav och riktlinjer för att tillverka sina produkter genom återvinning av bland annat träflis för sin produktion istället för att fälla skog i enligthet med FSC Forest Chain of Custody systems klassificeringar. Medite Europe LTD är även certificierade av BM TRADA.
          </div>
          <div id='bottentext' transition="fadeIn" class="sangensDelarText" style='display: none;'>
            Sängbotten består av rostfri polerad stålplåt, AISI 304, formgiven efter mekanismens rör och konstruktion. Botten är uppdelad i tre sektioner där varje sektion är formad efter rörramen vilket förstärker konstruktionen, ökar stabiliteten i de rörliga delarna samt utesluter att skruvande kraft uppstår på gångjärn och genomgående axlar för vikfunktionen.
            <br><br>
            Plåtarna hänger på rörramen och är fastskruvade med rostfri välvd torxskruv. Madrassen ligger stabilt förankrad i de nedsänkta plåtarna som är förstärkta med dubbelbockad kant mellan rörramens huvud och fotände. Madrassen rör sig därmed inte i bädden vilket alltid är uppskattat hos användaren.
          </div>
        </diV>
      </div>
    </div>
  </div>

  <a name="tekniskspec"></a>
  <div id="tekniskSpecContainer" class="container">
    <div class="row">
      <div class="col-md-8">
        <a href=#><div id="tekniskSpecUpp">&#8743 &nbsp  Tillbaka Upp</div></a>
        <h2 class="sesam_g1303">
          Teknisk Specifikation
        </h2>
        <hr id="sesam7_hr">
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Anhörigsäng Sesam
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Benämning
            </td>
            <td>
              Anhörigsäng mobilt i sängskåp
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Fabrikör
            </td>
            <td>
              Anhörigsängar AB Org.nr 559050-8742
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Artikelnummer
            </td>
            <td>
              AS-RF-M12-VHPL-SLL
            </td>
          </tr>
        </table>
        <br>
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Yttermått Anhörigsängen Sesam
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Bredd
            </td>
            <td>
              91,6 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Djup
            </td>
            <td>
              41,5 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Höjd
            </td>
            <td>
              133 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Djup utfälld
            </td>
            <td>
              207,5 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Bredd på mekanism utfälld
            </td>
            <td>
              85,4 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Bredd invändigt sängskåp
            </td>
            <td>
              86,8 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Vikt med madrass
            </td>
            <td>
              77 kg
            </td>
          </tr>
        </table>
        <br>
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Bäddmått madrass
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Bredd x Längd
            </td>
            <td>
              73 x 195 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Tjocklek madrass
            </td>
            <td>
              12 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Bäddens sitthöjd inkl. madrass
            </td>
            <td>
              53 cm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Belastning vikt
            </td>
            <td>
              upp till 175 kg
            </td>
          </tr>
        </table>
        <br>
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Skåp
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Material
            </td>
            <td>
              Högtryckslaminerad MDF, 19mm
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Färg
            </td>
            <td>
              Vit NCS 0500-N
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Kantlist
            </td>
            <td>
              preformerad ABS-list, PVC-fri
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Hygienkrav nivå 2
            </td>
            <td>
              &#10003;
            </td>
          </tr>
        </table>
        <br>
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Madrass Recticel Flexible Foam CME Foam EN-597
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Madr Brandnorm
            </td>
            <td>
              BS 5852
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Madrass Min. Densitet
            </td>
            <td>
              ISO 845, 30 kg/m2
            </td>
          </tr>
          <tr>
            <td class="left_td">
              PU-Omslag
            </td>
            <td>
              Helsvetsad Uppfyller Ökotex klass 1
            </td>
          </tr>
          <tr>
            <td class="left_td">
              PU-Beskrivning
            </td>
            <td>
              Techmaflex IPA FRC T151/ T174
            </td>
          </tr>
          <tr>
            <td class="left_td">
              PU-Polyamid basväv
            </td>
            <td>
              47%
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Polyuretan FR yta
            </td>
            <td>
              53%
            </td>
          </tr>
          <tr>
            <td class="left_td">
              PU- Desinfektion
            </td>
            <td>
              70 % alkohol, Isopropanol > 45%
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Antibakteriell
            </td>
            <td>
              &#10003;
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Ångtrycksgenomsläpplig
            </td>
            <td>
              &#10003;
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Brandnorm
            </td>
            <td>
              BS 6807 CRIB 5 och BS 7175 CRIB 5
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Hygienkrav nivå 2
            </td>
            <td>
              &#10003;
            </td>
          </tr>
        </table>
        <br>
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Mekanism Sedaflex12M
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Uppfyller testnorm EN-1725
            </td>
            <td>
              &#10003;
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Godkänd i testrapport TSSF35115
            </td>
            <td>
              &#10003;
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Lackering
            </td>
            <td>
              Pulverlackerad med grå metallic färg
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Hygienkrav nivå 2
            </td>
            <td>
              &#10003;
            </td>
          </tr>
        </table>
        <br>
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Sängbotten
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Material
            </td>
            <td>
              Rostfri stålplåt
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Förstärkta med dubbelbockade profiler
            </td>
            <td>
              &#10003;
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Hygienkrav nivå 2
            </td>
            <td>
              &#10003;
            </td>
          </tr>
        </table>
        <br>
        <table class="table_gray_border">
          <tr>
            <th colspan="2">
              Hjul
            </th>
          </tr>
          <tr>
            <td class="left_td">
              Kullager
            </td>
            <td>
              Kraftiga svängkranslager
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Hjulbana
            </td>
            <td>
              Grå termoplast
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Hårdhet
            </td>
            <td>
              70 shore
            </td>
          </tr>
          <tr>
            <td class="left_td">
              Hygienkrav nivå 2
            </td>
            <td>
              &#10003;
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<script type='text/javascript'>
  var visaDel = 'stommen';

  function setData(del, winSize) {
    if(visaDel == del) return;
    $('#' + visaDel + 'bild').fadeOut();
    $('#' + visaDel + 'text').fadeOut();
    $('#' + visaDel + 'rubrik').fadeOut();
    $('#' + visaDel + 'knapp').removeClass('active');
    if(winSize == 'small') $('#' + visaDel + 'drop').fadeOut();
    visaDel = del;
    $('#' + visaDel + 'knapp').addClass('active');

    setTimeout(function() {
      $('#' + visaDel + 'bild').fadeIn();
      $('#' + visaDel + 'text').fadeIn();
      if(winSize != 'small') $('#' + visaDel + 'rubrik').fadeIn();
      if(winSize == 'small') $('#' + visaDel + 'drop').fadeIn();
    }, 405)
  };

  $(document).ready(function() {
    $('#omSesamBGjumbo2').css('display', 'block');
    $('#hjulenknapp').click(function() { setData('hjulen') });
    $('#madrassenknapp').click(function() { setData('madrassen') });
    $('#mekanismenknapp').click(function() { setData('mekanismen') });
    $('#stommenknapp').click(function() { setData('stommen') });
    $('#bottenknapp').click(function() { setData('botten') });
  });
</script>

<?php include 'footer.php';?>
