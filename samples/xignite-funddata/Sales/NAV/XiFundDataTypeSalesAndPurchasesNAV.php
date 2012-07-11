<?php
/**
 * Class file for XiFundDataTypeSalesAndPurchasesNAV
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeSalesAndPurchasesNAV
 * @date 08/07/2012
 */
class XiFundDataTypeSalesAndPurchasesNAV extends XiFundDataWsdlClass
{
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The NewSales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NewSales;
	/**
	 * The DividendReinvestments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DividendReinvestments;
	/**
	 * The Other
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Other;
	/**
	 * The RedemptionsAndRepurchases
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RedemptionsAndRepurchases;
	/**
	 * Constructor
	 * @param XiFundDataTypePeriodTypes PeriodType
	 * @param double NewSales
	 * @param double DividendReinvestments
	 * @param double Other
	 * @param double RedemptionsAndRepurchases
	 * @return XiFundDataTypeSalesAndPurchasesNAV
	 */
	public function __construct($_PeriodType,$_NewSales,$_DividendReinvestments,$_Other,$_RedemptionsAndRepurchases)
	{
		parent::__construct(array('PeriodType'=>$_PeriodType,'NewSales'=>$_NewSales,'DividendReinvestments'=>$_DividendReinvestments,'Other'=>$_Other,'RedemptionsAndRepurchases'=>$_RedemptionsAndRepurchases));
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiFundDataTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiFundDataTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set NewSales
	 * @param double NewSales
	 * @return double
	 */
	public function setNewSales($_NewSales)
	{
		return ($this->NewSales = $_NewSales);
	}
	/**
	 * Get NewSales
	 * @return double
	 */
	public function getNewSales()
	{
		return $this->NewSales;
	}
	/**
	 * Set DividendReinvestments
	 * @param double DividendReinvestments
	 * @return double
	 */
	public function setDividendReinvestments($_DividendReinvestments)
	{
		return ($this->DividendReinvestments = $_DividendReinvestments);
	}
	/**
	 * Get DividendReinvestments
	 * @return double
	 */
	public function getDividendReinvestments()
	{
		return $this->DividendReinvestments;
	}
	/**
	 * Set Other
	 * @param double Other
	 * @return double
	 */
	public function setOther($_Other)
	{
		return ($this->Other = $_Other);
	}
	/**
	 * Get Other
	 * @return double
	 */
	public function getOther()
	{
		return $this->Other;
	}
	/**
	 * Set RedemptionsAndRepurchases
	 * @param double RedemptionsAndRepurchases
	 * @return double
	 */
	public function setRedemptionsAndRepurchases($_RedemptionsAndRepurchases)
	{
		return ($this->RedemptionsAndRepurchases = $_RedemptionsAndRepurchases);
	}
	/**
	 * Get RedemptionsAndRepurchases
	 * @return double
	 */
	public function getRedemptionsAndRepurchases()
	{
		return $this->RedemptionsAndRepurchases;
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