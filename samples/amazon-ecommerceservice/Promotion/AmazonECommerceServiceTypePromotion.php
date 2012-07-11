<?php
/**
 * Class file for AmazonECommerceServiceTypePromotion
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypePromotion
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypePromotion extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Summary
	 * @var AmazonECommerceServiceTypeSummary
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeSummary Summary
	 * @return AmazonECommerceServiceTypePromotion
	 */
	public function __construct($_Summary = null)
	{
		parent::__construct(array('Summary'=>$_Summary));
	}
	/**
	 * Set Summary
	 * @param Summary Summary
	 * @return Summary
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return AmazonECommerceServiceTypeSummary
	 */
	public function getSummary()
	{
		return $this->Summary;
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