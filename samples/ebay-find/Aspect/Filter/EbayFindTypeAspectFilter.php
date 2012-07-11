<?php
/**
 * Class file for EbayFindTypeAspectFilter
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeAspectFilter
 * Documentation : Use aspect filters to refine the number of results returned in a response. Populate the aspectFilter container with aspect values obtained from the response of a query that returns an aspectHistogram.
 * @date 04/07/2012
 */
class EbayFindTypeAspectFilter extends EbayFindWsdlClass
{
	/**
	 * The aspectName
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Name of a standard item characteristic associated with a given domain. For example, "Optical Zoom" or "Megapixels" are aspects for the Digital Cameras domain. The current aspect names associated with a specific domain can be found in the aspect histogram. Aspect histograms can be retrieved for a given keyword query or category. The aspect histogram contains information about aspects from the domain that is most relevant to your search (or category).
	 * @var string
	 */
	public $aspectName;
	/**
	 * The aspectValueName
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A value name for a given aspect. For example, "Point & Shoot" is a value name for the "Product Type" aspect in the "Digital Cameras" domain.
	 * @var string
	 */
	public $aspectValueName;
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
	 * @param string aspectName
	 * @param string aspectValueName
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeAspectFilter
	 */
	public function __construct($_aspectName,$_aspectValueName,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('aspectName'=>$_aspectName,'aspectValueName'=>$_aspectValueName,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set aspectName
	 * @param string aspectName
	 * @return string
	 */
	public function setAspectName($_aspectName)
	{
		return ($this->aspectName = $_aspectName);
	}
	/**
	 * Get aspectName
	 * @return string
	 */
	public function getAspectName()
	{
		return $this->aspectName;
	}
	/**
	 * Set aspectValueName
	 * @param string aspectValueName
	 * @return string
	 */
	public function setAspectValueName($_aspectValueName)
	{
		return ($this->aspectValueName = $_aspectValueName);
	}
	/**
	 * Get aspectValueName
	 * @return string
	 */
	public function getAspectValueName()
	{
		return $this->aspectValueName;
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