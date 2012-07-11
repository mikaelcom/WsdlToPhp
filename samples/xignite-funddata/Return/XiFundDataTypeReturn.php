<?php
/**
 * Class file for XiFundDataTypeReturn
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeReturn
 * @date 08/07/2012
 */
class XiFundDataTypeReturn extends XiFundDataWsdlClass
{
	/**
	 * The ReturnType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeReturnTypes
	 */
	public $ReturnType;
	/**
	 * The ReturnValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReturnValue;
	/**
	 * Constructor
	 * @param XiFundDataTypeReturnTypes ReturnType
	 * @param double ReturnValue
	 * @return XiFundDataTypeReturn
	 */
	public function __construct($_ReturnType,$_ReturnValue)
	{
		parent::__construct(array('ReturnType'=>$_ReturnType,'ReturnValue'=>$_ReturnValue));
	}
	/**
	 * Set ReturnType
	 * @param ReturnTypes ReturnType
	 * @return ReturnTypes
	 */
	public function setReturnType($_ReturnType)
	{
		return ($this->ReturnType = XiFundDataTypeReturnTypes::valueIsValid($_ReturnType)?$_ReturnType:null);
	}
	/**
	 * Get ReturnType
	 * @return XiFundDataTypeReturnTypes
	 */
	public function getReturnType()
	{
		return $this->ReturnType;
	}
	/**
	 * Set ReturnValue
	 * @param double ReturnValue
	 * @return double
	 */
	public function setReturnValue($_ReturnValue)
	{
		return ($this->ReturnValue = $_ReturnValue);
	}
	/**
	 * Get ReturnValue
	 * @return double
	 */
	public function getReturnValue()
	{
		return $this->ReturnValue;
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