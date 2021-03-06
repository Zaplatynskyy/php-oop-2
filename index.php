<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditariet√† dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
include_once __DIR__ . '/classes/Shop.php';
include_once __DIR__ . '/classes/User.php';
include_once './classes/UserPremium.php';
include_once __DIR__ . '/classes/CreditCard.php';
include_once __DIR__ . '/classes/Book.php';
include_once __DIR__ . '/classes/Distillate.php';


/*--------------------------------------
    PROVA PRODOTTI SHOP
--------------------------------------*/

$pragmatic_programmer = new Book('The Pragmatic Programmer','Libri', '29.00', 'A.Hunt and D.Thomas', 2018, 238);
$talisker_sky = new Distillate('Talisker Sky', 'Distillato', 52.26, 'Scotch Whisky', 'Talisker', 45.8);

// var_dump($pragmatic_programmer);
// echo $pragmatic_programmer->getName();
// echo $pragmatic_programmer->getAuthor();

// var_dump($talisker_sky);
// echo $talisker_sky-> getName();
// echo $talisker_sky-> getType();


/*--------------------------------------
    PROVA UTENTE,UTENTE PREMIUM E CARTE DI CREDITO
--------------------------------------*/

$utente_x = new User( 'Pippo', 'Rossi', new CreditCard('Pippo Rossi', '5255634480891234', '05/2022') );

// var_dump($utente_x);

$newCard =  new CreditCard('Pippo Rossi', '0000123452429989', '08/2024');
$utente_x->setCreditCard($newCard);

// var_dump($utente_x);

$utente_premium = new UserPremium('Pippo', 'Rossi', new CreditCard('Pippo Rossi', '0000123452429989', '08/2022'), 200);

// var_dump($utente_premium);

// echo $utente_premium->getDiscount();

$utente_premium->setPremiumPoints(600);
// echo $utente_premium->getDiscount();

$utente_premium->setPremiumPoints(1000);
// // var_dump($utente_premium);
// echo $utente_premium->getDiscount();

/*--------------------------------------
    PROVA ERRORE CARTA DI CREDITO SCADUTA
--------------------------------------*/

try {
    $creditCard = new CreditCard('Pippo Rossi', '000000000000', '01/2022');
} catch (Exception $e) {
    echo $e->getMessage();
}

?>