<?php
/**
 * Class file for EbayTradingTypeGetContextualKeywordsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetContextualKeywordsRequestType
 * Documentation : Retrieves top-ranked contextual eBay keywords and categories for a specified web page.
 * @date 04/07/2012
 */
class EbayTradingTypeGetContextualKeywordsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the web page from which eBay is to extract keywords.
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The Encoding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Web page encoding by which the URL is to be handled, such as ISO-8859-1.
	 * @var string
	 */
	public $Encoding;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ID of the category to which keywords are to be limited. Zero or more category IDs can be specified.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * Constructor
	 * @param anyURI URL
	 * @param string Encoding
	 * @param string CategoryID
	 * @return EbayTradingTypeGetContextualKeywordsRequestType
	 */
	public function __construct($_URL = null,$_Encoding = null,$_CategoryID = null)
	{
		EbayTradingWsdlClass::__construct(array('URL'=>$_URL,'Encoding'=>$_Encoding,'CategoryID'=>$_CategoryID));
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
	 * Set Encoding
	 * @param string Encoding
	 * @return string
	 */
	public function setEncoding($_Encoding)
	{
		return ($this->Encoding = $_Encoding);
	}
	/**
	 * Get Encoding
	 * @return string
	 */
	public function getEncoding()
	{
		return $this->Encoding;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>