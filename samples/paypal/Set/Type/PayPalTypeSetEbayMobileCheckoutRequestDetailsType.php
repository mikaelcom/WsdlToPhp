<?php
/**
 * Class file for PayPalTypeSetEbayMobileCheckoutRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetEbayMobileCheckoutRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeSetEbayMobileCheckoutRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The CheckoutType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : The value 'Auction' indicates that user is coming to checkout after an auction ended. A value of 'BuyItNow' indicates if the user is coming to checkout by clicking on the 'buy it now' button in a chinese auction. A value of 'FixedPriceItem' indicates that user clicked on 'Buy it now' on a fixed price item. A value of Autopay indicates autopay (or immediate pay) which is not supported at the moment. Required
	 * @var PayPalTypeEbayCheckoutType
	 */
	public $CheckoutType;
	/**
	 * The ItemId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : An item number assigned to the item in eBay database. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $ItemId;
	/**
	 * The TransactionId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : An Transaction id assigned to the item in eBay database. In case of Chinese auction Item Id itself indicates Transaction Id. Transaction Id in this case is Zero. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The SiteId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : An id indicating the site on which the item was listed. Required Character length and limitations: 2 alphanumeric characters
	 * @var string
	 */
	public $SiteId;
	/**
	 * The BuyerId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Buyers ebay Id. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $BuyerId;
	/**
	 * The ClientType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Indicating the client type. Weather it is WAP or J2ME. A value of 'WAP' indicates WAP. A value of 'J2MEClient' indicates J2ME client. Required
	 * @var PayPalTypeDyneticClientType
	 */
	public $ClientType;
	/**
	 * The BuyerPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The phone number of the buyer's mobile device, if available. Optional
	 * @var PayPalTypePhoneNumberType
	 */
	public $BuyerPhone;
	/**
	 * The ReturnURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Optional Character length and limitations: no limit.
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Optional Character length and limitations: no limit
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify quantity in case it is an immediate pay (or autopay) item. Optional
	 * @var int
	 */
	public $Quantity;
	/**
	 * The ItemAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cost of this item before tax and shipping.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.Used only for autopay items. Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $ItemAmount;
	/**
	 * Constructor
	 * @param PayPalTypeEbayCheckoutType CheckoutType
	 * @param string ItemId
	 * @param string TransactionId
	 * @param string SiteId
	 * @param string BuyerId
	 * @param PayPalTypeDyneticClientType ClientType
	 * @param PayPalTypePhoneNumberType BuyerPhone
	 * @param string ReturnURL
	 * @param string CancelURL
	 * @param int Quantity
	 * @param PayPalTypeBasicAmountType ItemAmount
	 * @return PayPalTypeSetEbayMobileCheckoutRequestDetailsType
	 */
	public function __construct($_CheckoutType,$_ItemId,$_TransactionId,$_SiteId,$_BuyerId,$_ClientType,$_BuyerPhone = null,$_ReturnURL = null,$_CancelURL = null,$_Quantity = null,$_ItemAmount = null)
	{
		parent::__construct(array('CheckoutType'=>$_CheckoutType,'ItemId'=>$_ItemId,'TransactionId'=>$_TransactionId,'SiteId'=>$_SiteId,'BuyerId'=>$_BuyerId,'ClientType'=>$_ClientType,'BuyerPhone'=>$_BuyerPhone,'ReturnURL'=>$_ReturnURL,'CancelURL'=>$_CancelURL,'Quantity'=>$_Quantity,'ItemAmount'=>$_ItemAmount));
	}
	/**
	 * Set CheckoutType
	 * @param EbayCheckoutType CheckoutType
	 * @return EbayCheckoutType
	 */
	public function setCheckoutType($_CheckoutType)
	{
		return ($this->CheckoutType = PayPalTypeEbayCheckoutType::valueIsValid($_CheckoutType)?$_CheckoutType:null);
	}
	/**
	 * Get CheckoutType
	 * @return PayPalTypeEbayCheckoutType
	 */
	public function getCheckoutType()
	{
		return $this->CheckoutType;
	}
	/**
	 * Set ItemId
	 * @param string ItemId
	 * @return string
	 */
	public function setItemId($_ItemId)
	{
		return ($this->ItemId = $_ItemId);
	}
	/**
	 * Get ItemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set TransactionId
	 * @param string TransactionId
	 * @return string
	 */
	public function setTransactionId($_TransactionId)
	{
		return ($this->TransactionId = $_TransactionId);
	}
	/**
	 * Get TransactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
	}
	/**
	 * Set SiteId
	 * @param string SiteId
	 * @return string
	 */
	public function setSiteId($_SiteId)
	{
		return ($this->SiteId = $_SiteId);
	}
	/**
	 * Get SiteId
	 * @return string
	 */
	public function getSiteId()
	{
		return $this->SiteId;
	}
	/**
	 * Set BuyerId
	 * @param string BuyerId
	 * @return string
	 */
	public function setBuyerId($_BuyerId)
	{
		return ($this->BuyerId = $_BuyerId);
	}
	/**
	 * Get BuyerId
	 * @return string
	 */
	public function getBuyerId()
	{
		return $this->BuyerId;
	}
	/**
	 * Set ClientType
	 * @param DyneticClientType ClientType
	 * @return DyneticClientType
	 */
	public function setClientType($_ClientType)
	{
		return ($this->ClientType = PayPalTypeDyneticClientType::valueIsValid($_ClientType)?$_ClientType:null);
	}
	/**
	 * Get ClientType
	 * @return PayPalTypeDyneticClientType
	 */
	public function getClientType()
	{
		return $this->ClientType;
	}
	/**
	 * Set BuyerPhone
	 * @param PhoneNumberType BuyerPhone
	 * @return PhoneNumberType
	 */
	public function setBuyerPhone($_BuyerPhone)
	{
		return ($this->BuyerPhone = $_BuyerPhone);
	}
	/**
	 * Get BuyerPhone
	 * @return PayPalTypePhoneNumberType
	 */
	public function getBuyerPhone()
	{
		return $this->BuyerPhone;
	}
	/**
	 * Set ReturnURL
	 * @param string ReturnURL
	 * @return string
	 */
	public function setReturnURL($_ReturnURL)
	{
		return ($this->ReturnURL = $_ReturnURL);
	}
	/**
	 * Get ReturnURL
	 * @return string
	 */
	public function getReturnURL()
	{
		return $this->ReturnURL;
	}
	/**
	 * Set CancelURL
	 * @param string CancelURL
	 * @return string
	 */
	public function setCancelURL($_CancelURL)
	{
		return ($this->CancelURL = $_CancelURL);
	}
	/**
	 * Get CancelURL
	 * @return string
	 */
	public function getCancelURL()
	{
		return $this->CancelURL;
	}
	/**
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set ItemAmount
	 * @param BasicAmountType ItemAmount
	 * @return BasicAmountType
	 */
	public function setItemAmount($_ItemAmount)
	{
		return ($this->ItemAmount = $_ItemAmount);
	}
	/**
	 * Get ItemAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getItemAmount()
	{
		return $this->ItemAmount;
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