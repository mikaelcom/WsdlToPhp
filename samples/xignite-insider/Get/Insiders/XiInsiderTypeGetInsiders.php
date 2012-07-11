<?php
/**
 * Class file for XiInsiderTypeGetInsiders
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetInsiders
 * @date 08/07/2012
 */
class XiInsiderTypeGetInsiders extends XiInsiderWsdlClass
{
	/**
	 * The InsiderCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderCIK;
	/**
	 * The InsiderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderName;
	/**
	 * The InsiderAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderAddress;
	/**
	 * Constructor
	 * @param string InsiderCIK
	 * @param string InsiderName
	 * @param string InsiderAddress
	 * @return XiInsiderTypeGetInsiders
	 */
	public function __construct($_InsiderCIK = null,$_InsiderName = null,$_InsiderAddress = null)
	{
		parent::__construct(array('InsiderCIK'=>$_InsiderCIK,'InsiderName'=>$_InsiderName,'InsiderAddress'=>$_InsiderAddress));
	}
	/**
	 * Set InsiderCIK
	 * @param string InsiderCIK
	 * @return string
	 */
	public function setInsiderCIK($_InsiderCIK)
	{
		return ($this->InsiderCIK = $_InsiderCIK);
	}
	/**
	 * Get InsiderCIK
	 * @return string
	 */
	public function getInsiderCIK()
	{
		return $this->InsiderCIK;
	}
	/**
	 * Set InsiderName
	 * @param string InsiderName
	 * @return string
	 */
	public function setInsiderName($_InsiderName)
	{
		return ($this->InsiderName = $_InsiderName);
	}
	/**
	 * Get InsiderName
	 * @return string
	 */
	public function getInsiderName()
	{
		return $this->InsiderName;
	}
	/**
	 * Set InsiderAddress
	 * @param string InsiderAddress
	 * @return string
	 */
	public function setInsiderAddress($_InsiderAddress)
	{
		return ($this->InsiderAddress = $_InsiderAddress);
	}
	/**
	 * Get InsiderAddress
	 * @return string
	 */
	public function getInsiderAddress()
	{
		return $this->InsiderAddress;
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