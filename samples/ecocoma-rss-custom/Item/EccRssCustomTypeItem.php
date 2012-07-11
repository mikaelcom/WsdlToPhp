<?php
/**
 * Class file for EccRssCustomTypeItem
 * @date 03/07/2012
 */
/**
 * Class EccRssCustomTypeItem
 * @date 03/07/2012
 */
class EccRssCustomTypeItem extends EccRssCustomWsdlClass
{
	/**
	 * The title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $title;
	/**
	 * The link
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $link;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $description;
	/**
	 * The pubDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $pubDate;
	/**
	 * Constructor
	 * @param string title
	 * @param string link
	 * @param string description
	 * @param string pubDate
	 * @return EccRssCustomTypeItem
	 */
	public function __construct($_title = null,$_link = null,$_description = null,$_pubDate = null)
	{
		parent::__construct(array('title'=>$_title,'link'=>$_link,'description'=>$_description,'pubDate'=>$_pubDate));
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set link
	 * @param string link
	 * @return string
	 */
	public function setLink($_link)
	{
		return ($this->link = $_link);
	}
	/**
	 * Get link
	 * @return string
	 */
	public function getLink()
	{
		return $this->link;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set pubDate
	 * @param string pubDate
	 * @return string
	 */
	public function setPubDate($_pubDate)
	{
		return ($this->pubDate = $_pubDate);
	}
	/**
	 * Get pubDate
	 * @return string
	 */
	public function getPubDate()
	{
		return $this->pubDate;
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