<?php
/**
 * Class file for AmazonEc2TypeEbsBlockDeviceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeEbsBlockDeviceType
 * @date 10/07/2012
 */
class AmazonEc2TypeEbsBlockDeviceType extends AmazonEc2WsdlClass
{
	/**
	 * The snapshotId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The volumeSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $volumeSize;
	/**
	 * The deleteOnTermination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $deleteOnTermination;
	/**
	 * Constructor
	 * @param string snapshotId
	 * @param int volumeSize
	 * @param boolean deleteOnTermination
	 * @return AmazonEc2TypeEbsBlockDeviceType
	 */
	public function __construct($_snapshotId = null,$_volumeSize = null,$_deleteOnTermination = null)
	{
		parent::__construct(array('snapshotId'=>$_snapshotId,'volumeSize'=>$_volumeSize,'deleteOnTermination'=>$_deleteOnTermination));
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
	 * Set volumeSize
	 * @param int volumeSize
	 * @return int
	 */
	public function setVolumeSize($_volumeSize)
	{
		return ($this->volumeSize = $_volumeSize);
	}
	/**
	 * Get volumeSize
	 * @return int
	 */
	public function getVolumeSize()
	{
		return $this->volumeSize;
	}
	/**
	 * Set deleteOnTermination
	 * @param boolean deleteOnTermination
	 * @return boolean
	 */
	public function setDeleteOnTermination($_deleteOnTermination)
	{
		return ($this->deleteOnTermination = $_deleteOnTermination);
	}
	/**
	 * Get deleteOnTermination
	 * @return boolean
	 */
	public function getDeleteOnTermination()
	{
		return $this->deleteOnTermination;
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