<?php
/**
 * Class file for EbayShoppingTypeBuyingGuideType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeBuyingGuideType
 * Documentation : Information that identifies a buying guide. A buying guide provides content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Buying guides are useful to buyers who do not have a specific product in mind. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them.
 * @date 05/07/2012
 */
class EbayShoppingTypeBuyingGuideType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of the buying guide. <br> <br> FindReviewsAndGuides only returns 20 characters, followed by "..." if the name is longer than 20 characters. For the full title, see BuyingGuide.Title instead.
	 * @var string
	 */
	public $Name;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for the buying guide. Your application can present this as a link. Use the value of Name or Title as the link's display name.
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies the category (if any) that is associated with the buying guide. For FindReviewsAndGuides, this can be a category that is higher or lower in the hierarchy than the category specified in the request. For a matching categories search, you can use this information to determine the order that the buying guides are returned in when multiple guides are found. Optionally, you can use this information to determine where to present the buying guide link in your application.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the buying guide.
	 * @var string
	 */
	public $Title;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The text of the guide. If the guide is longer than 2000 characters, the text is cut off and it ends with "...". See BuyingGuide.URL for a link to the full text of the review.
	 * @var string
	 */
	public $Text;
	/**
	 * The CreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time and date when the guide was posted.
	 * @var dateTime
	 */
	public $CreationTime;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The author's eBay user ID.
	 * @var string
	 */
	public $UserID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param anyURI URL
	 * @param string CategoryID
	 * @param string Title
	 * @param string Text
	 * @param dateTime CreationTime
	 * @param string UserID
	 * @param DOMDocument any
	 * @return EbayShoppingTypeBuyingGuideType
	 */
	public function __construct($_Name = null,$_URL = null,$_CategoryID = null,$_Title = null,$_Text = null,$_CreationTime = null,$_UserID = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'URL'=>$_URL,'CategoryID'=>$_CategoryID,'Title'=>$_Title,'Text'=>$_Text,'CreationTime'=>$_CreationTime,'UserID'=>$_UserID,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
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
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
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