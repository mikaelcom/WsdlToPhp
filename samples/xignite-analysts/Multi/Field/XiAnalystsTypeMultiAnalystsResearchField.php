<?php
/**
 * Class file for XiAnalystsTypeMultiAnalystsResearchField
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeMultiAnalystsResearchField
 * @date 08/07/2012
 */
class XiAnalystsTypeMultiAnalystsResearchField extends XiAnalystsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeSecurity
	 */
	public $Security;
	/**
	 * The AnalystsResearchFields
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public $AnalystsResearchFields;
	/**
	 * Constructor
	 * @param XiAnalystsTypeSecurity Security
	 * @param XiAnalystsTypeArrayOfAnalystsResearchField AnalystsResearchFields
	 * @return XiAnalystsTypeMultiAnalystsResearchField
	 */
	public function __construct($_Security = null,$_AnalystsResearchFields = null)
	{
		XiAnalystsWsdlClass::__construct(array('Security'=>$_Security,'AnalystsResearchFields'=>new XiAnalystsTypeArrayOfAnalystsResearchField($_AnalystsResearchFields)));
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
	 * @return XiAnalystsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set AnalystsResearchFields
	 * @param ArrayOfAnalystsResearchField AnalystsResearchFields
	 * @return ArrayOfAnalystsResearchField
	 */
	public function setAnalystsResearchFields($_AnalystsResearchFields)
	{
		return ($this->AnalystsResearchFields = $_AnalystsResearchFields);
	}
	/**
	 * Get AnalystsResearchFields
	 * @return XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public function getAnalystsResearchFields()
	{
		return $this->AnalystsResearchFields;
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