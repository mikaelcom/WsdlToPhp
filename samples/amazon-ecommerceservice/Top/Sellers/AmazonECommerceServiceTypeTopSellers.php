<?php
/**
 * Class file for AmazonECommerceServiceTypeTopSellers
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeTopSellers
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeTopSellers extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The TopSeller
	 * @var AmazonECommerceServiceTypeTopSeller
	 */
	public $TopSeller;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeTopSeller TopSeller
	 * @return AmazonECommerceServiceTypeTopSellers
	 */
	public function __construct($_TopSeller = null)
	{
		parent::__construct(array('TopSeller'=>$_TopSeller));
	}
	/**
	 * Set TopSeller
	 * @param TopSeller TopSeller
	 * @return TopSeller
	 */
	public function setTopSeller($_TopSeller)
	{
		return ($this->TopSeller = $_TopSeller);
	}
	/**
	 * Get TopSeller
	 * @return AmazonECommerceServiceTypeTopSeller
	 */
	public function getTopSeller()
	{
		return $this->TopSeller;
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