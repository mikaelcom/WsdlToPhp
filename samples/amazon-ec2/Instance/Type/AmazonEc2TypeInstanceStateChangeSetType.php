<?php
/**
 * Class file for AmazonEc2TypeInstanceStateChangeSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStateChangeSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStateChangeSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceStateChangeType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceStateChangeType item
	 * @return AmazonEc2TypeInstanceStateChangeSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceStateChangeType item
	 * @return InstanceStateChangeType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceStateChangeType
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