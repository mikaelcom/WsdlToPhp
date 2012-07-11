<?php
/**
 * Class file for XiFundDataTypeFundInceptionDate
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundInceptionDate
 * @date 08/07/2012
 */
class XiFundDataTypeFundInceptionDate extends XiFundDataTypeCommon
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
	 * The InceptionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InceptionDate;
	/**
	 * Constructor
	 * @param XiFundDataTypeSecurity Security
	 * @param string InceptionDate
	 * @return XiFundDataTypeFundInceptionDate
	 */
	public function __construct($_Security = null,$_InceptionDate = null)
	{
		XiFundDataWsdlClass::__construct(array('Security'=>$_Security,'InceptionDate'=>$_InceptionDate));
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
	 * Set InceptionDate
	 * @param string InceptionDate
	 * @return string
	 */
	public function setInceptionDate($_InceptionDate)
	{
		return ($this->InceptionDate = $_InceptionDate);
	}
	/**
	 * Get InceptionDate
	 * @return string
	 */
	public function getInceptionDate()
	{
		return $this->InceptionDate;
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