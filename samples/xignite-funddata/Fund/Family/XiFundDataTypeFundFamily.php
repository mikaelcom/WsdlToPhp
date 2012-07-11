<?php
/**
 * Class file for XiFundDataTypeFundFamily
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundFamily
 * @date 08/07/2012
 */
class XiFundDataTypeFundFamily extends XiFundDataTypeCommon
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
	 * The Family
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Family;
	/**
	 * Constructor
	 * @param XiFundDataTypeSecurity Security
	 * @param string Family
	 * @return XiFundDataTypeFundFamily
	 */
	public function __construct($_Security = null,$_Family = null)
	{
		XiFundDataWsdlClass::__construct(array('Security'=>$_Security,'Family'=>$_Family));
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
	 * Set Family
	 * @param string Family
	 * @return string
	 */
	public function setFamily($_Family)
	{
		return ($this->Family = $_Family);
	}
	/**
	 * Get Family
	 * @return string
	 */
	public function getFamily()
	{
		return $this->Family;
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