<?php
/**
 * Class file for XiFinancialsTypeCashFromInvestingActivities
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeCashFromInvestingActivities
 * @date 08/07/2012
 */
class XiFinancialsTypeCashFromInvestingActivities extends XiFinancialsWsdlClass
{
	/**
	 * The SaleOfPropertyPlantAndEquipment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SaleOfPropertyPlantAndEquipment;
	/**
	 * The SaleOfLongTermInvestments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SaleOfLongTermInvestments;
	/**
	 * The SaleOfShortTermInvestments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SaleOfShortTermInvestments;
	/**
	 * The PurchaseofPropertyPlantAndEquipment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PurchaseofPropertyPlantAndEquipment;
	/**
	 * The Acquisitions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Acquisitions;
	/**
	 * The PurchaseOfLongTermInvestments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PurchaseOfLongTermInvestments;
	/**
	 * The PurchaseOfShortTermInvestments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PurchaseOfShortTermInvestments;
	/**
	 * The OtherInvestingChangesNet
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherInvestingChangesNet;
	/**
	 * The CashFromDiscontinuedInvestingActivities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashFromDiscontinuedInvestingActivities;
	/**
	 * The NetCashFromInvestingActivities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetCashFromInvestingActivities;
	/**
	 * Constructor
	 * @param double SaleOfPropertyPlantAndEquipment
	 * @param double SaleOfLongTermInvestments
	 * @param double SaleOfShortTermInvestments
	 * @param double PurchaseofPropertyPlantAndEquipment
	 * @param double Acquisitions
	 * @param double PurchaseOfLongTermInvestments
	 * @param double PurchaseOfShortTermInvestments
	 * @param double OtherInvestingChangesNet
	 * @param double CashFromDiscontinuedInvestingActivities
	 * @param double NetCashFromInvestingActivities
	 * @return XiFinancialsTypeCashFromInvestingActivities
	 */
	public function __construct($_SaleOfPropertyPlantAndEquipment,$_SaleOfLongTermInvestments,$_SaleOfShortTermInvestments,$_PurchaseofPropertyPlantAndEquipment,$_Acquisitions,$_PurchaseOfLongTermInvestments,$_PurchaseOfShortTermInvestments,$_OtherInvestingChangesNet,$_CashFromDiscontinuedInvestingActivities,$_NetCashFromInvestingActivities)
	{
		parent::__construct(array('SaleOfPropertyPlantAndEquipment'=>$_SaleOfPropertyPlantAndEquipment,'SaleOfLongTermInvestments'=>$_SaleOfLongTermInvestments,'SaleOfShortTermInvestments'=>$_SaleOfShortTermInvestments,'PurchaseofPropertyPlantAndEquipment'=>$_PurchaseofPropertyPlantAndEquipment,'Acquisitions'=>$_Acquisitions,'PurchaseOfLongTermInvestments'=>$_PurchaseOfLongTermInvestments,'PurchaseOfShortTermInvestments'=>$_PurchaseOfShortTermInvestments,'OtherInvestingChangesNet'=>$_OtherInvestingChangesNet,'CashFromDiscontinuedInvestingActivities'=>$_CashFromDiscontinuedInvestingActivities,'NetCashFromInvestingActivities'=>$_NetCashFromInvestingActivities));
	}
	/**
	 * Set SaleOfPropertyPlantAndEquipment
	 * @param double SaleOfPropertyPlantAndEquipment
	 * @return double
	 */
	public function setSaleOfPropertyPlantAndEquipment($_SaleOfPropertyPlantAndEquipment)
	{
		return ($this->SaleOfPropertyPlantAndEquipment = $_SaleOfPropertyPlantAndEquipment);
	}
	/**
	 * Get SaleOfPropertyPlantAndEquipment
	 * @return double
	 */
	public function getSaleOfPropertyPlantAndEquipment()
	{
		return $this->SaleOfPropertyPlantAndEquipment;
	}
	/**
	 * Set SaleOfLongTermInvestments
	 * @param double SaleOfLongTermInvestments
	 * @return double
	 */
	public function setSaleOfLongTermInvestments($_SaleOfLongTermInvestments)
	{
		return ($this->SaleOfLongTermInvestments = $_SaleOfLongTermInvestments);
	}
	/**
	 * Get SaleOfLongTermInvestments
	 * @return double
	 */
	public function getSaleOfLongTermInvestments()
	{
		return $this->SaleOfLongTermInvestments;
	}
	/**
	 * Set SaleOfShortTermInvestments
	 * @param double SaleOfShortTermInvestments
	 * @return double
	 */
	public function setSaleOfShortTermInvestments($_SaleOfShortTermInvestments)
	{
		return ($this->SaleOfShortTermInvestments = $_SaleOfShortTermInvestments);
	}
	/**
	 * Get SaleOfShortTermInvestments
	 * @return double
	 */
	public function getSaleOfShortTermInvestments()
	{
		return $this->SaleOfShortTermInvestments;
	}
	/**
	 * Set PurchaseofPropertyPlantAndEquipment
	 * @param double PurchaseofPropertyPlantAndEquipment
	 * @return double
	 */
	public function setPurchaseofPropertyPlantAndEquipment($_PurchaseofPropertyPlantAndEquipment)
	{
		return ($this->PurchaseofPropertyPlantAndEquipment = $_PurchaseofPropertyPlantAndEquipment);
	}
	/**
	 * Get PurchaseofPropertyPlantAndEquipment
	 * @return double
	 */
	public function getPurchaseofPropertyPlantAndEquipment()
	{
		return $this->PurchaseofPropertyPlantAndEquipment;
	}
	/**
	 * Set Acquisitions
	 * @param double Acquisitions
	 * @return double
	 */
	public function setAcquisitions($_Acquisitions)
	{
		return ($this->Acquisitions = $_Acquisitions);
	}
	/**
	 * Get Acquisitions
	 * @return double
	 */
	public function getAcquisitions()
	{
		return $this->Acquisitions;
	}
	/**
	 * Set PurchaseOfLongTermInvestments
	 * @param double PurchaseOfLongTermInvestments
	 * @return double
	 */
	public function setPurchaseOfLongTermInvestments($_PurchaseOfLongTermInvestments)
	{
		return ($this->PurchaseOfLongTermInvestments = $_PurchaseOfLongTermInvestments);
	}
	/**
	 * Get PurchaseOfLongTermInvestments
	 * @return double
	 */
	public function getPurchaseOfLongTermInvestments()
	{
		return $this->PurchaseOfLongTermInvestments;
	}
	/**
	 * Set PurchaseOfShortTermInvestments
	 * @param double PurchaseOfShortTermInvestments
	 * @return double
	 */
	public function setPurchaseOfShortTermInvestments($_PurchaseOfShortTermInvestments)
	{
		return ($this->PurchaseOfShortTermInvestments = $_PurchaseOfShortTermInvestments);
	}
	/**
	 * Get PurchaseOfShortTermInvestments
	 * @return double
	 */
	public function getPurchaseOfShortTermInvestments()
	{
		return $this->PurchaseOfShortTermInvestments;
	}
	/**
	 * Set OtherInvestingChangesNet
	 * @param double OtherInvestingChangesNet
	 * @return double
	 */
	public function setOtherInvestingChangesNet($_OtherInvestingChangesNet)
	{
		return ($this->OtherInvestingChangesNet = $_OtherInvestingChangesNet);
	}
	/**
	 * Get OtherInvestingChangesNet
	 * @return double
	 */
	public function getOtherInvestingChangesNet()
	{
		return $this->OtherInvestingChangesNet;
	}
	/**
	 * Set CashFromDiscontinuedInvestingActivities
	 * @param double CashFromDiscontinuedInvestingActivities
	 * @return double
	 */
	public function setCashFromDiscontinuedInvestingActivities($_CashFromDiscontinuedInvestingActivities)
	{
		return ($this->CashFromDiscontinuedInvestingActivities = $_CashFromDiscontinuedInvestingActivities);
	}
	/**
	 * Get CashFromDiscontinuedInvestingActivities
	 * @return double
	 */
	public function getCashFromDiscontinuedInvestingActivities()
	{
		return $this->CashFromDiscontinuedInvestingActivities;
	}
	/**
	 * Set NetCashFromInvestingActivities
	 * @param double NetCashFromInvestingActivities
	 * @return double
	 */
	public function setNetCashFromInvestingActivities($_NetCashFromInvestingActivities)
	{
		return ($this->NetCashFromInvestingActivities = $_NetCashFromInvestingActivities);
	}
	/**
	 * Get NetCashFromInvestingActivities
	 * @return double
	 */
	public function getNetCashFromInvestingActivities()
	{
		return $this->NetCashFromInvestingActivities;
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