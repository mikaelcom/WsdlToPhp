<?php
/**
 * Class file for ScienceGovSearchTypeGetResultAsCitationRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeGetResultAsCitationRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeGetResultAsCitationRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The resultId
	 * @var string
	 */
	public $resultId;
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * Constructor
	 * @param string resultId
	 * @param string searchId
	 * @return ScienceGovSearchTypeGetResultAsCitationRequest
	 */
	public function __construct($_resultId = null,$_searchId = null)
	{
		parent::__construct(array('resultId'=>$_resultId,'searchId'=>$_searchId));
	}
	/**
	 * Set resultId
	 * @param string resultId
	 * @return string
	 */
	public function setResultId($_resultId)
	{
		return ($this->resultId = $_resultId);
	}
	/**
	 * Get resultId
	 * @return string
	 */
	public function getResultId()
	{
		return $this->resultId;
	}
	/**
	 * Set searchId
	 * @param string searchId
	 * @return string
	 */
	public function setSearchId($_searchId)
	{
		return ($this->searchId = $_searchId);
	}
	/**
	 * Get searchId
	 * @return string
	 */
	public function getSearchId()
	{
		return $this->searchId;
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