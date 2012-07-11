<?php
/**
 * Class file for GGAdwordsTypeConversionOptimizerEligibility
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeConversionOptimizerEligibility
 * Documentation : Eligibility data for Campaign to transition to Conversion Optimizer
 * @date 03/07/2012
 */
class GGAdwordsTypeConversionOptimizerEligibility extends GGAdwordsWsdlClass
{
	/**
	 * The eligible
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : If the campaign is eligible to enter conversion optimizer. <span class="constraint Selectable">This field can be selected using the value "Eligible".</span> <span class="constraint ReadOnly">This field is read only and should not be set. If this field is sent to the API, it will be ignored.</span>
	 * @var boolean
	 */
	public $eligible;
	/**
	 * The rejectionReasons
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Reason why a campaign would be rejected for conversion optimizer. <span class="constraint Selectable">This field can be selected using the value "RejectionReasons".</span> <span class="constraint ReadOnly">This field is read only and should not be set. If this field is sent to the API, it will be ignored.</span>
	 * @var GGAdwordsTypeConversionOptimizerEligibilityRejectionReason
	 */
	public $rejectionReasons;
	/**
	 * Constructor
	 * @param boolean eligible
	 * @param GGAdwordsTypeConversionOptimizerEligibilityRejectionReason rejectionReasons
	 * @return GGAdwordsTypeConversionOptimizerEligibility
	 */
	public function __construct($_eligible = null,$_rejectionReasons = null)
	{
		parent::__construct(array('eligible'=>$_eligible,'rejectionReasons'=>$_rejectionReasons));
	}
	/**
	 * Set eligible
	 * @param boolean eligible
	 * @return boolean
	 */
	public function setEligible($_eligible)
	{
		return ($this->eligible = $_eligible);
	}
	/**
	 * Get eligible
	 * @return boolean
	 */
	public function getEligible()
	{
		return $this->eligible;
	}
	/**
	 * Set rejectionReasons
	 * @param ConversionOptimizerEligibilityRejectionReason rejectionReasons
	 * @return ConversionOptimizerEligibilityRejectionReason
	 */
	public function setRejectionReasons($_rejectionReasons)
	{
		return ($this->rejectionReasons = GGAdwordsTypeConversionOptimizerEligibilityRejectionReason::valueIsValid($_rejectionReasons)?$_rejectionReasons:null);
	}
	/**
	 * Get rejectionReasons
	 * @return GGAdwordsTypeConversionOptimizerEligibilityRejectionReason
	 */
	public function getRejectionReasons()
	{
		return $this->rejectionReasons;
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