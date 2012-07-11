<?php
/**
 * Class file for AmazonEc2TypeDescribeBundleTasksResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeBundleTasksResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeBundleTasksResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The bundleInstanceTasksSet
	 * @var AmazonEc2TypeBundleInstanceTasksSetType
	 */
	public $bundleInstanceTasksSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeBundleInstanceTasksSetType bundleInstanceTasksSet
	 * @return AmazonEc2TypeDescribeBundleTasksResponseType
	 */
	public function __construct($_requestId = null,$_bundleInstanceTasksSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'bundleInstanceTasksSet'=>$_bundleInstanceTasksSet));
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
	 * Set bundleInstanceTasksSet
	 * @param BundleInstanceTasksSetType bundleInstanceTasksSet
	 * @return BundleInstanceTasksSetType
	 */
	public function setBundleInstanceTasksSet($_bundleInstanceTasksSet)
	{
		return ($this->bundleInstanceTasksSet = $_bundleInstanceTasksSet);
	}
	/**
	 * Get bundleInstanceTasksSet
	 * @return AmazonEc2TypeBundleInstanceTasksSetType
	 */
	public function getBundleInstanceTasksSet()
	{
		return $this->bundleInstanceTasksSet;
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