<?php
/**
 * Class file for EbayTradingTypeEBayPaymentMismatchDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEBayPaymentMismatchDetailsType
 * Documentation : Complex type that defines the <b>eBayPaymentMismatchDetails</b> container, which is returned when a buyer's payment does not match the total cost of an order going through the new eBay payment process. This type is only applicable for German and Austrian orders going through the new eBay payment process.
 * @date 04/07/2012
 */
class EbayTradingTypeEBayPaymentMismatchDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The MismatchType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : This enumeration value indicates if the buyer has overpaid or underpaid for an order going through the new eBay payment process. This field is always returned with the <b>eBayPaymentMismatchDetails</b> container.
	 * @var EbayTradingTypeMismatchTypeCodeType
	 */
	public $MismatchType;
	/**
	 * The ActionRequiredBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : This dateTime value indicates the date by which the seller needs to accept or reject the overpayment/underpayment. If the seller doesn't take action by this date, eBay returns the payment to the buyer and essentially voids the sale. This field is always returned with the <b>eBayPaymentMismatchDetails</b> container.
	 * @var dateTime
	 */
	public $ActionRequiredBy;
	/**
	 * The MismatchAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the amount in which the buyer's payment was either over (MismatchType=OverPayment) or under (MismatchType=UnderPayment) the actual total cost of an order going through the new eBay payment process.
	 * @var EbayTradingTypeAmountType
	 */
	public $MismatchAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeMismatchTypeCodeType MismatchType
	 * @param dateTime ActionRequiredBy
	 * @param EbayTradingTypeAmountType MismatchAmount
	 * @param DOMDocument any
	 * @return EbayTradingTypeEBayPaymentMismatchDetailsType
	 */
	public function __construct($_MismatchType = null,$_ActionRequiredBy = null,$_MismatchAmount = null,$_any = null)
	{
		parent::__construct(array('MismatchType'=>$_MismatchType,'ActionRequiredBy'=>$_ActionRequiredBy,'MismatchAmount'=>$_MismatchAmount,'any'=>$_any));
	}
	/**
	 * Set MismatchType
	 * @param MismatchTypeCodeType MismatchType
	 * @return MismatchTypeCodeType
	 */
	public function setMismatchType($_MismatchType)
	{
		return ($this->MismatchType = EbayTradingTypeMismatchTypeCodeType::valueIsValid($_MismatchType)?$_MismatchType:null);
	}
	/**
	 * Get MismatchType
	 * @return EbayTradingTypeMismatchTypeCodeType
	 */
	public function getMismatchType()
	{
		return $this->MismatchType;
	}
	/**
	 * Set ActionRequiredBy
	 * @param dateTime ActionRequiredBy
	 * @return dateTime
	 */
	public function setActionRequiredBy($_ActionRequiredBy)
	{
		return ($this->ActionRequiredBy = $_ActionRequiredBy);
	}
	/**
	 * Get ActionRequiredBy
	 * @return dateTime
	 */
	public function getActionRequiredBy()
	{
		return $this->ActionRequiredBy;
	}
	/**
	 * Set MismatchAmount
	 * @param AmountType MismatchAmount
	 * @return AmountType
	 */
	public function setMismatchAmount($_MismatchAmount)
	{
		return ($this->MismatchAmount = $_MismatchAmount);
	}
	/**
	 * Get MismatchAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getMismatchAmount()
	{
		return $this->MismatchAmount;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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