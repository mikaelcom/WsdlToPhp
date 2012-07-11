<?php
/**
 * Class file for XiRatesTypeFederalRateTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeFederalRateTypes
 * @date 08/07/2012
 */
class XiRatesTypeFederalRateTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'PrimaryBoston'
	 * @return string 'PrimaryBoston'
	 */
	const VALUE_PRIMARYBOSTON = 'PrimaryBoston';
	/**
	 * Constant for value 'PrimaryNewYork'
	 * @return string 'PrimaryNewYork'
	 */
	const VALUE_PRIMARYNEWYORK = 'PrimaryNewYork';
	/**
	 * Constant for value 'PrimaryPhiladelphia'
	 * @return string 'PrimaryPhiladelphia'
	 */
	const VALUE_PRIMARYPHILADELPHIA = 'PrimaryPhiladelphia';
	/**
	 * Constant for value 'PrimaryCleveland'
	 * @return string 'PrimaryCleveland'
	 */
	const VALUE_PRIMARYCLEVELAND = 'PrimaryCleveland';
	/**
	 * Constant for value 'PrimaryRichmond'
	 * @return string 'PrimaryRichmond'
	 */
	const VALUE_PRIMARYRICHMOND = 'PrimaryRichmond';
	/**
	 * Constant for value 'PrimaryAtlanta'
	 * @return string 'PrimaryAtlanta'
	 */
	const VALUE_PRIMARYATLANTA = 'PrimaryAtlanta';
	/**
	 * Constant for value 'PrimaryChicago'
	 * @return string 'PrimaryChicago'
	 */
	const VALUE_PRIMARYCHICAGO = 'PrimaryChicago';
	/**
	 * Constant for value 'PrimaryStLouis'
	 * @return string 'PrimaryStLouis'
	 */
	const VALUE_PRIMARYSTLOUIS = 'PrimaryStLouis';
	/**
	 * Constant for value 'PrimaryMinneapolis'
	 * @return string 'PrimaryMinneapolis'
	 */
	const VALUE_PRIMARYMINNEAPOLIS = 'PrimaryMinneapolis';
	/**
	 * Constant for value 'PrimaryKansasCity'
	 * @return string 'PrimaryKansasCity'
	 */
	const VALUE_PRIMARYKANSASCITY = 'PrimaryKansasCity';
	/**
	 * Constant for value 'PrimaryDallas'
	 * @return string 'PrimaryDallas'
	 */
	const VALUE_PRIMARYDALLAS = 'PrimaryDallas';
	/**
	 * Constant for value 'PrimarySanFrancisco'
	 * @return string 'PrimarySanFrancisco'
	 */
	const VALUE_PRIMARYSANFRANCISCO = 'PrimarySanFrancisco';
	/**
	 * Constant for value 'SecondaryBoston'
	 * @return string 'SecondaryBoston'
	 */
	const VALUE_SECONDARYBOSTON = 'SecondaryBoston';
	/**
	 * Constant for value 'SecondaryNewYork'
	 * @return string 'SecondaryNewYork'
	 */
	const VALUE_SECONDARYNEWYORK = 'SecondaryNewYork';
	/**
	 * Constant for value 'SecondaryPhiladelphia'
	 * @return string 'SecondaryPhiladelphia'
	 */
	const VALUE_SECONDARYPHILADELPHIA = 'SecondaryPhiladelphia';
	/**
	 * Constant for value 'SecondaryCleveland'
	 * @return string 'SecondaryCleveland'
	 */
	const VALUE_SECONDARYCLEVELAND = 'SecondaryCleveland';
	/**
	 * Constant for value 'SecondaryRichmond'
	 * @return string 'SecondaryRichmond'
	 */
	const VALUE_SECONDARYRICHMOND = 'SecondaryRichmond';
	/**
	 * Constant for value 'SecondaryAtlanta'
	 * @return string 'SecondaryAtlanta'
	 */
	const VALUE_SECONDARYATLANTA = 'SecondaryAtlanta';
	/**
	 * Constant for value 'SecondaryChicago'
	 * @return string 'SecondaryChicago'
	 */
	const VALUE_SECONDARYCHICAGO = 'SecondaryChicago';
	/**
	 * Constant for value 'SecondaryStLouis'
	 * @return string 'SecondaryStLouis'
	 */
	const VALUE_SECONDARYSTLOUIS = 'SecondaryStLouis';
	/**
	 * Constant for value 'SecondaryMinneapolis'
	 * @return string 'SecondaryMinneapolis'
	 */
	const VALUE_SECONDARYMINNEAPOLIS = 'SecondaryMinneapolis';
	/**
	 * Constant for value 'SecondaryKansasCity'
	 * @return string 'SecondaryKansasCity'
	 */
	const VALUE_SECONDARYKANSASCITY = 'SecondaryKansasCity';
	/**
	 * Constant for value 'SecondaryDallas'
	 * @return string 'SecondaryDallas'
	 */
	const VALUE_SECONDARYDALLAS = 'SecondaryDallas';
	/**
	 * Constant for value 'SecondarySanFrancisco'
	 * @return string 'SecondarySanFrancisco'
	 */
	const VALUE_SECONDARYSANFRANCISCO = 'SecondarySanFrancisco';
	/**
	 * Constructor
	 * @return XiRatesTypeFederalRateTypes
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
		return in_array($_value,array(self::VALUE_PRIMARYBOSTON,self::VALUE_PRIMARYNEWYORK,self::VALUE_PRIMARYPHILADELPHIA,self::VALUE_PRIMARYCLEVELAND,self::VALUE_PRIMARYRICHMOND,self::VALUE_PRIMARYATLANTA,self::VALUE_PRIMARYCHICAGO,self::VALUE_PRIMARYSTLOUIS,self::VALUE_PRIMARYMINNEAPOLIS,self::VALUE_PRIMARYKANSASCITY,self::VALUE_PRIMARYDALLAS,self::VALUE_PRIMARYSANFRANCISCO,self::VALUE_SECONDARYBOSTON,self::VALUE_SECONDARYNEWYORK,self::VALUE_SECONDARYPHILADELPHIA,self::VALUE_SECONDARYCLEVELAND,self::VALUE_SECONDARYRICHMOND,self::VALUE_SECONDARYATLANTA,self::VALUE_SECONDARYCHICAGO,self::VALUE_SECONDARYSTLOUIS,self::VALUE_SECONDARYMINNEAPOLIS,self::VALUE_SECONDARYKANSASCITY,self::VALUE_SECONDARYDALLAS,self::VALUE_SECONDARYSANFRANCISCO));
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