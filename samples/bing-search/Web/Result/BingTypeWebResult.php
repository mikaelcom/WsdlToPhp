<?php
/**
 * Class file for BingTypeWebResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeWebResult
 * @date 02/07/2012
 */
class BingTypeWebResult extends BingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The CacheUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CacheUrl;
	/**
	 * The DisplayUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DisplayUrl;
	/**
	 * The DateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateTime;
	/**
	 * The SearchTags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfWebSearchTag
	 */
	public $SearchTags;
	/**
	 * The DeepLinks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfDeepLink
	 */
	public $DeepLinks;
	/**
	 * Constructor
	 * @param string Title
	 * @param string Description
	 * @param string Url
	 * @param string CacheUrl
	 * @param string DisplayUrl
	 * @param string DateTime
	 * @param BingTypeArrayOfWebSearchTag SearchTags
	 * @param BingTypeArrayOfDeepLink DeepLinks
	 * @return BingTypeWebResult
	 */
	public function __construct($_Title = null,$_Description = null,$_Url = null,$_CacheUrl = null,$_DisplayUrl = null,$_DateTime = null,$_SearchTags = null,$_DeepLinks = null)
	{
		parent::__construct(array('Title'=>$_Title,'Description'=>$_Description,'Url'=>$_Url,'CacheUrl'=>$_CacheUrl,'DisplayUrl'=>$_DisplayUrl,'DateTime'=>$_DateTime,'SearchTags'=>new BingTypeArrayOfWebSearchTag($_SearchTags),'DeepLinks'=>new BingTypeArrayOfDeepLink($_DeepLinks)));
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set CacheUrl
	 * @param string CacheUrl
	 * @return string
	 */
	public function setCacheUrl($_CacheUrl)
	{
		return ($this->CacheUrl = $_CacheUrl);
	}
	/**
	 * Get CacheUrl
	 * @return string
	 */
	public function getCacheUrl()
	{
		return $this->CacheUrl;
	}
	/**
	 * Set DisplayUrl
	 * @param string DisplayUrl
	 * @return string
	 */
	public function setDisplayUrl($_DisplayUrl)
	{
		return ($this->DisplayUrl = $_DisplayUrl);
	}
	/**
	 * Get DisplayUrl
	 * @return string
	 */
	public function getDisplayUrl()
	{
		return $this->DisplayUrl;
	}
	/**
	 * Set DateTime
	 * @param string DateTime
	 * @return string
	 */
	public function setDateTime($_DateTime)
	{
		return ($this->DateTime = $_DateTime);
	}
	/**
	 * Get DateTime
	 * @return string
	 */
	public function getDateTime()
	{
		return $this->DateTime;
	}
	/**
	 * Set SearchTags
	 * @param ArrayOfWebSearchTag SearchTags
	 * @return ArrayOfWebSearchTag
	 */
	public function setSearchTags($_SearchTags)
	{
		return ($this->SearchTags = $_SearchTags);
	}
	/**
	 * Get SearchTags
	 * @return BingTypeArrayOfWebSearchTag
	 */
	public function getSearchTags()
	{
		return $this->SearchTags;
	}
	/**
	 * Set DeepLinks
	 * @param ArrayOfDeepLink DeepLinks
	 * @return ArrayOfDeepLink
	 */
	public function setDeepLinks($_DeepLinks)
	{
		return ($this->DeepLinks = $_DeepLinks);
	}
	/**
	 * Get DeepLinks
	 * @return BingTypeArrayOfDeepLink
	 */
	public function getDeepLinks()
	{
		return $this->DeepLinks;
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