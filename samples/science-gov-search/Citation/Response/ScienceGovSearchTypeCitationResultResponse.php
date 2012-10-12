<?php
/**
 * Class file for ScienceGovSearchTypeCitationResultResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeCitationResultResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeCitationResultResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The citation
	 * @var string
	 */
	public $citation;
	/**
	 * Constructor
	 * @param string citation
	 * @return ScienceGovSearchTypeCitationResultResponse
	 */
	public function __construct($_citation = null)
	{
		parent::__construct(array('citation'=>$_citation));
	}
	/**
	 * Set citation
	 * @param string citation
	 * @return string
	 */
	public function setCitation($_citation)
	{
		return ($this->citation = $_citation);
	}
	/**
	 * Get citation
	 * @return string
	 */
	public function getCitation()
	{
		return $this->citation;
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