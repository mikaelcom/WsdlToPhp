<?php
/**
 * Class file for EbayTradingTypeFeatureEligibilityType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeatureEligibilityType
 * Documentation : Indicates whether the seller making the request can list with certain features. A seller's eligibility is determined by their feedback rating.
 * @date 04/07/2012
 */
class EbayTradingTypeFeatureEligibilityType extends EbayTradingWsdlClass
{
	/**
	 * The QualifiesForBuyItNow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller is eligible to list items with the 'BuyItNow' option. A value of true means that the seller is eligible; a value of false indicates that they are not eligible.
	 * @var boolean
	 */
	public $QualifiesForBuyItNow;
	/**
	 * The QualifiesForBuyItNowMultiple
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller is eligible to specify the 'BuyItNow' option for multiple-item listings. A value of true means that the seller is eligible; a value of false indicates that they are not eligible.
	 * @var boolean
	 */
	public $QualifiesForBuyItNowMultiple;
	/**
	 * The QualifiedForFixedPriceOneDayDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller is eligible to list a fixed-price item with a one-day listing duration. A value of true means that the seller is eligible; a value of false indicates that the seller is not eligible. Note that this field only controls user eligibility. The listing type and category must support this feature for this field to be applicable.
	 * @var boolean
	 */
	public $QualifiedForFixedPriceOneDayDuration;
	/**
	 * The QualifiesForVariations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the seller is eligible to list multi-variation items.
	 * @var boolean
	 */
	public $QualifiesForVariations;
	/**
	 * The QualifiedForAuctionOneDayDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller is eligible to list an auction item with a one day duration on this site. Limitation: the Adult-Only and Auto Vehicle categories do not support one day auctions, so the seller cannot list items in these categories as one day auctions even if the seller has the eligibility.
	 * @var boolean
	 */
	public $QualifiedForAuctionOneDayDuration;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean QualifiesForBuyItNow
	 * @param boolean QualifiesForBuyItNowMultiple
	 * @param boolean QualifiedForFixedPriceOneDayDuration
	 * @param boolean QualifiesForVariations
	 * @param boolean QualifiedForAuctionOneDayDuration
	 * @param DOMDocument any
	 * @return EbayTradingTypeFeatureEligibilityType
	 */
	public function __construct($_QualifiesForBuyItNow = null,$_QualifiesForBuyItNowMultiple = null,$_QualifiedForFixedPriceOneDayDuration = null,$_QualifiesForVariations = null,$_QualifiedForAuctionOneDayDuration = null,$_any = null)
	{
		parent::__construct(array('QualifiesForBuyItNow'=>$_QualifiesForBuyItNow,'QualifiesForBuyItNowMultiple'=>$_QualifiesForBuyItNowMultiple,'QualifiedForFixedPriceOneDayDuration'=>$_QualifiedForFixedPriceOneDayDuration,'QualifiesForVariations'=>$_QualifiesForVariations,'QualifiedForAuctionOneDayDuration'=>$_QualifiedForAuctionOneDayDuration,'any'=>$_any));
	}
	/**
	 * Set QualifiesForBuyItNow
	 * @param boolean QualifiesForBuyItNow
	 * @return boolean
	 */
	public function setQualifiesForBuyItNow($_QualifiesForBuyItNow)
	{
		return ($this->QualifiesForBuyItNow = $_QualifiesForBuyItNow);
	}
	/**
	 * Get QualifiesForBuyItNow
	 * @return boolean
	 */
	public function getQualifiesForBuyItNow()
	{
		return $this->QualifiesForBuyItNow;
	}
	/**
	 * Set QualifiesForBuyItNowMultiple
	 * @param boolean QualifiesForBuyItNowMultiple
	 * @return boolean
	 */
	public function setQualifiesForBuyItNowMultiple($_QualifiesForBuyItNowMultiple)
	{
		return ($this->QualifiesForBuyItNowMultiple = $_QualifiesForBuyItNowMultiple);
	}
	/**
	 * Get QualifiesForBuyItNowMultiple
	 * @return boolean
	 */
	public function getQualifiesForBuyItNowMultiple()
	{
		return $this->QualifiesForBuyItNowMultiple;
	}
	/**
	 * Set QualifiedForFixedPriceOneDayDuration
	 * @param boolean QualifiedForFixedPriceOneDayDuration
	 * @return boolean
	 */
	public function setQualifiedForFixedPriceOneDayDuration($_QualifiedForFixedPriceOneDayDuration)
	{
		return ($this->QualifiedForFixedPriceOneDayDuration = $_QualifiedForFixedPriceOneDayDuration);
	}
	/**
	 * Get QualifiedForFixedPriceOneDayDuration
	 * @return boolean
	 */
	public function getQualifiedForFixedPriceOneDayDuration()
	{
		return $this->QualifiedForFixedPriceOneDayDuration;
	}
	/**
	 * Set QualifiesForVariations
	 * @param boolean QualifiesForVariations
	 * @return boolean
	 */
	public function setQualifiesForVariations($_QualifiesForVariations)
	{
		return ($this->QualifiesForVariations = $_QualifiesForVariations);
	}
	/**
	 * Get QualifiesForVariations
	 * @return boolean
	 */
	public function getQualifiesForVariations()
	{
		return $this->QualifiesForVariations;
	}
	/**
	 * Set QualifiedForAuctionOneDayDuration
	 * @param boolean QualifiedForAuctionOneDayDuration
	 * @return boolean
	 */
	public function setQualifiedForAuctionOneDayDuration($_QualifiedForAuctionOneDayDuration)
	{
		return ($this->QualifiedForAuctionOneDayDuration = $_QualifiedForAuctionOneDayDuration);
	}
	/**
	 * Get QualifiedForAuctionOneDayDuration
	 * @return boolean
	 */
	public function getQualifiedForAuctionOneDayDuration()
	{
		return $this->QualifiedForAuctionOneDayDuration;
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