<?php
/**
 * Class file for EbayFindTypeAspectHistogramContainer
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeAspectHistogramContainer
 * Documentation : Container for a top-level set of aspect histograms.
 * @date 04/07/2012
 */
class EbayFindTypeAspectHistogramContainer extends EbayFindWsdlClass
{
	/**
	 * The domainName
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : A buy-side group of items that share aspects, but not necessarily an eBay category. For example "Women's Dresses" or "Digital Cameras" could be domains. You can use a domainName to label a set of aspects that you display. <br><br> Domains are extracted from item listing properties (such as item titles and subtitles).
	 * @var string
	 */
	public $domainName;
	/**
	 * The domainDisplayName
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : A buy-side group of items, for example "Shoes." Domains are extracted from item listing properties, such as the title, descriptions, and so on.
	 * @var token
	 */
	public $domainDisplayName;
	/**
	 * The aspect
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A characteristic of an item in a domain. For example, "Optical Zoom", "Brand", and "Megapixels" could be aspects of the Digital Cameras domain. Aspects are well-known, standardized characteristics of a domain, and they vary from domain to domain (the aspects of "Men's Shoes" are different from those of "Digital Cameras"). A search request on the eBay site will often display aspects and their respective aspect values on the left-had side of a query response. <br><br> Aspects are extracted from item listing properties (such as item titles and subtitles), and represent the characteristics of active items. Values returned in the Aspect container can be used as inputs to the aspectFilter fields in a query to distill the items returned by the query. eBay generates aspects dynamically from the items currently listed; aspects provide a view into what is currently available on eBay. Because of this, aspect values returned one day cannot be guaranteed to be valid the next day. <br><br> The following graphic shows how eBay might return a set of aspects for the Digital Cameras domain. In this graphic, "Product Type", "Brand", and "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to 12.9 MP" are aspect values. Histogram values (item counts) are shown for each aspect value. <br><br> <img src="http://developer.ebay.com/DevZone/finding/Concepts/images/refinesearch.jpg" alt="eBay Aspects" />
	 * @var EbayFindTypeAspect
	 */
	public $aspect;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string domainName
	 * @param token domainDisplayName
	 * @param EbayFindTypeAspect aspect
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeAspectHistogramContainer
	 */
	public function __construct($_domainName,$_domainDisplayName,$_aspect,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('domainName'=>$_domainName,'domainDisplayName'=>$_domainDisplayName,'aspect'=>$_aspect,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set domainName
	 * @param string domainName
	 * @return string
	 */
	public function setDomainName($_domainName)
	{
		return ($this->domainName = $_domainName);
	}
	/**
	 * Get domainName
	 * @return string
	 */
	public function getDomainName()
	{
		return $this->domainName;
	}
	/**
	 * Set domainDisplayName
	 * @param token domainDisplayName
	 * @return token
	 */
	public function setDomainDisplayName($_domainDisplayName)
	{
		return ($this->domainDisplayName = $_domainDisplayName);
	}
	/**
	 * Get domainDisplayName
	 * @return token
	 */
	public function getDomainDisplayName()
	{
		return $this->domainDisplayName;
	}
	/**
	 * Set aspect
	 * @param Aspect aspect
	 * @return Aspect
	 */
	public function setAspect($_aspect)
	{
		return ($this->aspect = $_aspect);
	}
	/**
	 * Get aspect
	 * @return EbayFindTypeAspect
	 */
	public function getAspect()
	{
		return $this->aspect;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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