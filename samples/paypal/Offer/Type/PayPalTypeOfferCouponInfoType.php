<?php
/**
 * Class file for PayPalTypeOfferCouponInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOfferCouponInfoType
 * Documentation : OffersAndCouponsInfoType Information about a Offers and Coupons.
 * @date 14/07/2012
 */
class PayPalTypeOfferCouponInfoType extends PayPalWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of the incentive
	 * @var string
	 */
	public $Type;
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the Incentive used in transaction
	 * @var string
	 */
	public $ID;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount used on transaction
	 * @var string
	 */
	public $Amount;
	/**
	 * The AmountCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount Currency
	 * @var string
	 */
	public $AmountCurrency;
	/**
	 * Constructor
	 * @param string Type
	 * @param string ID
	 * @param string Amount
	 * @param string AmountCurrency
	 * @return PayPalTypeOfferCouponInfoType
	 */
	public function __construct($_Type = null,$_ID = null,$_Amount = null,$_AmountCurrency = null)
	{
		parent::__construct(array('Type'=>$_Type,'ID'=>$_ID,'Amount'=>$_Amount,'AmountCurrency'=>$_AmountCurrency));
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set ID
	 * @param string ID
	 * @return string
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return string
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set Amount
	 * @param string Amount
	 * @return string
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return string
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set AmountCurrency
	 * @param string AmountCurrency
	 * @return string
	 */
	public function setAmountCurrency($_AmountCurrency)
	{
		return ($this->AmountCurrency = $_AmountCurrency);
	}
	/**
	 * Get AmountCurrency
	 * @return string
	 */
	public function getAmountCurrency()
	{
		return $this->AmountCurrency;
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