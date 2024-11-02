## 02-11-2024 | Zaterdag
* Laatste dingen gechecked

## 01-11-2024 | Vrijdag
* Alle code langsgegaan en onnodige code weggehaald. En kleine verbeteringen gedaan aan een paar pagina's
* Reviews schrijven gefixt. Het schrijven van een review werkte niet meer maar dat is nu opgelost
* ERD Geüpdate

## 31-10-2024 | Donderdag
* Laatste dingetjes gedaan aan de website. Er is nu een uitgebreidere about-us pagina die de gebruiker verwelkomt en informatie geeft over de website. 
* De dashboard pagina iets veraderd zodat je nu makkelijker terug kan gaan naar de andere pagina's

## 30-10-2024 | Woensdag
* Extra valdiatie en security toegevoegd

## 29-10-2024 | Dinsdag
* Alles in layouts en components gezet en daarbij CSS toegevoegd aan alle pagina's
* Gefixt dat de admin alle items kan editen ook als hij geen vijf items op de website heeft staan

## 28-10-2024 | Maandag
* De admin kan de zichtbaarheid van de items aanpassen vanaf de admin dashboard pagina. Door middel van een functie in de AdminController en een form met 'method='POST''
* Validatie toegevoegd aan de 'item edit' en 'category edit' pagina van de admin
* Diepere validatie toegevoegd aan het editen van items. Pas als een gebruiker vijf items of meer op de website heeft staan kan het die items bewerken

## 27-10-2024 | Zondag
* Ervoor gezorgd dat de admin items kan editen en deleten vanaf de admin dashboard pagina. En ook weer teruggestuurd wordt naar de admin dashboard pagina
* Ervoor gezorgd dat de admin categories kan editen.  

## 26-10-2024 | Zaterdag
* Een webpagina gemaakt voor alleen de admin. Waarin alle gegevens van de Items, Users en Categories bekeken kunnen wordne.

## 25-10-2024 | Vrijdag
* Validatie toegevoegd aan invoervelden
* Foutmelding toegevoegd als een invoerveld niet is ingevuld of verkeerd is ingevuld
* Ervoor gezorgd dat er nu ook gezocht kan worden naar item descriptions en niet alleen item names
* Ervoor gezorgd dat er niet gedeeplinked kan worden naar de edit pagina van een item als dat item niet van die gebruiker is

## 24-10-2024 | Donderdag
* Er kan nu een item verwijdert worden. Als er reviews onder het item stonden worden die ook meteen verwijdert
* Er kan nu een item worden bewerkt. Hierdoor kunnen de gegevens van het item worden aangepast.
* Ervoor gezorgd dat alleen de admin of de maker van een bepaald item het item kunnen verwijderen en bewerken.

## 23-10-2024 | Woensdag
* Er kan nu gefilterd worden op verschillende categorieën 
* Er is een zoekbalk waardoor de gebruiker specifieke dingen kan opzoeken

## 22-10-2024 | Dinsdag
* Ervoor gezorgd dat er nu een admin rol is. En dat de admin dingen kan die andere gebruikers niet kunnen 
* Admin rol toegevoegd aan de database

## 21-10-2024 | Maandag
* Er kan nu een nieuwe categorie aangemaakt worden. Die categorie kan ook geselecteerd worden als er een nieuw item aangemaakt word
* De categorie word getoond op de show pagina van het item

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
![ProjectERDv4.png](/_changelog/images/ProjectERDv4.png)





## 12-10-20204 | Zaterdag
* Alle Routes en Controllers opdrachten gemaakt

## 11-10-2024 | Vrijdag
* Laravel project aangemaakt met versiebeheer
* Project toegevoegd aan een GitHub repository
