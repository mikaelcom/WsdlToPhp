<?php
/**
 * Class file for ATReportingTypeXNXSegment
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeXNXSegment
 * @date 03/07/2012
 */
class ATReportingTypeXNXSegment extends ATReportingWsdlClass
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
	 * The Libelle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Libelle;
	/**
	 * Constructor
	 * @param int Id
	 * @param string Libelle
	 * @return ATReportingTypeXNXSegment
	 */
	public function __construct($_Id,$_Libelle = null)
	{
		parent::__construct(array('Id'=>$_Id,'Libelle'=>$_Libelle));
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
	 * Set Libelle
	 * @param string Libelle
	 * @return string
	 */
	public function setLibelle($_Libelle)
	{
		return ($this->Libelle = $_Libelle);
	}
	/**
	 * Get Libelle
	 * @return string
	 */
	public function getLibelle()
	{
		return $this->Libelle;
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