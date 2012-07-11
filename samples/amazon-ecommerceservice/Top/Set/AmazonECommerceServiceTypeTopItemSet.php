<?php
/**
 * Class file for AmazonECommerceServiceTypeTopItemSet
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeTopItemSet
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeTopItemSet extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Type;
	/**
	 * The TopItem
	 * @var AmazonECommerceServiceTypeTopItem
	 */
	public $TopItem;
	/**
	 * Constructor
	 * @param string Type
	 * @param AmazonECommerceServiceTypeTopItem TopItem
	 * @return AmazonECommerceServiceTypeTopItemSet
	 */
	public function __construct($_Type = null,$_TopItem = null)
	{
		parent::__construct(array('Type'=>$_Type,'TopItem'=>$_TopItem));
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set TopItem
	 * @param TopItem TopItem
	 * @return TopItem
	 */
	public function setTopItem($_TopItem)
	{
		return ($this->TopItem = $_TopItem);
	}
	/**
	 * Get TopItem
	 * @return AmazonECommerceServiceTypeTopItem
	 */
	public function getTopItem()
	{
		return $this->TopItem;
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