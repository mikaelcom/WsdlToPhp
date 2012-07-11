<?php
/**
 * Class file for EbayTradingTypeVerifiedUserRequirementsDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifiedUserRequirementsDetailsType
 * Documentation : [Selling] A means of limiting unverified bidders.
 * @date 04/07/2012
 */
class EbayTradingTypeVerifiedUserRequirementsDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The VerifiedUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : [Selling] if true, it specifies that the site's buyer requirements support VerifiedUserRequirements.
	 * @var boolean
	 */
	public $VerifiedUser;
	/**
	 * The FeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : [Selling] The values supported for the minimum feedback score for verified users.
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean VerifiedUser
	 * @param int FeedbackScore
	 * @param DOMDocument any
	 * @return EbayTradingTypeVerifiedUserRequirementsDetailsType
	 */
	public function __construct($_VerifiedUser = null,$_FeedbackScore = null,$_any = null)
	{
		parent::__construct(array('VerifiedUser'=>$_VerifiedUser,'FeedbackScore'=>$_FeedbackScore,'any'=>$_any));
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
	 * Set FeedbackScore
	 * @param int FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_FeedbackScore)
	{
		return ($this->FeedbackScore = $_FeedbackScore);
	}
	/**
	 * Get FeedbackScore
	 * @return int
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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