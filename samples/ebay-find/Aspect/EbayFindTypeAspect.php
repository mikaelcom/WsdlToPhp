<?php
/**
 * Class file for EbayFindTypeAspect
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeAspect
 * Documentation : Name of an aspect that is part of a domain. For example, "Optical Zoom" or "Megapixels" could be aspects of the Digital Cameras domain. For the current aspect names associated with a specific item, refer to the aspectHistogramContainer returned for the respective item. <br><br> This value is not returned if there are no matching aspects for the associated domain.
 * @date 04/07/2012
 */
class EbayFindTypeAspect extends EbayFindWsdlClass
{
	/**
	 * The valueHistogram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container that returns the name of the respective aspect value and the histogram (the number of available items) that share that item characteristic. <br><br> This value is not returned if there are no matching aspects for the associated domain.
	 * @var EbayFindTypeAspectValueHistogram
	 */
	public $valueHistogram;
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
	 * The name
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param EbayFindTypeAspectValueHistogram valueHistogram
	 * @param string delimiter
	 * @param DOMDocument any
	 * @param string name
	 * @return EbayFindTypeAspect
	 */
	public function __construct($_valueHistogram = null,$_delimiter = null,$_any = null,$_name = null)
	{
		parent::__construct(array('valueHistogram'=>$_valueHistogram,'delimiter'=>$_delimiter,'any'=>$_any,'name'=>$_name));
	}
	/**
	 * Set valueHistogram
	 * @param AspectValueHistogram valueHistogram
	 * @return AspectValueHistogram
	 */
	public function setValueHistogram($_valueHistogram)
	{
		return ($this->valueHistogram = $_valueHistogram);
	}
	/**
	 * Get valueHistogram
	 * @return EbayFindTypeAspectValueHistogram
	 */
	public function getValueHistogram()
	{
		return $this->valueHistogram;
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
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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