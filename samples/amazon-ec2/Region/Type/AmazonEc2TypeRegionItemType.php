<?php
/**
 * Class file for AmazonEc2TypeRegionItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRegionItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeRegionItemType extends AmazonEc2WsdlClass
{
	/**
	 * The regionName
	 * @var string
	 */
	public $regionName;
	/**
	 * The regionEndpoint
	 * @var string
	 */
	public $regionEndpoint;
	/**
	 * Constructor
	 * @param string regionName
	 * @param string regionEndpoint
	 * @return AmazonEc2TypeRegionItemType
	 */
	public function __construct($_regionName = null,$_regionEndpoint = null)
	{
		parent::__construct(array('regionName'=>$_regionName,'regionEndpoint'=>$_regionEndpoint));
	}
	/**
	 * Set regionName
	 * @param string regionName
	 * @return string
	 */
	public function setRegionName($_regionName)
	{
		return ($this->regionName = $_regionName);
	}
	/**
	 * Get regionName
	 * @return string
	 */
	public function getRegionName()
	{
		return $this->regionName;
	}
	/**
	 * Set regionEndpoint
	 * @param string regionEndpoint
	 * @return string
	 */
	public function setRegionEndpoint($_regionEndpoint)
	{
		return ($this->regionEndpoint = $_regionEndpoint);
	}
	/**
	 * Get regionEndpoint
	 * @return string
	 */
	public function getRegionEndpoint()
	{
		return $this->regionEndpoint;
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