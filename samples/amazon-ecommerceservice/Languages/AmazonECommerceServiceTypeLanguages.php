<?php
/**
 * Class file for AmazonECommerceServiceTypeLanguages
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeLanguages
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeLanguages extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Language
	 * @var AmazonECommerceServiceTypeLanguage
	 */
	public $Language;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeLanguage Language
	 * @return AmazonECommerceServiceTypeLanguages
	 */
	public function __construct($_Language = null)
	{
		parent::__construct(array('Language'=>$_Language));
	}
	/**
	 * Set Language
	 * @param Language Language
	 * @return Language
	 */
	public function setLanguage($_Language)
	{
		return ($this->Language = $_Language);
	}
	/**
	 * Get Language
	 * @return AmazonECommerceServiceTypeLanguage
	 */
	public function getLanguage()
	{
		return $this->Language;
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