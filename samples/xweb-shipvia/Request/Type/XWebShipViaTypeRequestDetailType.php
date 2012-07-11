<?php
/**
 * Class file for XWebShipViaTypeRequestDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeRequestDetailType
 * @date 09/07/2012
 */
class XWebShipViaTypeRequestDetailType extends XWebShipViaWsdlClass
{
	/**
	 * The PostalCode
	 * @var PostalCode
	 */
	public $PostalCode;
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebShipViaTypeRequestLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param PostalCode PostalCode
	 * @param XWebShipViaTypeRequestLineInfoType LineInfo
	 * @return XWebShipViaTypeRequestDetailType
	 */
	public function __construct($_PostalCode = null,$_LineInfo)
	{
		parent::__construct(array('PostalCode'=>$_PostalCode,'LineInfo'=>$_LineInfo));
	}
	/**
	 * Set PostalCode
	 * @param PostalCode PostalCode
	 * @return PostalCode
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return PostalCode
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set LineInfo
	 * @param RequestLineInfoType LineInfo
	 * @return RequestLineInfoType
	 */
	public function setLineInfo($_LineInfo)
	{
		return ($this->LineInfo = $_LineInfo);
	}
	/**
	 * Get LineInfo
	 * @return XWebShipViaTypeRequestLineInfoType
	 */
	public function getLineInfo()
	{
		return $this->LineInfo;
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