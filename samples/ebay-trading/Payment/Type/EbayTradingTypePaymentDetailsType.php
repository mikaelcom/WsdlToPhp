<?php
/**
 * Class file for EbayTradingTypePaymentDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentDetailsType
 * Documentation : Type defining the <b>PaymentDetails</b> container, which is used by the seller to specify amounts and due dates for deposits and full payment on motor vehicle listings.
 * @date 04/07/2012
 */
class EbayTradingTypePaymentDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The HoursToDeposit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This integer value indicates the number of hours that a buyer has (after he/she commits to buy) to make a deposit to the seller as a down payment on a motor vehicle. Valid values are '24', '48' (default), and '72'. <br/><br/> The deposit amount is specified in the <b>DepositAmount</b> field. If not specified, the <b>DepositAmount</b> value defaults to 0.0, in which case, a deposit on the vehicle is not required.
	 * @var int
	 */
	public $HoursToDeposit;
	/**
	 * The DaysToFullPayment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This integer value indicates the number of days that a buyer has (after he/she commits to buy) to make full payment to the seller and close the remaining balance on a motor vehicle. Valid values are '3', '7' (default), '10', and '14'. <br/><br/> In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>PaymentMethods</b> values must be specified for the listing: <ul> <li>CashInPerson</li> <li>LoanCheck</li> <li>MOCC (money order or cashier's check)</li> <li>PaymentSeeDescription (indicates to prospective buyers that payment instructions are in the item's description</li> <li>PersonalCheck</li> </ul>
	 * @var int
	 */
	public $DaysToFullPayment;
	/**
	 * The DepositAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This dollar value indicates the amount of the deposit that a buyer must make on a purchased motor vehicle (eBay Motors US and CA). The deposit amount can be as high as $2,000.00. If not specified, this value defaults to '0.0'. If the seller is requiring that the buyer put down a deposit on the vehicle, the seller must include and set the <b>DepositType</b> field to 'OtherMethod' and specify an HoursToDeposit value. If specified, then also specify <b>HoursToDeposit</b> <br> <br> Deposits can only be paid using PayPal, so if <b>DepositAmount</b> is specified (and not '0.0'), then the listing must offer 'PayPal' as a payment method (in addition to the payment methods offered for the full payment). Unlike other listings, PayPal is not automatically added to a Motors listing even if the seller has a PayPal preference set in My eBay. The seller also needs to have a linked PayPal account in order to require a deposit.<br> <br> The deposit amount appears in the shipping, payment details and return policy section of the View Item page.<br> <br> <b>For ReviseItem and related calls</b>: If the listing has no bids, the seller can add or lower a deposit; and they can increase the deposit if the listing doesn't require Immediate Payment. The seller can also remove the Immediate Payment option (if any). If the listing has bids, the seller can only lower an existing deposit; but not add or increase a deposit. The seller can't remove Immediate Payment when a listing with a deposit has bids.
	 * @var EbayTradingTypeAmountType
	 */
	public $DepositAmount;
	/**
	 * The DepositType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field applies to eBay Motors (US and CA) vehicles listings. If the seller is requiring that the buyer make a deposit on the vehicle, the <b>DepositType</b> value must be included and set to 'OtherMethod'. Otherwise, specify 'None' (or don't pass in <b>DepositType</b>).
	 * @var EbayTradingTypeDepositTypeCodeType
	 */
	public $DepositType;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int HoursToDeposit
	 * @param int DaysToFullPayment
	 * @param EbayTradingTypeAmountType DepositAmount
	 * @param EbayTradingTypeDepositTypeCodeType DepositType
	 * @param DOMDocument any
	 * @return EbayTradingTypePaymentDetailsType
	 */
	public function __construct($_HoursToDeposit = null,$_DaysToFullPayment = null,$_DepositAmount = null,$_DepositType = null,$_any = null)
	{
		parent::__construct(array('HoursToDeposit'=>$_HoursToDeposit,'DaysToFullPayment'=>$_DaysToFullPayment,'DepositAmount'=>$_DepositAmount,'DepositType'=>$_DepositType,'any'=>$_any));
	}
	/**
	 * Set HoursToDeposit
	 * @param int HoursToDeposit
	 * @return int
	 */
	public function setHoursToDeposit($_HoursToDeposit)
	{
		return ($this->HoursToDeposit = $_HoursToDeposit);
	}
	/**
	 * Get HoursToDeposit
	 * @return int
	 */
	public function getHoursToDeposit()
	{
		return $this->HoursToDeposit;
	}
	/**
	 * Set DaysToFullPayment
	 * @param int DaysToFullPayment
	 * @return int
	 */
	public function setDaysToFullPayment($_DaysToFullPayment)
	{
		return ($this->DaysToFullPayment = $_DaysToFullPayment);
	}
	/**
	 * Get DaysToFullPayment
	 * @return int
	 */
	public function getDaysToFullPayment()
	{
		return $this->DaysToFullPayment;
	}
	/**
	 * Set DepositAmount
	 * @param AmountType DepositAmount
	 * @return AmountType
	 */
	public function setDepositAmount($_DepositAmount)
	{
		return ($this->DepositAmount = $_DepositAmount);
	}
	/**
	 * Get DepositAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getDepositAmount()
	{
		return $this->DepositAmount;
	}
	/**
	 * Set DepositType
	 * @param DepositTypeCodeType DepositType
	 * @return DepositTypeCodeType
	 */
	public function setDepositType($_DepositType)
	{
		return ($this->DepositType = EbayTradingTypeDepositTypeCodeType::valueIsValid($_DepositType)?$_DepositType:null);
	}
	/**
	 * Get DepositType
	 * @return EbayTradingTypeDepositTypeCodeType
	 */
	public function getDepositType()
	{
		return $this->DepositType;
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