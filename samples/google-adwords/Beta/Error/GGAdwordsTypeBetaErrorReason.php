<?php
/**
 * Class file for GGAdwordsTypeBetaErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBetaErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeBetaErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'BETA_FEATURE'
	 * Meta informations :
	 * 	- documentation : Attempt to use beta feature by non-beta account.
	 * @return string 'BETA_FEATURE'
	 */
	const VALUE_BETA_FEATURE = 'BETA_FEATURE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeBetaErrorReason
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
		return in_array($_value,array(self::VALUE_BETA_FEATURE));
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