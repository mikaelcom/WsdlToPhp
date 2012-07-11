<?php
/**
 * Class file for XiEstimatesTypeMultiEstimatesResearchField
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeMultiEstimatesResearchField
 * @date 08/07/2012
 */
class XiEstimatesTypeMultiEstimatesResearchField extends XiEstimatesTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeSecurity
	 */
	public $Security;
	/**
	 * The EstimatesResearchFields
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimatesResearchField
	 */
	public $EstimatesResearchFields;
	/**
	 * Constructor
	 * @param XiEstimatesTypeSecurity Security
	 * @param XiEstimatesTypeArrayOfEstimatesResearchField EstimatesResearchFields
	 * @return XiEstimatesTypeMultiEstimatesResearchField
	 */
	public function __construct($_Security = null,$_EstimatesResearchFields = null)
	{
		XiEstimatesWsdlClass::__construct(array('Security'=>$_Security,'EstimatesResearchFields'=>new XiEstimatesTypeArrayOfEstimatesResearchField($_EstimatesResearchFields)));
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
	 * @return XiEstimatesTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set EstimatesResearchFields
	 * @param ArrayOfEstimatesResearchField EstimatesResearchFields
	 * @return ArrayOfEstimatesResearchField
	 */
	public function setEstimatesResearchFields($_EstimatesResearchFields)
	{
		return ($this->EstimatesResearchFields = $_EstimatesResearchFields);
	}
	/**
	 * Get EstimatesResearchFields
	 * @return XiEstimatesTypeArrayOfEstimatesResearchField
	 */
	public function getEstimatesResearchFields()
	{
		return $this->EstimatesResearchFields;
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