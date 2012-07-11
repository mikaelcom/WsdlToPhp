<?php
/**
 * Class file for XiIndexComponentsTypeComponents
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeComponents
 * @date 08/07/2012
 */
class XiIndexComponentsTypeComponents extends XiIndexComponentsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypeSecurity
	 */
	public $Security;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The Components
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypeArrayOfComponent
	 */
	public $Components;
	/**
	 * Constructor
	 * @param XiIndexComponentsTypeSecurity Security
	 * @param int Count
	 * @param XiIndexComponentsTypeArrayOfComponent Components
	 * @return XiIndexComponentsTypeComponents
	 */
	public function __construct($_Security = null,$_Count,$_Components = null)
	{
		XiIndexComponentsWsdlClass::__construct(array('Security'=>$_Security,'Count'=>$_Count,'Components'=>new XiIndexComponentsTypeArrayOfComponent($_Components)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiIndexComponentsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Components
	 * @param ArrayOfComponent Components
	 * @return ArrayOfComponent
	 */
	public function setComponents($_Components)
	{
		return ($this->Components = $_Components);
	}
	/**
	 * Get Components
	 * @return XiIndexComponentsTypeArrayOfComponent
	 */
	public function getComponents()
	{
		return $this->Components;
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