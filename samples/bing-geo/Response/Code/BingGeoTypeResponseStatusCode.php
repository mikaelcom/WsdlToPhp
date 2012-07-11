<?php
/**
 * Class file for BingGeoTypeResponseStatusCode
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeResponseStatusCode
 * @date 02/07/2012
 */
class BingGeoTypeResponseStatusCode extends BingGeoWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'BadRequest'
	 * @return string 'BadRequest'
	 */
	const VALUE_BADREQUEST = 'BadRequest';
	/**
	 * Constant for value 'ServerError'
	 * @return string 'ServerError'
	 */
	const VALUE_SERVERERROR = 'ServerError';
	/**
	 * Constructor
	 * @return BingGeoTypeResponseStatusCode
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
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_BADREQUEST,self::VALUE_SERVERERROR));
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