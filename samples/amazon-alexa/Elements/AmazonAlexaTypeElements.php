<?php
/**
 * Class file for AmazonAlexaTypeElements
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeElements
 * @date 10/07/2012
 */
class AmazonAlexaTypeElements extends AmazonAlexaWsdlClass
{
	/**
	 * The Element
	 * @var string
	 */
	public $Element;
	/**
	 * Constructor
	 * @param string Element
	 * @return AmazonAlexaTypeElements
	 */
	public function __construct($_Element = null)
	{
		parent::__construct(array('Element'=>$_Element));
	}
	/**
	 * Set Element
	 * @param string Element
	 * @return string
	 */
	public function setElement($_Element)
	{
		return ($this->Element = $_Element);
	}
	/**
	 * Get Element
	 * @return string
	 */
	public function getElement()
	{
		return $this->Element;
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