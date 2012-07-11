<?php
/**
 * Class file for AmazonWebServicesTypeThirdPartyProductDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeThirdPartyProductDetails
 * @date 10/07/2012
 */
class AmazonWebServicesTypeThirdPartyProductDetails extends AmazonWebServicesWsdlClass
{
	/**
	 * The OfferingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OfferingType;
	/**
	 * The SellerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerId;
	/**
	 * The SellerNickname
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerNickname;
	/**
	 * The ExchangeId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeId;
	/**
	 * The OfferingPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OfferingPrice;
	/**
	 * The Condition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Condition;
	/**
	 * The ConditionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ConditionType;
	/**
	 * The ExchangeAvailability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeAvailability;
	/**
	 * The SellerCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerCountry;
	/**
	 * The SellerState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerState;
	/**
	 * The ShipComments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ShipComments;
	/**
	 * The SellerRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerRating;
	/**
	 * Constructor
	 * @param string OfferingType
	 * @param string SellerId
	 * @param string SellerNickname
	 * @param string ExchangeId
	 * @param string OfferingPrice
	 * @param string Condition
	 * @param string ConditionType
	 * @param string ExchangeAvailability
	 * @param string SellerCountry
	 * @param string SellerState
	 * @param string ShipComments
	 * @param string SellerRating
	 * @return AmazonWebServicesTypeThirdPartyProductDetails
	 */
	public function __construct($_OfferingType = null,$_SellerId = null,$_SellerNickname = null,$_ExchangeId = null,$_OfferingPrice = null,$_Condition = null,$_ConditionType = null,$_ExchangeAvailability = null,$_SellerCountry = null,$_SellerState = null,$_ShipComments = null,$_SellerRating = null)
	{
		parent::__construct(array('OfferingType'=>$_OfferingType,'SellerId'=>$_SellerId,'SellerNickname'=>$_SellerNickname,'ExchangeId'=>$_ExchangeId,'OfferingPrice'=>$_OfferingPrice,'Condition'=>$_Condition,'ConditionType'=>$_ConditionType,'ExchangeAvailability'=>$_ExchangeAvailability,'SellerCountry'=>$_SellerCountry,'SellerState'=>$_SellerState,'ShipComments'=>$_ShipComments,'SellerRating'=>$_SellerRating));
	}
	/**
	 * Set OfferingType
	 * @param string OfferingType
	 * @return string
	 */
	public function setOfferingType($_OfferingType)
	{
		return ($this->OfferingType = $_OfferingType);
	}
	/**
	 * Get OfferingType
	 * @return string
	 */
	public function getOfferingType()
	{
		return $this->OfferingType;
	}
	/**
	 * Set SellerId
	 * @param string SellerId
	 * @return string
	 */
	public function setSellerId($_SellerId)
	{
		return ($this->SellerId = $_SellerId);
	}
	/**
	 * Get SellerId
	 * @return string
	 */
	public function getSellerId()
	{
		return $this->SellerId;
	}
	/**
	 * Set SellerNickname
	 * @param string SellerNickname
	 * @return string
	 */
	public function setSellerNickname($_SellerNickname)
	{
		return ($this->SellerNickname = $_SellerNickname);
	}
	/**
	 * Get SellerNickname
	 * @return string
	 */
	public function getSellerNickname()
	{
		return $this->SellerNickname;
	}
	/**
	 * Set ExchangeId
	 * @param string ExchangeId
	 * @return string
	 */
	public function setExchangeId($_ExchangeId)
	{
		return ($this->ExchangeId = $_ExchangeId);
	}
	/**
	 * Get ExchangeId
	 * @return string
	 */
	public function getExchangeId()
	{
		return $this->ExchangeId;
	}
	/**
	 * Set OfferingPrice
	 * @param string OfferingPrice
	 * @return string
	 */
	public function setOfferingPrice($_OfferingPrice)
	{
		return ($this->OfferingPrice = $_OfferingPrice);
	}
	/**
	 * Get OfferingPrice
	 * @return string
	 */
	public function getOfferingPrice()
	{
		return $this->OfferingPrice;
	}
	/**
	 * Set Condition
	 * @param string Condition
	 * @return string
	 */
	public function setCondition($_Condition)
	{
		return ($this->Condition = $_Condition);
	}
	/**
	 * Get Condition
	 * @return string
	 */
	public function getCondition()
	{
		return $this->Condition;
	}
	/**
	 * Set ConditionType
	 * @param string ConditionType
	 * @return string
	 */
	public function setConditionType($_ConditionType)
	{
		return ($this->ConditionType = $_ConditionType);
	}
	/**
	 * Get ConditionType
	 * @return string
	 */
	public function getConditionType()
	{
		return $this->ConditionType;
	}
	/**
	 * Set ExchangeAvailability
	 * @param string ExchangeAvailability
	 * @return string
	 */
	public function setExchangeAvailability($_ExchangeAvailability)
	{
		return ($this->ExchangeAvailability = $_ExchangeAvailability);
	}
	/**
	 * Get ExchangeAvailability
	 * @return string
	 */
	public function getExchangeAvailability()
	{
		return $this->ExchangeAvailability;
	}
	/**
	 * Set SellerCountry
	 * @param string SellerCountry
	 * @return string
	 */
	public function setSellerCountry($_SellerCountry)
	{
		return ($this->SellerCountry = $_SellerCountry);
	}
	/**
	 * Get SellerCountry
	 * @return string
	 */
	public function getSellerCountry()
	{
		return $this->SellerCountry;
	}
	/**
	 * Set SellerState
	 * @param string SellerState
	 * @return string
	 */
	public function setSellerState($_SellerState)
	{
		return ($this->SellerState = $_SellerState);
	}
	/**
	 * Get SellerState
	 * @return string
	 */
	public function getSellerState()
	{
		return $this->SellerState;
	}
	/**
	 * Set ShipComments
	 * @param string ShipComments
	 * @return string
	 */
	public function setShipComments($_ShipComments)
	{
		return ($this->ShipComments = $_ShipComments);
	}
	/**
	 * Get ShipComments
	 * @return string
	 */
	public function getShipComments()
	{
		return $this->ShipComments;
	}
	/**
	 * Set SellerRating
	 * @param string SellerRating
	 * @return string
	 */
	public function setSellerRating($_SellerRating)
	{
		return ($this->SellerRating = $_SellerRating);
	}
	/**
	 * Get SellerRating
	 * @return string
	 */
	public function getSellerRating()
	{
		return $this->SellerRating;
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