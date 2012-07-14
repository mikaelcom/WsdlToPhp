<?php
/**
 * Class file for PayPalTypeDoCaptureResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoCaptureResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoCaptureResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The AuthorizationID
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The PaymentInfo
	 * Meta informations :
	 * 	- documentation : Information about the transaction
	 * @var PayPalTypePaymentInfoType
	 */
	public $PaymentInfo;
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
	 * @param string AuthorizationID
	 * @param PayPalTypePaymentInfoType PaymentInfo
	 * @param string MsgSubID
	 * @return PayPalTypeDoCaptureResponseDetailsType
	 */
	public function __construct($_AuthorizationID = null,$_PaymentInfo = null,$_MsgSubID = null)
	{
		parent::__construct(array('AuthorizationID'=>$_AuthorizationID,'PaymentInfo'=>$_PaymentInfo,'MsgSubID'=>$_MsgSubID));
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
	 * Set PaymentInfo
	 * @param PaymentInfoType PaymentInfo
	 * @return PaymentInfoType
	 */
	public function setPaymentInfo($_PaymentInfo)
	{
		return ($this->PaymentInfo = $_PaymentInfo);
	}
	/**
	 * Get PaymentInfo
	 * @return PayPalTypePaymentInfoType
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
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