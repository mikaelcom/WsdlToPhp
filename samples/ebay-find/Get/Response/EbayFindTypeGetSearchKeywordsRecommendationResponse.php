<?php
/**
 * Class file for EbayFindTypeGetSearchKeywordsRecommendationResponse
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeGetSearchKeywordsRecommendationResponse
 * Documentation : Response container for the spelling check and correction for keywords.
 * @date 04/07/2012
 */
class EbayFindTypeGetSearchKeywordsRecommendationResponse extends EbayFindTypeBaseServiceResponse
{
	/**
	 * The keywords
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains a spell-checked version of the submitted keywords. If no recommended spelling can be identified for the submitted keywords, the response contains a warning to that effect and an empty keywords field is returned.
	 * @var string
	 */
	public $keywords;
	/**
	 * The extension
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Reserved for future use.
	 * @var EbayFindTypeExtensionType
	 */
	public $extension;
	/**
	 * Constructor
	 * @param string keywords
	 * @param EbayFindTypeExtensionType extension
	 * @return EbayFindTypeGetSearchKeywordsRecommendationResponse
	 */
	public function __construct($_keywords,$_extension = null)
	{
		EbayFindWsdlClass::__construct(array('keywords'=>$_keywords,'extension'=>$_extension));
	}
	/**
	 * Set keywords
	 * @param string keywords
	 * @return string
	 */
	public function setKeywords($_keywords)
	{
		return ($this->keywords = $_keywords);
	}
	/**
	 * Get keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->keywords;
	}
	/**
	 * Set extension
	 * @param ExtensionType extension
	 * @return ExtensionType
	 */
	public function setExtension($_extension)
	{
		return ($this->extension = $_extension);
	}
	/**
	 * Get extension
	 * @return EbayFindTypeExtensionType
	 */
	public function getExtension()
	{
		return $this->extension;
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