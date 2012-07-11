<?php
/**
 * Class file for AmazonEc2TypeSubnetSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSubnetSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSubnetSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeSubnetType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSubnetType item
	 * @return AmazonEc2TypeSubnetSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param SubnetType item
	 * @return SubnetType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeSubnetType
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