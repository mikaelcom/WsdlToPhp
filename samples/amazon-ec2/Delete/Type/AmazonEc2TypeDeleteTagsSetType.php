<?php
/**
 * Class file for AmazonEc2TypeDeleteTagsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteTagsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteTagsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDeleteTagsSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDeleteTagsSetItemType item
	 * @return AmazonEc2TypeDeleteTagsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DeleteTagsSetItemType item
	 * @return DeleteTagsSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDeleteTagsSetItemType
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