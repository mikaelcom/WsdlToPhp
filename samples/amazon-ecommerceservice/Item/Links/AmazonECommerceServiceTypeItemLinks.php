<?php
/**
 * Class file for AmazonECommerceServiceTypeItemLinks
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItemLinks
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItemLinks extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The ItemLink
	 * @var AmazonECommerceServiceTypeItemLink
	 */
	public $ItemLink;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeItemLink ItemLink
	 * @return AmazonECommerceServiceTypeItemLinks
	 */
	public function __construct($_ItemLink = null)
	{
		parent::__construct(array('ItemLink'=>$_ItemLink));
	}
	/**
	 * Set ItemLink
	 * @param ItemLink ItemLink
	 * @return ItemLink
	 */
	public function setItemLink($_ItemLink)
	{
		return ($this->ItemLink = $_ItemLink);
	}
	/**
	 * Get ItemLink
	 * @return AmazonECommerceServiceTypeItemLink
	 */
	public function getItemLink()
	{
		return $this->ItemLink;
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