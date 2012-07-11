<?php
/**
 * Class file for XiInsiderTypeRptOwnerAddress
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeRptOwnerAddress
 * @date 08/07/2012
 */
class XiInsiderTypeRptOwnerAddress extends XiInsiderWsdlClass
{
	/**
	 * The rptOwnerStreet1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerStreet1;
	/**
	 * The rptOwnerStreet2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerStreet2;
	/**
	 * The rptOwnerCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerCity;
	/**
	 * The rptOwnerState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerState;
	/**
	 * The rptOwnerZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerZipCode;
	/**
	 * The rptOwnerStateDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rptOwnerStateDescription;
	/**
	 * Constructor
	 * @param string rptOwnerStreet1
	 * @param string rptOwnerStreet2
	 * @param string rptOwnerCity
	 * @param string rptOwnerState
	 * @param string rptOwnerZipCode
	 * @param string rptOwnerStateDescription
	 * @return XiInsiderTypeRptOwnerAddress
	 */
	public function __construct($_rptOwnerStreet1 = null,$_rptOwnerStreet2 = null,$_rptOwnerCity = null,$_rptOwnerState = null,$_rptOwnerZipCode = null,$_rptOwnerStateDescription = null)
	{
		parent::__construct(array('rptOwnerStreet1'=>$_rptOwnerStreet1,'rptOwnerStreet2'=>$_rptOwnerStreet2,'rptOwnerCity'=>$_rptOwnerCity,'rptOwnerState'=>$_rptOwnerState,'rptOwnerZipCode'=>$_rptOwnerZipCode,'rptOwnerStateDescription'=>$_rptOwnerStateDescription));
	}
	/**
	 * Set rptOwnerStreet1
	 * @param string rptOwnerStreet1
	 * @return string
	 */
	public function setRptOwnerStreet1($_rptOwnerStreet1)
	{
		return ($this->rptOwnerStreet1 = $_rptOwnerStreet1);
	}
	/**
	 * Get rptOwnerStreet1
	 * @return string
	 */
	public function getRptOwnerStreet1()
	{
		return $this->rptOwnerStreet1;
	}
	/**
	 * Set rptOwnerStreet2
	 * @param string rptOwnerStreet2
	 * @return string
	 */
	public function setRptOwnerStreet2($_rptOwnerStreet2)
	{
		return ($this->rptOwnerStreet2 = $_rptOwnerStreet2);
	}
	/**
	 * Get rptOwnerStreet2
	 * @return string
	 */
	public function getRptOwnerStreet2()
	{
		return $this->rptOwnerStreet2;
	}
	/**
	 * Set rptOwnerCity
	 * @param string rptOwnerCity
	 * @return string
	 */
	public function setRptOwnerCity($_rptOwnerCity)
	{
		return ($this->rptOwnerCity = $_rptOwnerCity);
	}
	/**
	 * Get rptOwnerCity
	 * @return string
	 */
	public function getRptOwnerCity()
	{
		return $this->rptOwnerCity;
	}
	/**
	 * Set rptOwnerState
	 * @param string rptOwnerState
	 * @return string
	 */
	public function setRptOwnerState($_rptOwnerState)
	{
		return ($this->rptOwnerState = $_rptOwnerState);
	}
	/**
	 * Get rptOwnerState
	 * @return string
	 */
	public function getRptOwnerState()
	{
		return $this->rptOwnerState;
	}
	/**
	 * Set rptOwnerZipCode
	 * @param string rptOwnerZipCode
	 * @return string
	 */
	public function setRptOwnerZipCode($_rptOwnerZipCode)
	{
		return ($this->rptOwnerZipCode = $_rptOwnerZipCode);
	}
	/**
	 * Get rptOwnerZipCode
	 * @return string
	 */
	public function getRptOwnerZipCode()
	{
		return $this->rptOwnerZipCode;
	}
	/**
	 * Set rptOwnerStateDescription
	 * @param string rptOwnerStateDescription
	 * @return string
	 */
	public function setRptOwnerStateDescription($_rptOwnerStateDescription)
	{
		return ($this->rptOwnerStateDescription = $_rptOwnerStateDescription);
	}
	/**
	 * Get rptOwnerStateDescription
	 * @return string
	 */
	public function getRptOwnerStateDescription()
	{
		return $this->rptOwnerStateDescription;
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