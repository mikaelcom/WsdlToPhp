<?php
/**
 * Class file for XiGlobalmasterTypePossibleValue
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypePossibleValue
 * @date 08/07/2012
 */
class XiGlobalmasterTypePossibleValue extends XiGlobalmasterWsdlClass
{
	/**
	 * The ProviderValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProviderValue;
	/**
	 * The XigniteValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $XigniteValue;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param string ProviderValue
	 * @param string XigniteValue
	 * @param string Description
	 * @return XiGlobalmasterTypePossibleValue
	 */
	public function __construct($_ProviderValue = null,$_XigniteValue = null,$_Description = null)
	{
		parent::__construct(array('ProviderValue'=>$_ProviderValue,'XigniteValue'=>$_XigniteValue,'Description'=>$_Description));
	}
	/**
	 * Set ProviderValue
	 * @param string ProviderValue
	 * @return string
	 */
	public function setProviderValue($_ProviderValue)
	{
		return ($this->ProviderValue = $_ProviderValue);
	}
	/**
	 * Get ProviderValue
	 * @return string
	 */
	public function getProviderValue()
	{
		return $this->ProviderValue;
	}
	/**
	 * Set XigniteValue
	 * @param string XigniteValue
	 * @return string
	 */
	public function setXigniteValue($_XigniteValue)
	{
		return ($this->XigniteValue = $_XigniteValue);
	}
	/**
	 * Get XigniteValue
	 * @return string
	 */
	public function getXigniteValue()
	{
		return $this->XigniteValue;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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