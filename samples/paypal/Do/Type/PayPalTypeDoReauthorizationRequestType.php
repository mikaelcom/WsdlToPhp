<?php
/**
 * Class file for PayPalTypeDoReauthorizationRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReauthorizationRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoReauthorizationRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The AuthorizationID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The value of a previously authorized transaction identification number returned by a PayPal product. You can obtain a buyer's transaction number from the TransactionID element of the PayerInfo structure returned by GetTransactionDetailsResponse. Required Character length and limits: 19 single-byte characters maximum
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Amount to reauthorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * Constructor
	 * @param string AuthorizationID
	 * @param PayPalTypeBasicAmountType Amount
	 * @return PayPalTypeDoReauthorizationRequestType
	 */
	public function __construct($_AuthorizationID,$_Amount)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_AuthorizationID,'Amount'=>$_Amount));
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
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
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