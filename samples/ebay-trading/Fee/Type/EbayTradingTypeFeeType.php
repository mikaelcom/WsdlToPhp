<?php
/**
 * Class file for EbayTradingTypeFeeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeeType
 * Documentation : Identifies the name and cost of a listing feature that a member pays to eBay (or an eBay company). These listing feature names, fees, and possible discounts are intended only as an aid to help estimate the fees for a listing. Use GetAccount for an accurate final fee breakdown. Returned in AddItemResponseType and related response types.
 * @date 04/07/2012
 */
class EbayTradingTypeFeeType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the listing feature, for identification purposes. See the Trading API guide for a list of current listing features names and associated fees.
	 * @var string
	 */
	public $Name;
	/**
	 * The Fee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of the fee that eBay will charge the member for the associated listing feature. See the eBay.com Web site online help for a current schedule of listing features and their associated fees.
	 * @var EbayTradingTypeAmountType
	 */
	public $Fee;
	/**
	 * The PromotionalDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field exists in the response when the user has selected the features that participate in a promotional discount. See the eBay.com Web site online help for a current fee schedule.
	 * @var EbayTradingTypeAmountType
	 */
	public $PromotionalDiscount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param EbayTradingTypeAmountType Fee
	 * @param EbayTradingTypeAmountType PromotionalDiscount
	 * @param DOMDocument any
	 * @return EbayTradingTypeFeeType
	 */
	public function __construct($_Name = null,$_Fee = null,$_PromotionalDiscount = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'Fee'=>$_Fee,'PromotionalDiscount'=>$_PromotionalDiscount,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Fee
	 * @param AmountType Fee
	 * @return AmountType
	 */
	public function setFee($_Fee)
	{
		return ($this->Fee = $_Fee);
	}
	/**
	 * Get Fee
	 * @return EbayTradingTypeAmountType
	 */
	public function getFee()
	{
		return $this->Fee;
	}
	/**
	 * Set PromotionalDiscount
	 * @param AmountType PromotionalDiscount
	 * @return AmountType
	 */
	public function setPromotionalDiscount($_PromotionalDiscount)
	{
		return ($this->PromotionalDiscount = $_PromotionalDiscount);
	}
	/**
	 * Get PromotionalDiscount
	 * @return EbayTradingTypeAmountType
	 */
	public function getPromotionalDiscount()
	{
		return $this->PromotionalDiscount;
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