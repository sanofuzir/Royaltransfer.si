<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('rs', array (
  'messages' => 
  array (
    'Domov' => 'Dom',
    'O nas' => 'O nama',
    'Novice' => 'Vesti',
    'Izleti' => 'Izleti',
    'Povpraševanje' => 'potražnja',
    'Galerija' => 'Galerija',
    'Galerija slik' => 'Galerija slika',
    'Video Galerija' => 'Video galerija',
    'Kontakt' => 'Kontaktirajte nas',
    'Telefon' => 'Telefon',
    'Elektronska pošta' => 'E-mail',
    'Shrani' => 'Sačuvati',
    'Naročilo' => 'Naruđba',
    'Naročilo transporta' => 'Naruđba transporta',
    'Pošlji' => 'Pošalji',
    'Naroči' => 'Naručiti',
    'Nazaj' => 'Nazad',
    'Več' => 'More',
    'Ponujamo izlet na naslednjo destinacijo' => 'Nudimo izlet na sledeće destinaciju',
    'V izdelavi' => 'U izgradnji',
    'Ime' => 'Ime',
    'Podjetje' => 'Kompanija',
    'Email' => 'E-mail',
    'Vnos besedila' => 'Umetnite text',
    'Dobrodošli na naši spletni strani' => 'Dobro došli na našu web stranicu.',
    'Smo podjetje, ki je specializirano za opravljanje prevozov v Sloveniji in v tujini. Vedno urejeni vozniki z urejenimi vozili Vam nudijo kvaliteto storitev. Prevozi, ki jih opravljamo so lahko na določene destinacije ali kamorkoli na Vašo željo.' => 'Mi smo firma koja je specijalizovana za pružanje usluga u Sloveniji i inostranstvu . Naši pouzdani vozači nude Vam kvalitetne usluge u uređenim vozilima. Usluge koje pružamo mogu biti na određenom mestu ili bilo gde na Vaš zahtev.',
    'Zagotavljamo hitro odzivnost glede na Vaše potrebe.' => 'Garantujemo Vam brzo vreme odziva prema Vašim potrebama.',
    'Z našimi vozili bo vožnja vedno udobna in varna, saj vozila spadajo v višji cenovni razred, prav tako pa tudi v najvišji razred varnosti.' => 'Vožnja našim vozilima će Vam biti udobna i sigurna,  jer vozila pripadaju višem cenovnom rangu, kao i najvišem razredu sigurnosti.',
    'Galerijo vozil si lahko ogledate na naši spletni strani. Nudimo tudi enodnevne ali večdnevne najeme vozil z urejenimi vozniki, kateri Vas popeljejo po raznih opravkih ali  sestankih, Vas tam počakajo in na koncu dneva poskrbijo, da prispete varno domov ali v hotel.' => 'Galeriju naših vozila možete pogledati na našoj web stranici. Takođe nudimo jednodnevni ili višednevni najam vozila sa uređenim vozačima, koji Vas mogu odvesti na različite krajeve ili sastanke. Vozači će Vas sačekati, da sredite sve što morate, te Vas nakon toga sigurno odvesti do boravka ili hotela.',
    'Organiziramo tudi izlete po raznih krajih v Sloveniji. Naš voznik Vas na kraju počaka in Vas varno pripelje tudi nazaj. Kraje in zanimive destinacije si lahko ogledate na naši spletni strani.' => 'Takođe organizujemo  izlete po različitim mestima u Sloveniji . Naš vozač će Vas sačekati i odvesti nazad. Sva mesta i zanimljive destinacije možete naći na našoj web stranici.',
    'Za vse informacije nas lahko kontaktirate preko telefona ali elektronske pošte. V najkrajšem možnem času Vas bomo kontaktirali in Vam posredovali željene informacije.' => 'Za sve informacije možete nas kontaktirati putem telefona ili e-pošte,  a mi ćemo Vas pokušati kontaktirati u najkraćem mogućem vremenu i pružiti Vam potrebne informacije.',
    'Zahvaljujemo se Vam za obisk naše spletne strani.' => 'Hvala Vam na poseti naše stranice.',
  ),
));

