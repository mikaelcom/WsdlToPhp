<?php
/**
 * Class file for AmazonEc2TypeCreateImageType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateImageType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateImageType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The noReboot
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $noReboot;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param string name
	 * @param string description
	 * @param boolean noReboot
	 * @return AmazonEc2TypeCreateImageType
	 */
	public function __construct($_instanceId = null,$_name = null,$_description = null,$_noReboot = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'name'=>$_name,'description'=>$_description,'noReboot'=>$_noReboot));
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
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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
	 * Set noReboot
	 * @param boolean noReboot
	 * @return boolean
	 */
	public function setNoReboot($_noReboot)
	{
		return ($this->noReboot = $_noReboot);
	}
	/**
	 * Get noReboot
	 * @return boolean
	 */
	public function getNoReboot()
	{
		return $this->noReboot;
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