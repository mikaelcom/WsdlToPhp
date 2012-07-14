<?php
/**
 * Class file for PayPalTypeDoCaptureRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoCaptureRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoCaptureRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The AuthorizationID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The authorization identification number of the payment you want to capture. Required Character length and limits: 19 single-byte characters maximum
	 * @var PayPalTypeAuthorizationId
	 */
	public $AuthorizationID;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Amount to authorize. You must set the currencyID attribute to USD. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,)
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The CompleteType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Indicates if this capture is the last capture you intend to make. The default is Complete. If CompleteType is Complete, any remaining amount of the original reauthorized transaction is automatically voided. Required Character length and limits: 12 single-byte alphanumeric characters
	 * @var PayPalTypeCompleteCodeType
	 */
	public $CompleteType;
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
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Your invoice number or other identification number. The InvoiceID value is recorded only if the authorization you are capturing is an order authorization, not a basic authorization. Optional Character length and limits: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The EnhancedData
	 * @var PayPalTypeEnhancedDataType
	 */
	public $EnhancedData;
	/**
	 * The Descriptor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : dynamic descriptor Dynamic descriptor is used for merchant to provide detail of a transaction appears on statement Optional Character length and limits: <18 characters alphanumeric characters
	 * @var string
	 */
	public $Descriptor;
	/**
	 * The MerchantStoreDetails
	 * @var PayPalTypeMerchantStoreDetailsType
	 */
	public $MerchantStoreDetails;
	/**
	 * The MsgSubID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor
	 * @param PayPalTypeAuthorizationId AuthorizationID
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeCompleteCodeType CompleteType
	 * @param string Note
	 * @param string InvoiceID
	 * @param PayPalTypeEnhancedDataType EnhancedData
	 * @param string Descriptor
	 * @param PayPalTypeMerchantStoreDetailsType MerchantStoreDetails
	 * @param string MsgSubID
	 * @return PayPalTypeDoCaptureRequestType
	 */
	public function __construct($_AuthorizationID,$_Amount,$_CompleteType,$_Note = null,$_InvoiceID = null,$_EnhancedData = null,$_Descriptor = null,$_MerchantStoreDetails = null,$_MsgSubID = null)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_AuthorizationID,'Amount'=>$_Amount,'CompleteType'=>$_CompleteType,'Note'=>$_Note,'InvoiceID'=>$_InvoiceID,'EnhancedData'=>$_EnhancedData,'Descriptor'=>$_Descriptor,'MerchantStoreDetails'=>$_MerchantStoreDetails,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set AuthorizationID
	 * @param AuthorizationId AuthorizationID
	 * @return AuthorizationId
	 */
	public function setAuthorizationID($_AuthorizationID)
	{
		return ($this->AuthorizationID = PayPalTypeAuthorizationId::valueIsValid($_AuthorizationID)?$_AuthorizationID:null);
	}
	/**
	 * Get AuthorizationID
	 * @return PayPalTypeAuthorizationId
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
	 * Set CompleteType
	 * @param CompleteCodeType CompleteType
	 * @return CompleteCodeType
	 */
	public function setCompleteType($_CompleteType)
	{
		return ($this->CompleteType = PayPalTypeCompleteCodeType::valueIsValid($_CompleteType)?$_CompleteType:null);
	}
	/**
	 * Get CompleteType
	 * @return PayPalTypeCompleteCodeType
	 */
	public function getCompleteType()
	{
		return $this->CompleteType;
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
	 * Set InvoiceID
	 * @param string InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_InvoiceID)
	{
		return ($this->InvoiceID = $_InvoiceID);
	}
	/**
	 * Get InvoiceID
	 * @return string
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set EnhancedData
	 * @param EnhancedDataType EnhancedData
	 * @return EnhancedDataType
	 */
	public function setEnhancedData($_EnhancedData)
	{
		return ($this->EnhancedData = $_EnhancedData);
	}
	/**
	 * Get EnhancedData
	 * @return PayPalTypeEnhancedDataType
	 */
	public function getEnhancedData()
	{
		return $this->EnhancedData;
	}
	/**
	 * Set Descriptor
	 * @param string Descriptor
	 * @return string
	 */
	public function setDescriptor($_Descriptor)
	{
		return ($this->Descriptor = $_Descriptor);
	}
	/**
	 * Get Descriptor
	 * @return string
	 */
	public function getDescriptor()
	{
		return $this->Descriptor;
	}
	/**
	 * Set MerchantStoreDetails
	 * @param MerchantStoreDetailsType MerchantStoreDetails
	 * @return MerchantStoreDetailsType
	 */
	public function setMerchantStoreDetails($_MerchantStoreDetails)
	{
		return ($this->MerchantStoreDetails = $_MerchantStoreDetails);
	}
	/**
	 * Get MerchantStoreDetails
	 * @return PayPalTypeMerchantStoreDetailsType
	 */
	public function getMerchantStoreDetails()
	{
		return $this->MerchantStoreDetails;
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