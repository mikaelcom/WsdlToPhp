<?php
/**
 * Class file for SPAlertsTypeDeleteAlerts
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeDeleteAlerts
 * @date 06/07/2012
 */
class SPAlertsTypeDeleteAlerts extends SPAlertsWsdlClass
{
	/**
	 * The IDs
	 * @var SPAlertsTypeArrayOfString
	 */
	public $IDs;
	/**
	 * Constructor
	 * @param SPAlertsTypeArrayOfString IDs
	 * @return SPAlertsTypeDeleteAlerts
	 */
	public function __construct($_IDs = null)
	{
		parent::__construct(array('IDs'=>new SPAlertsTypeArrayOfString($_IDs)));
	}
	/**
	 * Set IDs
	 * @param ArrayOfString IDs
	 * @return ArrayOfString
	 */
	public function setIDs($_IDs)
	{
		return ($this->IDs = $_IDs);
	}
	/**
	 * Get IDs
	 * @return SPAlertsTypeArrayOfString
	 */
	public function getIDs()
	{
		return $this->IDs;
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