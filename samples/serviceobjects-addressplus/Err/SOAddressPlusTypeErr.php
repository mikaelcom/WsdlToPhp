<?php
/**
 * Class file for SOAddressPlusTypeErr
 * @date 05/07/2012
 */
/**
 * Class SOAddressPlusTypeErr
 * @date 05/07/2012
 */
class SOAddressPlusTypeErr extends SOAddressPlusWsdlClass
{
	/**
	 * The Desc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Desc;
	/**
	 * The Number
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Number;
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Location;
	/**
	 * Constructor
	 * @param string Desc
	 * @param string Number
	 * @param string Location
	 * @return SOAddressPlusTypeErr
	 */
	public function __construct($_Desc = null,$_Number = null,$_Location = null)
	{
		parent::__construct(array('Desc'=>$_Desc,'Number'=>$_Number,'Location'=>$_Location));
	}
	/**
	 * Set Desc
	 * @param string Desc
	 * @return string
	 */
	public function setDesc($_Desc)
	{
		return ($this->Desc = $_Desc);
	}
	/**
	 * Get Desc
	 * @return string
	 */
	public function getDesc()
	{
		return $this->Desc;
	}
	/**
	 * Set Number
	 * @param string Number
	 * @return string
	 */
	public function setNumber($_Number)
	{
		return ($this->Number = $_Number);
	}
	/**
	 * Get Number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->Number;
	}
	/**
	 * Set Location
	 * @param string Location
	 * @return string
	 */
	public function setLocation($_Location)
	{
		return ($this->Location = $_Location);
	}
	/**
	 * Get Location
	 * @return string
	 */
	public function getLocation()
	{
		return $this->Location;
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