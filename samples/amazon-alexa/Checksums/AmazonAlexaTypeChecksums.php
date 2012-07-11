<?php
/**
 * Class file for AmazonAlexaTypeChecksums
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeChecksums
 * @date 10/07/2012
 */
class AmazonAlexaTypeChecksums extends AmazonAlexaWsdlClass
{
	/**
	 * The AppearanceChecksum
	 * @var token
	 */
	public $AppearanceChecksum;
	/**
	 * The ContentChecksum
	 * @var token
	 */
	public $ContentChecksum;
	/**
	 * Constructor
	 * @param token AppearanceChecksum
	 * @param token ContentChecksum
	 * @return AmazonAlexaTypeChecksums
	 */
	public function __construct($_AppearanceChecksum = null,$_ContentChecksum = null)
	{
		parent::__construct(array('AppearanceChecksum'=>$_AppearanceChecksum,'ContentChecksum'=>$_ContentChecksum));
	}
	/**
	 * Set AppearanceChecksum
	 * @param token AppearanceChecksum
	 * @return token
	 */
	public function setAppearanceChecksum($_AppearanceChecksum)
	{
		return ($this->AppearanceChecksum = $_AppearanceChecksum);
	}
	/**
	 * Get AppearanceChecksum
	 * @return token
	 */
	public function getAppearanceChecksum()
	{
		return $this->AppearanceChecksum;
	}
	/**
	 * Set ContentChecksum
	 * @param token ContentChecksum
	 * @return token
	 */
	public function setContentChecksum($_ContentChecksum)
	{
		return ($this->ContentChecksum = $_ContentChecksum);
	}
	/**
	 * Get ContentChecksum
	 * @return token
	 */
	public function getContentChecksum()
	{
		return $this->ContentChecksum;
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