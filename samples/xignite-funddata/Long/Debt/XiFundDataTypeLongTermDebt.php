<?php
/**
 * Class file for XiFundDataTypeLongTermDebt
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeLongTermDebt
 * @date 08/07/2012
 */
class XiFundDataTypeLongTermDebt extends XiFundDataWsdlClass
{
	/**
	 * The USTreasury
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $USTreasury;
	/**
	 * The USGovernmentAgency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $USGovernmentAgency;
	/**
	 * The StateAndMunicipals
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StateAndMunicipals;
	/**
	 * The Corporate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Corporate;
	/**
	 * The Others
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Others;
	/**
	 * The NonDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NonDebt;
	/**
	 * Constructor
	 * @param double USTreasury
	 * @param double USGovernmentAgency
	 * @param double StateAndMunicipals
	 * @param double Corporate
	 * @param double Others
	 * @param double NonDebt
	 * @return XiFundDataTypeLongTermDebt
	 */
	public function __construct($_USTreasury,$_USGovernmentAgency,$_StateAndMunicipals,$_Corporate,$_Others,$_NonDebt)
	{
		parent::__construct(array('USTreasury'=>$_USTreasury,'USGovernmentAgency'=>$_USGovernmentAgency,'StateAndMunicipals'=>$_StateAndMunicipals,'Corporate'=>$_Corporate,'Others'=>$_Others,'NonDebt'=>$_NonDebt));
	}
	/**
	 * Set USTreasury
	 * @param double USTreasury
	 * @return double
	 */
	public function setUSTreasury($_USTreasury)
	{
		return ($this->USTreasury = $_USTreasury);
	}
	/**
	 * Get USTreasury
	 * @return double
	 */
	public function getUSTreasury()
	{
		return $this->USTreasury;
	}
	/**
	 * Set USGovernmentAgency
	 * @param double USGovernmentAgency
	 * @return double
	 */
	public function setUSGovernmentAgency($_USGovernmentAgency)
	{
		return ($this->USGovernmentAgency = $_USGovernmentAgency);
	}
	/**
	 * Get USGovernmentAgency
	 * @return double
	 */
	public function getUSGovernmentAgency()
	{
		return $this->USGovernmentAgency;
	}
	/**
	 * Set StateAndMunicipals
	 * @param double StateAndMunicipals
	 * @return double
	 */
	public function setStateAndMunicipals($_StateAndMunicipals)
	{
		return ($this->StateAndMunicipals = $_StateAndMunicipals);
	}
	/**
	 * Get StateAndMunicipals
	 * @return double
	 */
	public function getStateAndMunicipals()
	{
		return $this->StateAndMunicipals;
	}
	/**
	 * Set Corporate
	 * @param double Corporate
	 * @return double
	 */
	public function setCorporate($_Corporate)
	{
		return ($this->Corporate = $_Corporate);
	}
	/**
	 * Get Corporate
	 * @return double
	 */
	public function getCorporate()
	{
		return $this->Corporate;
	}
	/**
	 * Set Others
	 * @param double Others
	 * @return double
	 */
	public function setOthers($_Others)
	{
		return ($this->Others = $_Others);
	}
	/**
	 * Get Others
	 * @return double
	 */
	public function getOthers()
	{
		return $this->Others;
	}
	/**
	 * Set NonDebt
	 * @param double NonDebt
	 * @return double
	 */
	public function setNonDebt($_NonDebt)
	{
		return ($this->NonDebt = $_NonDebt);
	}
	/**
	 * Get NonDebt
	 * @return double
	 */
	public function getNonDebt()
	{
		return $this->NonDebt;
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