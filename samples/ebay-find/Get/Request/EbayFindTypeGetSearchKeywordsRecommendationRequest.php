<?php
/**
 * Class file for EbayFindTypeGetSearchKeywordsRecommendationRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeGetSearchKeywordsRecommendationRequest
 * Documentation : Checks specified keywords for spelling errors and returns corrected keywords that will provide better search results. If you make a keyword query search that returns no results, use this call to check the keywords for misspellings. The call checks the words in context of the entire query. For example, if you submit "arry potter" in the request, the response will recommend "harry potter." However, if you submit "potter arry" in the request, the response will recommend "potter army." <br><br> The response will not return recommended keywords in the following conditions: <ul> <li> Keywords value returns results (even a single item) in either findItemsByKeywords or findItemsAdvanced. </li> <li> Keywords value contains no misspelled words (even if the keywords query returns no items). </li> </ul>
 * @date 04/07/2012
 */
class EbayFindTypeGetSearchKeywordsRecommendationRequest extends EbayFindTypeBaseServiceRequest
{
	/**
	 * The keywords
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Specify one or more words to use in a search query for finding items on eBay. It is best to include the complete keywords value, as words are checked in context with each other. If you are using a URL request and your keyword query consists of multiple words, use <code>%20</code> to separate the words (for example, <code>arry%20Potter</code>). Submitted keywords are not case sensitive. <br> <br> Keyword recommendations will not be returned if the submitted keywords are accepted standard spellings for item listings. For example, no recommended keywords are returned for "nrfb" (Never Removed From Box) even if the keywords query does not return any search results, because this is an accepted listing term. If no correct spelling can be identified for submitted keywords (such as <code>aabbccdd</code>), no recommended keywords are returned, even though the keyword is obviously not a word and will not return search results.
	 * @var string
	 */
	public $keywords;
	/**
	 * Constructor
	 * @param string keywords
	 * @return EbayFindTypeGetSearchKeywordsRecommendationRequest
	 */
	public function __construct($_keywords)
	{
		EbayFindWsdlClass::__construct(array('keywords'=>$_keywords));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>