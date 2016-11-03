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

  $browser->setHttpHeader('X_REQUESTED_WITH', 'XMLHttpRequest');
  $browser->
  info('5 - Live search')->
  
  get('/search?query=sens*')->
  with('response')->begin()->
  checkElement('table tr', 2)->
  end()
  ;
