<?php
/**
 * Class file for AmazonEc2TypeMonitorInstancesResponseSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeMonitorInstancesResponseSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeMonitorInstancesResponseSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeMonitorInstancesResponseSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeMonitorInstancesResponseSetItemType item
	 * @return AmazonEc2TypeMonitorInstancesResponseSetType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param MonitorInstancesResponseSetItemType item
	 * @return MonitorInstancesResponseSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeMonitorInstancesResponseSetItemType
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