<?php
/**
 * Class file for XiFundDataTypeFundLoad
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundLoad
 * @date 08/07/2012
 */
class XiFundDataTypeFundLoad extends XiFundDataTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurity
	 */
	public $Security;
	/**
	 * The SalesLoad
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSalesLoad
	 */
	public $SalesLoad;
	/**
	 * Constructor
	 * @param XiFundDataTypeSecurity Security
	 * @param XiFundDataTypeSalesLoad SalesLoad
	 * @return XiFundDataTypeFundLoad
	 */
	public function __construct($_Security = null,$_SalesLoad = null)
	{
		XiFundDataWsdlClass::__construct(array('Security'=>$_Security,'SalesLoad'=>$_SalesLoad));
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
	 * @return XiFundDataTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set SalesLoad
	 * @param SalesLoad SalesLoad
	 * @return SalesLoad
	 */
	public function setSalesLoad($_SalesLoad)
	{
		return ($this->SalesLoad = $_SalesLoad);
	}
	/**
	 * Get SalesLoad
	 * @return XiFundDataTypeSalesLoad
	 */
	public function getSalesLoad()
	{
		return $this->SalesLoad;
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