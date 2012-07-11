<?php
/**
 * Class file for AmazonEc2TypeImportInstanceTaskDetailsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportInstanceTaskDetailsType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportInstanceTaskDetailsType extends AmazonEc2WsdlClass
{
	/**
	 * The volumes
	 * @var AmazonEc2TypeImportInstanceVolumeDetailSetType
	 */
	public $volumes;
	/**
	 * The instanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceId;
	/**
	 * The platform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $platform;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param AmazonEc2TypeImportInstanceVolumeDetailSetType volumes
	 * @param string instanceId
	 * @param string platform
	 * @param string description
	 * @return AmazonEc2TypeImportInstanceTaskDetailsType
	 */
	public function __construct($_volumes = null,$_instanceId = null,$_platform = null,$_description = null)
	{
		parent::__construct(array('volumes'=>$_volumes,'instanceId'=>$_instanceId,'platform'=>$_platform,'description'=>$_description));
	}
	/**
	 * Set volumes
	 * @param ImportInstanceVolumeDetailSetType volumes
	 * @return ImportInstanceVolumeDetailSetType
	 */
	public function setVolumes($_volumes)
	{
		return ($this->volumes = $_volumes);
	}
	/**
	 * Get volumes
	 * @return AmazonEc2TypeImportInstanceVolumeDetailSetType
	 */
	public function getVolumes()
	{
		return $this->volumes;
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
	 * Set platform
	 * @param string platform
	 * @return string
	 */
	public function setPlatform($_platform)
	{
		return ($this->platform = $_platform);
	}
	/**
	 * Get platform
	 * @return string
	 */
	public function getPlatform()
	{
		return $this->platform;
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