<?php
/**
 * Class file for PayPalTypeDoReauthorizationResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReauthorizationResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoReauthorizationResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The AuthorizationID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : A new authorization identification number. Character length and limits: 19 single-byte characters
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The AuthorizationInfo
	 * @var PayPalTypeAuthorizationInfoType
	 */
	public $AuthorizationInfo;
	/**
	 * Constructor
	 * @param string AuthorizationID
	 * @param PayPalTypeAuthorizationInfoType AuthorizationInfo
	 * @return PayPalTypeDoReauthorizationResponseType
	 */
	public function __construct($_AuthorizationID,$_AuthorizationInfo = null)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_AuthorizationID,'AuthorizationInfo'=>$_AuthorizationInfo));
	}
	/**
	 * Set AuthorizationID
	 * @param string AuthorizationID
	 * @return string
	 */
	public function setAuthorizationID($_AuthorizationID)
	{
		return ($this->AuthorizationID = $_AuthorizationID);
	}
	/**
	 * Get AuthorizationID
	 * @return string
	 */
	public function getAuthorizationID()
	{
		return $this->AuthorizationID;
	}
	/**
	 * Set AuthorizationInfo
	 * @param AuthorizationInfoType AuthorizationInfo
	 * @return AuthorizationInfoType
	 */
	public function setAuthorizationInfo($_AuthorizationInfo)
	{
		return ($this->AuthorizationInfo = $_AuthorizationInfo);
	}
	/**
	 * Get AuthorizationInfo
	 * @return PayPalTypeAuthorizationInfoType
	 */
	public function getAuthorizationInfo()
	{
		return $this->AuthorizationInfo;
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