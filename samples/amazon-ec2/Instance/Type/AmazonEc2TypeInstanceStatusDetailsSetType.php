<?php
/**
 * Class file for AmazonEc2TypeInstanceStatusDetailsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStatusDetailsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStatusDetailsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceStatusDetailsSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceStatusDetailsSetItemType item
	 * @return AmazonEc2TypeInstanceStatusDetailsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceStatusDetailsSetItemType item
	 * @return InstanceStatusDetailsSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceStatusDetailsSetItemType
	 */
	public function getItem()
	{
		return $this->item;
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