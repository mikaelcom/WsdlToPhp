<?php
/**
 * Class file for AmazonECommerceServiceTypeSummary
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSummary
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSummary extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The PromotionId
	 * @var string
	 */
	public $PromotionId;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Category;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EndDate;
	/**
	 * The EligibilityRequirementDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EligibilityRequirementDescription;
	/**
	 * The BenefitDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $BenefitDescription;
	/**
	 * The TermsAndConditions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TermsAndConditions;
	/**
	 * Constructor
	 * @param string PromotionId
	 * @param string Category
	 * @param string StartDate
	 * @param string EndDate
	 * @param string EligibilityRequirementDescription
	 * @param string BenefitDescription
	 * @param string TermsAndConditions
	 * @return AmazonECommerceServiceTypeSummary
	 */
	public function __construct($_PromotionId = null,$_Category = null,$_StartDate = null,$_EndDate = null,$_EligibilityRequirementDescription = null,$_BenefitDescription = null,$_TermsAndConditions = null)
	{
		parent::__construct(array('PromotionId'=>$_PromotionId,'Category'=>$_Category,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'EligibilityRequirementDescription'=>$_EligibilityRequirementDescription,'BenefitDescription'=>$_BenefitDescription,'TermsAndConditions'=>$_TermsAndConditions));
	}
	/**
	 * Set PromotionId
	 * @param string PromotionId
	 * @return string
	 */
	public function setPromotionId($_PromotionId)
	{
		return ($this->PromotionId = $_PromotionId);
	}
	/**
	 * Get PromotionId
	 * @return string
	 */
	public function getPromotionId()
	{
		return $this->PromotionId;
	}
	/**
	 * Set Category
	 * @param string Category
	 * @return string
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set EligibilityRequirementDescription
	 * @param string EligibilityRequirementDescription
	 * @return string
	 */
	public function setEligibilityRequirementDescription($_EligibilityRequirementDescription)
	{
		return ($this->EligibilityRequirementDescription = $_EligibilityRequirementDescription);
	}
	/**
	 * Get EligibilityRequirementDescription
	 * @return string
	 */
	public function getEligibilityRequirementDescription()
	{
		return $this->EligibilityRequirementDescription;
	}
	/**
	 * Set BenefitDescription
	 * @param string BenefitDescription
	 * @return string
	 */
	public function setBenefitDescription($_BenefitDescription)
	{
		return ($this->BenefitDescription = $_BenefitDescription);
	}
	/**
	 * Get BenefitDescription
	 * @return string
	 */
	public function getBenefitDescription()
	{
		return $this->BenefitDescription;
	}
	/**
	 * Set TermsAndConditions
	 * @param string TermsAndConditions
	 * @return string
	 */
	public function setTermsAndConditions($_TermsAndConditions)
	{
		return ($this->TermsAndConditions = $_TermsAndConditions);
	}
	/**
	 * Get TermsAndConditions
	 * @return string
	 */
	public function getTermsAndConditions()
	{
		return $this->TermsAndConditions;
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