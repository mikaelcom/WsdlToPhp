<?php
/**
 * Class file for AmazonEc2TypeCreateSnapshotResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSnapshotResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSnapshotResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The startTime
	 * @var dateTime
	 */
	public $startTime;
	/**
	 * The progress
	 * @var string
	 */
	public $progress;
	/**
	 * The ownerId
	 * @var string
	 */
	public $ownerId;
	/**
	 * The volumeSize
	 * @var string
	 */
	public $volumeSize;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string snapshotId
	 * @param string volumeId
	 * @param string status
	 * @param dateTime startTime
	 * @param string progress
	 * @param string ownerId
	 * @param string volumeSize
	 * @param string description
	 * @return AmazonEc2TypeCreateSnapshotResponseType
	 */
	public function __construct($_requestId = null,$_snapshotId = null,$_volumeId = null,$_status = null,$_startTime = null,$_progress = null,$_ownerId = null,$_volumeSize = null,$_description = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'snapshotId'=>$_snapshotId,'volumeId'=>$_volumeId,'status'=>$_status,'startTime'=>$_startTime,'progress'=>$_progress,'ownerId'=>$_ownerId,'volumeSize'=>$_volumeSize,'description'=>$_description));
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
	 * Set ownerId
	 * @param string ownerId
	 * @return string
	 */
	public function setOwnerId($_ownerId)
	{
		return ($this->ownerId = $_ownerId);
	}
	/**
	 * Get ownerId
	 * @return string
	 */
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	/**
	 * Set volumeSize
	 * @param string volumeSize
	 * @return string
	 */
	public function setVolumeSize($_volumeSize)
	{
		return ($this->volumeSize = $_volumeSize);
	}
	/**
	 * Get volumeSize
	 * @return string
	 */
	public function getVolumeSize()
	{
		return $this->volumeSize;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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