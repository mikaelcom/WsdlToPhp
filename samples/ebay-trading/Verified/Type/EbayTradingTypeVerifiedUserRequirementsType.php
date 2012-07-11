<?php
/**
 * Class file for EbayTradingTypeVerifiedUserRequirementsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifiedUserRequirementsType
 * Documentation : Type defining the <b>VerifiedUserRequirements</b> container, which is used by the seller to block prospective buyers who do not pass a verified user check. Verified users are applicable to the Australia, France, India, Ireland, Spain, and UK sites.
 * @date 04/07/2012
 */
class EbayTradingTypeVerifiedUserRequirementsType extends EbayTradingWsdlClass
{
	/**
	 * The VerifiedUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : To block non-verified users from buying/bidding on their items, the seller should include this field and set its value to 'true'. The default value of this field is 'false', so, if it is not included, non-verified users on the Australia, France, India, Ireland, Spain, and UK will be able to buy/bid on the seller's items.
	 * @var boolean
	 */
	public $VerifiedUser;
	/**
	 * The MinimumFeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is ignored unless the <b>VerifiedUser</b> field is included and set to 'true'. <br/><br/> The seller includes this field as a mechanism to block verified users who have a feedback score less than the specified value.
	 * @var int
	 */
	public $MinimumFeedbackScore;
	/**
	 * Constructor
	 * @param boolean VerifiedUser
	 * @param int MinimumFeedbackScore
	 * @return EbayTradingTypeVerifiedUserRequirementsType
	 */
	public function __construct($_VerifiedUser = null,$_MinimumFeedbackScore = null)
	{
		parent::__construct(array('VerifiedUser'=>$_VerifiedUser,'MinimumFeedbackScore'=>$_MinimumFeedbackScore));
	}
	/**
	 * Set VerifiedUser
	 * @param boolean VerifiedUser
	 * @return boolean
	 */
	public function setVerifiedUser($_VerifiedUser)
	{
		return ($this->VerifiedUser = $_VerifiedUser);
	}
	/**
	 * Get VerifiedUser
	 * @return boolean
	 */
	public function getVerifiedUser()
	{
		return $this->VerifiedUser;
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