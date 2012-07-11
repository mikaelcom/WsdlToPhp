<?php
/**
 * Class file for OvhTypeRtmMotherboardStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmMotherboardStruct
 * @date 02/07/2012
 */
class OvhTypeRtmMotherboardStruct extends OvhWsdlClass
{
	/**
	 * The manufacture
	 * @var string
	 */
	public $manufacture;
	/**
	 * The modelName
	 * @var string
	 */
	public $modelName;
	/**
	 * Constructor
	 * @param string manufacture
	 * @param string modelName
	 * @return OvhTypeRtmMotherboardStruct
	 */
	public function __construct($_manufacture = null,$_modelName = null)
	{
		parent::__construct(array('manufacture'=>$_manufacture,'modelName'=>$_modelName));
	}
	/**
	 * Set manufacture
	 * @param string manufacture
	 * @return string
	 */
	public function setManufacture($_manufacture)
	{
		return ($this->manufacture = $_manufacture);
	}
	/**
	 * Get manufacture
	 * @return string
	 */
	public function getManufacture()
	{
		return $this->manufacture;
	}
	/**
	 * Set modelName
	 * @param string modelName
	 * @return string
	 */
	public function setModelName($_modelName)
	{
		return ($this->modelName = $_modelName);
	}
	/**
	 * Get modelName
	 * @return string
	 */
	public function getModelName()
	{
		return $this->modelName;
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