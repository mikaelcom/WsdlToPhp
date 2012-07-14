<?php
/**
 * Class file for PayPalTypeDoVoidRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoVoidRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoVoidRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The AuthorizationID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The value of the original authorization identification number returned by a PayPal product. If you are voiding a transaction that has been reauthorized, use the ID from the original authorization, and not the reauthorization. Required Character length and limits: 19 single-byte characters
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : An informational note about this settlement that is displayed to the payer in email and in transaction history. Optional Character length and limits: 255 single-byte characters
	 * @var string
	 */
	public $Note;
	/**
	 * Constructor
	 * @param string AuthorizationID
	 * @param string Note
	 * @return PayPalTypeDoVoidRequestType
	 */
	public function __construct($_AuthorizationID,$_Note = null)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_AuthorizationID,'Note'=>$_Note));
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
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
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