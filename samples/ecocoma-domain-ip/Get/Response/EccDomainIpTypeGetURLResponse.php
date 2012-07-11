<?php
/**
 * Class file for EccDomainIpTypeGetURLResponse
 * @date 03/07/2012
 */
/**
 * Class EccDomainIpTypeGetURLResponse
 * @date 03/07/2012
 */
class EccDomainIpTypeGetURLResponse extends EccDomainIpWsdlClass
{
	/**
	 * The GetURLResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccDomainIpTypeIP
	 */
	public $GetURLResult;
	/**
	 * Constructor
	 * @param EccDomainIpTypeIP GetURLResult
	 * @return EccDomainIpTypeGetURLResponse
	 */
	public function __construct($_GetURLResult = null)
	{
		parent::__construct(array('GetURLResult'=>$_GetURLResult));
	}
	/**
	 * Set GetURLResult
	 * @param IP GetURLResult
	 * @return IP
	 */
	public function setGetURLResult($_GetURLResult)
	{
		return ($this->GetURLResult = $_GetURLResult);
	}
	/**
	 * Get GetURLResult
	 * @return EccDomainIpTypeIP
	 */
	public function getGetURLResult()
	{
		return $this->GetURLResult;
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