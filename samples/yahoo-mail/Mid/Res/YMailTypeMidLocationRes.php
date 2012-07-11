<?php
/**
 * Class file for YMailTypeMidLocationRes
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMidLocationRes
 * @date 02/07/2012
 */
class YMailTypeMidLocationRes extends YMailWsdlClass
{
	/**
	 * Constant for value 'start'
	 * @return string 'start'
	 */
	const VALUE_START = 'start';
	/**
	 * Constant for value 'center'
	 * @return string 'center'
	 */
	const VALUE_CENTER = 'center';
	/**
	 * Constant for value 'centerShortL'
	 * @return string 'centerShortL'
	 */
	const VALUE_CENTERSHORTL = 'centerShortL';
	/**
	 * Constant for value 'centerShortR'
	 * @return string 'centerShortR'
	 */
	const VALUE_CENTERSHORTR = 'centerShortR';
	/**
	 * Constant for value 'notFound'
	 * @return string 'notFound'
	 */
	const VALUE_NOTFOUND = 'notFound';
	/**
	 * Constant for value 'na'
	 * @return string 'na'
	 */
	const VALUE_NA = 'na';
	/**
	 * Constructor
	 * @return YMailTypeMidLocationRes
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
		return in_array($_value,array(self::VALUE_START,self::VALUE_CENTER,self::VALUE_CENTERSHORTL,self::VALUE_CENTERSHORTR,self::VALUE_NOTFOUND,self::VALUE_NA));
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