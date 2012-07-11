<?php
/**
 * Class file for AmazonEc2TypeCancelBundleTaskType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCancelBundleTaskType
 * @date 10/07/2012
 */
class AmazonEc2TypeCancelBundleTaskType extends AmazonEc2WsdlClass
{
	/**
	 * The bundleId
	 * @var string
	 */
	public $bundleId;
	/**
	 * Constructor
	 * @param string bundleId
	 * @return AmazonEc2TypeCancelBundleTaskType
	 */
	public function __construct($_bundleId = null)
	{
		parent::__construct(array('bundleId'=>$_bundleId));
	}
	/**
	 * Set bundleId
	 * @param string bundleId
	 * @return string
	 */
	public function setBundleId($_bundleId)
	{
		return ($this->bundleId = $_bundleId);
	}
	/**
	 * Get bundleId
	 * @return string
	 */
	public function getBundleId()
	{
		return $this->bundleId;
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