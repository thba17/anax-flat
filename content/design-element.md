Designelement
=

Du kan enkelt byta tema via vår **[Temaväljare](theme-selector)**

Till denna uppgifte har jag skapat tre nya teman. Samtliga av dessa bygger på det enkla temat base:
Element1
Element2
Element3

**Uppgiften består i att kombinera följande i dessa tre teman:**<br>
1 - Ett tema skall ha en bakgrundsbild som är ett foto, gärna återkommande i flera regioner.<br>
2 - Ett tema skall ha en textur, eller bild som upplevs som strukturell, som bakgrund. Gärna återkommande i flera regioner.<br>
3 - Ett tema skall bygga på bakgrundsfärger med gradients i flera av sidans regioner.<br>
4 - Använd genomskinliga element, opacity, så att bakgrunden, vid behov, lyser igenom (lagom mycket).<br>
5 - Ett tema skall tydligt använder sig av streck (variationer av borders) för att lyfta fram designen.<br>
6 - Ett tema skall låta innehållet sträcka sig över hela webbläsarens bredd.<br>
7 - Ett tema skall låta innehållet vara centrerat i mitten.<br>
8 - Ett tema skall använda ett par bilder som placerats ut som designelement på sidan (i bakgrunden).

###Element1
Här har jag kombinterat punkterna 2, 4 och 7.<br>

Bakgrunden är en bild som visualiserar en struktur av ett gammalt pergament. Färgen
är något svårarbetad då den inte kontrasterar tydligt mot svart eller vit text. Att
lägga denna bild som bakgrund i flera regioner tycker jag bli för oroligt och jag
valde att arbeta med opacity istället.

Footer har en solid färg för att ge en stabil bas för hela sidan. Här har jag plockat
en färg som ligger i linje med texturbilden. Samma färg har jag använt som bakgrund
till klasserna .inner-wrap-header och .main men här valde jag en svag opacity för
att låta texturen lysa igenom.

I detta tema är innehållet centrerat precis som vi byggt upp sidan i tidigare övningar.

###Element2
Här har jag kombinterat punkterna 3, 4, 5 och 6.<br>
Jag satte max-width till 100% på klassen .inner-wrap-main vilket gör att hela
sidbredden utnyttjas till sidans innehåll. Huvudmenyn sträcker sig redan nu över
hela bredden och footer valde jag att lämna centrerad men med en bakgrundsfärg
som ligger över hela bredden.

Jag tycker att sidan blir för kladdig med för många ramar och streck. Därför valde
jag att endast lägga en border-bottom på navbar2 samt en border-top på footer. Jag
lade även en border-style ridge på alla sidomenyer av klassen .toc

Eftersom textfärgen i navbar är svart och bakgrunden skiftar från ljus till mörk,
valde jag att lägga en vit bakrundsfärg till denna med opacity så att skiftningen
lyser igenom. Opacity blev relativt hög för att uppnå rätt genomskinlighet men ändå
lagom kontrast med textfärgen.

Slutligen lekte jag lite med bakgrundsfärger och gradients. Footer har en solidmörk
färg vilken ger en tydlig och stabil bas som hela sidan vilar på.

###Element3
Här har jag kombinterat punkterna 1, 7 och 8.<br>
Som bakgrund valde jag en bild från Pixabay. Denna ligger fixed och övrigt innehåll flyter ovanpå.
Denna bild återkommer som bakgrund i .outer-wrap-flash och footer.

I detta tema är innehållet centrerat precis som vi byggt upp sidan i tidigare övningar.

Som designelement i bakgrunden har jag valt en gul, cirkelformad figur som ligger i klassen .article
