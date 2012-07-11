<?php
/**
 * Class file for AmazonEc2TypeDescribeAvailabilityZonesSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAvailabilityZonesSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAvailabilityZonesSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The zoneName
	 * @var string
	 */
	public $zoneName;
	/**
	 * Constructor
	 * @param string zoneName
	 * @return AmazonEc2TypeDescribeAvailabilityZonesSetItemType
	 */
	public function __construct($_zoneName = null)
	{
		parent::__construct(array('zoneName'=>$_zoneName));
	}
	/**
	 * Set zoneName
	 * @param string zoneName
	 * @return string
	 */
	public function setZoneName($_zoneName)
	{
		return ($this->zoneName = $_zoneName);
	}
	/**
	 * Get zoneName
	 * @return string
	 */
	public function getZoneName()
	{
		return $this->zoneName;
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