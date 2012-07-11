<?php
/**
 * Class file for AmazonAlexaTypeSite
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeSite
 * @date 10/07/2012
 */
class AmazonAlexaTypeSite extends AmazonAlexaWsdlClass
{
	/**
	 * The Title
	 * @var normalizedString
	 */
	public $Title;
	/**
	 * The Url
	 * @var normalizedString
	 */
	public $Url;
	/**
	 * Constructor
	 * @param normalizedString Title
	 * @param normalizedString Url
	 * @return AmazonAlexaTypeSite
	 */
	public function __construct($_Title = null,$_Url = null)
	{
		parent::__construct(array('Title'=>$_Title,'Url'=>$_Url));
	}
	/**
	 * Set Title
	 * @param normalizedString Title
	 * @return normalizedString
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return normalizedString
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Url
	 * @param normalizedString Url
	 * @return normalizedString
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return normalizedString
	 */
	public function getUrl()
	{
		return $this->Url;
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