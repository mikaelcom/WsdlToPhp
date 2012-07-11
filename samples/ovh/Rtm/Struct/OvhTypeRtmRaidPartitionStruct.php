<?php
/**
 * Class file for OvhTypeRtmRaidPartitionStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmRaidPartitionStruct
 * @date 02/07/2012
 */
class OvhTypeRtmRaidPartitionStruct extends OvhWsdlClass
{
	/**
	 * The partition
	 * @var string
	 */
	public $partition;
	/**
	 * The volumes
	 * @var OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType
	 */
	public $volumes;
	/**
	 * Constructor
	 * @param string partition
	 * @param OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType volumes
	 * @return OvhTypeRtmRaidPartitionStruct
	 */
	public function __construct($_partition = null,$_volumes = null)
	{
		parent::__construct(array('partition'=>$_partition,'volumes'=>new OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType($_volumes)));
	}
	/**
	 * Set partition
	 * @param string partition
	 * @return string
	 */
	public function setPartition($_partition)
	{
		return ($this->partition = $_partition);
	}
	/**
	 * Get partition
	 * @return string
	 */
	public function getPartition()
	{
		return $this->partition;
	}
	/**
	 * Set volumes
	 * @param MyArrayOfRtmRaidPartitionVolumeStructType volumes
	 * @return MyArrayOfRtmRaidPartitionVolumeStructType
	 */
	public function setVolumes($_volumes)
	{
		return ($this->volumes = $_volumes);
	}
	/**
	 * Get volumes
	 * @return OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType
	 */
	public function getVolumes()
	{
		return $this->volumes;
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