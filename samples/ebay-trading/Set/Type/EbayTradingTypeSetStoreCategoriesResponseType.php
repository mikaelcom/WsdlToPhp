<?php
/**
 * Class file for EbayTradingTypeSetStoreCategoriesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetStoreCategoriesResponseType
 * Documentation : Returns the status of the processing progress for changes to the category structure for a store.
 * @date 04/07/2012
 */
class EbayTradingTypeSetStoreCategoriesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The TaskID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The task ID associated with the category structure change request. For a simple change, the SetStoreCategories call is processed synchronously. That is, simple changes are made immediately and then the response is returned. For synchronous processing, the task ID in the response is 0. If the category structure changes affect many listings, the changes will be processed asynchronously and the task ID will be a positive number. Use the non-zero task ID with GetStoreCategoryUpdateStatus to monitor the status of asynchronously processed changes.
	 * @var long
	 */
	public $TaskID;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When a category structure change is processed synchronously, the status is returned as Complete or Failed. For asynchronously processed changes, the status is reported as Pending. Use GetStoreCategoryUpdateStatus to monitor the status of asynchronously processed changes.
	 * @var EbayTradingTypeTaskStatusCodeType
	 */
	public $Status;
	/**
	 * The CustomCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains data for store categories that you have created.
	 * @var EbayTradingTypeStoreCustomCategoryArrayType
	 */
	public $CustomCategory;
	/**
	 * Constructor
	 * @param long TaskID
	 * @param EbayTradingTypeTaskStatusCodeType Status
	 * @param EbayTradingTypeStoreCustomCategoryArrayType CustomCategory
	 * @return EbayTradingTypeSetStoreCategoriesResponseType
	 */
	public function __construct($_TaskID = null,$_Status = null,$_CustomCategory = null)
	{
		EbayTradingWsdlClass::__construct(array('TaskID'=>$_TaskID,'Status'=>$_Status,'CustomCategory'=>$_CustomCategory));
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
	 * Set Status
	 * @param TaskStatusCodeType Status
	 * @return TaskStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeTaskStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeTaskStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set CustomCategory
	 * @param StoreCustomCategoryArrayType CustomCategory
	 * @return StoreCustomCategoryArrayType
	 */
	public function setCustomCategory($_CustomCategory)
	{
		return ($this->CustomCategory = $_CustomCategory);
	}
	/**
	 * Get CustomCategory
	 * @return EbayTradingTypeStoreCustomCategoryArrayType
	 */
	public function getCustomCategory()
	{
		return $this->CustomCategory;
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