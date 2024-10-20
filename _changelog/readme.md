## 20-10-2024 | Zondag
* Ervoor gezorgd dat de reviews bij een bepaald item alleen horen bij dat item. En niet dat een item alle reviews van alle items laat zien

## 19-10-2024 | Zaterdag
* ERD Geüpdate
* Er kan nu een item worden toegevoegd op de website. Dit item komt ook in de database
* Er staan nu meer details bij de lijst met items. Zoals wie het heeft toegevoegd en de tags


## 17-10-2024 | Donderdag
* Verder gewerkt aan de opdrachten van les 6. Er is nu een formulier waar je een review kan schrijven over een item
* Ervoor gezorgd dat een review word opgeslagen in de databese

## 16-10-2024 | Woensdag
* Ervoor gezorgd dat er nu op items in de array geklikt kan worden op de products pagina. 
Dit laat nu een gedetaileerd overzicht zien van het item
* Begonnen met de opdrachten van les 6
* Database gemaakt voor de reviews. Met daarbij de Controller, Model en View

## 15-10-2024 | Dinsdag
* Met models en Migration gewerkt
* Alle opdrachten  van les 5 gemaakt
* ERD Geüpdate

## 14-10-2024 | Maandag
* Met components gewerkt
* Alle opdrachten van les 4 gemaakt
* ERD Geüpdate

## 13-10-2024 | Zondag 
* User Stories bedacht en opgeschreven
* ERD voor dit project gemaakt
#### User Stories:
| User Stories                                                                          |                                                                              DoD                                                                              | MoSCoW |
|:--------------------------------------------------------------------------------------|:-------------------------------------------------------------------------------------------------------------------------------------------------------------:|-------:|
| Als **gebruiker** wil ik                                                              |                                                                                                                                                               |        |
| Een account aan kunnen maken                                                          |                     Er is een registratie pagina waar de gebruiker een account aan kan maken. Met **naam**, **e-mail** en **wachtwoord**                      |      M |
| kunnen inloggen                                                                       |                                   Er is een inlog pagina waaar de gebruiker kan inloggen. Met **e-mail** en **wachtwoord**                                    |      M |
| de mogelijkheid om mijn wachtwoord te veranderen als ik het vergeten ben              |                                   Er is een lijnkje op de inlogpagina naar een pagina waar je je wachtwoord kan veranderen                                    |      C |
| dat de website veilig is en gebruik maakt van validatie                               |                            Bij invoervelden word gebruikgemaakt van verplichte velden. Er kan **geen** Javascript in getypt worden                            |      S |
| mijn gegevens kunnen aanpassen                                                        |                                               Er is een pagina waar de gebruiker zijn gegevens kunnen aanpassen                                               |      C |
| een nieuw item kunnen aanmaken en als enige dit item kunnen aanpassen                 | Als een gebruiker is ingelogd is er de mogelijkheid om naar een pagina te gaan waar je een item kan aanmaken. Bij het aangemaakte item staat een bewerk knop. |      M |
| kunnen zoeken naar bepaalde items, met daarbij bepaalde filters die ik aan kan zetten |                                     Bovenaan de pagina met items staat een zoekbalk. Ernaast staan verschillende filters.                                     |      M |
| een beschrijving kunnen toevoegen aan mijn profiel (kan misschien nog veranderen)     |                 Dit kan pas nadat de gebruiker twee keer een item heeft gemaakt. Het tellen moet met een losse query (Eloquent) gedaan worden                 |      S |
| Als **admin** wil ik                                                                  |                                                                                                                                                               |        |
| kunnen inloggen                                                                       |                                      Er is een inlogpagina waar de admin kan inloggen. Met **e-mail** en **wachtwoord**.                                      |      M |
| alle items kunnen bewerken en verwijderen                                             |                                             Als er als admin is ingelogd staat er een bewerk knop bij alle items                                              |      M |

#### ERD:
![ProjectERDv3.png](/_changelog/images/ProjectERDv3.png)





## 12-10-20204 | Zaterdag
* Alle Routes en Controllers opdrachten gemaakt

## 11-10-2024 | Vrijdag
* Laravel project aangemaakt met versiebeheer
* Project toegevoegd aan een GitHub repository
