<?php
/**
 * Class file for AmazonECommerceServiceTypePromotions
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypePromotions
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypePromotions extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Promotion
	 * @var AmazonECommerceServiceTypePromotion
	 */
	public $Promotion;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypePromotion Promotion
	 * @return AmazonECommerceServiceTypePromotions
	 */
	public function __construct($_Promotion = null)
	{
		parent::__construct(array('Promotion'=>$_Promotion));
	}
	/**
	 * Set Promotion
	 * @param Promotion Promotion
	 * @return Promotion
	 */
	public function setPromotion($_Promotion)
	{
		return ($this->Promotion = $_Promotion);
	}
	/**
	 * Get Promotion
	 * @return AmazonECommerceServiceTypePromotion
	 */
	public function getPromotion()
	{
		return $this->Promotion;
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