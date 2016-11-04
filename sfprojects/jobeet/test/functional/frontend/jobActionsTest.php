<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

// $browser->
//   get('/job/index')->

//   with('request')->begin()->
//     isParameter('module', 'job')->
//     isParameter('action', 'index')->
//   end()->

//   with('response')->begin()->
//     isStatusCode(200)->
//     checkElement('body', '!/This is a temporary page/')->
//   end()
// ;

$browser->setHttpHeader('ACCEPT_LANGUAGE', 'fr_FR,fr,en;q=0.7');
$browser->
info('6 - User culture')->

restart()->

info('  6.1 - For the first request, symfony guesses the best culture')->
get('/')->
with('response')->isRedirected()->
followRedirect()->
with('user')->isCulture('fr')->

info('  6.2 - Available cultures are en and fr')->
get('/it/')->
with('response')->isStatusCode(404)
;

$browser->setHttpHeader('ACCEPT_LANGUAGE', 'en,fr;q=0.7');
$browser->
info('  6.3 - The culture guessing is only for the first request')->

get('/')->
with('response')->isRedirected()->
followRedirect()->
with('user')->isCulture('fr')
;
