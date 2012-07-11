<?php
/**
 * Class file for AmazonEc2TypeImportInstanceLaunchSpecificationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportInstanceLaunchSpecificationType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportInstanceLaunchSpecificationType extends AmazonEc2WsdlClass
{
	/**
	 * The architecture
	 * @var string
	 */
	public $architecture;
	/**
	 * The groupSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeImportInstanceGroupSetType
	 */
	public $groupSet;
	/**
	 * The userData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeUserDataType
	 */
	public $userData;
	/**
	 * The instanceType
	 * @var string
	 */
	public $instanceType;
	/**
	 * The placement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstancePlacementType
	 */
	public $placement;
	/**
	 * The monitoring
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeMonitoringInstanceType
	 */
	public $monitoring;
	/**
	 * The subnetId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $subnetId;
	/**
	 * The instanceInitiatedShutdownBehavior
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceInitiatedShutdownBehavior;
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * Constructor
	 * @param string architecture
	 * @param AmazonEc2TypeImportInstanceGroupSetType groupSet
	 * @param AmazonEc2TypeUserDataType userData
	 * @param string instanceType
	 * @param AmazonEc2TypeInstancePlacementType placement
	 * @param AmazonEc2TypeMonitoringInstanceType monitoring
	 * @param string subnetId
	 * @param string instanceInitiatedShutdownBehavior
	 * @param string privateIpAddress
	 * @return AmazonEc2TypeImportInstanceLaunchSpecificationType
	 */
	public function __construct($_architecture = null,$_groupSet = null,$_userData = null,$_instanceType = null,$_placement = null,$_monitoring = null,$_subnetId = null,$_instanceInitiatedShutdownBehavior = null,$_privateIpAddress = null)
	{
		parent::__construct(array('architecture'=>$_architecture,'groupSet'=>$_groupSet,'userData'=>$_userData,'instanceType'=>$_instanceType,'placement'=>$_placement,'monitoring'=>$_monitoring,'subnetId'=>$_subnetId,'instanceInitiatedShutdownBehavior'=>$_instanceInitiatedShutdownBehavior,'privateIpAddress'=>$_privateIpAddress));
	}
	/**
	 * Set architecture
	 * @param string architecture
	 * @return string
	 */
	public function setArchitecture($_architecture)
	{
		return ($this->architecture = $_architecture);
	}
	/**
	 * Get architecture
	 * @return string
	 */
	public function getArchitecture()
	{
		return $this->architecture;
	}
	/**
	 * Set groupSet
	 * @param ImportInstanceGroupSetType groupSet
	 * @return ImportInstanceGroupSetType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeImportInstanceGroupSetType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set userData
	 * @param UserDataType userData
	 * @return UserDataType
	 */
	public function setUserData($_userData)
	{
		return ($this->userData = $_userData);
	}
	/**
	 * Get userData
	 * @return AmazonEc2TypeUserDataType
	 */
	public function getUserData()
	{
		return $this->userData;
	}
	/**
	 * Set instanceType
	 * @param string instanceType
	 * @return string
	 */
	public function setInstanceType($_instanceType)
	{
		return ($this->instanceType = $_instanceType);
	}
	/**
	 * Get instanceType
	 * @return string
	 */
	public function getInstanceType()
	{
		return $this->instanceType;
	}
	/**
	 * Set placement
	 * @param InstancePlacementType placement
	 * @return InstancePlacementType
	 */
	public function setPlacement($_placement)
	{
		return ($this->placement = $_placement);
	}
	/**
	 * Get placement
	 * @return AmazonEc2TypeInstancePlacementType
	 */
	public function getPlacement()
	{
		return $this->placement;
	}
	/**
	 * Set monitoring
	 * @param MonitoringInstanceType monitoring
	 * @return MonitoringInstanceType
	 */
	public function setMonitoring($_monitoring)
	{
		return ($this->monitoring = $_monitoring);
	}
	/**
	 * Get monitoring
	 * @return AmazonEc2TypeMonitoringInstanceType
	 */
	public function getMonitoring()
	{
		return $this->monitoring;
	}
	/**
	 * Set subnetId
	 * @param string subnetId
	 * @return string
	 */
	public function setSubnetId($_subnetId)
	{
		return ($this->subnetId = $_subnetId);
	}
	/**
	 * Get subnetId
	 * @return string
	 */
	public function getSubnetId()
	{
		return $this->subnetId;
	}
	/**
	 * Set instanceInitiatedShutdownBehavior
	 * @param string instanceInitiatedShutdownBehavior
	 * @return string
	 */
	public function setInstanceInitiatedShutdownBehavior($_instanceInitiatedShutdownBehavior)
	{
		return ($this->instanceInitiatedShutdownBehavior = $_instanceInitiatedShutdownBehavior);
	}
	/**
	 * Get instanceInitiatedShutdownBehavior
	 * @return string
	 */
	public function getInstanceInitiatedShutdownBehavior()
	{
		return $this->instanceInitiatedShutdownBehavior;
	}
	/**
	 * Set privateIpAddress
	 * @param string privateIpAddress
	 * @return string
	 */
	public function setPrivateIpAddress($_privateIpAddress)
	{
		return ($this->privateIpAddress = $_privateIpAddress);
	}
	/**
	 * Get privateIpAddress
	 * @return string
	 */
	public function getPrivateIpAddress()
	{
		return $this->privateIpAddress;
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