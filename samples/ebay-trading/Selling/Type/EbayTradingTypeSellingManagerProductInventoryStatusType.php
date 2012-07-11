<?php
/**
 * Class file for EbayTradingTypeSellingManagerProductInventoryStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerProductInventoryStatusType
 * Documentation : Describes the inventory status of a specific Selling Manager Product
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerProductInventoryStatusType extends EbayTradingWsdlClass
{
	/**
	 * The QuantityScheduled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Quantity of products scheduled to be listed.
	 * @var int
	 */
	public $QuantityScheduled;
	/**
	 * The QuantityActive
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Quantity of products actively listed.
	 * @var int
	 */
	public $QuantityActive;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Quantity of products sold.
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The QuantityUnsold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Quantity of product unsold.
	 * @var int
	 */
	public $QuantityUnsold;
	/**
	 * The SuccessPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of ended listings that sold.
	 * @var float
	 */
	public $SuccessPercent;
	/**
	 * The AverageSellingPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Average selling price for the product.
	 * @var EbayTradingTypeAmountType
	 */
	public $AverageSellingPrice;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int QuantityScheduled
	 * @param int QuantityActive
	 * @param int QuantitySold
	 * @param int QuantityUnsold
	 * @param float SuccessPercent
	 * @param EbayTradingTypeAmountType AverageSellingPrice
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerProductInventoryStatusType
	 */
	public function __construct($_QuantityScheduled = null,$_QuantityActive = null,$_QuantitySold = null,$_QuantityUnsold = null,$_SuccessPercent = null,$_AverageSellingPrice = null,$_any = null)
	{
		parent::__construct(array('QuantityScheduled'=>$_QuantityScheduled,'QuantityActive'=>$_QuantityActive,'QuantitySold'=>$_QuantitySold,'QuantityUnsold'=>$_QuantityUnsold,'SuccessPercent'=>$_SuccessPercent,'AverageSellingPrice'=>$_AverageSellingPrice,'any'=>$_any));
	}
	/**
	 * Set QuantityScheduled
	 * @param int QuantityScheduled
	 * @return int
	 */
	public function setQuantityScheduled($_QuantityScheduled)
	{
		return ($this->QuantityScheduled = $_QuantityScheduled);
	}
	/**
	 * Get QuantityScheduled
	 * @return int
	 */
	public function getQuantityScheduled()
	{
		return $this->QuantityScheduled;
	}
	/**
	 * Set QuantityActive
	 * @param int QuantityActive
	 * @return int
	 */
	public function setQuantityActive($_QuantityActive)
	{
		return ($this->QuantityActive = $_QuantityActive);
	}
	/**
	 * Get QuantityActive
	 * @return int
	 */
	public function getQuantityActive()
	{
		return $this->QuantityActive;
	}
	/**
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set QuantityUnsold
	 * @param int QuantityUnsold
	 * @return int
	 */
	public function setQuantityUnsold($_QuantityUnsold)
	{
		return ($this->QuantityUnsold = $_QuantityUnsold);
	}
	/**
	 * Get QuantityUnsold
	 * @return int
	 */
	public function getQuantityUnsold()
	{
		return $this->QuantityUnsold;
	}
	/**
	 * Set SuccessPercent
	 * @param float SuccessPercent
	 * @return float
	 */
	public function setSuccessPercent($_SuccessPercent)
	{
		return ($this->SuccessPercent = $_SuccessPercent);
	}
	/**
	 * Get SuccessPercent
	 * @return float
	 */
	public function getSuccessPercent()
	{
		return $this->SuccessPercent;
	}
	/**
	 * Set AverageSellingPrice
	 * @param AmountType AverageSellingPrice
	 * @return AmountType
	 */
	public function setAverageSellingPrice($_AverageSellingPrice)
	{
		return ($this->AverageSellingPrice = $_AverageSellingPrice);
	}
	/**
	 * Get AverageSellingPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getAverageSellingPrice()
	{
		return $this->AverageSellingPrice;
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