<?php
/**
 * Class file for XiEdgarTypeOutputTypes
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeOutputTypes
 * @date 08/07/2012
 */
class XiEdgarTypeOutputTypes extends XiEdgarWsdlClass
{
	/**
	 * Constant for value 'Top10Matches'
	 * @return string 'Top10Matches'
	 */
	const VALUE_TOP10MATCHES = 'Top10Matches';
	/**
	 * Constant for value 'Top20Matches'
	 * @return string 'Top20Matches'
	 */
	const VALUE_TOP20MATCHES = 'Top20Matches';
	/**
	 * Constant for value 'Top80Matches'
	 * @return string 'Top80Matches'
	 */
	const VALUE_TOP80MATCHES = 'Top80Matches';
	/**
	 * Constant for value 'Top160Matches'
	 * @return string 'Top160Matches'
	 */
	const VALUE_TOP160MATCHES = 'Top160Matches';
	/**
	 * Constant for value 'Top240Matches'
	 * @return string 'Top240Matches'
	 */
	const VALUE_TOP240MATCHES = 'Top240Matches';
	/**
	 * Constant for value 'Top360Matches'
	 * @return string 'Top360Matches'
	 */
	const VALUE_TOP360MATCHES = 'Top360Matches';
	/**
	 * Constant for value 'AllMatches'
	 * @return string 'AllMatches'
	 */
	const VALUE_ALLMATCHES = 'AllMatches';
	/**
	 * Constructor
	 * @return XiEdgarTypeOutputTypes
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
		return in_array($_value,array(self::VALUE_TOP10MATCHES,self::VALUE_TOP20MATCHES,self::VALUE_TOP80MATCHES,self::VALUE_TOP160MATCHES,self::VALUE_TOP240MATCHES,self::VALUE_TOP360MATCHES,self::VALUE_ALLMATCHES));
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