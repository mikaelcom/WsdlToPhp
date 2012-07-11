<?php
/**
 * Class file for BingTypeSearchOption
 * @date 02/07/2012
 */
/**
 * Class BingTypeSearchOption
 * @date 02/07/2012
 */
class BingTypeSearchOption extends BingWsdlClass
{
	/**
	 * Constant for value 'DisableLocationDetection'
	 * @return string 'DisableLocationDetection'
	 */
	const VALUE_DISABLELOCATIONDETECTION = 'DisableLocationDetection';
	/**
	 * Constant for value 'EnableHighlighting'
	 * @return string 'EnableHighlighting'
	 */
	const VALUE_ENABLEHIGHLIGHTING = 'EnableHighlighting';
	/**
	 * Constructor
	 * @return BingTypeSearchOption
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
		return in_array($_value,array(self::VALUE_DISABLELOCATIONDETECTION,self::VALUE_ENABLEHIGHLIGHTING));
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