<?php
/**
 * Class file for SPSitedataType_sProperty
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sProperty
 * @date 06/07/2012
 */
class SPSitedataType_sProperty extends SPSitedataWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Title
	 * @var string
	 */
	public $Title;
	/**
	 * The Type
	 * @var string
	 */
	public $Type;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Title
	 * @param string Type
	 * @return SPSitedataType_sProperty
	 */
	public function __construct($_Name = null,$_Title = null,$_Type = null)
	{
		parent::__construct(array('Name'=>$_Name,'Title'=>$_Title,'Type'=>$_Type));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
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