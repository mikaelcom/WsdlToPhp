<?php
/**
 * Class file for EbayTradingTypeMaximumItemRequirementsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaximumItemRequirementsType
 * Documentation : Container for items bid.
 * @date 04/07/2012
 */
class EbayTradingTypeMaximumItemRequirementsType extends EbayTradingWsdlClass
{
	/**
	 * The MaximumItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is conditionally required if the <b>MaximumItemRequirements</b> container is used. <br/><br/> The value of this field specifies the maximum number of items a prospective buyer can purchase from the seller during a 10-day period. The prospective buyer will be blocked from bidding/buying once this value is reached. The seller should use <b>GeteBayDetails</b> to get valid values for their site. Currently, the valid values for the US site are: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 50, 75, and 100. <br/><br/> If the <b>MaximumItemRequirements.MinimumFeedbackScore</b> field is also specified, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers that don't equal or exceed the specified minimum Feedback Score.
	 * @var int
	 */
	public $MaximumItemCount;
	/**
	 * The MinimumFeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is an optional field that is ignored if a <b>MaximumItemCount</b> value has not been provided. <br><br> If this field is used, a prospective buyer is blocked from bidding/buying if they have reached or exceeded the <b>MaximumItemCount</b> and their feedback score is less than the value of this field. The seller should use <b>GeteBayDetails</b> to get valid values for their site. Currently, the valid values for the US site are: 0, 1, 2, 3, 4, and 5.
	 * @var int
	 */
	public $MinimumFeedbackScore;
	/**
	 * Constructor
	 * @param int MaximumItemCount
	 * @param int MinimumFeedbackScore
	 * @return EbayTradingTypeMaximumItemRequirementsType
	 */
	public function __construct($_MaximumItemCount = null,$_MinimumFeedbackScore = null)
	{
		parent::__construct(array('MaximumItemCount'=>$_MaximumItemCount,'MinimumFeedbackScore'=>$_MinimumFeedbackScore));
	}
	/**
	 * Set MaximumItemCount
	 * @param int MaximumItemCount
	 * @return int
	 */
	public function setMaximumItemCount($_MaximumItemCount)
	{
		return ($this->MaximumItemCount = $_MaximumItemCount);
	}
	/**
	 * Get MaximumItemCount
	 * @return int
	 */
	public function getMaximumItemCount()
	{
		return $this->MaximumItemCount;
	}
	/**
	 * Set MinimumFeedbackScore
	 * @param int MinimumFeedbackScore
	 * @return int
	 */
	public function setMinimumFeedbackScore($_MinimumFeedbackScore)
	{
		return ($this->MinimumFeedbackScore = $_MinimumFeedbackScore);
	}
	/**
	 * Get MinimumFeedbackScore
	 * @return int
	 */
	public function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
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