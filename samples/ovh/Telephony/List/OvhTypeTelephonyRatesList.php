<?php
/**
 * Class file for OvhTypeTelephonyRatesList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRatesList
 * @date 02/07/2012
 */
class OvhTypeTelephonyRatesList extends OvhWsdlClass
{
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param string countryCode
	 * @param string type
	 * @return OvhTypeTelephonyRatesList
	 */
	public function __construct($_countryCode = null,$_type = null)
	{
		parent::__construct(array('countryCode'=>$_countryCode,'type'=>$_type));
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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