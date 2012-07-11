<?php
/**
 * Class file for AmazonAlexaTypeContentDataType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeContentDataType
 * @date 10/07/2012
 */
class AmazonAlexaTypeContentDataType extends AmazonAlexaWsdlClass
{
	/**
	 * The SiteData
	 * @var AmazonAlexaTypeSiteDataType
	 */
	public $SiteData;
	/**
	 * The Speed
	 * @var AmazonAlexaTypeSpeedType
	 */
	public $Speed;
	/**
	 * The AdultContent
	 * @var token
	 */
	public $AdultContent;
	/**
	 * The Language
	 * @var AmazonAlexaTypeLanguageType
	 */
	public $Language;
	/**
	 * The AverageReview
	 * @var token
	 */
	public $AverageReview;
	/**
	 * The LinksInCount
	 * @var UnsignedIntegerType
	 */
	public $LinksInCount;
	/**
	 * The Keywords
	 * @var AmazonAlexaTypeKeywordsType
	 */
	public $Keywords;
	/**
	 * The OwnedDomains
	 * @var AmazonAlexaTypeOwnedDomainsType
	 */
	public $OwnedDomains;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeSiteDataType SiteData
	 * @param AmazonAlexaTypeSpeedType Speed
	 * @param token AdultContent
	 * @param AmazonAlexaTypeLanguageType Language
	 * @param token AverageReview
	 * @param UnsignedIntegerType LinksInCount
	 * @param AmazonAlexaTypeKeywordsType Keywords
	 * @param AmazonAlexaTypeOwnedDomainsType OwnedDomains
	 * @return AmazonAlexaTypeContentDataType
	 */
	public function __construct($_SiteData = null,$_Speed = null,$_AdultContent = null,$_Language = null,$_AverageReview = null,$_LinksInCount = null,$_Keywords = null,$_OwnedDomains = null)
	{
		parent::__construct(array('SiteData'=>$_SiteData,'Speed'=>$_Speed,'AdultContent'=>$_AdultContent,'Language'=>$_Language,'AverageReview'=>$_AverageReview,'LinksInCount'=>$_LinksInCount,'Keywords'=>$_Keywords,'OwnedDomains'=>$_OwnedDomains));
	}
	/**
	 * Set SiteData
	 * @param SiteDataType SiteData
	 * @return SiteDataType
	 */
	public function setSiteData($_SiteData)
	{
		return ($this->SiteData = $_SiteData);
	}
	/**
	 * Get SiteData
	 * @return AmazonAlexaTypeSiteDataType
	 */
	public function getSiteData()
	{
		return $this->SiteData;
	}
	/**
	 * Set Speed
	 * @param SpeedType Speed
	 * @return SpeedType
	 */
	public function setSpeed($_Speed)
	{
		return ($this->Speed = $_Speed);
	}
	/**
	 * Get Speed
	 * @return AmazonAlexaTypeSpeedType
	 */
	public function getSpeed()
	{
		return $this->Speed;
	}
	/**
	 * Set AdultContent
	 * @param token AdultContent
	 * @return token
	 */
	public function setAdultContent($_AdultContent)
	{
		return ($this->AdultContent = $_AdultContent);
	}
	/**
	 * Get AdultContent
	 * @return token
	 */
	public function getAdultContent()
	{
		return $this->AdultContent;
	}
	/**
	 * Set Language
	 * @param LanguageType Language
	 * @return LanguageType
	 */
	public function setLanguage($_Language)
	{
		return ($this->Language = $_Language);
	}
	/**
	 * Get Language
	 * @return AmazonAlexaTypeLanguageType
	 */
	public function getLanguage()
	{
		return $this->Language;
	}
	/**
	 * Set AverageReview
	 * @param token AverageReview
	 * @return token
	 */
	public function setAverageReview($_AverageReview)
	{
		return ($this->AverageReview = $_AverageReview);
	}
	/**
	 * Get AverageReview
	 * @return token
	 */
	public function getAverageReview()
	{
		return $this->AverageReview;
	}
	/**
	 * Set LinksInCount
	 * @param UnsignedIntegerType LinksInCount
	 * @return UnsignedIntegerType
	 */
	public function setLinksInCount($_LinksInCount)
	{
		return ($this->LinksInCount = $_LinksInCount);
	}
	/**
	 * Get LinksInCount
	 * @return UnsignedIntegerType
	 */
	public function getLinksInCount()
	{
		return $this->LinksInCount;
	}
	/**
	 * Set Keywords
	 * @param KeywordsType Keywords
	 * @return KeywordsType
	 */
	public function setKeywords($_Keywords)
	{
		return ($this->Keywords = $_Keywords);
	}
	/**
	 * Get Keywords
	 * @return AmazonAlexaTypeKeywordsType
	 */
	public function getKeywords()
	{
		return $this->Keywords;
	}
	/**
	 * Set OwnedDomains
	 * @param OwnedDomainsType OwnedDomains
	 * @return OwnedDomainsType
	 */
	public function setOwnedDomains($_OwnedDomains)
	{
		return ($this->OwnedDomains = $_OwnedDomains);
	}
	/**
	 * Get OwnedDomains
	 * @return AmazonAlexaTypeOwnedDomainsType
	 */
	public function getOwnedDomains()
	{
		return $this->OwnedDomains;
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