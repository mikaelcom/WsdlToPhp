<?php
/**
 * Class file for XiGlobalrealtimeTypeQuoteWithSecurity
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeQuoteWithSecurity
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeQuoteWithSecurity extends XiGlobalrealtimeTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeSecurity Security
	 * @return XiGlobalrealtimeTypeQuoteWithSecurity
	 */
	public function __construct($_Security = null)
	{
		XiGlobalrealtimeWsdlClass::__construct(array('Security'=>$_Security));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalrealtimeTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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