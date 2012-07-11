<?php
/**
 * Class file for MicrosoftTranslatorTypeAddTranslation
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeAddTranslation
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeAddTranslation extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The appId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $appId;
	/**
	 * The originalText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $originalText;
	/**
	 * The translatedText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $translatedText;
	/**
	 * The from
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $from;
	/**
	 * The to
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $to;
	/**
	 * The rating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $rating;
	/**
	 * The contentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $contentType;
	/**
	 * The category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $category;
	/**
	 * The user
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $user;
	/**
	 * The uri
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $uri;
	/**
	 * Constructor
	 * @param string appId
	 * @param string originalText
	 * @param string translatedText
	 * @param string from
	 * @param string to
	 * @param int rating
	 * @param string contentType
	 * @param string category
	 * @param string user
	 * @param string uri
	 * @return MicrosoftTranslatorTypeAddTranslation
	 */
	public function __construct($_appId = null,$_originalText = null,$_translatedText = null,$_from = null,$_to = null,$_rating = null,$_contentType = null,$_category = null,$_user = null,$_uri = null)
	{
		parent::__construct(array('appId'=>$_appId,'originalText'=>$_originalText,'translatedText'=>$_translatedText,'from'=>$_from,'to'=>$_to,'rating'=>$_rating,'contentType'=>$_contentType,'category'=>$_category,'user'=>$_user,'uri'=>$_uri));
	}
	/**
	 * Set appId
	 * @param string appId
	 * @return string
	 */
	public function setAppId($_appId)
	{
		return ($this->appId = $_appId);
	}
	/**
	 * Get appId
	 * @return string
	 */
	public function getAppId()
	{
		return $this->appId;
	}
	/**
	 * Set originalText
	 * @param string originalText
	 * @return string
	 */
	public function setOriginalText($_originalText)
	{
		return ($this->originalText = $_originalText);
	}
	/**
	 * Get originalText
	 * @return string
	 */
	public function getOriginalText()
	{
		return $this->originalText;
	}
	/**
	 * Set translatedText
	 * @param string translatedText
	 * @return string
	 */
	public function setTranslatedText($_translatedText)
	{
		return ($this->translatedText = $_translatedText);
	}
	/**
	 * Get translatedText
	 * @return string
	 */
	public function getTranslatedText()
	{
		return $this->translatedText;
	}
	/**
	 * Set from
	 * @param string from
	 * @return string
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get from
	 * @return string
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set to
	 * @param string to
	 * @return string
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get to
	 * @return string
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set rating
	 * @param int rating
	 * @return int
	 */
	public function setRating($_rating)
	{
		return ($this->rating = $_rating);
	}
	/**
	 * Get rating
	 * @return int
	 */
	public function getRating()
	{
		return $this->rating;
	}
	/**
	 * Set contentType
	 * @param string contentType
	 * @return string
	 */
	public function setContentType($_contentType)
	{
		return ($this->contentType = $_contentType);
	}
	/**
	 * Get contentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->contentType;
	}
	/**
	 * Set category
	 * @param string category
	 * @return string
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set user
	 * @param string user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get user
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set uri
	 * @param string uri
	 * @return string
	 */
	public function setUri($_uri)
	{
		return ($this->uri = $_uri);
	}
	/**
	 * Get uri
	 * @return string
	 */
	public function getUri()
	{
		return $this->uri;
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