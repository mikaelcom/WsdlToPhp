<?php
/**
 * Class file for OvhTypeRtmMemoryModuleStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmMemoryModuleStruct
 * @date 02/07/2012
 */
class OvhTypeRtmMemoryModuleStruct extends OvhWsdlClass
{
	/**
	 * The moduleName
	 * @var string
	 */
	public $moduleName;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string moduleName
	 * @param string value
	 * @return OvhTypeRtmMemoryModuleStruct
	 */
	public function __construct($_moduleName = null,$_value = null)
	{
		parent::__construct(array('moduleName'=>$_moduleName,'value'=>$_value));
	}
	/**
	 * Set moduleName
	 * @param string moduleName
	 * @return string
	 */
	public function setModuleName($_moduleName)
	{
		return ($this->moduleName = $_moduleName);
	}
	/**
	 * Get moduleName
	 * @return string
	 */
	public function getModuleName()
	{
		return $this->moduleName;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
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