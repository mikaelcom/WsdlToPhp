<?php
/**
 * Class file for SPWebPartPagesTypeGetBindingResourceData
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetBindingResourceData
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetBindingResourceData extends SPWebPartPagesWsdlClass
{
	/**
	 * The ResourceName
	 * @var string
	 */
	public $ResourceName;
	/**
	 * Constructor
	 * @param string ResourceName
	 * @return SPWebPartPagesTypeGetBindingResourceData
	 */
	public function __construct($_ResourceName = null)
	{
		parent::__construct(array('ResourceName'=>$_ResourceName));
	}
	/**
	 * Set ResourceName
	 * @param string ResourceName
	 * @return string
	 */
	public function setResourceName($_ResourceName)
	{
		return ($this->ResourceName = $_ResourceName);
	}
	/**
	 * Get ResourceName
	 * @return string
	 */
	public function getResourceName()
	{
		return $this->ResourceName;
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