<?php
/**
 * Class file for XiMetalsTypeMetalFutureTypes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeMetalFutureTypes
 * @date 08/07/2012
 */
class XiMetalsTypeMetalFutureTypes extends XiMetalsWsdlClass
{
	/**
	 * Constant for value 'COMEXGold'
	 * @return string 'COMEXGold'
	 */
	const VALUE_COMEXGOLD = 'COMEXGold';
	/**
	 * Constant for value 'COMEXSilver'
	 * @return string 'COMEXSilver'
	 */
	const VALUE_COMEXSILVER = 'COMEXSilver';
	/**
	 * Constant for value 'NYMEXPlatinum'
	 * @return string 'NYMEXPlatinum'
	 */
	const VALUE_NYMEXPLATINUM = 'NYMEXPlatinum';
	/**
	 * Constant for value 'NYMEXPalladium'
	 * @return string 'NYMEXPalladium'
	 */
	const VALUE_NYMEXPALLADIUM = 'NYMEXPalladium';
	/**
	 * Constant for value 'CBOTGold'
	 * @return string 'CBOTGold'
	 */
	const VALUE_CBOTGOLD = 'CBOTGold';
	/**
	 * Constant for value 'CBOTSilver'
	 * @return string 'CBOTSilver'
	 */
	const VALUE_CBOTSILVER = 'CBOTSilver';
	/**
	 * Constant for value 'CBOTGoldMiniSized'
	 * @return string 'CBOTGoldMiniSized'
	 */
	const VALUE_CBOTGOLDMINISIZED = 'CBOTGoldMiniSized';
	/**
	 * Constant for value 'CBOTSilverMiniSized'
	 * @return string 'CBOTSilverMiniSized'
	 */
	const VALUE_CBOTSILVERMINISIZED = 'CBOTSilverMiniSized';
	/**
	 * Constructor
	 * @return XiMetalsTypeMetalFutureTypes
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
		return in_array($_value,array(self::VALUE_COMEXGOLD,self::VALUE_COMEXSILVER,self::VALUE_NYMEXPLATINUM,self::VALUE_NYMEXPALLADIUM,self::VALUE_CBOTGOLD,self::VALUE_CBOTSILVER,self::VALUE_CBOTGOLDMINISIZED,self::VALUE_CBOTSILVERMINISIZED));
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