<?php
/**
 * Class file for AmazonECommerceServiceTypeTopItem
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeTopItem
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeTopItem extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The ASIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ASIN;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The DetailPageURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $DetailPageURL;
	/**
	 * The ProductGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ProductGroup;
	/**
	 * The Author
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Author;
	/**
	 * The Artist
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Artist;
	/**
	 * The Actor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Actor;
	/**
	 * Constructor
	 * @param string ASIN
	 * @param string Title
	 * @param string DetailPageURL
	 * @param string ProductGroup
	 * @param string Author
	 * @param string Artist
	 * @param string Actor
	 * @return AmazonECommerceServiceTypeTopItem
	 */
	public function __construct($_ASIN = null,$_Title = null,$_DetailPageURL = null,$_ProductGroup = null,$_Author = null,$_Artist = null,$_Actor = null)
	{
		parent::__construct(array('ASIN'=>$_ASIN,'Title'=>$_Title,'DetailPageURL'=>$_DetailPageURL,'ProductGroup'=>$_ProductGroup,'Author'=>$_Author,'Artist'=>$_Artist,'Actor'=>$_Actor));
	}
	/**
	 * Set ASIN
	 * @param string ASIN
	 * @return string
	 */
	public function setASIN($_ASIN)
	{
		return ($this->ASIN = $_ASIN);
	}
	/**
	 * Get ASIN
	 * @return string
	 */
	public function getASIN()
	{
		return $this->ASIN;
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
	 * Set DetailPageURL
	 * @param string DetailPageURL
	 * @return string
	 */
	public function setDetailPageURL($_DetailPageURL)
	{
		return ($this->DetailPageURL = $_DetailPageURL);
	}
	/**
	 * Get DetailPageURL
	 * @return string
	 */
	public function getDetailPageURL()
	{
		return $this->DetailPageURL;
	}
	/**
	 * Set ProductGroup
	 * @param string ProductGroup
	 * @return string
	 */
	public function setProductGroup($_ProductGroup)
	{
		return ($this->ProductGroup = $_ProductGroup);
	}
	/**
	 * Get ProductGroup
	 * @return string
	 */
	public function getProductGroup()
	{
		return $this->ProductGroup;
	}
	/**
	 * Set Author
	 * @param string Author
	 * @return string
	 */
	public function setAuthor($_Author)
	{
		return ($this->Author = $_Author);
	}
	/**
	 * Get Author
	 * @return string
	 */
	public function getAuthor()
	{
		return $this->Author;
	}
	/**
	 * Set Artist
	 * @param string Artist
	 * @return string
	 */
	public function setArtist($_Artist)
	{
		return ($this->Artist = $_Artist);
	}
	/**
	 * Get Artist
	 * @return string
	 */
	public function getArtist()
	{
		return $this->Artist;
	}
	/**
	 * Set Actor
	 * @param string Actor
	 * @return string
	 */
	public function setActor($_Actor)
	{
		return ($this->Actor = $_Actor);
	}
	/**
	 * Get Actor
	 * @return string
	 */
	public function getActor()
	{
		return $this->Actor;
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