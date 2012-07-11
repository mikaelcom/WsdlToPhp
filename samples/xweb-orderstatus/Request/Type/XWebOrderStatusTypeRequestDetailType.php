<?php
/**
 * Class file for XWebOrderStatusTypeRequestDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeRequestDetailType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeRequestDetailType extends XWebOrderStatusWsdlClass
{
	/**
	 * The PurposeCode
	 * @var PurposeCode
	 */
	public $PurposeCode;
	/**
	 * The EDIInd
	 * @var EDIInd
	 */
	public $EDIInd;
	/**
	 * The NonEDIInd
	 * @var NonEDIInd
	 */
	public $NonEDIInd;
	/**
	 * The RefInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeRequestRefInfoType
	 */
	public $RefInfo;
	/**
	 * The DateInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebOrderStatusTypeRequestDateInfoType
	 */
	public $DateInfo;
	/**
	 * Constructor
	 * @param PurposeCode PurposeCode
	 * @param EDIInd EDIInd
	 * @param NonEDIInd NonEDIInd
	 * @param XWebOrderStatusTypeRequestRefInfoType RefInfo
	 * @param XWebOrderStatusTypeRequestDateInfoType DateInfo
	 * @return XWebOrderStatusTypeRequestDetailType
	 */
	public function __construct($_PurposeCode = null,$_EDIInd = null,$_NonEDIInd = null,$_RefInfo,$_DateInfo = null)
	{
		parent::__construct(array('PurposeCode'=>$_PurposeCode,'EDIInd'=>$_EDIInd,'NonEDIInd'=>$_NonEDIInd,'RefInfo'=>$_RefInfo,'DateInfo'=>$_DateInfo));
	}
	/**
	 * Set PurposeCode
	 * @param PurposeCode PurposeCode
	 * @return PurposeCode
	 */
	public function setPurposeCode($_PurposeCode)
	{
		return ($this->PurposeCode = $_PurposeCode);
	}
	/**
	 * Get PurposeCode
	 * @return PurposeCode
	 */
	public function getPurposeCode()
	{
		return $this->PurposeCode;
	}
	/**
	 * Set EDIInd
	 * @param EDIInd EDIInd
	 * @return EDIInd
	 */
	public function setEDIInd($_EDIInd)
	{
		return ($this->EDIInd = $_EDIInd);
	}
	/**
	 * Get EDIInd
	 * @return EDIInd
	 */
	public function getEDIInd()
	{
		return $this->EDIInd;
	}
	/**
	 * Set NonEDIInd
	 * @param NonEDIInd NonEDIInd
	 * @return NonEDIInd
	 */
	public function setNonEDIInd($_NonEDIInd)
	{
		return ($this->NonEDIInd = $_NonEDIInd);
	}
	/**
	 * Get NonEDIInd
	 * @return NonEDIInd
	 */
	public function getNonEDIInd()
	{
		return $this->NonEDIInd;
	}
	/**
	 * Set RefInfo
	 * @param RequestRefInfoType RefInfo
	 * @return RequestRefInfoType
	 */
	public function setRefInfo($_RefInfo)
	{
		return ($this->RefInfo = $_RefInfo);
	}
	/**
	 * Get RefInfo
	 * @return XWebOrderStatusTypeRequestRefInfoType
	 */
	public function getRefInfo()
	{
		return $this->RefInfo;
	}
	/**
	 * Set DateInfo
	 * @param RequestDateInfoType DateInfo
	 * @return RequestDateInfoType
	 */
	public function setDateInfo($_DateInfo)
	{
		return ($this->DateInfo = $_DateInfo);
	}
	/**
	 * Get DateInfo
	 * @return XWebOrderStatusTypeRequestDateInfoType
	 */
	public function getDateInfo()
	{
		return $this->DateInfo;
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