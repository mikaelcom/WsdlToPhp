<?php
/**
 * Class file for XWebPriceListTypeResponseAvailabilityInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeResponseAvailabilityInfoType
 * @date 09/07/2012
 */
class XWebPriceListTypeResponseAvailabilityInfoType extends XWebPriceListWsdlClass
{
	/**
	 * The WhseInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceListTypeResponseWhseInfoType
	 */
	public $WhseInfo;
	/**
	 * Constructor
	 * @param XWebPriceListTypeResponseWhseInfoType WhseInfo
	 * @return XWebPriceListTypeResponseAvailabilityInfoType
	 */
	public function __construct($_WhseInfo)
	{
		parent::__construct(array('WhseInfo'=>$_WhseInfo));
	}
	/**
	 * Set WhseInfo
	 * @param ResponseWhseInfoType WhseInfo
	 * @return ResponseWhseInfoType
	 */
	public function setWhseInfo($_WhseInfo)
	{
		return ($this->WhseInfo = $_WhseInfo);
	}
	/**
	 * Get WhseInfo
	 * @return XWebPriceListTypeResponseWhseInfoType
	 */
	public function getWhseInfo()
	{
		return $this->WhseInfo;
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