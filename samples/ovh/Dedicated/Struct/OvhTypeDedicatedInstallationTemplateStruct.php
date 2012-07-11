<?php
/**
 * Class file for OvhTypeDedicatedInstallationTemplateStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallationTemplateStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallationTemplateStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * Constructor
	 * @param string name
	 * @param string os
	 * @return OvhTypeDedicatedInstallationTemplateStruct
	 */
	public function __construct($_name = null,$_os = null)
	{
		parent::__construct(array('name'=>$_name,'os'=>$_os));
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
	 * Set os
	 * @param string os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get os
	 * @return string
	 */
	public function getOs()
	{
		return $this->os;
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