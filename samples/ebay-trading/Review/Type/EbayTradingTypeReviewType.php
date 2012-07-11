<?php
/**
 * Class file for EbayTradingTypeReviewType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviewType
 * Documentation : A product review written by an eBay member.
 * @date 04/07/2012
 */
class EbayTradingTypeReviewType extends EbayTradingWsdlClass
{
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A link to the full review on the eBay Web site. This URL optimized for natural search: "_W0QQ" is like "?" (question mark), "QQ" is like "&" (ampersand), and "Z" is like "=" (equals sign).<br> <br> <span class="tablenote"><b>Note:</b> For a link to all reviews for the product, remove the upvr parameter from this URL. See the eBay Web Services guide for an example. </span>
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the review.
	 * @var string
	 */
	public $Title;
	/**
	 * The Rating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay member's rating of the product.
	 * @var int
	 */
	public $Rating;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The text of the review. If the review is longer than 2000 characters, the text is cut off and it ends with "...". See Review.URL for a link to the full text of the review.
	 * @var string
	 */
	public $Text;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reviewer's eBay user ID.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The CreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time and date when the reviewer posted the review.
	 * @var dateTime
	 */
	public $CreationTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param anyURI URL
	 * @param string Title
	 * @param int Rating
	 * @param string Text
	 * @param EbayTradingTypeUserIDType UserID
	 * @param dateTime CreationTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeReviewType
	 */
	public function __construct($_URL = null,$_Title = null,$_Rating = null,$_Text = null,$_UserID = null,$_CreationTime = null,$_any = null)
	{
		parent::__construct(array('URL'=>$_URL,'Title'=>$_Title,'Rating'=>$_Rating,'Text'=>$_Text,'UserID'=>$_UserID,'CreationTime'=>$_CreationTime,'any'=>$_any));
	}
	/**
	 * Set URL
	 * @param anyURI URL
	 * @return anyURI
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return anyURI
	 */
	public function getURL()
	{
		return $this->URL;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Rating
	 * @param int Rating
	 * @return int
	 */
	public function setRating($_Rating)
	{
		return ($this->Rating = $_Rating);
	}
	/**
	 * Get Rating
	 * @return int
	 */
	public function getRating()
	{
		return $this->Rating;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = EbayTradingTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set CreationTime
	 * @param dateTime CreationTime
	 * @return dateTime
	 */
	public function setCreationTime($_CreationTime)
	{
		return ($this->CreationTime = $_CreationTime);
	}
	/**
	 * Get CreationTime
	 * @return dateTime
	 */
	public function getCreationTime()
	{
		return $this->CreationTime;
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