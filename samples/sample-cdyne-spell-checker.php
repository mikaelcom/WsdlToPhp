<?php
/**
 * Test with CDYNE Spell Checker WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-spell-checker/CdyneSpellCheckerAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://wsf.cdyne.com/SpellChecker/check.asmx?wsdl');
/**
 * License
 */
$s = new CdyneSpellCheckerServiceCheck(array(
											CdyneSpellCheckerWsdlClass::WSDL_URL=>CDYNE_WSDL));
$s->CheckTextBodyV2(new CdyneSpellCheckerTypeCheckTextBodyV2(new CdyneSpellCheckerTypeCheckTextBody('Helo, my name is Alejandro, I speaks very bad englesh.',CDYNE_KEY)));
print_r($s);
?>