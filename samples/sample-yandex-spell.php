<?php
/**
 * Test with Yandex Spell Service WSDL
 * @date 10/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/yandex-spell/YandexSpellAutoload.php';
/**
 * Yandex Informations
 */
define('YANDEX_WSDL','http://speller.yandex.net/services/spellservice?WSDL');
/**
 * init
 */
$wsdl = array(
			YandexSpellWsdlClass::WSDL_URL=>YANDEX_WSDL);
$y = new YandexSpellServiceCheck($wsdl);
/**
 * check Text
 */
$y->checkText(new YandexSpellTypeCheckTextRequest('My nam is John, im twelfe yer old.','EN'));
print_r($y);
/**
 * check Texts
 */
$y->checkTexts(new YandexSpellTypeCheckTextsRequest(array(
														'My nam is John, im twelfe yer old.',
														'Helo ! Todays is a goo dayi, isn\'it ?"'),'EN'));
print_r($y);
?>