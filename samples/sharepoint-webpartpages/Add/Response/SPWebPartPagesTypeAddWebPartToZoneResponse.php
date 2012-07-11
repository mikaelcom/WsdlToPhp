<?php
/**
 * Class file for SPWebPartPagesTypeAddWebPartToZoneResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeAddWebPartToZoneResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeAddWebPartToZoneResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The AddWebPartToZoneResult
	 * @var guid
	 */
	public $AddWebPartToZoneResult;
	/**
	 * Constructor
	 * @param guid AddWebPartToZoneResult
	 * @return SPWebPartPagesTypeAddWebPartToZoneResponse
	 */
	public function __construct($_AddWebPartToZoneResult = null)
	{
		parent::__construct(array('AddWebPartToZoneResult'=>$_AddWebPartToZoneResult));
	}
	/**
	 * Set AddWebPartToZoneResult
	 * @param guid AddWebPartToZoneResult
	 * @return guid
	 */
	public function setAddWebPartToZoneResult($_AddWebPartToZoneResult)
	{
		return ($this->AddWebPartToZoneResult = $_AddWebPartToZoneResult);
	}
	/**
	 * Get AddWebPartToZoneResult
	 * @return guid
	 */
	public function getAddWebPartToZoneResult()
	{
		return $this->AddWebPartToZoneResult;
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