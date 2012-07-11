<?php
/**
 * Class file for XiGlobalmasterTypeIssuerRelatedTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeIssuerRelatedTypes
 * @date 08/07/2012
 */
class XiGlobalmasterTypeIssuerRelatedTypes extends XiGlobalmasterWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Instruments'
	 * @return string 'Instruments'
	 */
	const VALUE_INSTRUMENTS = 'Instruments';
	/**
	 * Constant for value 'InstrumentsAndSecurities'
	 * @return string 'InstrumentsAndSecurities'
	 */
	const VALUE_INSTRUMENTSANDSECURITIES = 'InstrumentsAndSecurities';
	/**
	 * Constructor
	 * @return XiGlobalmasterTypeIssuerRelatedTypes
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_INSTRUMENTS,self::VALUE_INSTRUMENTSANDSECURITIES));
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