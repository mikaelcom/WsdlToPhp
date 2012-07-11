<?php
/**
 * Class file for XiFundDataTypeIncome
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeIncome
 * @date 08/07/2012
 */
class XiFundDataTypeIncome extends XiFundDataWsdlClass
{
	/**
	 * The NetInterestIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetInterestIncome;
	/**
	 * The NetDividendIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetDividendIncome;
	/**
	 * The AccountMaintenanceFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccountMaintenanceFees;
	/**
	 * The NetOtherIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetOtherIncome;
	/**
	 * Constructor
	 * @param double NetInterestIncome
	 * @param double NetDividendIncome
	 * @param double AccountMaintenanceFees
	 * @param double NetOtherIncome
	 * @return XiFundDataTypeIncome
	 */
	public function __construct($_NetInterestIncome,$_NetDividendIncome,$_AccountMaintenanceFees,$_NetOtherIncome)
	{
		parent::__construct(array('NetInterestIncome'=>$_NetInterestIncome,'NetDividendIncome'=>$_NetDividendIncome,'AccountMaintenanceFees'=>$_AccountMaintenanceFees,'NetOtherIncome'=>$_NetOtherIncome));
	}
	/**
	 * Set NetInterestIncome
	 * @param double NetInterestIncome
	 * @return double
	 */
	public function setNetInterestIncome($_NetInterestIncome)
	{
		return ($this->NetInterestIncome = $_NetInterestIncome);
	}
	/**
	 * Get NetInterestIncome
	 * @return double
	 */
	public function getNetInterestIncome()
	{
		return $this->NetInterestIncome;
	}
	/**
	 * Set NetDividendIncome
	 * @param double NetDividendIncome
	 * @return double
	 */
	public function setNetDividendIncome($_NetDividendIncome)
	{
		return ($this->NetDividendIncome = $_NetDividendIncome);
	}
	/**
	 * Get NetDividendIncome
	 * @return double
	 */
	public function getNetDividendIncome()
	{
		return $this->NetDividendIncome;
	}
	/**
	 * Set AccountMaintenanceFees
	 * @param double AccountMaintenanceFees
	 * @return double
	 */
	public function setAccountMaintenanceFees($_AccountMaintenanceFees)
	{
		return ($this->AccountMaintenanceFees = $_AccountMaintenanceFees);
	}
	/**
	 * Get AccountMaintenanceFees
	 * @return double
	 */
	public function getAccountMaintenanceFees()
	{
		return $this->AccountMaintenanceFees;
	}
	/**
	 * Set NetOtherIncome
	 * @param double NetOtherIncome
	 * @return double
	 */
	public function setNetOtherIncome($_NetOtherIncome)
	{
		return ($this->NetOtherIncome = $_NetOtherIncome);
	}
	/**
	 * Get NetOtherIncome
	 * @return double
	 */
	public function getNetOtherIncome()
	{
		return $this->NetOtherIncome;
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