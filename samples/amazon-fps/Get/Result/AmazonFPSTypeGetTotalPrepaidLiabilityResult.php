<?php
/**
 * Class file for AmazonFPSTypeGetTotalPrepaidLiabilityResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTotalPrepaidLiabilityResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTotalPrepaidLiabilityResult extends AmazonFPSWsdlClass
{
	/**
	 * The OutstandingPrepaidLiability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeOutstandingPrepaidLiability
	 */
	public $OutstandingPrepaidLiability;
	/**
	 * Constructor
	 * @param AmazonFPSTypeOutstandingPrepaidLiability OutstandingPrepaidLiability
	 * @return AmazonFPSTypeGetTotalPrepaidLiabilityResult
	 */
	public function __construct($_OutstandingPrepaidLiability = null)
	{
		parent::__construct(array('OutstandingPrepaidLiability'=>$_OutstandingPrepaidLiability));
	}
	/**
	 * Set OutstandingPrepaidLiability
	 * @param OutstandingPrepaidLiability OutstandingPrepaidLiability
	 * @return OutstandingPrepaidLiability
	 */
	public function setOutstandingPrepaidLiability($_OutstandingPrepaidLiability)
	{
		return ($this->OutstandingPrepaidLiability = $_OutstandingPrepaidLiability);
	}
	/**
	 * Get OutstandingPrepaidLiability
	 * @return AmazonFPSTypeOutstandingPrepaidLiability
	 */
	public function getOutstandingPrepaidLiability()
	{
		return $this->OutstandingPrepaidLiability;
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