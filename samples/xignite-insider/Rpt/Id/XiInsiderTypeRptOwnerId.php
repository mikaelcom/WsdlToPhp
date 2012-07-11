<?php
/**
 * Class file for XiInsiderTypeRptOwnerId
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeRptOwnerId
 * @date 08/07/2012
 */
class XiInsiderTypeRptOwnerId extends XiInsiderWsdlClass
{
	/**
	 * The rptOwnerCik
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerCik;
	/**
	 * The rptOwnerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerName;
	/**
	 * Constructor
	 * @param string rptOwnerCik
	 * @param string rptOwnerName
	 * @return XiInsiderTypeRptOwnerId
	 */
	public function __construct($_rptOwnerCik = null,$_rptOwnerName = null)
	{
		parent::__construct(array('rptOwnerCik'=>$_rptOwnerCik,'rptOwnerName'=>$_rptOwnerName));
	}
	/**
	 * Set rptOwnerCik
	 * @param string rptOwnerCik
	 * @return string
	 */
	public function setRptOwnerCik($_rptOwnerCik)
	{
		return ($this->rptOwnerCik = $_rptOwnerCik);
	}
	/**
	 * Get rptOwnerCik
	 * @return string
	 */
	public function getRptOwnerCik()
	{
		return $this->rptOwnerCik;
	}
	/**
	 * Set rptOwnerName
	 * @param string rptOwnerName
	 * @return string
	 */
	public function setRptOwnerName($_rptOwnerName)
	{
		return ($this->rptOwnerName = $_rptOwnerName);
	}
	/**
	 * Get rptOwnerName
	 * @return string
	 */
	public function getRptOwnerName()
	{
		return $this->rptOwnerName;
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