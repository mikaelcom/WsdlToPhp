<?php
/**
 * Class file for EbayFindTypeSellerInfo
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeSellerInfo
 * Documentation : Container for information about this listing's seller.
 * @date 04/07/2012
 */
class EbayFindTypeSellerInfo extends EbayFindWsdlClass
{
	/**
	 * The sellerUserName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller's eBay user name; a unique value.
	 * @var string
	 */
	public $sellerUserName;
	/**
	 * The feedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The aggregate feedback score of the seller. A seller's feedback score is their net positive feedback minus their net negative feedback. Feedback scores are a quantitative expression of the desirability of dealing with a seller in a transaction.
	 * @var long
	 */
	public $feedbackScore;
	/**
	 * The positiveFeedbackPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The percentage value of a user's positive feedback (their positive feedbackScore divided by their total positive plus negative feedback).
	 * @var double
	 */
	public $positiveFeedbackPercent;
	/**
	 * The feedbackRatingStar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Visual indicator of user's feedback score. <dl> <dt> <strong>feedbackRatingStar values:</strong> </dt> <dt> None </dt> <dd> No graphic displayed, feedback score 0-9. </dd> <dt> Yellow </dt> <dd> Yellow Star, feedback score 10-49. </dd> <dt> Blue </dt> <dd> Blue Star, feedback score 50-99. </dd> <dt> Turquoise </dt> <dd> Turquoise Star, feedback score 100-499. </dd> <dt> Purple </dt> <dd> Purple Star, feedback score 500-999. </dd> <dt> Red </dt> <dd> Red Star, feedback score 1,000-4,999. </dd> <dt> Green </dt> <dd> Green Star, feedback score 5,000-9,999. </dd> <dt> YellowShooting </dt> <dd> Yellow Shooting Star, feedback score 10,000-24,999. </dd> <dt> TurquoiseShooting </dt> <dd> Turquoise Shooting Star, feedback score 25,000-49,999. </dd> <dt> PurpleShooting </dt> <dd> Purple Shooting Star, feedback score 50,000-99,999. </dd> <dt> RedShooting </dt> <dd> Red Shooting Star, feedback score 100,000-499,000 and above. </dd> <dt> GreenShooting </dt> <dd> Green Shooting Star, feedback score 500,000-999,000 and above. </dd> <dt> SilverShooting </dt> <dd> Silver Shooting Star, feedback score 1,000,000 or more. </dd> </dl>
	 * @var token
	 */
	public $feedbackRatingStar;
	/**
	 * The topRatedSeller
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller of the item is top-rated. A top-rated seller: <ul> <li>Consistently receives highest buyers' ratings</li> <li>Ships items quickly</li> <li>Has earned a track record of excellent service</li> </ul> eBay regularly reviews the performance of these sellers to confirm they continue to meet the program's requirements. <br><br> This field is returned for the following sites only: US (EBAY-US), Motors (EBAY-MOTOR), DE (EBAY-DE), AT (EBAY-AT), and CH (EBAY-CH).
	 * @var boolean
	 */
	public $topRatedSeller;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string sellerUserName
	 * @param long feedbackScore
	 * @param double positiveFeedbackPercent
	 * @param token feedbackRatingStar
	 * @param boolean topRatedSeller
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeSellerInfo
	 */
	public function __construct($_sellerUserName = null,$_feedbackScore = null,$_positiveFeedbackPercent = null,$_feedbackRatingStar = null,$_topRatedSeller = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('sellerUserName'=>$_sellerUserName,'feedbackScore'=>$_feedbackScore,'positiveFeedbackPercent'=>$_positiveFeedbackPercent,'feedbackRatingStar'=>$_feedbackRatingStar,'topRatedSeller'=>$_topRatedSeller,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set sellerUserName
	 * @param string sellerUserName
	 * @return string
	 */
	public function setSellerUserName($_sellerUserName)
	{
		return ($this->sellerUserName = $_sellerUserName);
	}
	/**
	 * Get sellerUserName
	 * @return string
	 */
	public function getSellerUserName()
	{
		return $this->sellerUserName;
	}
	/**
	 * Set feedbackScore
	 * @param long feedbackScore
	 * @return long
	 */
	public function setFeedbackScore($_feedbackScore)
	{
		return ($this->feedbackScore = $_feedbackScore);
	}
	/**
	 * Get feedbackScore
	 * @return long
	 */
	public function getFeedbackScore()
	{
		return $this->feedbackScore;
	}
	/**
	 * Set positiveFeedbackPercent
	 * @param double positiveFeedbackPercent
	 * @return double
	 */
	public function setPositiveFeedbackPercent($_positiveFeedbackPercent)
	{
		return ($this->positiveFeedbackPercent = $_positiveFeedbackPercent);
	}
	/**
	 * Get positiveFeedbackPercent
	 * @return double
	 */
	public function getPositiveFeedbackPercent()
	{
		return $this->positiveFeedbackPercent;
	}
	/**
	 * Set feedbackRatingStar
	 * @param token feedbackRatingStar
	 * @return token
	 */
	public function setFeedbackRatingStar($_feedbackRatingStar)
	{
		return ($this->feedbackRatingStar = $_feedbackRatingStar);
	}
	/**
	 * Get feedbackRatingStar
	 * @return token
	 */
	public function getFeedbackRatingStar()
	{
		return $this->feedbackRatingStar;
	}
	/**
	 * Set topRatedSeller
	 * @param boolean topRatedSeller
	 * @return boolean
	 */
	public function setTopRatedSeller($_topRatedSeller)
	{
		return ($this->topRatedSeller = $_topRatedSeller);
	}
	/**
	 * Get topRatedSeller
	 * @return boolean
	 */
	public function getTopRatedSeller()
	{
		return $this->topRatedSeller;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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