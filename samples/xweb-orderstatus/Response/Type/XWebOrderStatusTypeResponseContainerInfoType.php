<?php
/**
 * Class file for XWebOrderStatusTypeResponseContainerInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseContainerInfoType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseContainerInfoType extends XWebOrderStatusWsdlClass
{
	/**
	 * The ContainerID
	 * @var ContainerID
	 */
	public $ContainerID;
	/**
	 * The ShipToName
	 * @var ShipToName
	 */
	public $ShipToName;
	/**
	 * The ShipToAddr1
	 * @var ShipToAddr1
	 */
	public $ShipToAddr1;
	/**
	 * The ShipToAddr2
	 * @var ShipToAddr2
	 */
	public $ShipToAddr2;
	/**
	 * The ShipToAddr3
	 * @var ShipToAddr3
	 */
	public $ShipToAddr3;
	/**
	 * The ShipToCity
	 * @var ShipToCity
	 */
	public $ShipToCity;
	/**
	 * The ShipToStateProv
	 * @var ShipToStateProv
	 */
	public $ShipToStateProv;
	/**
	 * The ShipToPostalCode
	 * @var ShipToPostalCode
	 */
	public $ShipToPostalCode;
	/**
	 * The DateShipped
	 * @var DateShipped
	 */
	public $DateShipped;
	/**
	 * The DateInvoiced
	 * @var DateInvoiced
	 */
	public $DateInvoiced;
	/**
	 * The Weight
	 * @var Weight
	 */
	public $Weight;
	/**
	 * The WhseDesc
	 * @var WhseDesc
	 */
	public $WhseDesc;
	/**
	 * The ShipVia
	 * @var ShipVia
	 */
	public $ShipVia;
	/**
	 * The ContainerValue
	 * @var ContainerValue
	 */
	public $ContainerValue;
	/**
	 * The HandlingCharge
	 * @var HandlingCharge
	 */
	public $HandlingCharge;
	/**
	 * The CODCharge
	 * @var CODCharge
	 */
	public $CODCharge;
	/**
	 * The DebitCredit
	 * @var DebitCredit
	 */
	public $DebitCredit;
	/**
	 * The NetFreightCharge
	 * @var NetFreightCharge
	 */
	public $NetFreightCharge;
	/**
	 * The TaxCharge
	 * @var TaxCharge
	 */
	public $TaxCharge;
	/**
	 * The TotalOrderValue
	 * @var TotalOrderValue
	 */
	public $TotalOrderValue;
	/**
	 * The ItemInfo
	 * Meta informations :
	 * 	- nillable : true
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeResponseItemInfoType
	 */
	public $ItemInfo;
	/**
	 * The NbrOfItems
	 * @var NbrOfItems
	 */
	public $NbrOfItems;
	/**
	 * Constructor
	 * @param ContainerID ContainerID
	 * @param ShipToName ShipToName
	 * @param ShipToAddr1 ShipToAddr1
	 * @param ShipToAddr2 ShipToAddr2
	 * @param ShipToAddr3 ShipToAddr3
	 * @param ShipToCity ShipToCity
	 * @param ShipToStateProv ShipToStateProv
	 * @param ShipToPostalCode ShipToPostalCode
	 * @param DateShipped DateShipped
	 * @param DateInvoiced DateInvoiced
	 * @param Weight Weight
	 * @param WhseDesc WhseDesc
	 * @param ShipVia ShipVia
	 * @param ContainerValue ContainerValue
	 * @param HandlingCharge HandlingCharge
	 * @param CODCharge CODCharge
	 * @param DebitCredit DebitCredit
	 * @param NetFreightCharge NetFreightCharge
	 * @param TaxCharge TaxCharge
	 * @param TotalOrderValue TotalOrderValue
	 * @param XWebOrderStatusTypeResponseItemInfoType ItemInfo
	 * @param NbrOfItems NbrOfItems
	 * @return XWebOrderStatusTypeResponseContainerInfoType
	 */
	public function __construct($_ContainerID = null,$_ShipToName = null,$_ShipToAddr1 = null,$_ShipToAddr2 = null,$_ShipToAddr3 = null,$_ShipToCity = null,$_ShipToStateProv = null,$_ShipToPostalCode = null,$_DateShipped = null,$_DateInvoiced = null,$_Weight = null,$_WhseDesc = null,$_ShipVia = null,$_ContainerValue = null,$_HandlingCharge = null,$_CODCharge = null,$_DebitCredit = null,$_NetFreightCharge = null,$_TaxCharge = null,$_TotalOrderValue = null,$_ItemInfo,$_NbrOfItems = null)
	{
		parent::__construct(array('ContainerID'=>$_ContainerID,'ShipToName'=>$_ShipToName,'ShipToAddr1'=>$_ShipToAddr1,'ShipToAddr2'=>$_ShipToAddr2,'ShipToAddr3'=>$_ShipToAddr3,'ShipToCity'=>$_ShipToCity,'ShipToStateProv'=>$_ShipToStateProv,'ShipToPostalCode'=>$_ShipToPostalCode,'DateShipped'=>$_DateShipped,'DateInvoiced'=>$_DateInvoiced,'Weight'=>$_Weight,'WhseDesc'=>$_WhseDesc,'ShipVia'=>$_ShipVia,'ContainerValue'=>$_ContainerValue,'HandlingCharge'=>$_HandlingCharge,'CODCharge'=>$_CODCharge,'DebitCredit'=>$_DebitCredit,'NetFreightCharge'=>$_NetFreightCharge,'TaxCharge'=>$_TaxCharge,'TotalOrderValue'=>$_TotalOrderValue,'ItemInfo'=>$_ItemInfo,'NbrOfItems'=>$_NbrOfItems));
	}
	/**
	 * Set ContainerID
	 * @param ContainerID ContainerID
	 * @return ContainerID
	 */
	public function setContainerID($_ContainerID)
	{
		return ($this->ContainerID = $_ContainerID);
	}
	/**
	 * Get ContainerID
	 * @return ContainerID
	 */
	public function getContainerID()
	{
		return $this->ContainerID;
	}
	/**
	 * Set ShipToName
	 * @param ShipToName ShipToName
	 * @return ShipToName
	 */
	public function setShipToName($_ShipToName)
	{
		return ($this->ShipToName = $_ShipToName);
	}
	/**
	 * Get ShipToName
	 * @return ShipToName
	 */
	public function getShipToName()
	{
		return $this->ShipToName;
	}
	/**
	 * Set ShipToAddr1
	 * @param ShipToAddr1 ShipToAddr1
	 * @return ShipToAddr1
	 */
	public function setShipToAddr1($_ShipToAddr1)
	{
		return ($this->ShipToAddr1 = $_ShipToAddr1);
	}
	/**
	 * Get ShipToAddr1
	 * @return ShipToAddr1
	 */
	public function getShipToAddr1()
	{
		return $this->ShipToAddr1;
	}
	/**
	 * Set ShipToAddr2
	 * @param ShipToAddr2 ShipToAddr2
	 * @return ShipToAddr2
	 */
	public function setShipToAddr2($_ShipToAddr2)
	{
		return ($this->ShipToAddr2 = $_ShipToAddr2);
	}
	/**
	 * Get ShipToAddr2
	 * @return ShipToAddr2
	 */
	public function getShipToAddr2()
	{
		return $this->ShipToAddr2;
	}
	/**
	 * Set ShipToAddr3
	 * @param ShipToAddr3 ShipToAddr3
	 * @return ShipToAddr3
	 */
	public function setShipToAddr3($_ShipToAddr3)
	{
		return ($this->ShipToAddr3 = $_ShipToAddr3);
	}
	/**
	 * Get ShipToAddr3
	 * @return ShipToAddr3
	 */
	public function getShipToAddr3()
	{
		return $this->ShipToAddr3;
	}
	/**
	 * Set ShipToCity
	 * @param ShipToCity ShipToCity
	 * @return ShipToCity
	 */
	public function setShipToCity($_ShipToCity)
	{
		return ($this->ShipToCity = $_ShipToCity);
	}
	/**
	 * Get ShipToCity
	 * @return ShipToCity
	 */
	public function getShipToCity()
	{
		return $this->ShipToCity;
	}
	/**
	 * Set ShipToStateProv
	 * @param ShipToStateProv ShipToStateProv
	 * @return ShipToStateProv
	 */
	public function setShipToStateProv($_ShipToStateProv)
	{
		return ($this->ShipToStateProv = $_ShipToStateProv);
	}
	/**
	 * Get ShipToStateProv
	 * @return ShipToStateProv
	 */
	public function getShipToStateProv()
	{
		return $this->ShipToStateProv;
	}
	/**
	 * Set ShipToPostalCode
	 * @param ShipToPostalCode ShipToPostalCode
	 * @return ShipToPostalCode
	 */
	public function setShipToPostalCode($_ShipToPostalCode)
	{
		return ($this->ShipToPostalCode = $_ShipToPostalCode);
	}
	/**
	 * Get ShipToPostalCode
	 * @return ShipToPostalCode
	 */
	public function getShipToPostalCode()
	{
		return $this->ShipToPostalCode;
	}
	/**
	 * Set DateShipped
	 * @param DateShipped DateShipped
	 * @return DateShipped
	 */
	public function setDateShipped($_DateShipped)
	{
		return ($this->DateShipped = $_DateShipped);
	}
	/**
	 * Get DateShipped
	 * @return DateShipped
	 */
	public function getDateShipped()
	{
		return $this->DateShipped;
	}
	/**
	 * Set DateInvoiced
	 * @param DateInvoiced DateInvoiced
	 * @return DateInvoiced
	 */
	public function setDateInvoiced($_DateInvoiced)
	{
		return ($this->DateInvoiced = $_DateInvoiced);
	}
	/**
	 * Get DateInvoiced
	 * @return DateInvoiced
	 */
	public function getDateInvoiced()
	{
		return $this->DateInvoiced;
	}
	/**
	 * Set Weight
	 * @param Weight Weight
	 * @return Weight
	 */
	public function setWeight($_Weight)
	{
		return ($this->Weight = $_Weight);
	}
	/**
	 * Get Weight
	 * @return Weight
	 */
	public function getWeight()
	{
		return $this->Weight;
	}
	/**
	 * Set WhseDesc
	 * @param WhseDesc WhseDesc
	 * @return WhseDesc
	 */
	public function setWhseDesc($_WhseDesc)
	{
		return ($this->WhseDesc = $_WhseDesc);
	}
	/**
	 * Get WhseDesc
	 * @return WhseDesc
	 */
	public function getWhseDesc()
	{
		return $this->WhseDesc;
	}
	/**
	 * Set ShipVia
	 * @param ShipVia ShipVia
	 * @return ShipVia
	 */
	public function setShipVia($_ShipVia)
	{
		return ($this->ShipVia = $_ShipVia);
	}
	/**
	 * Get ShipVia
	 * @return ShipVia
	 */
	public function getShipVia()
	{
		return $this->ShipVia;
	}
	/**
	 * Set ContainerValue
	 * @param ContainerValue ContainerValue
	 * @return ContainerValue
	 */
	public function setContainerValue($_ContainerValue)
	{
		return ($this->ContainerValue = $_ContainerValue);
	}
	/**
	 * Get ContainerValue
	 * @return ContainerValue
	 */
	public function getContainerValue()
	{
		return $this->ContainerValue;
	}
	/**
	 * Set HandlingCharge
	 * @param HandlingCharge HandlingCharge
	 * @return HandlingCharge
	 */
	public function setHandlingCharge($_HandlingCharge)
	{
		return ($this->HandlingCharge = $_HandlingCharge);
	}
	/**
	 * Get HandlingCharge
	 * @return HandlingCharge
	 */
	public function getHandlingCharge()
	{
		return $this->HandlingCharge;
	}
	/**
	 * Set CODCharge
	 * @param CODCharge CODCharge
	 * @return CODCharge
	 */
	public function setCODCharge($_CODCharge)
	{
		return ($this->CODCharge = $_CODCharge);
	}
	/**
	 * Get CODCharge
	 * @return CODCharge
	 */
	public function getCODCharge()
	{
		return $this->CODCharge;
	}
	/**
	 * Set DebitCredit
	 * @param DebitCredit DebitCredit
	 * @return DebitCredit
	 */
	public function setDebitCredit($_DebitCredit)
	{
		return ($this->DebitCredit = $_DebitCredit);
	}
	/**
	 * Get DebitCredit
	 * @return DebitCredit
	 */
	public function getDebitCredit()
	{
		return $this->DebitCredit;
	}
	/**
	 * Set NetFreightCharge
	 * @param NetFreightCharge NetFreightCharge
	 * @return NetFreightCharge
	 */
	public function setNetFreightCharge($_NetFreightCharge)
	{
		return ($this->NetFreightCharge = $_NetFreightCharge);
	}
	/**
	 * Get NetFreightCharge
	 * @return NetFreightCharge
	 */
	public function getNetFreightCharge()
	{
		return $this->NetFreightCharge;
	}
	/**
	 * Set TaxCharge
	 * @param TaxCharge TaxCharge
	 * @return TaxCharge
	 */
	public function setTaxCharge($_TaxCharge)
	{
		return ($this->TaxCharge = $_TaxCharge);
	}
	/**
	 * Get TaxCharge
	 * @return TaxCharge
	 */
	public function getTaxCharge()
	{
		return $this->TaxCharge;
	}
	/**
	 * Set TotalOrderValue
	 * @param TotalOrderValue TotalOrderValue
	 * @return TotalOrderValue
	 */
	public function setTotalOrderValue($_TotalOrderValue)
	{
		return ($this->TotalOrderValue = $_TotalOrderValue);
	}
	/**
	 * Get TotalOrderValue
	 * @return TotalOrderValue
	 */
	public function getTotalOrderValue()
	{
		return $this->TotalOrderValue;
	}
	/**
	 * Set ItemInfo
	 * @param ResponseItemInfoType ItemInfo
	 * @return ResponseItemInfoType
	 */
	public function setItemInfo($_ItemInfo)
	{
		return ($this->ItemInfo = $_ItemInfo);
	}
	/**
	 * Get ItemInfo
	 * @return XWebOrderStatusTypeResponseItemInfoType
	 */
	public function getItemInfo()
	{
		return $this->ItemInfo;
	}
	/**
	 * Set NbrOfItems
	 * @param NbrOfItems NbrOfItems
	 * @return NbrOfItems
	 */
	public function setNbrOfItems($_NbrOfItems)
	{
		return ($this->NbrOfItems = $_NbrOfItems);
	}
	/**
	 * Get NbrOfItems
	 * @return NbrOfItems
	 */
	public function getNbrOfItems()
	{
		return $this->NbrOfItems;
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