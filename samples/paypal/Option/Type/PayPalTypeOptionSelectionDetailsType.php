<?php
/**
 * Class file for PayPalTypeOptionSelectionDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOptionSelectionDetailsType
 * @date 14/07/2012
 */
class PayPalTypeOptionSelectionDetailsType extends PayPalWsdlClass
{
	/**
	 * The OptionSelection
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Selection. Required Character length and limitations: 12 single-byte alphanumeric characters
	 * @var string
	 */
	public $OptionSelection;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Price. Optional
	 * @var string
	 */
	public $Price;
	/**
	 * The OptionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Type Optional
	 * @var PayPalTypeOptionTypeListType
	 */
	public $OptionType;
	/**
	 * The PaymentPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 10
	 * @var PayPalTypeInstallmentDetailsType
	 */
	public $PaymentPeriod;
	/**
	 * Constructor
	 * @param string OptionSelection
	 * @param string Price
	 * @param PayPalTypeOptionTypeListType OptionType
	 * @param PayPalTypeInstallmentDetailsType PaymentPeriod
	 * @return PayPalTypeOptionSelectionDetailsType
	 */
	public function __construct($_OptionSelection,$_Price = null,$_OptionType = null,$_PaymentPeriod = null)
	{
		parent::__construct(array('OptionSelection'=>$_OptionSelection,'Price'=>$_Price,'OptionType'=>$_OptionType,'PaymentPeriod'=>$_PaymentPeriod));
	}
	/**
	 * Set OptionSelection
	 * @param string OptionSelection
	 * @return string
	 */
	public function setOptionSelection($_OptionSelection)
	{
		return ($this->OptionSelection = $_OptionSelection);
	}
	/**
	 * Get OptionSelection
	 * @return string
	 */
	public function getOptionSelection()
	{
		return $this->OptionSelection;
	}
	/**
	 * Set Price
	 * @param string Price
	 * @return string
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return string
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set OptionType
	 * @param OptionTypeListType OptionType
	 * @return OptionTypeListType
	 */
	public function setOptionType($_OptionType)
	{
		return ($this->OptionType = PayPalTypeOptionTypeListType::valueIsValid($_OptionType)?$_OptionType:null);
	}
	/**
	 * Get OptionType
	 * @return PayPalTypeOptionTypeListType
	 */
	public function getOptionType()
	{
		return $this->OptionType;
	}
	/**
	 * Set PaymentPeriod
	 * @param InstallmentDetailsType PaymentPeriod
	 * @return InstallmentDetailsType
	 */
	public function setPaymentPeriod($_PaymentPeriod)
	{
		return ($this->PaymentPeriod = $_PaymentPeriod);
	}
	/**
	 * Get PaymentPeriod
	 * @return PayPalTypeInstallmentDetailsType
	 */
	public function getPaymentPeriod()
	{
		return $this->PaymentPeriod;
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