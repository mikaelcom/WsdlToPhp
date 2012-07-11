<?php
/**
 * Class file for XiFinancialsTypeOperatingRevenue
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeOperatingRevenue
 * @date 08/07/2012
 */
class XiFinancialsTypeOperatingRevenue extends XiFinancialsWsdlClass
{
	/**
	 * The TotalRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalRevenue;
	/**
	 * The OperatingRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OperatingRevenue;
	/**
	 * The AdjustmentsToRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AdjustmentsToRevenue;
	/**
	 * The CostOfSales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CostOfSales;
	/**
	 * The CostOfSalesWithDepreciation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CostOfSalesWithDepreciation;
	/**
	 * The GrossOperatingProfit
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrossOperatingProfit;
	/**
	 * Constructor
	 * @param double TotalRevenue
	 * @param double OperatingRevenue
	 * @param double AdjustmentsToRevenue
	 * @param double CostOfSales
	 * @param double CostOfSalesWithDepreciation
	 * @param double GrossOperatingProfit
	 * @return XiFinancialsTypeOperatingRevenue
	 */
	public function __construct($_TotalRevenue,$_OperatingRevenue,$_AdjustmentsToRevenue,$_CostOfSales,$_CostOfSalesWithDepreciation,$_GrossOperatingProfit)
	{
		parent::__construct(array('TotalRevenue'=>$_TotalRevenue,'OperatingRevenue'=>$_OperatingRevenue,'AdjustmentsToRevenue'=>$_AdjustmentsToRevenue,'CostOfSales'=>$_CostOfSales,'CostOfSalesWithDepreciation'=>$_CostOfSalesWithDepreciation,'GrossOperatingProfit'=>$_GrossOperatingProfit));
	}
	/**
	 * Set TotalRevenue
	 * @param double TotalRevenue
	 * @return double
	 */
	public function setTotalRevenue($_TotalRevenue)
	{
		return ($this->TotalRevenue = $_TotalRevenue);
	}
	/**
	 * Get TotalRevenue
	 * @return double
	 */
	public function getTotalRevenue()
	{
		return $this->TotalRevenue;
	}
	/**
	 * Set OperatingRevenue
	 * @param double OperatingRevenue
	 * @return double
	 */
	public function setOperatingRevenue($_OperatingRevenue)
	{
		return ($this->OperatingRevenue = $_OperatingRevenue);
	}
	/**
	 * Get OperatingRevenue
	 * @return double
	 */
	public function getOperatingRevenue()
	{
		return $this->OperatingRevenue;
	}
	/**
	 * Set AdjustmentsToRevenue
	 * @param double AdjustmentsToRevenue
	 * @return double
	 */
	public function setAdjustmentsToRevenue($_AdjustmentsToRevenue)
	{
		return ($this->AdjustmentsToRevenue = $_AdjustmentsToRevenue);
	}
	/**
	 * Get AdjustmentsToRevenue
	 * @return double
	 */
	public function getAdjustmentsToRevenue()
	{
		return $this->AdjustmentsToRevenue;
	}
	/**
	 * Set CostOfSales
	 * @param double CostOfSales
	 * @return double
	 */
	public function setCostOfSales($_CostOfSales)
	{
		return ($this->CostOfSales = $_CostOfSales);
	}
	/**
	 * Get CostOfSales
	 * @return double
	 */
	public function getCostOfSales()
	{
		return $this->CostOfSales;
	}
	/**
	 * Set CostOfSalesWithDepreciation
	 * @param double CostOfSalesWithDepreciation
	 * @return double
	 */
	public function setCostOfSalesWithDepreciation($_CostOfSalesWithDepreciation)
	{
		return ($this->CostOfSalesWithDepreciation = $_CostOfSalesWithDepreciation);
	}
	/**
	 * Get CostOfSalesWithDepreciation
	 * @return double
	 */
	public function getCostOfSalesWithDepreciation()
	{
		return $this->CostOfSalesWithDepreciation;
	}
	/**
	 * Set GrossOperatingProfit
	 * @param double GrossOperatingProfit
	 * @return double
	 */
	public function setGrossOperatingProfit($_GrossOperatingProfit)
	{
		return ($this->GrossOperatingProfit = $_GrossOperatingProfit);
	}
	/**
	 * Get GrossOperatingProfit
	 * @return double
	 */
	public function getGrossOperatingProfit()
	{
		return $this->GrossOperatingProfit;
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