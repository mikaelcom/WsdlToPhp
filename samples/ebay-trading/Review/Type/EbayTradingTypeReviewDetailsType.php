<?php
/**
 * Class file for EbayTradingTypeReviewDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviewDetailsType
 * Documentation : Contains product reviews written by eBay members.
 * @date 04/07/2012
 */
class EbayTradingTypeReviewDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The AverageRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The product's average rating (out of 5) based on all reviews. For example, a value like 4.5 would mean the average rating is 4.5 out of 5. (See ReviewCount for the total number of reviews.)
	 * @var float
	 */
	public $AverageRating;
	/**
	 * The Review
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An eBay member's review of the product.
	 * @var EbayTradingTypeReviewType
	 */
	public $Review;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param float AverageRating
	 * @param EbayTradingTypeReviewType Review
	 * @param DOMDocument any
	 * @return EbayTradingTypeReviewDetailsType
	 */
	public function __construct($_AverageRating = null,$_Review = null,$_any = null)
	{
		parent::__construct(array('AverageRating'=>$_AverageRating,'Review'=>$_Review,'any'=>$_any));
	}
	/**
	 * Set AverageRating
	 * @param float AverageRating
	 * @return float
	 */
	public function setAverageRating($_AverageRating)
	{
		return ($this->AverageRating = $_AverageRating);
	}
	/**
	 * Get AverageRating
	 * @return float
	 */
	public function getAverageRating()
	{
		return $this->AverageRating;
	}
	/**
	 * Set Review
	 * @param ReviewType Review
	 * @return ReviewType
	 */
	public function setReview($_Review)
	{
		return ($this->Review = $_Review);
	}
	/**
	 * Get Review
	 * @return EbayTradingTypeReviewType
	 */
	public function getReview()
	{
		return $this->Review;
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