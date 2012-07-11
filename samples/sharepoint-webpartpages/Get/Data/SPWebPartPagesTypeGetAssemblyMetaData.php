<?php
/**
 * Class file for SPWebPartPagesTypeGetAssemblyMetaData
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetAssemblyMetaData
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetAssemblyMetaData extends SPWebPartPagesWsdlClass
{
	/**
	 * The assemblyName
	 * @var string
	 */
	public $assemblyName;
	/**
	 * The baseTypes
	 * @var string
	 */
	public $baseTypes;
	/**
	 * Constructor
	 * @param string assemblyName
	 * @param string baseTypes
	 * @return SPWebPartPagesTypeGetAssemblyMetaData
	 */
	public function __construct($_assemblyName = null,$_baseTypes = null)
	{
		parent::__construct(array('assemblyName'=>$_assemblyName,'baseTypes'=>$_baseTypes));
	}
	/**
	 * Set assemblyName
	 * @param string assemblyName
	 * @return string
	 */
	public function setAssemblyName($_assemblyName)
	{
		return ($this->assemblyName = $_assemblyName);
	}
	/**
	 * Get assemblyName
	 * @return string
	 */
	public function getAssemblyName()
	{
		return $this->assemblyName;
	}
	/**
	 * Set baseTypes
	 * @param string baseTypes
	 * @return string
	 */
	public function setBaseTypes($_baseTypes)
	{
		return ($this->baseTypes = $_baseTypes);
	}
	/**
	 * Get baseTypes
	 * @return string
	 */
	public function getBaseTypes()
	{
		return $this->baseTypes;
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