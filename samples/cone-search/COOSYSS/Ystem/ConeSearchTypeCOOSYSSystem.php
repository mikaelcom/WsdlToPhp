<?php
/**
 * Class file for ConeSearchTypeCOOSYSSystem
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeCOOSYSSystem
 * @date 13/10/2012
 */
class ConeSearchTypeCOOSYSSystem extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'eq_FK4'
	 * @return string 'eq_FK4'
	 */
	const VALUE_EQ_FK4 = 'eq_FK4';
	/**
	 * Constant for value 'eq_FK5'
	 * @return string 'eq_FK5'
	 */
	const VALUE_EQ_FK5 = 'eq_FK5';
	/**
	 * Constant for value 'ICRS'
	 * @return string 'ICRS'
	 */
	const VALUE_ICRS = 'ICRS';
	/**
	 * Constant for value 'ecl_FK4'
	 * @return string 'ecl_FK4'
	 */
	const VALUE_ECL_FK4 = 'ecl_FK4';
	/**
	 * Constant for value 'ecl_FK5'
	 * @return string 'ecl_FK5'
	 */
	const VALUE_ECL_FK5 = 'ecl_FK5';
	/**
	 * Constant for value 'galactic'
	 * @return string 'galactic'
	 */
	const VALUE_GALACTIC = 'galactic';
	/**
	 * Constant for value 'supergalactic'
	 * @return string 'supergalactic'
	 */
	const VALUE_SUPERGALACTIC = 'supergalactic';
	/**
	 * Constant for value 'xy'
	 * @return string 'xy'
	 */
	const VALUE_XY = 'xy';
	/**
	 * Constant for value 'barycentric'
	 * @return string 'barycentric'
	 */
	const VALUE_BARYCENTRIC = 'barycentric';
	/**
	 * Constant for value 'geo_app'
	 * @return string 'geo_app'
	 */
	const VALUE_GEO_APP = 'geo_app';
	/**
	 * Constructor
	 * @return ConeSearchTypeCOOSYSSystem
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
		return in_array($_value,array(self::VALUE_EQ_FK4,self::VALUE_EQ_FK5,self::VALUE_ICRS,self::VALUE_ECL_FK4,self::VALUE_ECL_FK5,self::VALUE_GALACTIC,self::VALUE_SUPERGALACTIC,self::VALUE_XY,self::VALUE_BARYCENTRIC,self::VALUE_GEO_APP));
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