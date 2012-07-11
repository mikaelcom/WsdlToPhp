<?php
/**
 * Class file for AmazonEc2TypeCreateVolumeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVolumeType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVolumeType extends AmazonEc2WsdlClass
{
	/**
	 * The size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $size;
	/**
	 * The snapshotId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * Constructor
	 * @param string size
	 * @param string snapshotId
	 * @param string availabilityZone
	 * @return AmazonEc2TypeCreateVolumeType
	 */
	public function __construct($_size = null,$_snapshotId = null,$_availabilityZone = null)
	{
		parent::__construct(array('size'=>$_size,'snapshotId'=>$_snapshotId,'availabilityZone'=>$_availabilityZone));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>