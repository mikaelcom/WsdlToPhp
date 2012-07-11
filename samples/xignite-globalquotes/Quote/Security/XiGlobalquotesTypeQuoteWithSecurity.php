<?php
/**
 * Class file for XiGlobalquotesTypeQuoteWithSecurity
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeQuoteWithSecurity
 * @date 08/07/2012
 */
class XiGlobalquotesTypeQuoteWithSecurity extends XiGlobalquotesTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeSecurity Security
	 * @return XiGlobalquotesTypeQuoteWithSecurity
	 */
	public function __construct($_Security = null)
	{
		XiGlobalquotesWsdlClass::__construct(array('Security'=>$_Security));
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
	 * @return XiGlobalquotesTypeSecurity
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