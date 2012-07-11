<?php
/**
 * Class file for AmazonEc2TypeCreateVolumeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVolumeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVolumeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The size
	 * @var string
	 */
	public $size;
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The createTime
	 * @var dateTime
	 */
	public $createTime;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string volumeId
	 * @param string size
	 * @param string snapshotId
	 * @param string availabilityZone
	 * @param string status
	 * @param dateTime createTime
	 * @return AmazonEc2TypeCreateVolumeResponseType
	 */
	public function __construct($_requestId = null,$_volumeId = null,$_size = null,$_snapshotId = null,$_availabilityZone = null,$_status = null,$_createTime = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'volumeId'=>$_volumeId,'size'=>$_size,'snapshotId'=>$_snapshotId,'availabilityZone'=>$_availabilityZone,'status'=>$_status,'createTime'=>$_createTime));
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
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
	}
	/**
	 * Set size
	 * @param string size
	 * @return string
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return string
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set snapshotId
	 * @param string snapshotId
	 * @return string
	 */
	public function setSnapshotId($_snapshotId)
	{
		return ($this->snapshotId = $_snapshotId);
	}
	/**
	 * Get snapshotId
	 * @return string
	 */
	public function getSnapshotId()
	{
		return $this->snapshotId;
	}
	/**
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set createTime
	 * @param dateTime createTime
	 * @return dateTime
	 */
	public function setCreateTime($_createTime)
	{
		return ($this->createTime = $_createTime);
	}
	/**
	 * Get createTime
	 * @return dateTime
	 */
	public function getCreateTime()
	{
		return $this->createTime;
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