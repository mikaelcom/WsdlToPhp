<?php
/**
 * Class file for PayPalTypeRiskFilterDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRiskFilterDetailsType
 * Documentation : Details of Risk Filter.
 * @date 14/07/2012
 */
class PayPalTypeRiskFilterDetailsType extends PayPalWsdlClass
{
	/**
	 * The Id
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Id;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param int Id
	 * @param string Name
	 * @param string Description
	 * @return PayPalTypeRiskFilterDetailsType
	 */
	public function __construct($_Id,$_Name,$_Description)
	{
		parent::__construct(array('Id'=>$_Id,'Name'=>$_Name,'Description'=>$_Description));
	}
	/**
	 * Set Id
	 * @param int Id
	 * @return int
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return int
	 */
	public function getId()
	{
		return $this->Id;
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