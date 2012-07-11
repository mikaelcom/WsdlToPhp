<?php
/**
 * Class file for AmazonEc2TypeMonitorInstancesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeMonitorInstancesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeMonitorInstancesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeMonitorInstancesSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeMonitorInstancesSetItemType item
	 * @return AmazonEc2TypeMonitorInstancesSetType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param MonitorInstancesSetItemType item
	 * @return MonitorInstancesSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeMonitorInstancesSetItemType
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