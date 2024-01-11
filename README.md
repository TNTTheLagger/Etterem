Készítsd egy olyan webes rendszert, mely egy 6 asztalos apró étterem dolgozót segíti a rendelések kezelésében! A programnak a következő funkciókkal kell rendelkeznie:

Szükség lesz egy egyszerűsített adatbázisra a következő táblákkal:

· Ételek (ételazonosító, név, ár, elfogyott)

· Leadott rendelések (rendelésazonosító, ételazonosító, asztalszám, rendelés ideje, felszolgálva-e)

Elengedhetetlen egy felület (pincer.php), amin a pincér rögzíteni tudja szépen egymás után a rendeléseket amikor kimegy az asztalhoz. (Az egyszerűség kedvéért az asztal minden ételét egyesével rögzíti.) Az asztal számát (1-6) rádiógombbal választja ki, az ételt pedig egy lenyíló listából az adatbázisban lévő aktuális kínálat alapján. Egy gomb lenyomására a rendelt étel adatai a AJAX segítségével a rogzit.php állományhoz kerülnek, ami beírja azokat az adatbázisba!

A konyhán van egy nagyméretű kijelző, melyen a szakácsok csoportosítva látják, hogy melyik ételből összesen hány adagra van leadva rendelés. (A már felszolgált ételek természetesen nincsennek a listában.) Ez az összesített lista 10 másodpercenként frissül és a szakacs.html valósítja meg amit a konyha_leker.php szolgál ki AJAX kérések alapján. A szakácsoknak megjelenő felületen valahol külön, pirossal listázódnak az egy bizonyos időnél régebben leadott (sürgősen elkészítendő) ételek!

A pincérpultban is van egy számítógép, amin az asztalok.html fut. Ezen grafikusan látszik az asztalok elrendezése és száma:

1 2 3

4 5 6

Ha egy asztal még szabad, azaz nem adtak le rendelés akkor annak színe zöld, egyébként narancs. A pincér az asztalra kattintva ezen a felületen látja az ott leadott rendeléseket és egyenként be tudja jelölni melyiket szolgálta már fel azok közül. Az adatokat a pincer_leker.php szolgáltatja! Ezen a felületen valahol a pincér látja az asztal rendeléseinek összértékét is.
