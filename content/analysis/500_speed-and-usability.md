Laddningstid och användbarhet
=
Till denna uppgift valde vi att fortsätta med de tre webbsidor vi valde till
föregående kursmoment (kmom04) rörande [Färgschema](analysis/colorscheme). Detta för att ge
en sammanhållen analys för denna kurs.

Vi valde att använda två webbläsare, Firefox och Chrome, till prestandamäningen
för att även se eventuella skillnader mellan dessa. Utvärderingen gjordes genom
att från varje site välja tre olika sidor och köra länkarna i dels Googles verktyg
[PageSpeed](https://developers.google.com/speed/pagespeed/) samt i respektive
webbläsares "inspect" verktyg. Mätvärdena samlades i en excelfil och medelvärden
beräknades. Mätningen utfördes kvällstid på en laptop ansluten trådlöst till en
router på 100Gb/s fiber. Det skulle vara intressant att utvärdera om dessa resultat
blir annorlund på olika klientenheter och uppkopplingar samt om belastning och
routning på internet påverkar dessa mätvärden.

<!-- Rådata från mätningen är tillgänglig i analysrapporten [PDF](!docs/analysisSpeed-kmom05-v2.pdf) / [XLSX](!docs/analysisSpeed-kmom05-v2.xlsx). -->
Rådata från mätningen är tillgänglig i analysrapporten [PDF](!docs/analysisSpeed-kmom05-v2.pdf).

###[Enea](http://www.enea.com)
[FIGURE src="image/enea.png?w=300" class="center"]

**Analyserade sidor:**<br>
https://www.enea.com/<br>
https://www.enea.com/products/training/<br>
https://www.enea.com/nfv-solutions/nfv-solutions-for-the-edge/<br>

Flera rekommendationer från Google PageSpeed är lika för alla testade websidor.
Den övergripande rekommendationen rör komprimering av olika resurser, främst bilder
samt minifiering av HTML samt CSS men även att bättre utnyttja browser caching.
Komprimering och optimering av bilder skulle enligt PageSpeed kunna ge en reducering
mellan 19-72% och en minifiering av HTML och CSS ytterligare reduceringar mellan
14-20% respektive 35%. Intressant att notera är att man även får poängavdrag för
resurser tillhandahållna av Google.

###[Katterian](http://www.katterian.se/)
[FIGURE src="image/katterian.png?w=300" class="center"]

**Analyserade sidor:**<br>
http://www.katterian.se/<br>
http://www.katterian.se/kattbilder-galleri-1/<br>
http://www.katterian.se/lankar/<br>

Flera rekommendationer från Google PageSpeed är lika för alla testade websidor.
Den övergripande rekommendationen rör komprimering av olika resurser, främst bilder
samt minifiering av Javascript samt CSS men även att bättre utnyttja browser caching.
Komprimering och optimering av bilder skulle enligt PageSpeed kunna ge en reducering
mellan 17-50% och en minifiering av Javascript och CSS ytterligare reduceringar mellan
29-32% respektive 30%. Det är intressant att man även utvärderar serverns responstider
vilken bör kunna förbättras.

Noterbart är även att denna site inte använder https.

###[Yale School of Art](http://art.yale.edu)
[FIGURE src="image/yaleArtSchool-1.png?w=300" class="center"]

**Analyserade sidor:**<br>
http://art.yale.edu/<br>
http://art.yale.edu/gallery<br>
http://art.yale.edu/Visiting<br>

Flera rekommendationer från Google PageSpeed är lika för alla testade websidor.
Den övergripande rekommendationen rör komprimering av olika resurser, främst bilder
samt minifiering av HTML, Javascript samt CSS men även att bättre utnyttja browser caching.
Komprimering och optimering av bilder skulle enligt PageSpeed kunna ge en reducering
mellan 29-54% och en minifiering av HTML, Javascript och CSS ytterligare reduceringar
mellan 21-29%, 26% respektive 21%. Det är intressant att man även utvärderar serverns
responstider vilken bör kunna förbättras.

Noterbart är även att denna site inte använder https.

###Sammanfattning
Överlag ger ovanstående analyser information om vikten av bra bildbehandling samt
komprimering och minifierng av olika resurser. Google pageSpeed gör uppenbarligen
ingen värdering av hur mycket som kan sparas. Vid ett test av denna sida skulle en
minfiering av style.less ge en besparing om 340B vilket är marginellt. Däremot kan
en optimering av bilder ge en besparing om 80kB. Ett ändringsarbet baserat på en
enkel analys enligt ovanstående, behöver vägas mot tidsåtgång och kostnad i
förhållande till förväntat resultat.

###Rangordning
Baserat på uppmätta PageSpeed resultat skulle rangordningen av dessa webbplaser bli:<br>
1. Enea<br>
2. Yale School of Art<br>
3. Katterian

Baserat på uppmätta laddningstider skulle rangordningen av dessa webbplaser bli:<br>
1. Yale School of Art<br>
2. Enea<br>
3. Katterian

Resultaten ger vid hand att man måste ta flera faktorer i beaktande innan man gör
bedömningen om vad som är bäst. En bra webbsida handlar inte bara om snabbhet eller
hur mycket data som överförs. Det handlar också om besökarens upplevelse av webbsidan.
Datamängden är naturligtvis viktig för den som kör mobilt eller sitter på en långsam uppkoppling.

###Upplevelse av laddningstid
Upplevelsen av laddtider är högst personlig och upplevs utifrån många faktorer.
Laddtider under 3 sekunder känns som en rimlig gräns. Erfareheterna från
utförda mätningar ger dock vid handen att en sida fortsätter att ladda resurser
efter det att information "above-the-fold" presenterats för besökaren. Därför är
den totala laddtiden inte helt rättvisande när det kommer till upplevelsen av en
webbsida. En intressant [artikel](https://www.hobo-web.co.uk/your-website-design-should-load-in-4-seconds/)
beskriver detta. Baserat på mätvärdena är det Yale School of Art som klarar detta
bäst tätt följd av Enea. Däremot är den övergripande designen av Yale mindre
tilltalande så upplevelsen vägs inte upp av laddtiderna.

<hr>

<a href="#">Back to top</a>

### Grupparbete
Ovanstående analyser är gjorda i grupp av Thomas Barnå (thba17) och "anbp17".
