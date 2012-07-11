<?php
/**
 * Class file for EccDomainWhoisTypeGetWhoisResponse
 * @date 03/07/2012
 */
/**
 * Class EccDomainWhoisTypeGetWhoisResponse
 * @date 03/07/2012
 */
class EccDomainWhoisTypeGetWhoisResponse extends EccDomainWhoisWsdlClass
{
	/**
	 * The GetWhoisResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccDomainWhoisTypeWhois
	 */
	public $GetWhoisResult;
	/**
	 * Constructor
	 * @param EccDomainWhoisTypeWhois GetWhoisResult
	 * @return EccDomainWhoisTypeGetWhoisResponse
	 */
	public function __construct($_GetWhoisResult = null)
	{
		parent::__construct(array('GetWhoisResult'=>$_GetWhoisResult));
	}
	/**
	 * Set GetWhoisResult
	 * @param Whois GetWhoisResult
	 * @return Whois
	 */
	public function setGetWhoisResult($_GetWhoisResult)
	{
		return ($this->GetWhoisResult = $_GetWhoisResult);
	}
	/**
	 * Get GetWhoisResult
	 * @return EccDomainWhoisTypeWhois
	 */
	public function getGetWhoisResult()
	{
		return $this->GetWhoisResult;
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