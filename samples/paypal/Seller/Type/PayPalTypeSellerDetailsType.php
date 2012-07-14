<?php
/**
 * Class file for PayPalTypeSellerDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSellerDetailsType
 * Documentation : Details about the seller.
 * @date 14/07/2012
 */
class PayPalTypeSellerDetailsType extends PayPalWsdlClass
{
	/**
	 * The SellerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique identifier for the seller. Optional
	 * @var string
	 */
	public $SellerId;
	/**
	 * The SellerUserName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The user name of the user at the marketplaces site. Optional
	 * @var string
	 */
	public $SellerUserName;
	/**
	 * The SellerRegistrationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the user registered with the marketplace. Optional
	 * @var dateTime
	 */
	public $SellerRegistrationDate;
	/**
	 * The PayPalAccountID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Seller Paypal Account Id contains the seller EmailId or PayerId or PhoneNo passed during the Request.
	 * @var string
	 */
	public $PayPalAccountID;
	/**
	 * The SecureMerchantAccountID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique PayPal customer account identification number (of the seller). This feild is meant for Response. This field is ignored, if passed in the Request.
	 * @var PayPalTypeUserIDType
	 */
	public $SecureMerchantAccountID;
	/**
	 * Constructor
	 * @param string SellerId
	 * @param string SellerUserName
	 * @param dateTime SellerRegistrationDate
	 * @param string PayPalAccountID
	 * @param PayPalTypeUserIDType SecureMerchantAccountID
	 * @return PayPalTypeSellerDetailsType
	 */
	public function __construct($_SellerId = null,$_SellerUserName = null,$_SellerRegistrationDate = null,$_PayPalAccountID = null,$_SecureMerchantAccountID = null)
	{
		parent::__construct(array('SellerId'=>$_SellerId,'SellerUserName'=>$_SellerUserName,'SellerRegistrationDate'=>$_SellerRegistrationDate,'PayPalAccountID'=>$_PayPalAccountID,'SecureMerchantAccountID'=>$_SecureMerchantAccountID));
	}
	/**
	 * Set SellerId
	 * @param string SellerId
	 * @return string
	 */
	public function setSellerId($_SellerId)
	{
		return ($this->SellerId = $_SellerId);
	}
	/**
	 * Get SellerId
	 * @return string
	 */
	public function getSellerId()
	{
		return $this->SellerId;
	}
	/**
	 * Set SellerUserName
	 * @param string SellerUserName
	 * @return string
	 */
	public function setSellerUserName($_SellerUserName)
	{
		return ($this->SellerUserName = $_SellerUserName);
	}
	/**
	 * Get SellerUserName
	 * @return string
	 */
	public function getSellerUserName()
	{
		return $this->SellerUserName;
	}
	/**
	 * Set SellerRegistrationDate
	 * @param dateTime SellerRegistrationDate
	 * @return dateTime
	 */
	public function setSellerRegistrationDate($_SellerRegistrationDate)
	{
		return ($this->SellerRegistrationDate = $_SellerRegistrationDate);
	}
	/**
	 * Get SellerRegistrationDate
	 * @return dateTime
	 */
	public function getSellerRegistrationDate()
	{
		return $this->SellerRegistrationDate;
	}
	/**
	 * Set PayPalAccountID
	 * @param string PayPalAccountID
	 * @return string
	 */
	public function setPayPalAccountID($_PayPalAccountID)
	{
		return ($this->PayPalAccountID = $_PayPalAccountID);
	}
	/**
	 * Get PayPalAccountID
	 * @return string
	 */
	public function getPayPalAccountID()
	{
		return $this->PayPalAccountID;
	}
	/**
	 * Set SecureMerchantAccountID
	 * @param UserIDType SecureMerchantAccountID
	 * @return UserIDType
	 */
	public function setSecureMerchantAccountID($_SecureMerchantAccountID)
	{
		return ($this->SecureMerchantAccountID = PayPalTypeUserIDType::valueIsValid($_SecureMerchantAccountID)?$_SecureMerchantAccountID:null);
	}
	/**
	 * Get SecureMerchantAccountID
	 * @return PayPalTypeUserIDType
	 */
	public function getSecureMerchantAccountID()
	{
		return $this->SecureMerchantAccountID;
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