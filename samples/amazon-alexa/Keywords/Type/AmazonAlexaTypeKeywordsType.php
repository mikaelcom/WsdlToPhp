<?php
/**
 * Class file for AmazonAlexaTypeKeywordsType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeKeywordsType
 * @date 10/07/2012
 */
class AmazonAlexaTypeKeywordsType extends AmazonAlexaWsdlClass
{
	/**
	 * The Keyword
	 * @var token
	 */
	public $Keyword;
	/**
	 * Constructor
	 * @param token Keyword
	 * @return AmazonAlexaTypeKeywordsType
	 */
	public function __construct($_Keyword = null)
	{
		parent::__construct(array('Keyword'=>$_Keyword));
	}
	/**
	 * Set Keyword
	 * @param token Keyword
	 * @return token
	 */
	public function setKeyword($_Keyword)
	{
		return ($this->Keyword = $_Keyword);
	}
	/**
	 * Get Keyword
	 * @return token
	 */
	public function getKeyword()
	{
		return $this->Keyword;
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