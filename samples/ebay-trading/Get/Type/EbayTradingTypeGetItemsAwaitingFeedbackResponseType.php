<?php
/**
 * Class file for EbayTradingTypeGetItemsAwaitingFeedbackResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemsAwaitingFeedbackResponseType
 * Documentation : Response to GetItemsAwaitingFeedback.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemsAwaitingFeedbackResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemsAwaitingFeedback
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items awaiting feedback. Returned only if there are items that do not yet have feedback.
	 * @var EbayTradingTypePaginatedTransactionArrayType
	 */
	public $ItemsAwaitingFeedback;
	/**
	 * Constructor
	 * @param EbayTradingTypePaginatedTransactionArrayType ItemsAwaitingFeedback
	 * @return EbayTradingTypeGetItemsAwaitingFeedbackResponseType
	 */
	public function __construct($_ItemsAwaitingFeedback = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemsAwaitingFeedback'=>$_ItemsAwaitingFeedback));
	}
	/**
	 * Set ItemsAwaitingFeedback
	 * @param PaginatedTransactionArrayType ItemsAwaitingFeedback
	 * @return PaginatedTransactionArrayType
	 */
	public function setItemsAwaitingFeedback($_ItemsAwaitingFeedback)
	{
		return ($this->ItemsAwaitingFeedback = $_ItemsAwaitingFeedback);
	}
	/**
	 * Get ItemsAwaitingFeedback
	 * @return EbayTradingTypePaginatedTransactionArrayType
	 */
	public function getItemsAwaitingFeedback()
	{
		return $this->ItemsAwaitingFeedback;
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