<?php
/**
 * Class file for XiFinancialsTypeNonCurrentAssets
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeNonCurrentAssets
 * @date 08/07/2012
 */
class XiFinancialsTypeNonCurrentAssets extends XiFinancialsWsdlClass
{
	/**
	 * The LandAndImprovements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LandAndImprovements;
	/**
	 * The BuildingAndImprovements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BuildingAndImprovements;
	/**
	 * The MachineryFurnitureAndEquipment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MachineryFurnitureAndEquipment;
	/**
	 * The ConstructionInProgress
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ConstructionInProgress;
	/**
	 * The OtherFixedAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherFixedAssets;
	/**
	 * The TotalFixedAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalFixedAssets;
	/**
	 * The GrossFixedAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrossFixedAssets;
	/**
	 * The AccumulatedDepreciationAndDepletion
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccumulatedDepreciationAndDepletion;
	/**
	 * The NetFixedAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetFixedAssets;
	/**
	 * The Intangibles
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Intangibles;
	/**
	 * The CostInExcess
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CostInExcess;
	/**
	 * The NonCurrentDeferredIncomeTaxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NonCurrentDeferredIncomeTaxes;
	/**
	 * The OtherNonCurrentAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherNonCurrentAssets;
	/**
	 * The TotalNonCurrentAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalNonCurrentAssets;
	/**
	 * Constructor
	 * @param double LandAndImprovements
	 * @param double BuildingAndImprovements
	 * @param double MachineryFurnitureAndEquipment
	 * @param double ConstructionInProgress
	 * @param double OtherFixedAssets
	 * @param double TotalFixedAssets
	 * @param double GrossFixedAssets
	 * @param double AccumulatedDepreciationAndDepletion
	 * @param double NetFixedAssets
	 * @param double Intangibles
	 * @param double CostInExcess
	 * @param double NonCurrentDeferredIncomeTaxes
	 * @param double OtherNonCurrentAssets
	 * @param double TotalNonCurrentAssets
	 * @return XiFinancialsTypeNonCurrentAssets
	 */
	public function __construct($_LandAndImprovements,$_BuildingAndImprovements,$_MachineryFurnitureAndEquipment,$_ConstructionInProgress,$_OtherFixedAssets,$_TotalFixedAssets,$_GrossFixedAssets,$_AccumulatedDepreciationAndDepletion,$_NetFixedAssets,$_Intangibles,$_CostInExcess,$_NonCurrentDeferredIncomeTaxes,$_OtherNonCurrentAssets,$_TotalNonCurrentAssets)
	{
		parent::__construct(array('LandAndImprovements'=>$_LandAndImprovements,'BuildingAndImprovements'=>$_BuildingAndImprovements,'MachineryFurnitureAndEquipment'=>$_MachineryFurnitureAndEquipment,'ConstructionInProgress'=>$_ConstructionInProgress,'OtherFixedAssets'=>$_OtherFixedAssets,'TotalFixedAssets'=>$_TotalFixedAssets,'GrossFixedAssets'=>$_GrossFixedAssets,'AccumulatedDepreciationAndDepletion'=>$_AccumulatedDepreciationAndDepletion,'NetFixedAssets'=>$_NetFixedAssets,'Intangibles'=>$_Intangibles,'CostInExcess'=>$_CostInExcess,'NonCurrentDeferredIncomeTaxes'=>$_NonCurrentDeferredIncomeTaxes,'OtherNonCurrentAssets'=>$_OtherNonCurrentAssets,'TotalNonCurrentAssets'=>$_TotalNonCurrentAssets));
	}
	/**
	 * Set LandAndImprovements
	 * @param double LandAndImprovements
	 * @return double
	 */
	public function setLandAndImprovements($_LandAndImprovements)
	{
		return ($this->LandAndImprovements = $_LandAndImprovements);
	}
	/**
	 * Get LandAndImprovements
	 * @return double
	 */
	public function getLandAndImprovements()
	{
		return $this->LandAndImprovements;
	}
	/**
	 * Set BuildingAndImprovements
	 * @param double BuildingAndImprovements
	 * @return double
	 */
	public function setBuildingAndImprovements($_BuildingAndImprovements)
	{
		return ($this->BuildingAndImprovements = $_BuildingAndImprovements);
	}
	/**
	 * Get BuildingAndImprovements
	 * @return double
	 */
	public function getBuildingAndImprovements()
	{
		return $this->BuildingAndImprovements;
	}
	/**
	 * Set MachineryFurnitureAndEquipment
	 * @param double MachineryFurnitureAndEquipment
	 * @return double
	 */
	public function setMachineryFurnitureAndEquipment($_MachineryFurnitureAndEquipment)
	{
		return ($this->MachineryFurnitureAndEquipment = $_MachineryFurnitureAndEquipment);
	}
	/**
	 * Get MachineryFurnitureAndEquipment
	 * @return double
	 */
	public function getMachineryFurnitureAndEquipment()
	{
		return $this->MachineryFurnitureAndEquipment;
	}
	/**
	 * Set ConstructionInProgress
	 * @param double ConstructionInProgress
	 * @return double
	 */
	public function setConstructionInProgress($_ConstructionInProgress)
	{
		return ($this->ConstructionInProgress = $_ConstructionInProgress);
	}
	/**
	 * Get ConstructionInProgress
	 * @return double
	 */
	public function getConstructionInProgress()
	{
		return $this->ConstructionInProgress;
	}
	/**
	 * Set OtherFixedAssets
	 * @param double OtherFixedAssets
	 * @return double
	 */
	public function setOtherFixedAssets($_OtherFixedAssets)
	{
		return ($this->OtherFixedAssets = $_OtherFixedAssets);
	}
	/**
	 * Get OtherFixedAssets
	 * @return double
	 */
	public function getOtherFixedAssets()
	{
		return $this->OtherFixedAssets;
	}
	/**
	 * Set TotalFixedAssets
	 * @param double TotalFixedAssets
	 * @return double
	 */
	public function setTotalFixedAssets($_TotalFixedAssets)
	{
		return ($this->TotalFixedAssets = $_TotalFixedAssets);
	}
	/**
	 * Get TotalFixedAssets
	 * @return double
	 */
	public function getTotalFixedAssets()
	{
		return $this->TotalFixedAssets;
	}
	/**
	 * Set GrossFixedAssets
	 * @param double GrossFixedAssets
	 * @return double
	 */
	public function setGrossFixedAssets($_GrossFixedAssets)
	{
		return ($this->GrossFixedAssets = $_GrossFixedAssets);
	}
	/**
	 * Get GrossFixedAssets
	 * @return double
	 */
	public function getGrossFixedAssets()
	{
		return $this->GrossFixedAssets;
	}
	/**
	 * Set AccumulatedDepreciationAndDepletion
	 * @param double AccumulatedDepreciationAndDepletion
	 * @return double
	 */
	public function setAccumulatedDepreciationAndDepletion($_AccumulatedDepreciationAndDepletion)
	{
		return ($this->AccumulatedDepreciationAndDepletion = $_AccumulatedDepreciationAndDepletion);
	}
	/**
	 * Get AccumulatedDepreciationAndDepletion
	 * @return double
	 */
	public function getAccumulatedDepreciationAndDepletion()
	{
		return $this->AccumulatedDepreciationAndDepletion;
	}
	/**
	 * Set NetFixedAssets
	 * @param double NetFixedAssets
	 * @return double
	 */
	public function setNetFixedAssets($_NetFixedAssets)
	{
		return ($this->NetFixedAssets = $_NetFixedAssets);
	}
	/**
	 * Get NetFixedAssets
	 * @return double
	 */
	public function getNetFixedAssets()
	{
		return $this->NetFixedAssets;
	}
	/**
	 * Set Intangibles
	 * @param double Intangibles
	 * @return double
	 */
	public function setIntangibles($_Intangibles)
	{
		return ($this->Intangibles = $_Intangibles);
	}
	/**
	 * Get Intangibles
	 * @return double
	 */
	public function getIntangibles()
	{
		return $this->Intangibles;
	}
	/**
	 * Set CostInExcess
	 * @param double CostInExcess
	 * @return double
	 */
	public function setCostInExcess($_CostInExcess)
	{
		return ($this->CostInExcess = $_CostInExcess);
	}
	/**
	 * Get CostInExcess
	 * @return double
	 */
	public function getCostInExcess()
	{
		return $this->CostInExcess;
	}
	/**
	 * Set NonCurrentDeferredIncomeTaxes
	 * @param double NonCurrentDeferredIncomeTaxes
	 * @return double
	 */
	public function setNonCurrentDeferredIncomeTaxes($_NonCurrentDeferredIncomeTaxes)
	{
		return ($this->NonCurrentDeferredIncomeTaxes = $_NonCurrentDeferredIncomeTaxes);
	}
	/**
	 * Get NonCurrentDeferredIncomeTaxes
	 * @return double
	 */
	public function getNonCurrentDeferredIncomeTaxes()
	{
		return $this->NonCurrentDeferredIncomeTaxes;
	}
	/**
	 * Set OtherNonCurrentAssets
	 * @param double OtherNonCurrentAssets
	 * @return double
	 */
	public function setOtherNonCurrentAssets($_OtherNonCurrentAssets)
	{
		return ($this->OtherNonCurrentAssets = $_OtherNonCurrentAssets);
	}
	/**
	 * Get OtherNonCurrentAssets
	 * @return double
	 */
	public function getOtherNonCurrentAssets()
	{
		return $this->OtherNonCurrentAssets;
	}
	/**
	 * Set TotalNonCurrentAssets
	 * @param double TotalNonCurrentAssets
	 * @return double
	 */
	public function setTotalNonCurrentAssets($_TotalNonCurrentAssets)
	{
		return ($this->TotalNonCurrentAssets = $_TotalNonCurrentAssets);
	}
	/**
	 * Get TotalNonCurrentAssets
	 * @return double
	 */
	public function getTotalNonCurrentAssets()
	{
		return $this->TotalNonCurrentAssets;
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