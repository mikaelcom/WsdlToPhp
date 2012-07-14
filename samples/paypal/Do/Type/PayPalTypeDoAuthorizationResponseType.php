<?php
/**
 * Class file for PayPalTypeDoAuthorizationResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoAuthorizationResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoAuthorizationResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : An authorization identification number. Character length and limits: 19 single-byte characters
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The amount and currency you specified in the request.
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The AuthorizationInfo
	 * @var PayPalTypeAuthorizationInfoType
	 */
	public $AuthorizationInfo;
	/**
	 * The MsgSubID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Return msgsubid back to merchant
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor
	 * @param string TransactionID
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeAuthorizationInfoType AuthorizationInfo
	 * @param string MsgSubID
	 * @return PayPalTypeDoAuthorizationResponseType
	 */
	public function __construct($_TransactionID,$_Amount,$_AuthorizationInfo = null,$_MsgSubID = null)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_TransactionID,'Amount'=>$_Amount,'AuthorizationInfo'=>$_AuthorizationInfo,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
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
	 * Set MsgSubID
	 * @param string MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_MsgSubID)
	{
		return ($this->MsgSubID = $_MsgSubID);
	}
	/**
	 * Get MsgSubID
	 * @return string
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
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