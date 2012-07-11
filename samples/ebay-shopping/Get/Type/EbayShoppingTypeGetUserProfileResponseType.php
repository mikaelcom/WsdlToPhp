<?php
/**
 * Class file for EbayShoppingTypeGetUserProfileResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetUserProfileResponseType
 * Documentation : Response to GetUserProfile request.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetUserProfileResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The User
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the returned user data for the specified eBay user.
	 * @var EbayShoppingTypeSimpleUserType
	 */
	public $User;
	/**
	 * The FeedbackHistory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Summary feedback data for a user. Contains counts of positive, neutral, and negative feedback for predefined time periods.
	 * @var EbayShoppingTypeFeedbackHistoryType
	 */
	public $FeedbackHistory;
	/**
	 * The FeedbackDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The FeedbackDetails container has fields (ItemID, etc.) with information about one feedback entry. When you call GetUserProfile, the 5 (maximum) most recent feedback records are returned in FeedbackDetails containers.
	 * @var EbayShoppingTypeFeedbackDetailType
	 */
	public $FeedbackDetails;
	/**
	 * Constructor
	 * @param EbayShoppingTypeSimpleUserType User
	 * @param EbayShoppingTypeFeedbackHistoryType FeedbackHistory
	 * @param EbayShoppingTypeFeedbackDetailType FeedbackDetails
	 * @return EbayShoppingTypeGetUserProfileResponseType
	 */
	public function __construct($_User = null,$_FeedbackHistory = null,$_FeedbackDetails = null)
	{
		EbayShoppingWsdlClass::__construct(array('User'=>$_User,'FeedbackHistory'=>$_FeedbackHistory,'FeedbackDetails'=>$_FeedbackDetails));
	}
	/**
	 * Set User
	 * @param SimpleUserType User
	 * @return SimpleUserType
	 */
	public function setUser($_User)
	{
		return ($this->User = $_User);
	}
	/**
	 * Get User
	 * @return EbayShoppingTypeSimpleUserType
	 */
	public function getUser()
	{
		return $this->User;
	}
	/**
	 * Set FeedbackHistory
	 * @param FeedbackHistoryType FeedbackHistory
	 * @return FeedbackHistoryType
	 */
	public function setFeedbackHistory($_FeedbackHistory)
	{
		return ($this->FeedbackHistory = $_FeedbackHistory);
	}
	/**
	 * Get FeedbackHistory
	 * @return EbayShoppingTypeFeedbackHistoryType
	 */
	public function getFeedbackHistory()
	{
		return $this->FeedbackHistory;
	}
	/**
	 * Set FeedbackDetails
	 * @param FeedbackDetailType FeedbackDetails
	 * @return FeedbackDetailType
	 */
	public function setFeedbackDetails($_FeedbackDetails)
	{
		return ($this->FeedbackDetails = $_FeedbackDetails);
	}
	/**
	 * Get FeedbackDetails
	 * @return EbayShoppingTypeFeedbackDetailType
	 */
	public function getFeedbackDetails()
	{
		return $this->FeedbackDetails;
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