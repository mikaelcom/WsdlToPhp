<?php
/**
 * Class file for XWebPriceAvailabilityTypeResponseErrorInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeResponseErrorInfoType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeResponseErrorInfoType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The RefIDQual3
	 * Meta informations :
	 * 	- nillable : true
	 * @var XWebPriceAvailabilityTypeRefIDQual3Type
	 */
	public $RefIDQual3;
	/**
	 * The RefID3
	 * @var RefID3
	 */
	public $RefID3;
	/**
	 * The ErrorDesc
	 * @var ErrorDesc
	 */
	public $ErrorDesc;
	/**
	 * Constructor
	 * @param XWebPriceAvailabilityTypeRefIDQual3Type RefIDQual3
	 * @param RefID3 RefID3
	 * @param ErrorDesc ErrorDesc
	 * @return XWebPriceAvailabilityTypeResponseErrorInfoType
	 */
	public function __construct($_RefIDQual3 = null,$_RefID3 = null,$_ErrorDesc = null)
	{
		parent::__construct(array('RefIDQual3'=>$_RefIDQual3,'RefID3'=>$_RefID3,'ErrorDesc'=>$_ErrorDesc));
	}
	/**
	 * Set RefIDQual3
	 * @param RefIDQual3Type RefIDQual3
	 * @return RefIDQual3Type
	 */
	public function setRefIDQual3($_RefIDQual3)
	{
		return ($this->RefIDQual3 = XWebPriceAvailabilityTypeRefIDQual3Type::valueIsValid($_RefIDQual3)?$_RefIDQual3:null);
	}
	/**
	 * Get RefIDQual3
	 * @return XWebPriceAvailabilityTypeRefIDQual3Type
	 */
	public function getRefIDQual3()
	{
		return $this->RefIDQual3;
	}
	/**
	 * Set RefID3
	 * @param RefID3 RefID3
	 * @return RefID3
	 */
	public function setRefID3($_RefID3)
	{
		return ($this->RefID3 = $_RefID3);
	}
	/**
	 * Get RefID3
	 * @return RefID3
	 */
	public function getRefID3()
	{
		return $this->RefID3;
	}
	/**
	 * Set ErrorDesc
	 * @param ErrorDesc ErrorDesc
	 * @return ErrorDesc
	 */
	public function setErrorDesc($_ErrorDesc)
	{
		return ($this->ErrorDesc = $_ErrorDesc);
	}
	/**
	 * Get ErrorDesc
	 * @return ErrorDesc
	 */
	public function getErrorDesc()
	{
		return $this->ErrorDesc;
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