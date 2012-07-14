<?php
/**
 * Class file for PayPalTypeDoVoidResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoVoidResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoVoidResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The AuthorizationID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The authorization identification number you specified in the request. Character length and limits: 19 single-byte characters
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * Constructor
	 * @param string AuthorizationID
	 * @return PayPalTypeDoVoidResponseType
	 */
	public function __construct($_AuthorizationID)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_AuthorizationID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>