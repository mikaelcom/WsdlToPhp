<?php
/**
 * Class file for EccDomainHostTypeGetHostInfoResponse
 * @date 03/07/2012
 */
/**
 * Class EccDomainHostTypeGetHostInfoResponse
 * @date 03/07/2012
 */
class EccDomainHostTypeGetHostInfoResponse extends EccDomainHostWsdlClass
{
	/**
	 * The GetHostInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccDomainHostTypeHost
	 */
	public $GetHostInfoResult;
	/**
	 * Constructor
	 * @param EccDomainHostTypeHost GetHostInfoResult
	 * @return EccDomainHostTypeGetHostInfoResponse
	 */
	public function __construct($_GetHostInfoResult = null)
	{
		parent::__construct(array('GetHostInfoResult'=>$_GetHostInfoResult));
	}
	/**
	 * Set GetHostInfoResult
	 * @param Host GetHostInfoResult
	 * @return Host
	 */
	public function setGetHostInfoResult($_GetHostInfoResult)
	{
		return ($this->GetHostInfoResult = $_GetHostInfoResult);
	}
	/**
	 * Get GetHostInfoResult
	 * @return EccDomainHostTypeHost
	 */
	public function getGetHostInfoResult()
	{
		return $this->GetHostInfoResult;
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