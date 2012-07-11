<?php
/**
 * Class file for AmazonEc2TypeCreateSnapshotType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSnapshotType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSnapshotType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param string description
	 * @return AmazonEc2TypeCreateSnapshotType
	 */
	public function __construct($_volumeId = null,$_description = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'description'=>$_description));
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