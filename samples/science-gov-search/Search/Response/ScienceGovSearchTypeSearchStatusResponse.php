<?php
/**
 * Class file for ScienceGovSearchTypeSearchStatusResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSearchStatusResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSearchStatusResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The status
	 * @var ScienceGovSearchTypeSearchStatus
	 */
	public $status;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeSearchStatus status
	 * @return ScienceGovSearchTypeSearchStatusResponse
	 */
	public function __construct($_status = null)
	{
		parent::__construct(array('status'=>$_status));
	}
	/**
	 * Set status
	 * @param SearchStatus status
	 * @return SearchStatus
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return ScienceGovSearchTypeSearchStatus
	 */
	public function getStatus()
	{
		return $this->status;
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