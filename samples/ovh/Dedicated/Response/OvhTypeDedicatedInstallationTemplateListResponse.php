<?php
/**
 * Class file for OvhTypeDedicatedInstallationTemplateListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallationTemplateListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallationTemplateListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedInstallationTemplateStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedInstallationTemplateStructType return
	 * @return OvhTypeDedicatedInstallationTemplateListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedInstallationTemplateStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedInstallationTemplateStructType return
	 * @return MyArrayOfDedicatedInstallationTemplateStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedInstallationTemplateStructType
	 */
	public function getReturn()
	{
		return $this->return;
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