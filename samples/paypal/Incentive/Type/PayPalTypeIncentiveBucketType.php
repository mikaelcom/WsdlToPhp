<?php
/**
 * Class file for PayPalTypeIncentiveBucketType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveBucketType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveBucketType extends PayPalWsdlClass
{
	/**
	 * The Items
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeIncentiveItemType
	 */
	public $Items;
	/**
	 * The BucketId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $BucketId;
	/**
	 * The SellerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SellerId;
	/**
	 * The ExternalSellerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExternalSellerId;
	/**
	 * The BucketSubtotalAmt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $BucketSubtotalAmt;
	/**
	 * The BucketShippingAmt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $BucketShippingAmt;
	/**
	 * The BucketInsuranceAmt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $BucketInsuranceAmt;
	/**
	 * The BucketSalesTaxAmt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $BucketSalesTaxAmt;
	/**
	 * The BucketTotalAmt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $BucketTotalAmt;
	/**
	 * Constructor
	 * @param PayPalTypeIncentiveItemType Items
	 * @param string BucketId
	 * @param string SellerId
	 * @param string ExternalSellerId
	 * @param PayPalTypeBasicAmountType BucketSubtotalAmt
	 * @param PayPalTypeBasicAmountType BucketShippingAmt
	 * @param PayPalTypeBasicAmountType BucketInsuranceAmt
	 * @param PayPalTypeBasicAmountType BucketSalesTaxAmt
	 * @param PayPalTypeBasicAmountType BucketTotalAmt
	 * @return PayPalTypeIncentiveBucketType
	 */
	public function __construct($_Items = null,$_BucketId = null,$_SellerId = null,$_ExternalSellerId = null,$_BucketSubtotalAmt = null,$_BucketShippingAmt = null,$_BucketInsuranceAmt = null,$_BucketSalesTaxAmt = null,$_BucketTotalAmt = null)
	{
		parent::__construct(array('Items'=>$_Items,'BucketId'=>$_BucketId,'SellerId'=>$_SellerId,'ExternalSellerId'=>$_ExternalSellerId,'BucketSubtotalAmt'=>$_BucketSubtotalAmt,'BucketShippingAmt'=>$_BucketShippingAmt,'BucketInsuranceAmt'=>$_BucketInsuranceAmt,'BucketSalesTaxAmt'=>$_BucketSalesTaxAmt,'BucketTotalAmt'=>$_BucketTotalAmt));
	}
	/**
	 * Set Items
	 * @param IncentiveItemType Items
	 * @return IncentiveItemType
	 */
	public function setItems($_Items)
	{
		return ($this->Items = $_Items);
	}
	/**
	 * Get Items
	 * @return PayPalTypeIncentiveItemType
	 */
	public function getItems()
	{
		return $this->Items;
	}
	/**
	 * Set BucketId
	 * @param string BucketId
	 * @return string
	 */
	public function setBucketId($_BucketId)
	{
		return ($this->BucketId = $_BucketId);
	}
	/**
	 * Get BucketId
	 * @return string
	 */
	public function getBucketId()
	{
		return $this->BucketId;
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
	 * Set ExternalSellerId
	 * @param string ExternalSellerId
	 * @return string
	 */
	public function setExternalSellerId($_ExternalSellerId)
	{
		return ($this->ExternalSellerId = $_ExternalSellerId);
	}
	/**
	 * Get ExternalSellerId
	 * @return string
	 */
	public function getExternalSellerId()
	{
		return $this->ExternalSellerId;
	}
	/**
	 * Set BucketSubtotalAmt
	 * @param BasicAmountType BucketSubtotalAmt
	 * @return BasicAmountType
	 */
	public function setBucketSubtotalAmt($_BucketSubtotalAmt)
	{
		return ($this->BucketSubtotalAmt = $_BucketSubtotalAmt);
	}
	/**
	 * Get BucketSubtotalAmt
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBucketSubtotalAmt()
	{
		return $this->BucketSubtotalAmt;
	}
	/**
	 * Set BucketShippingAmt
	 * @param BasicAmountType BucketShippingAmt
	 * @return BasicAmountType
	 */
	public function setBucketShippingAmt($_BucketShippingAmt)
	{
		return ($this->BucketShippingAmt = $_BucketShippingAmt);
	}
	/**
	 * Get BucketShippingAmt
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBucketShippingAmt()
	{
		return $this->BucketShippingAmt;
	}
	/**
	 * Set BucketInsuranceAmt
	 * @param BasicAmountType BucketInsuranceAmt
	 * @return BasicAmountType
	 */
	public function setBucketInsuranceAmt($_BucketInsuranceAmt)
	{
		return ($this->BucketInsuranceAmt = $_BucketInsuranceAmt);
	}
	/**
	 * Get BucketInsuranceAmt
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBucketInsuranceAmt()
	{
		return $this->BucketInsuranceAmt;
	}
	/**
	 * Set BucketSalesTaxAmt
	 * @param BasicAmountType BucketSalesTaxAmt
	 * @return BasicAmountType
	 */
	public function setBucketSalesTaxAmt($_BucketSalesTaxAmt)
	{
		return ($this->BucketSalesTaxAmt = $_BucketSalesTaxAmt);
	}
	/**
	 * Get BucketSalesTaxAmt
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBucketSalesTaxAmt()
	{
		return $this->BucketSalesTaxAmt;
	}
	/**
	 * Set BucketTotalAmt
	 * @param BasicAmountType BucketTotalAmt
	 * @return BasicAmountType
	 */
	public function setBucketTotalAmt($_BucketTotalAmt)
	{
		return ($this->BucketTotalAmt = $_BucketTotalAmt);
	}
	/**
	 * Get BucketTotalAmt
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBucketTotalAmt()
	{
		return $this->BucketTotalAmt;
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