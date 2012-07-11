<?php
/**
 * Class file for AmazonECommerceServiceTypeOfferSummary
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeOfferSummary
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeOfferSummary extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The LowestNewPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestNewPrice;
	/**
	 * The LowestUsedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestUsedPrice;
	/**
	 * The LowestCollectiblePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestCollectiblePrice;
	/**
	 * The LowestRefurbishedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestRefurbishedPrice;
	/**
	 * The TotalNew
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TotalNew;
	/**
	 * The TotalUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TotalUsed;
	/**
	 * The TotalCollectible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TotalCollectible;
	/**
	 * The TotalRefurbished
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TotalRefurbished;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypePrice LowestNewPrice
	 * @param AmazonECommerceServiceTypePrice LowestUsedPrice
	 * @param AmazonECommerceServiceTypePrice LowestCollectiblePrice
	 * @param AmazonECommerceServiceTypePrice LowestRefurbishedPrice
	 * @param string TotalNew
	 * @param string TotalUsed
	 * @param string TotalCollectible
	 * @param string TotalRefurbished
	 * @return AmazonECommerceServiceTypeOfferSummary
	 */
	public function __construct($_LowestNewPrice = null,$_LowestUsedPrice = null,$_LowestCollectiblePrice = null,$_LowestRefurbishedPrice = null,$_TotalNew = null,$_TotalUsed = null,$_TotalCollectible = null,$_TotalRefurbished = null)
	{
		parent::__construct(array('LowestNewPrice'=>$_LowestNewPrice,'LowestUsedPrice'=>$_LowestUsedPrice,'LowestCollectiblePrice'=>$_LowestCollectiblePrice,'LowestRefurbishedPrice'=>$_LowestRefurbishedPrice,'TotalNew'=>$_TotalNew,'TotalUsed'=>$_TotalUsed,'TotalCollectible'=>$_TotalCollectible,'TotalRefurbished'=>$_TotalRefurbished));
	}
	/**
	 * Set LowestNewPrice
	 * @param Price LowestNewPrice
	 * @return Price
	 */
	public function setLowestNewPrice($_LowestNewPrice)
	{
		return ($this->LowestNewPrice = $_LowestNewPrice);
	}
	/**
	 * Get LowestNewPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getLowestNewPrice()
	{
		return $this->LowestNewPrice;
	}
	/**
	 * Set LowestUsedPrice
	 * @param Price LowestUsedPrice
	 * @return Price
	 */
	public function setLowestUsedPrice($_LowestUsedPrice)
	{
		return ($this->LowestUsedPrice = $_LowestUsedPrice);
	}
	/**
	 * Get LowestUsedPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getLowestUsedPrice()
	{
		return $this->LowestUsedPrice;
	}
	/**
	 * Set LowestCollectiblePrice
	 * @param Price LowestCollectiblePrice
	 * @return Price
	 */
	public function setLowestCollectiblePrice($_LowestCollectiblePrice)
	{
		return ($this->LowestCollectiblePrice = $_LowestCollectiblePrice);
	}
	/**
	 * Get LowestCollectiblePrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getLowestCollectiblePrice()
	{
		return $this->LowestCollectiblePrice;
	}
	/**
	 * Set LowestRefurbishedPrice
	 * @param Price LowestRefurbishedPrice
	 * @return Price
	 */
	public function setLowestRefurbishedPrice($_LowestRefurbishedPrice)
	{
		return ($this->LowestRefurbishedPrice = $_LowestRefurbishedPrice);
	}
	/**
	 * Get LowestRefurbishedPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getLowestRefurbishedPrice()
	{
		return $this->LowestRefurbishedPrice;
	}
	/**
	 * Set TotalNew
	 * @param string TotalNew
	 * @return string
	 */
	public function setTotalNew($_TotalNew)
	{
		return ($this->TotalNew = $_TotalNew);
	}
	/**
	 * Get TotalNew
	 * @return string
	 */
	public function getTotalNew()
	{
		return $this->TotalNew;
	}
	/**
	 * Set TotalUsed
	 * @param string TotalUsed
	 * @return string
	 */
	public function setTotalUsed($_TotalUsed)
	{
		return ($this->TotalUsed = $_TotalUsed);
	}
	/**
	 * Get TotalUsed
	 * @return string
	 */
	public function getTotalUsed()
	{
		return $this->TotalUsed;
	}
	/**
	 * Set TotalCollectible
	 * @param string TotalCollectible
	 * @return string
	 */
	public function setTotalCollectible($_TotalCollectible)
	{
		return ($this->TotalCollectible = $_TotalCollectible);
	}
	/**
	 * Get TotalCollectible
	 * @return string
	 */
	public function getTotalCollectible()
	{
		return $this->TotalCollectible;
	}
	/**
	 * Set TotalRefurbished
	 * @param string TotalRefurbished
	 * @return string
	 */
	public function setTotalRefurbished($_TotalRefurbished)
	{
		return ($this->TotalRefurbished = $_TotalRefurbished);
	}
	/**
	 * Get TotalRefurbished
	 * @return string
	 */
	public function getTotalRefurbished()
	{
		return $this->TotalRefurbished;
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