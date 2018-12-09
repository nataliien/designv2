
Laddningstid
=======================

I denna rapport kommer jag titta på och analysera laddningstiden på tre olika webbplatser.

Urval
-----------------------

När jag gjorde mitt urval ville jag använda mig av webbplatser som använder sig av mycket bilder. Det första jag kom att tänka på var bloggar. Jag gick in på [bloggportalen.se](https://www.bloggportalen.se/BlogPortal/view/TopLists?tl=1) för att plocka ut de tre mest besökta privata bloggarna just nu. Resultatet blev [kenzas.se](https://kenzas.se), [paulas.me](https://paulas.me/) och [underbaraclaras.se](https://underbaraclaras.se/).

Metod
-----------------------

Jag använde mig av [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) för att göra mätningarna på bloggarnas laddningstid. Jag använde mig också av devtools för att ta reda på hur snabbt sidan laddade och hur stor sidan var.

[Länk](https://docs.google.com/spreadsheets/d/1Xl8CNFGe2UFxQM3aLqVCCu_8NJ615fcNv0EJRpDxANQ/edit#gid=0) till ett exelark där jag noterat rådatan.

Resultat
-----------------------

###Kenzas.se###

![kenzas.se](image/kenzas.png?w=700)

<u>[Home (sida 1)](http://kenzas.se/)</u>

Speed-score mobile: 32

Speed-score desktop: 94

Laddningstid snitt (av 3 gånger):	5,06 s.

Antal resurser: 116 förfrågningar

Sidans totala storlek:	5,45 MB


<u>[About (sida 2)](http://kenzas.se/kenza-zouiten-subosic/)</u>

Speed-score mobile: 49

Speed-score desktop: 99

Laddningstid snitt (av 3 gånger):	3,12 s.

Antal resurser: 50 förfrågningar

Sidans totala storlek:	3,21 MB


<u>[Around the world (sida 3)](http://kenzas.se/category/traveling/)</u>

Speed-score mobile: 36

Speed-score desktop: 98

Laddningstid snitt (av 3 gånger):	3,67 s.

Antal resurser: 75 förfrågningar kan man skjuta upp inläsningen

Sidans totala storlek:	5,14 MB

På denna webbplats skulle man bland annat kunna skjuta upp inläsningen av bilder som inte syns på skärmen. Detta är det som tar mest laddningstid på webbplatsen, både på mobil och dator.

###Paulas.me###

![paulas.me](image/paulas.png?w=700)

<u>[Home (sida 1)](http://paulas.me/)</u>

Speed-score mobile: 37

Speed-score desktop: 92

Laddningstid snitt (av 3 gånger):	4,52 s.

Antal resurser: 88 förfrågningar

Sidans totala storlek:	2,16 MB


<u>[Allmänt (sida 2)](https://paulas.me/category/allmant/)</u>

Speed-score mobile: 49

Speed-score desktop: 91

Laddningstid snitt (av 3 gånger):	3,41 s.

Antal resurser: 65 förfrågningar

Sidans totala storlek:	3,10 MB


<u>[Bilder (sida 3)](https://paulas.me/category/bilder/)</u>

Speed-score mobile: 34

Speed-score desktop: 87

Laddningstid snitt (av 3 gånger):	3,56 s.

Antal resurser: 67 förfrågningar

Sidans totala storlek:	3,87 MB

Även denna webbplats kan optimeras genom att skjuta upp inläsningen av bilder som inte visas. Även användandet av modernare bildformat kan hjälpa sidan att ladda snabbare.

###Underbaraclaras.se###

![underbaraclaras.se](image/underbaraclaras.png?w=700)

<u>[Home (sida 1)](https://underbaraclaras.se/)</u>

Speed-score mobile: 51

Speed-score desktop: 80

Laddningstid snitt (av 3 gånger):	3,13 s.

Antal resurser: 43 förfrågningar

Sidans totala storlek:	1,56 MB


<u>[Recept (sida 2)](https://underbaraclaras.se/recept/)</u>

Speed-score mobile: 60

Speed-score desktop: 86

Laddningstid snitt (av 3 gånger):	3,08 s.

Antal resurser: 45 förfrågningar

Sidans totala storlek:	1,18 MB


<u>[Clara-tv (sida 3)](https://underbaraclaras.se/category/webb-tv/)</u>

Speed-score mobile: 35

Speed-score desktop: 85

Laddningstid snitt (av 3 gånger):	3,23 s.

Antal resurser: 55 förfrågningar

Sidans totala storlek: 1,47 MB

På underbaraclaras webbplats kan laddningstiden förkortas genom att minska svarstiderna från servern och ta bort resurser som blockerar renderingen. Även denna sidas laddningstid kan optimeras genom att skicka bilderna i mordernare format men också lägga in bilder med rätt storlek.

Analys
-----------------------

Alla de webbplatser jag har analyserat har sämre laddingstid när på mobiler än vid dataanvändning. De vanligaste förbättringsåtgärderna på alla tre webbplatser är att skjuta upp inläsning av bilder som inte visas på skärmen, att skicka bilder i mordernare format och att skicka bilder i rätt storlek.

De vanligaste förbättringsåtgärderna vid dataanvändning är att minska svarstiderna från servern, skicka bilder i modernare bildformat och att ta bort resurser som blockerar renderingen. Dessa hade alla tre bloggar gemensamt.

Bäst i test
-----------------------

Trots att Underbaraclaras.se inte har det bästa hastighetsresultatet vid dataanvänding (85) så har den webbplatsen bäst laddingstid när det gäller mobilanvändning (61). Därför tar denna webbplats första platsen i "bästa webbpplats" av de jag har analyserat.

Kenzas.se har en väldigt bra laddningstid på dator (98) men väldigt dålig när det gäller mobilanvändning (33). Dock har denna webbpplats mycket bättre genomsnittlig laddningstid än paulas.me's webbplats.

Paulas.me har vid dataanvädning en laddningstid på 84, men är ganska långsam när det gäller mobilanvändning (34). Detta gör att den hamnar sist i min jämförelse.

Reflektion
-----------------------
Jag har aldrig tidigare reflekterat kring laddningstid och vilket värde som är snabbt/långsamt. Därför är det svårt för mig att ha ett "gränsvärde" för hur snabbt jag tycker att en webbplats ska ladda. Jag upplever att alla mina webbplatser är relativt snabbladdade och märker ingen stor skillnad mellan dem.


Referenser
-----------------------

*[https://developers.google.com/speed/pagespeed/insights/](https://developers.google.com/speed/pagespeed/insights/)*

*[https://www.bloggportalen.se/BlogPortal/view/TopLists?tl=1](https://www.bloggportalen.se/BlogPortal/view/TopLists?tl=1)*

*[https://www.kenzas.se/](https://www.kenzas.se/)*

*[https://www.paulas.me/](https://www.paulas.me/)*

*[https://www.underbaraclaras.se/](https://www.underbaraclaras.se/)*


Övrigt
-----------------------

Författare av rapporten: Natalie Nikou
