<?php
/**
 * Class file for EbayFindTypeDomainFilter
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeDomainFilter
 * Documentation : Name of the domain to which search results will be restricted.
 * @date 04/07/2012
 */
class EbayFindTypeDomainFilter extends EbayFindWsdlClass
{
	/**
	 * The domainName
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 1
	 * 	- documentation : Specify the name of the domain to which you want to restrict search results. Only items listed within the specified domain will be returned in the search results. Domain names can be retrieved from an aspect histogram.
	 * @var string
	 */
	public $domainName;
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
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeDomainFilter
	 */
	public function __construct($_domainName,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('domainName'=>$_domainName,'delimiter'=>$_delimiter,'any'=>$_any));
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