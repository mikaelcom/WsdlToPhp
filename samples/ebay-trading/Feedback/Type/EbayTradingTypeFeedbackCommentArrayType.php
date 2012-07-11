<?php
/**
 * Class file for EbayTradingTypeFeedbackCommentArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackCommentArrayType
 * Documentation : Contains one or more stored comments for use as feedback to buyers.
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackCommentArrayType extends EbayTradingWsdlClass
{
	/**
	 * The StoredCommentText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This comment is for use as feedback for buyers. No more than ten (10) comments can be stored.
	 * @var string
	 */
	public $StoredCommentText;
	/**
	 * Constructor
	 * @param string StoredCommentText
	 * @return EbayTradingTypeFeedbackCommentArrayType
	 */
	public function __construct($_StoredCommentText = null)
	{
		parent::__construct(array('StoredCommentText'=>$_StoredCommentText));
	}
	/**
	 * Set StoredCommentText
	 * @param string StoredCommentText
	 * @return string
	 */
	public function setStoredCommentText($_StoredCommentText)
	{
		return ($this->StoredCommentText = $_StoredCommentText);
	}
	/**
	 * Get StoredCommentText
	 * @return string
	 */
	public function getStoredCommentText()
	{
		return $this->StoredCommentText;
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