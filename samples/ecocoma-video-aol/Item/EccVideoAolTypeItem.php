<?php
/**
 * Class file for EccVideoAolTypeItem
 * @date 03/07/2012
 */
/**
 * Class EccVideoAolTypeItem
 * @date 03/07/2012
 */
class EccVideoAolTypeItem extends EccVideoAolWsdlClass
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
	 * The thumbnail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $thumbnail;
	/**
	 * The swf
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $swf;
	/**
	 * Constructor
	 * @param string title
	 * @param string link
	 * @param string description
	 * @param string pubDate
	 * @param string thumbnail
	 * @param string swf
	 * @return EccVideoAolTypeItem
	 */
	public function __construct($_title = null,$_link = null,$_description = null,$_pubDate = null,$_thumbnail = null,$_swf = null)
	{
		parent::__construct(array('title'=>$_title,'link'=>$_link,'description'=>$_description,'pubDate'=>$_pubDate,'thumbnail'=>$_thumbnail,'swf'=>$_swf));
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
	 * Set thumbnail
	 * @param string thumbnail
	 * @return string
	 */
	public function setThumbnail($_thumbnail)
	{
		return ($this->thumbnail = $_thumbnail);
	}
	/**
	 * Get thumbnail
	 * @return string
	 */
	public function getThumbnail()
	{
		return $this->thumbnail;
	}
	/**
	 * Set swf
	 * @param string swf
	 * @return string
	 */
	public function setSwf($_swf)
	{
		return ($this->swf = $_swf);
	}
	/**
	 * Get swf
	 * @return string
	 */
	public function getSwf()
	{
		return $this->swf;
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