$catalogueSl = new MessageCatalogue('sl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost bi morala biti nepravilna (false).',
    'This value should be true.' => 'Vrednost bi morala biti pravilna (true).',
    'This value should be of type {{ type }}.' => 'Vrednost mora biti naslednjega tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost mora biti prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost, ki ste jo izbrali, ni veljavna možnost.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izbrati morate vsaj {{ limit }} možnost.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izberete lahko največ {{ limit }} možnost.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.',
    'One or more of the given values is invalid.' => 'Ena ali več podanih vrednosti ni veljavnih.',
    'The fields {{ fields }} were not expected.' => 'Polja {{ fields }} niso bila pričakovana.',
    'The fields {{ fields }} are missing.' => 'Polja {{ fields }} manjkajo.',
    'This value is not a valid date.' => 'Ta vrednost ni veljaven datum.',
    'This value is not a valid datetime.' => 'Ta vrednost ni veljaven datum in čas.',
    'This value is not a valid email address.' => 'Ta vrednost ni veljaven e-poštni naslov.',
    'The file could not be found.' => 'Datoteke ni mogoče najti.',
    'The file is not readable.' => 'Datoteke ni mogoče prebrati.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke je neveljaven ({{ type }}). Dovoljeni mime tipi so {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta vrednost bi morala biti {{ limit }} ali manj.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta vrednost je predolga. Morala bi imeti {{ limit }} znak ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znaka ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znake ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znakov ali manj.',
    'This value should be {{ limit }} or more.' => 'Ta vrednost bi morala biti {{ limit }} ali več.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta vrednost je prekratka. Morala bi imeti {{ limit }} znak ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znaka ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znake ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znakov ali več.',
    'This value should not be blank.' => 'Ta vrednost ne bi smela biti prazna.',
    'This value should not be null.' => 'Ta vrednost ne bi smela biti nedefinirana (null).',
    'This value should be null.' => 'Ta vrednost bi morala biti nedefinirana (null).',
    'This value is not valid.' => 'Ta vrednost ni veljavna.',
    'This value is not a valid time.' => 'Ta vrednost ni veljaven čas.',
    'This value is not a valid URL.' => 'Ta vrednost ni veljaven URL.',
    'The two values should be equal.' => 'Ti dve vrednosti bi morali biti enaki.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika. Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Datoteka je prevelika.',
    'The file could not be uploaded.' => 'Datoteke ni bilo mogoče naložiti.',
    'This value should be a valid number.' => 'Ta vrednost bi morala biti veljavna številka.',
    'This file is not a valid image.' => 'Ta datoteka ni veljavna slika.',
    'This is not a valid IP address.' => 'To ni veljaven IP naslov.',
    'This value is not a valid language.' => 'Ta vrednost ni veljaven jezik.',
    'This value is not a valid locale.' => 'Ta vrednost ni veljavna lokalnost.',
    'This value is not a valid country.' => 'Ta vrednost ni veljavna država.',
    'This value is already used.' => 'Ta vrednost je že uporabljena.',
    'The size of the image could not be detected.' => 'Velikosti slike ni bilo mogoče zaznati.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je preširoka ({{ width }}px). Največja dovoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premajhna ({{ width }}px). Najmanjša predvidena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Višina slike je prevelika ({{ height }}px). Največja dovoljena višina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Višina slike je premajhna ({{ height }}px). Najmanjša predvidena višina je {{ min_height }}px.',
    'This value should be the user current password.' => 'Ta vrednost bi morala biti trenutno uporabnikovo geslo.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta vrednost bi morala imeti točno {{ limit }} znak.|Ta vrednost bi morala imeti točno {{ limit }} znaka.|Ta vrednost bi morala imeti točno {{ limit }} znake.|Ta vrednost bi morala imeti točno {{ limit }} znakov.',
    'The file was only partially uploaded.' => 'Datoteka je bila le delno naložena.',
    'No file was uploaded.' => 'Nobena datoteka ni bila naložena.',
    'No temporary folder was configured in php.ini.' => 'Začasna mapa ni nastavljena v php.ini.',
    'Cannot write temporary file to disk.' => 'Začasne datoteke ni bilo mogoče zapisati na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP razširitev je vzrok, da nalaganje ni uspelo.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali več.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali več.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali manj.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ta zbirka bi morala vsebovati točno {{ limit }} element.|Ta zbirka bi morala vsebovati točno {{ limit }} elementa.|Ta zbirka bi morala vsebovati točno {{ limit }} elemente.|Ta zbirka bi morala vsebovati točno {{ limit }} elementov.',
    'Invalid card number.' => 'Neveljavna številka kartice.',
    'Unsupported card type or invalid card number.' => 'Nepodprti tip kartice ali neveljavna številka kartice.',
    'This is not a valid International Bank Account Number (IBAN).' => 'To ni veljavna mednarodna številka bančnega računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Neveljavna vrednost po ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-10 ali po ISBN-13.',
    'This value is not a valid ISSN.' => 'Neveljavna vrednost ISSN.',
    'This value is not a valid currency.' => 'Ta vrednost ni veljavna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti enaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta vrednost bi morala biti večja od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti večja ali enaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost bi morala biti identična {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša ali enaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta vrednost ne bi smela biti enaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost ne bi smela biti identična {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmerje slike je preveliko ({{ ratio }}). Največje dovoljeno razmerje je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmerje slike je premajhno ({{ ratio }}). Najmanjše pričakovano razmerje je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadrat ({{ width }}x{{ height }}px). Kvadratne slike niso dovoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je ležeče usmerjena ({{ width }}x{{ height }}px). Ležeče usmerjene slike niso dovoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je pokončno usmerjena ({{ width }}x{{ height }}px). Pokončno usmerjene slike niso dovoljene.',
    'This form should not contain extra fields.' => 'Ta obrazec ne sme vsebovati dodatnih polj.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Naložena datoteka je prevelika. Prosimo, poizkusite naložiti manjšo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je napačna. Prosimo, ponovno pošljite obrazec.',
    'fos_user.username.already_used' => 'Uporabniško ime že obstaja',
    'fos_user.username.blank' => 'Prosimo, vnesite uporabniško ime',
    'fos_user.username.short' => '[-Inf,Inf]Uporabniško ime je prekratko',
    'fos_user.username.long' => '[-Inf,Inf]Uporabniško ime je predolgo',
    'fos_user.email.already_used' => 'Email že obstaja',
    'fos_user.email.blank' => 'Prosimo, vnesite email',
    'fos_user.email.short' => '[-Inf,Inf]Email je prekratek',
    'fos_user.email.long' => '[-Inf,Inf]Email je predolg',
    'fos_user.email.invalid' => 'Email je napačen',
    'fos_user.password.blank' => 'Prosimo, vnesite geslo',
    'fos_user.password.short' => '[-Inf,Inf]Geslo je prekratko',
    'fos_user.password.mismatch' => 'Vpisani gesli se ne ujemata',
    'fos_user.new_password.blank' => 'Prosimo, vnesite novo geslo',
    'fos_user.new_password.short' => '[-Inf,Inf]Novo geslo je prekratko',
    'fos_user.current_password.invalid' => 'Geslo je napačno',
    'fos_user.group.blank' => 'Prosimo, vnesite ime',
    'fos_user.group.short' => '[-Inf,Inf]Ime je prekratko',
    'fos_user.group.long' => '[-Inf,Inf]Ime je predolgo',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Prišlo je do izjeme pri preverjanju avtentikacije.',
    'Authentication credentials could not be found.' => 'Poverilnic za avtentikacijo ni bilo mogoče najti.',
    'Authentication request could not be processed due to a system problem.' => 'Zahteve za avtentikacijo ni bilo mogoče izvesti zaradi sistemske težave.',
    'Invalid credentials.' => 'Neveljavne pravice.',
    'Cookie has already been used by someone else.' => 'Piškotek je uporabil že nekdo drug.',
    'Not privileged to request the resource.' => 'Nimate privilegijev za zahtevani vir.',
    'Invalid CSRF token.' => 'Neveljaven CSRF žeton.',
    'Digest nonce has expired.' => 'Začasni žeton je potekel.',
    'No authentication provider found to support the authentication token.' => 'Ponudnika avtentikacije za podporo prijavnega žetona ni bilo mogoče najti.',
    'No session available, it either timed out or cookies are not enabled.' => 'Seja ni na voljo, ali je potekla ali pa piškotki niso omogočeni.',
    'No token could be found.' => 'Žetona ni bilo mogoče najti.',
    'Username could not be found.' => 'Uporabniškega imena ni bilo mogoče najti.',
    'Account has expired.' => 'Račun je potekel.',
    'Credentials have expired.' => 'Poverilnice so potekle.',
    'Account is disabled.' => 'Račun je onemogočen.',
    'Account is locked.' => 'Račun je zaklenjen.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Napačno uporabniško ime ali geslo',
    'group.edit.submit' => 'Shrani',
    'group.show.name' => 'Ime skupine',
    'group.new.submit' => 'Shrani',
    'group.flash.updated' => 'Skupina je bila uspešno shranjena',
    'group.flash.created' => 'Skupina je bila uspešno ustvarjena',
    'group.flash.deleted' => 'Skupina je bila uspešno izbrisana',
    'security.login.username' => 'Uporabniško ime:',
    'security.login.password' => 'Geslo:',
    'security.login.remember_me' => 'Zapomni si me',
    'security.login.submit' => 'Prijava',
    'profile.show.username' => 'Uporabniško ime',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Shrani',
    'profile.flash.updated' => 'Profil je bil uspešno shranjen',
    'change_password.submit' => 'Spremeni geslo',
    'change_password.flash.success' => 'Geslo je bilo uspešno spremenjeno',
    'registration.check_email' => 'Na %email% smo vam poslali sporočilo s kodo za aktivacijo. Račun aktivirate s klikom na to povezavo.',
    'registration.confirmed' => 'Pozdravljeni %username%, vaš račun je sedaj aktiviran.',
    'registration.back' => 'Nazaj na prvotno stran.',
    'registration.submit' => 'Registracija',
    'registration.flash.user_created' => 'Uporabnik je bil uspešno ustvarjen',
    'registration.email.subject' => 'Dobrodošli %username%!',
    'registration.email.message' => 'Pozdravljeni %username%!

Za aktivacijo računa prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'resetting.password_already_requested' => 'V zadnjih 24h ste že zahtevali spremembo gesla.',
    'resetting.check_email' => 'Na %email% smo vam poslali sporočilo s kodo za spremembo gesla. Geslo boste spremenili po kliku na to povezavo.',
    'resetting.request.invalid_username' => 'Uporabnik "%username%" ne obstaja.',
    'resetting.request.username' => 'Uporabniško ime:',
    'resetting.request.submit' => 'Spremeni geslo',
    'resetting.reset.submit' => 'Spremeni geslo',
    'resetting.flash.success' => 'Geslo je bilo uspešno spremenjeno',
    'resetting.email.subject' => 'Sprememba gesla',
    'resetting.email.message' => 'Pozdravljeni %username%!

Za spremembo gesla prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'layout.logout' => 'Odjava',
    'layout.login' => 'Prijava',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kot %username%',
    'form.group_name' => 'Ime skupine:',
    'form.username' => 'Uporabniško ime:',
    'form.email' => 'Email:',
    'form.current_password' => 'Trenutno geslo:',
    'form.password' => 'Geslo:',
    'form.password_confirmation' => 'Preverjanje gesla:',
    'form.new_password' => 'Novo geslo:',
    'form.new_password_confirmation' => 'Preverjanje gesla:',
  ),
));
$catalogue->addFallbackCatalogue($catalogueSl);


return $catalogue;
