<?php
/**
 * Class file for AmazonEc2TypeRebootInstancesInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRebootInstancesInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeRebootInstancesInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRebootInstancesItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRebootInstancesItemType item
	 * @return AmazonEc2TypeRebootInstancesInfoType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RebootInstancesItemType item
	 * @return RebootInstancesItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRebootInstancesItemType
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