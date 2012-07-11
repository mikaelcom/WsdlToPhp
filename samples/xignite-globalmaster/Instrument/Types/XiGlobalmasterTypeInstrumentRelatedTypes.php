<?php
/**
 * Class file for XiGlobalmasterTypeInstrumentRelatedTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeInstrumentRelatedTypes
 * @date 08/07/2012
 */
class XiGlobalmasterTypeInstrumentRelatedTypes extends XiGlobalmasterWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Securities'
	 * @return string 'Securities'
	 */
	const VALUE_SECURITIES = 'Securities';
	/**
	 * Constructor
	 * @return XiGlobalmasterTypeInstrumentRelatedTypes
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_SECURITIES));
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