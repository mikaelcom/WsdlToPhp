<?php
/**
 * Class file for AmazonAlexaTypeSiteDataType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeSiteDataType
 * @date 10/07/2012
 */
class AmazonAlexaTypeSiteDataType extends AmazonAlexaWsdlClass
{
	/**
	 * The Title
	 * @var normalizedString
	 */
	public $Title;
	/**
	 * The Description
	 * @var token
	 */
	public $Description;
	/**
	 * The OnlineSince
	 * @var token
	 */
	public $OnlineSince;
	/**
	 * Constructor
	 * @param normalizedString Title
	 * @param token Description
	 * @param token OnlineSince
	 * @return AmazonAlexaTypeSiteDataType
	 */
	public function __construct($_Title = null,$_Description = null,$_OnlineSince = null)
	{
		parent::__construct(array('Title'=>$_Title,'Description'=>$_Description,'OnlineSince'=>$_OnlineSince));
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
	 * Set Description
	 * @param token Description
	 * @return token
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return token
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set OnlineSince
	 * @param token OnlineSince
	 * @return token
	 */
	public function setOnlineSince($_OnlineSince)
	{
		return ($this->OnlineSince = $_OnlineSince);
	}
	/**
	 * Get OnlineSince
	 * @return token
	 */
	public function getOnlineSince()
	{
		return $this->OnlineSince;
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