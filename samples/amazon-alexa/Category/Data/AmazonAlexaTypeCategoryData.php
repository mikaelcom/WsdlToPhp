<?php
/**
 * Class file for AmazonAlexaTypeCategoryData
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryData
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryData extends AmazonAlexaWsdlClass
{
	/**
	 * The AbsolutePath
	 * @var token
	 */
	public $AbsolutePath;
	/**
	 * Constructor
	 * @param token AbsolutePath
	 * @return AmazonAlexaTypeCategoryData
	 */
	public function __construct($_AbsolutePath = null)
	{
		parent::__construct(array('AbsolutePath'=>$_AbsolutePath));
	}
	/**
	 * Set AbsolutePath
	 * @param token AbsolutePath
	 * @return token
	 */
	public function setAbsolutePath($_AbsolutePath)
	{
		return ($this->AbsolutePath = $_AbsolutePath);
	}
	/**
	 * Get AbsolutePath
	 * @return token
	 */
	public function getAbsolutePath()
	{
		return $this->AbsolutePath;
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