<?php
/**
 * Class file for AmazonEc2TypeBundleInstanceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBundleInstanceType
 * @date 10/07/2012
 */
class AmazonEc2TypeBundleInstanceType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The storage
	 * @var AmazonEc2TypeBundleInstanceTaskStorageType
	 */
	public $storage;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param AmazonEc2TypeBundleInstanceTaskStorageType storage
	 * @return AmazonEc2TypeBundleInstanceType
	 */
	public function __construct($_instanceId = null,$_storage = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'storage'=>$_storage));
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set storage
	 * @param BundleInstanceTaskStorageType storage
	 * @return BundleInstanceTaskStorageType
	 */
	public function setStorage($_storage)
	{
		return ($this->storage = $_storage);
	}
	/**
	 * Get storage
	 * @return AmazonEc2TypeBundleInstanceTaskStorageType
	 */
	public function getStorage()
	{
		return $this->storage;
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