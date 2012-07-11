<?php
/**
 * Class file for XiGlobalmasterTypeClassification
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeClassification
 * @date 08/07/2012
 */
class XiGlobalmasterTypeClassification extends XiGlobalmasterTypeCommon
{
	/**
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Industry;
	/**
	 * The Sector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sector;
	/**
	 * The Scheme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Scheme;
	/**
	 * The ClassificationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ClassificationCode;
	/**
	 * Constructor
	 * @param string Industry
	 * @param string Sector
	 * @param string Scheme
	 * @param string ClassificationCode
	 * @return XiGlobalmasterTypeClassification
	 */
	public function __construct($_Industry = null,$_Sector = null,$_Scheme = null,$_ClassificationCode = null)
	{
		XiGlobalmasterWsdlClass::__construct(array('Industry'=>$_Industry,'Sector'=>$_Sector,'Scheme'=>$_Scheme,'ClassificationCode'=>$_ClassificationCode));
	}
	/**
	 * Set Industry
	 * @param string Industry
	 * @return string
	 */
	public function setIndustry($_Industry)
	{
		return ($this->Industry = $_Industry);
	}
	/**
	 * Get Industry
	 * @return string
	 */
	public function getIndustry()
	{
		return $this->Industry;
	}
	/**
	 * Set Sector
	 * @param string Sector
	 * @return string
	 */
	public function setSector($_Sector)
	{
		return ($this->Sector = $_Sector);
	}
	/**
	 * Get Sector
	 * @return string
	 */
	public function getSector()
	{
		return $this->Sector;
	}
	/**
	 * Set Scheme
	 * @param string Scheme
	 * @return string
	 */
	public function setScheme($_Scheme)
	{
		return ($this->Scheme = $_Scheme);
	}
	/**
	 * Get Scheme
	 * @return string
	 */
	public function getScheme()
	{
		return $this->Scheme;
	}
	/**
	 * Set ClassificationCode
	 * @param string ClassificationCode
	 * @return string
	 */
	public function setClassificationCode($_ClassificationCode)
	{
		return ($this->ClassificationCode = $_ClassificationCode);
	}
	/**
	 * Get ClassificationCode
	 * @return string
	 */
	public function getClassificationCode()
	{
		return $this->ClassificationCode;
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