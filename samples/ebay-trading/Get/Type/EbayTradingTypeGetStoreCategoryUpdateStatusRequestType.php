<?php
/**
 * Class file for EbayTradingTypeGetStoreCategoryUpdateStatusRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStoreCategoryUpdateStatusRequestType
 * Documentation : Returns the status of the processing for category-structure changes specified with a call to SetStoreCategories.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStoreCategoryUpdateStatusRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The TaskID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The task ID returned by the SetStoreCategories call. If the SetStoreCategories call was processed asynchronously, the TaskID will be a positive number. If SetStoreCategories returned a TaskID with a value of 0, the change was completed at the time the call was made (and there is no need to check status).
	 * @var long
	 */
	public $TaskID;
	/**
	 * Constructor
	 * @param long TaskID
	 * @return EbayTradingTypeGetStoreCategoryUpdateStatusRequestType
	 */
	public function __construct($_TaskID = null)
	{
		EbayTradingWsdlClass::__construct(array('TaskID'=>$_TaskID));
	}
	/**
	 * Set TaskID
	 * @param long TaskID
	 * @return long
	 */
	public function setTaskID($_TaskID)
	{
		return ($this->TaskID = $_TaskID);
	}
	/**
	 * Get TaskID
	 * @return long
	 */
	public function getTaskID()
	{
		return $this->TaskID;
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