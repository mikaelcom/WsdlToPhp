<?php
/**
 * Class file for SPAlertsTypeDeleteAlertsResponse
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeDeleteAlertsResponse
 * @date 06/07/2012
 */
class SPAlertsTypeDeleteAlertsResponse extends SPAlertsWsdlClass
{
	/**
	 * The DeleteAlertsResult
	 * @var SPAlertsTypeArrayOfDeleteFailure
	 */
	public $DeleteAlertsResult;
	/**
	 * Constructor
	 * @param SPAlertsTypeArrayOfDeleteFailure DeleteAlertsResult
	 * @return SPAlertsTypeDeleteAlertsResponse
	 */
	public function __construct($_DeleteAlertsResult = null)
	{
		parent::__construct(array('DeleteAlertsResult'=>new SPAlertsTypeArrayOfDeleteFailure($_DeleteAlertsResult)));
	}
	/**
	 * Set DeleteAlertsResult
	 * @param ArrayOfDeleteFailure DeleteAlertsResult
	 * @return ArrayOfDeleteFailure
	 */
	public function setDeleteAlertsResult($_DeleteAlertsResult)
	{
		return ($this->DeleteAlertsResult = $_DeleteAlertsResult);
	}
	/**
	 * Get DeleteAlertsResult
	 * @return SPAlertsTypeArrayOfDeleteFailure
	 */
	public function getDeleteAlertsResult()
	{
		return $this->DeleteAlertsResult;
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