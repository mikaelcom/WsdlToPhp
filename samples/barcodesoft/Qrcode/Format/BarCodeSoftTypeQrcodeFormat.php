<?php
/**
 * Class file for BarCodeSoftTypeQrcodeFormat
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeQrcodeFormat
 * @date 02/08/2012
 */
class BarCodeSoftTypeQrcodeFormat extends BarCodeSoftWsdlClass
{
	/**
	 * Constant for value 'AutoSelect'
	 * @return string 'AutoSelect'
	 */
	const VALUE_AUTOSELECT = 'AutoSelect';
	/**
	 * Constant for value '_21x21'
	 * @return string '_21x21'
	 */
	const VALUE__21X21 = '_21x21';
	/**
	 * Constant for value '_25x25'
	 * @return string '_25x25'
	 */
	const VALUE__25X25 = '_25x25';
	/**
	 * Constant for value '_29x29'
	 * @return string '_29x29'
	 */
	const VALUE__29X29 = '_29x29';
	/**
	 * Constant for value '_33x33'
	 * @return string '_33x33'
	 */
	const VALUE__33X33 = '_33x33';
	/**
	 * Constant for value '_37x37'
	 * @return string '_37x37'
	 */
	const VALUE__37X37 = '_37x37';
	/**
	 * Constant for value '_41x41'
	 * @return string '_41x41'
	 */
	const VALUE__41X41 = '_41x41';
	/**
	 * Constant for value '_45x45'
	 * @return string '_45x45'
	 */
	const VALUE__45X45 = '_45x45';
	/**
	 * Constant for value '_49x49'
	 * @return string '_49x49'
	 */
	const VALUE__49X49 = '_49x49';
	/**
	 * Constant for value '_53x53'
	 * @return string '_53x53'
	 */
	const VALUE__53X53 = '_53x53';
	/**
	 * Constant for value '_57x57'
	 * @return string '_57x57'
	 */
	const VALUE__57X57 = '_57x57';
	/**
	 * Constant for value '_61x61'
	 * @return string '_61x61'
	 */
	const VALUE__61X61 = '_61x61';
	/**
	 * Constant for value '_65x65'
	 * @return string '_65x65'
	 */
	const VALUE__65X65 = '_65x65';
	/**
	 * Constant for value '_69x69'
	 * @return string '_69x69'
	 */
	const VALUE__69X69 = '_69x69';
	/**
	 * Constant for value '_73x73'
	 * @return string '_73x73'
	 */
	const VALUE__73X73 = '_73x73';
	/**
	 * Constant for value '_77x77'
	 * @return string '_77x77'
	 */
	const VALUE__77X77 = '_77x77';
	/**
	 * Constant for value '_81x81'
	 * @return string '_81x81'
	 */
	const VALUE__81X81 = '_81x81';
	/**
	 * Constant for value '_85x85'
	 * @return string '_85x85'
	 */
	const VALUE__85X85 = '_85x85';
	/**
	 * Constant for value '_89x89'
	 * @return string '_89x89'
	 */
	const VALUE__89X89 = '_89x89';
	/**
	 * Constant for value '_93x93'
	 * @return string '_93x93'
	 */
	const VALUE__93X93 = '_93x93';
	/**
	 * Constant for value '_97x97'
	 * @return string '_97x97'
	 */
	const VALUE__97X97 = '_97x97';
	/**
	 * Constant for value '_101x101'
	 * @return string '_101x101'
	 */
	const VALUE__101X101 = '_101x101';
	/**
	 * Constant for value '_105x105'
	 * @return string '_105x105'
	 */
	const VALUE__105X105 = '_105x105';
	/**
	 * Constant for value '_109x109'
	 * @return string '_109x109'
	 */
	const VALUE__109X109 = '_109x109';
	/**
	 * Constant for value '_113x113'
	 * @return string '_113x113'
	 */
	const VALUE__113X113 = '_113x113';
	/**
	 * Constant for value '_117x117'
	 * @return string '_117x117'
	 */
	const VALUE__117X117 = '_117x117';
	/**
	 * Constant for value '_121x121'
	 * @return string '_121x121'
	 */
	const VALUE__121X121 = '_121x121';
	/**
	 * Constant for value '_125x125'
	 * @return string '_125x125'
	 */
	const VALUE__125X125 = '_125x125';
	/**
	 * Constant for value '_129x129'
	 * @return string '_129x129'
	 */
	const VALUE__129X129 = '_129x129';
	/**
	 * Constant for value '_133x133'
	 * @return string '_133x133'
	 */
	const VALUE__133X133 = '_133x133';
	/**
	 * Constant for value '_137x137'
	 * @return string '_137x137'
	 */
	const VALUE__137X137 = '_137x137';
	/**
	 * Constant for value '_141x141'
	 * @return string '_141x141'
	 */
	const VALUE__141X141 = '_141x141';
	/**
	 * Constant for value '_145x145'
	 * @return string '_145x145'
	 */
	const VALUE__145X145 = '_145x145';
	/**
	 * Constant for value '_149x149'
	 * @return string '_149x149'
	 */
	const VALUE__149X149 = '_149x149';
	/**
	 * Constant for value '_153x153'
	 * @return string '_153x153'
	 */
	const VALUE__153X153 = '_153x153';
	/**
	 * Constant for value '_157x157'
	 * @return string '_157x157'
	 */
	const VALUE__157X157 = '_157x157';
	/**
	 * Constant for value '_161x161'
	 * @return string '_161x161'
	 */
	const VALUE__161X161 = '_161x161';
	/**
	 * Constant for value '_165x165'
	 * @return string '_165x165'
	 */
	const VALUE__165X165 = '_165x165';
	/**
	 * Constant for value '_169x169'
	 * @return string '_169x169'
	 */
	const VALUE__169X169 = '_169x169';
	/**
	 * Constant for value '_173x173'
	 * @return string '_173x173'
	 */
	const VALUE__173X173 = '_173x173';
	/**
	 * Constant for value '_177x177'
	 * @return string '_177x177'
	 */
	const VALUE__177X177 = '_177x177';
	/**
	 * Constructor
	 * @return BarCodeSoftTypeQrcodeFormat
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_AUTOSELECT,self::VALUE__21X21,self::VALUE__25X25,self::VALUE__29X29,self::VALUE__33X33,self::VALUE__37X37,self::VALUE__41X41,self::VALUE__45X45,self::VALUE__49X49,self::VALUE__53X53,self::VALUE__57X57,self::VALUE__61X61,self::VALUE__65X65,self::VALUE__69X69,self::VALUE__73X73,self::VALUE__77X77,self::VALUE__81X81,self::VALUE__85X85,self::VALUE__89X89,self::VALUE__93X93,self::VALUE__97X97,self::VALUE__101X101,self::VALUE__105X105,self::VALUE__109X109,self::VALUE__113X113,self::VALUE__117X117,self::VALUE__121X121,self::VALUE__125X125,self::VALUE__129X129,self::VALUE__133X133,self::VALUE__137X137,self::VALUE__141X141,self::VALUE__145X145,self::VALUE__149X149,self::VALUE__153X153,self::VALUE__157X157,self::VALUE__161X161,self::VALUE__165X165,self::VALUE__169X169,self::VALUE__173X173,self::VALUE__177X177));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>