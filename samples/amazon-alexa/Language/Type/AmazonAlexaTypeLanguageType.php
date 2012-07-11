<?php
/**
 * Class file for AmazonAlexaTypeLanguageType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeLanguageType
 * @date 10/07/2012
 */
class AmazonAlexaTypeLanguageType extends AmazonAlexaWsdlClass
{
	/**
	 * The Locale
	 * @var token
	 */
	public $Locale;
	/**
	 * The Encoding
	 * @var token
	 */
	public $Encoding;
	/**
	 * Constructor
	 * @param token Locale
	 * @param token Encoding
	 * @return AmazonAlexaTypeLanguageType
	 */
	public function __construct($_Locale = null,$_Encoding = null)
	{
		parent::__construct(array('Locale'=>$_Locale,'Encoding'=>$_Encoding));
	}
	/**
	 * Set Locale
	 * @param token Locale
	 * @return token
	 */
	public function setLocale($_Locale)
	{
		return ($this->Locale = $_Locale);
	}
	/**
	 * Get Locale
	 * @return token
	 */
	public function getLocale()
	{
		return $this->Locale;
	}
	/**
	 * Set Encoding
	 * @param token Encoding
	 * @return token
	 */
	public function setEncoding($_Encoding)
	{
		return ($this->Encoding = $_Encoding);
	}
	/**
	 * Get Encoding
	 * @return token
	 */
	public function getEncoding()
	{
		return $this->Encoding;
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