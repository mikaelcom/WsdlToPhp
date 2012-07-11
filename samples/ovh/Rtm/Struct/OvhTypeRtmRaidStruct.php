<?php
/**
 * Class file for OvhTypeRtmRaidStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmRaidStruct
 * @date 02/07/2012
 */
class OvhTypeRtmRaidStruct extends OvhWsdlClass
{
	/**
	 * The units
	 * @var OvhTypeMyArrayOfRtmRaidPartitionStructType
	 */
	public $units;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfRtmRaidPartitionStructType units
	 * @return OvhTypeRtmRaidStruct
	 */
	public function __construct($_units = null)
	{
		parent::__construct(array('units'=>new OvhTypeMyArrayOfRtmRaidPartitionStructType($_units)));
	}
	/**
	 * Set units
	 * @param MyArrayOfRtmRaidPartitionStructType units
	 * @return MyArrayOfRtmRaidPartitionStructType
	 */
	public function setUnits($_units)
	{
		return ($this->units = $_units);
	}
	/**
	 * Get units
	 * @return OvhTypeMyArrayOfRtmRaidPartitionStructType
	 */
	public function getUnits()
	{
		return $this->units;
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