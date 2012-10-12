<?php
/**
 * Class file for ScienceGovSearchTypeEstimateSearchTimeResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeEstimateSearchTimeResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeEstimateSearchTimeResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The estimate
	 * @var long
	 */
	public $estimate;
	/**
	 * Constructor
	 * @param long estimate
	 * @return ScienceGovSearchTypeEstimateSearchTimeResponse
	 */
	public function __construct($_estimate = null)
	{
		parent::__construct(array('estimate'=>$_estimate));
	}
	/**
	 * Set estimate
	 * @param long estimate
	 * @return long
	 */
	public function setEstimate($_estimate)
	{
		return ($this->estimate = $_estimate);
	}
	/**
	 * Get estimate
	 * @return long
	 */
	public function getEstimate()
	{
		return $this->estimate;
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