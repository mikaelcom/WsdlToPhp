<?php
/**
 * Class file for BingTypeMobileWebResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeMobileWebResult
 * @date 02/07/2012
 */
class BingTypeMobileWebResult extends BingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The DisplayUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DisplayUrl;
	/**
	 * The DateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateTime;
	/**
	 * Constructor
	 * @param string Title
	 * @param string Description
	 * @param string Url
	 * @param string DisplayUrl
	 * @param string DateTime
	 * @return BingTypeMobileWebResult
	 */
	public function __construct($_Title = null,$_Description = null,$_Url = null,$_DisplayUrl = null,$_DateTime = null)
	{
		parent::__construct(array('Title'=>$_Title,'Description'=>$_Description,'Url'=>$_Url,'DisplayUrl'=>$_DisplayUrl,'DateTime'=>$_DateTime));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set DisplayUrl
	 * @param string DisplayUrl
	 * @return string
	 */
	public function setDisplayUrl($_DisplayUrl)
	{
		return ($this->DisplayUrl = $_DisplayUrl);
	}
	/**
	 * Get DisplayUrl
	 * @return string
	 */
	public function getDisplayUrl()
	{
		return $this->DisplayUrl;
	}
	/**
	 * Set DateTime
	 * @param string DateTime
	 * @return string
	 */
	public function setDateTime($_DateTime)
	{
		return ($this->DateTime = $_DateTime);
	}
	/**
	 * Get DateTime
	 * @return string
	 */
	public function getDateTime()
	{
		return $this->DateTime;
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