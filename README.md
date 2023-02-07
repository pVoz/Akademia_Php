# Akademia_Php

Zadanie :   PHP-lvl 1

            "sprav logovac prichodov studentov"
            - nainstaluj si php nech vies servnut php script
            - sprav zakladny php skript, ktory vypise ahoj
            - vypis aktualny datum a cas naformatovany
            - ukladaj aktualny datum a cas do suboru (ak uz v subore existuje datum a cas, novy cas sa pripise), kazdy zaznam daj na novy riadok
            - getuj obsah log suboru a vypis ho
            - sprav tie veci co tu su cez funkcie ktore budu pomenovavat co sa robi, napriklad na ziskanie dat zo suboru nazves funkciu getLogs()
            - ak prisiel student po 8:00, tak dopis do logu za cas dopis  string ""meskanie""
            - sprav premennu v ktorej vyhodnotis ci nastalo meskanie a tuto premennu posileaj ako parameter do funkcie ktora zapisuje logy do suboru
            - ak pride student medzi 20-24, tak vyhod chybu cez die, ze nemoze sa dany prichod zapisat

            PHP-lvl 2

            "dorob do logovacu moznost custom sprav"
            - pridaj form s inputom meno studenta, ktory sa bude submitovat cez POST
            - dorob aby sa pri prichode logovalo aj meno studenta
            - sprav aby to akceptovalo meno aj cez url adresu ze ?meno=jozko
            - sprav studenti.json, kde sa budu ukladat studenti ktori prisli
            - ak subor existuje tak loadni stary studenti.json, a pridaj novy zaznam
            - incrementuj pri prichode studenta cislo v jsone, ktore bude reprezentovat celkovy pocet prichodov
            - vypis obsah mapy studentov po decodovani pomocou print_r
            - sprav prichody.json, ktory bude len pole vsetkych prichodov, a rovnako ho appenduj decodovanim a encodovanim jsonu
            - preiteruj pole z prichody.json, a k meskajucim datumom napis ze ""meskanie""
            - funkcie, ktore suvisia s logovanim studenti.json, prerob do classy na staticke funkcie
            - funkcie, ktore suvisia s logovanim prichody.json, prerob do classy a funkcie pouzivaj tak ze najprv vytvoris instanciu classy (objekt)
            - v classe ktoru pouzivas ako instanciu, vytvor private metodu ktoru pouzijes ako nejaku pomocnu feature pri logovani (napriklad ziskavanie ci nastalo meskanie)"
