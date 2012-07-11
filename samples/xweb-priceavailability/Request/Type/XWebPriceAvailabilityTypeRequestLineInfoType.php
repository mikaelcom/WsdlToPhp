<?php
/**
 * Class file for XWebPriceAvailabilityTypeRequestLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeRequestLineInfoType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeRequestLineInfoType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The OrderLevel
	 * @var OrderLevel
	 */
	public $OrderLevel;
	/**
	 * The RefIDQual
	 * @var XWebPriceAvailabilityTypeRefIDQualType
	 */
	public $RefIDQual;
	/**
	 * The RefID
	 * @var RefID
	 */
	public $RefID;
	/**
	 * The PromoAcceptInd
	 * @var PromoAcceptInd
	 */
	public $PromoAcceptInd;
	/**
	 * The PromoAppliedShowInd
	 * @var PromoAppliedShowInd
	 */
	public $PromoAppliedShowInd;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param OrderLevel OrderLevel
	 * @param XWebPriceAvailabilityTypeRefIDQualType RefIDQual
	 * @param RefID RefID
	 * @param PromoAcceptInd PromoAcceptInd
	 * @param PromoAppliedShowInd PromoAppliedShowInd
	 * @return XWebPriceAvailabilityTypeRequestLineInfoType
	 */
	public function __construct($_AssignedID = null,$_OrderLevel = null,$_RefIDQual = null,$_RefID = null,$_PromoAcceptInd = null,$_PromoAppliedShowInd = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'OrderLevel'=>$_OrderLevel,'RefIDQual'=>$_RefIDQual,'RefID'=>$_RefID,'PromoAcceptInd'=>$_PromoAcceptInd,'PromoAppliedShowInd'=>$_PromoAppliedShowInd));
	}
	/**
	 * Set AssignedID
	 * @param AssignedID AssignedID
	 * @return AssignedID
	 */
	public function setAssignedID($_AssignedID)
	{
		return ($this->AssignedID = $_AssignedID);
	}
	/**
	 * Get AssignedID
	 * @return AssignedID
	 */
	public function getAssignedID()
	{
		return $this->AssignedID;
	}
	/**
	 * Set OrderLevel
	 * @param OrderLevel OrderLevel
	 * @return OrderLevel
	 */
	public function setOrderLevel($_OrderLevel)
	{
		return ($this->OrderLevel = $_OrderLevel);
	}
	/**
	 * Get OrderLevel
	 * @return OrderLevel
	 */
	public function getOrderLevel()
	{
		return $this->OrderLevel;
	}
	/**
	 * Set RefIDQual
	 * @param RefIDQualType RefIDQual
	 * @return RefIDQualType
	 */
	public function setRefIDQual($_RefIDQual)
	{
		return ($this->RefIDQual = XWebPriceAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual)?$_RefIDQual:null);
	}
	/**
	 * Get RefIDQual
	 * @return XWebPriceAvailabilityTypeRefIDQualType
	 */
	public function getRefIDQual()
	{
		return $this->RefIDQual;
	}
	/**
	 * Set RefID
	 * @param RefID RefID
	 * @return RefID
	 */
	public function setRefID($_RefID)
	{
		return ($this->RefID = $_RefID);
	}
	/**
	 * Get RefID
	 * @return RefID
	 */
	public function getRefID()
	{
		return $this->RefID;
	}
	/**
	 * Set PromoAcceptInd
	 * @param PromoAcceptInd PromoAcceptInd
	 * @return PromoAcceptInd
	 */
	public function setPromoAcceptInd($_PromoAcceptInd)
	{
		return ($this->PromoAcceptInd = $_PromoAcceptInd);
	}
	/**
	 * Get PromoAcceptInd
	 * @return PromoAcceptInd
	 */
	public function getPromoAcceptInd()
	{
		return $this->PromoAcceptInd;
	}
	/**
	 * Set PromoAppliedShowInd
	 * @param PromoAppliedShowInd PromoAppliedShowInd
	 * @return PromoAppliedShowInd
	 */
	public function setPromoAppliedShowInd($_PromoAppliedShowInd)
	{
		return ($this->PromoAppliedShowInd = $_PromoAppliedShowInd);
	}
	/**
	 * Get PromoAppliedShowInd
	 * @return PromoAppliedShowInd
	 */
	public function getPromoAppliedShowInd()
	{
		return $this->PromoAppliedShowInd;
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