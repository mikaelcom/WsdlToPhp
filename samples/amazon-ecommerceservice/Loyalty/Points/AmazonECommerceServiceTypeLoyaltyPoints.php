<?php
/**
 * Class file for AmazonECommerceServiceTypeLoyaltyPoints
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeLoyaltyPoints
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeLoyaltyPoints extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Points
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $Points;
	/**
	 * The TypicalRedemptionValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $TypicalRedemptionValue;
	/**
	 * Constructor
	 * @param nonNegativeInteger Points
	 * @param AmazonECommerceServiceTypePrice TypicalRedemptionValue
	 * @return AmazonECommerceServiceTypeLoyaltyPoints
	 */
	public function __construct($_Points = null,$_TypicalRedemptionValue = null)
	{
		parent::__construct(array('Points'=>$_Points,'TypicalRedemptionValue'=>$_TypicalRedemptionValue));
	}
	/**
	 * Set Points
	 * @param nonNegativeInteger Points
	 * @return nonNegativeInteger
	 */
	public function setPoints($_Points)
	{
		return ($this->Points = $_Points);
	}
	/**
	 * Get Points
	 * @return nonNegativeInteger
	 */
	public function getPoints()
	{
		return $this->Points;
	}
	/**
	 * Set TypicalRedemptionValue
	 * @param Price TypicalRedemptionValue
	 * @return Price
	 */
	public function setTypicalRedemptionValue($_TypicalRedemptionValue)
	{
		return ($this->TypicalRedemptionValue = $_TypicalRedemptionValue);
	}
	/**
	 * Get TypicalRedemptionValue
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getTypicalRedemptionValue()
	{
		return $this->TypicalRedemptionValue;
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