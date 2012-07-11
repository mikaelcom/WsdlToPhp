<?php
/**
 * Class file for AmazonEc2TypeBundleInstanceResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBundleInstanceResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeBundleInstanceResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The bundleInstanceTask
	 * @var AmazonEc2TypeBundleInstanceTaskType
	 */
	public $bundleInstanceTask;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeBundleInstanceTaskType bundleInstanceTask
	 * @return AmazonEc2TypeBundleInstanceResponseType
	 */
	public function __construct($_requestId = null,$_bundleInstanceTask = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'bundleInstanceTask'=>$_bundleInstanceTask));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set bundleInstanceTask
	 * @param BundleInstanceTaskType bundleInstanceTask
	 * @return BundleInstanceTaskType
	 */
	public function setBundleInstanceTask($_bundleInstanceTask)
	{
		return ($this->bundleInstanceTask = $_bundleInstanceTask);
	}
	/**
	 * Get bundleInstanceTask
	 * @return AmazonEc2TypeBundleInstanceTaskType
	 */
	public function getBundleInstanceTask()
	{
		return $this->bundleInstanceTask;
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