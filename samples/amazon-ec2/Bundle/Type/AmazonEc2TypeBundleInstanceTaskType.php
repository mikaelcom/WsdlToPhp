<?php
/**
 * Class file for AmazonEc2TypeBundleInstanceTaskType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBundleInstanceTaskType
 * @date 10/07/2012
 */
class AmazonEc2TypeBundleInstanceTaskType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The bundleId
	 * @var string
	 */
	public $bundleId;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The startTime
	 * @var dateTime
	 */
	public $startTime;
	/**
	 * The updateTime
	 * @var dateTime
	 */
	public $updateTime;
	/**
	 * The storage
	 * @var AmazonEc2TypeBundleInstanceTaskStorageType
	 */
	public $storage;
	/**
	 * The progress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $progress;
	/**
	 * The error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeBundleInstanceTaskErrorType
	 */
	public $error;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param string bundleId
	 * @param string state
	 * @param dateTime startTime
	 * @param dateTime updateTime
	 * @param AmazonEc2TypeBundleInstanceTaskStorageType storage
	 * @param string progress
	 * @param AmazonEc2TypeBundleInstanceTaskErrorType error
	 * @return AmazonEc2TypeBundleInstanceTaskType
	 */
	public function __construct($_instanceId = null,$_bundleId = null,$_state = null,$_startTime = null,$_updateTime = null,$_storage = null,$_progress = null,$_error = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'bundleId'=>$_bundleId,'state'=>$_state,'startTime'=>$_startTime,'updateTime'=>$_updateTime,'storage'=>$_storage,'progress'=>$_progress,'error'=>$_error));
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set startTime
	 * @param dateTime startTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->startTime = $_startTime);
	}
	/**
	 * Get startTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}
	/**
	 * Set updateTime
	 * @param dateTime updateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_updateTime)
	{
		return ($this->updateTime = $_updateTime);
	}
	/**
	 * Get updateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->updateTime;
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
	 * Set progress
	 * @param string progress
	 * @return string
	 */
	public function setProgress($_progress)
	{
		return ($this->progress = $_progress);
	}
	/**
	 * Get progress
	 * @return string
	 */
	public function getProgress()
	{
		return $this->progress;
	}
	/**
	 * Set error
	 * @param BundleInstanceTaskErrorType error
	 * @return BundleInstanceTaskErrorType
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return AmazonEc2TypeBundleInstanceTaskErrorType
	 */
	public function getError()
	{
		return $this->error;
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