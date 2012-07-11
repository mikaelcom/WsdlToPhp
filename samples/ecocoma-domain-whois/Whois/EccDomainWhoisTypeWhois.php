<?php
/**
 * Class file for EccDomainWhoisTypeWhois
 * @date 03/07/2012
 */
/**
 * Class EccDomainWhoisTypeWhois
 * @date 03/07/2012
 */
class EccDomainWhoisTypeWhois extends EccDomainWhoisWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param string Description
	 * @return EccDomainWhoisTypeWhois
	 */
	public function __construct($_Description = null)
	{
		parent::__construct(array('Description'=>$_Description));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>