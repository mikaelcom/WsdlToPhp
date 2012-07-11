<?php
/**
 * Class file for XiFundDataTypeFundClassification
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundClassification
 * @date 08/07/2012
 */
class XiFundDataTypeFundClassification extends XiFundDataTypeCommon
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
	 * The Classification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeClassification
	 */
	public $Classification;
	/**
	 * Constructor
	 * @param XiFundDataTypeSecurity Security
	 * @param XiFundDataTypeClassification Classification
	 * @return XiFundDataTypeFundClassification
	 */
	public function __construct($_Security = null,$_Classification = null)
	{
		XiFundDataWsdlClass::__construct(array('Security'=>$_Security,'Classification'=>$_Classification));
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
	 * Set Classification
	 * @param Classification Classification
	 * @return Classification
	 */
	public function setClassification($_Classification)
	{
		return ($this->Classification = $_Classification);
	}
	/**
	 * Get Classification
	 * @return XiFundDataTypeClassification
	 */
	public function getClassification()
	{
		return $this->Classification;
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