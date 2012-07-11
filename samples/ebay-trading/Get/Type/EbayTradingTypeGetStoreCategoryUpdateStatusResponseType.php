<?php
/**
 * Class file for EbayTradingTypeGetStoreCategoryUpdateStatusResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStoreCategoryUpdateStatusResponseType
 * Documentation : Returns the store category structure update status, when a prior SetStoreCategories call was processed asynchronously. If a SetStoreCategories request affects many listings, then the category structure changes will be processed asynchronously. If not many listings are affected by category structure changes, the status is returned in the SetStoreCategories response.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStoreCategoryUpdateStatusResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status (Pending, InProgress, Complete, or Failed) of an update to the store category structure.
	 * @var EbayTradingTypeTaskStatusCodeType
	 */
	public $Status;
	/**
	 * Constructor
	 * @param EbayTradingTypeTaskStatusCodeType Status
	 * @return EbayTradingTypeGetStoreCategoryUpdateStatusResponseType
	 */
	public function __construct($_Status = null)
	{
		EbayTradingWsdlClass::__construct(array('Status'=>$_Status));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>