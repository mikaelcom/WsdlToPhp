<?php
/**
 * Class file for CdyneEmailTypeVerifyMXRecordResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailTypeVerifyMXRecordResponse
 * @date 02/07/2012
 */
class CdyneEmailTypeVerifyMXRecordResponse extends CdyneEmailWsdlClass
{
	/**
	 * The VerifyMXRecordResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $VerifyMXRecordResult;
	/**
	 * Constructor
	 * @param int VerifyMXRecordResult
	 * @return CdyneEmailTypeVerifyMXRecordResponse
	 */
	public function __construct($_VerifyMXRecordResult)
	{
		parent::__construct(array('VerifyMXRecordResult'=>$_VerifyMXRecordResult));
	}
	/**
	 * Set VerifyMXRecordResult
	 * @param int VerifyMXRecordResult
	 * @return int
	 */
	public function setVerifyMXRecordResult($_VerifyMXRecordResult)
	{
		return ($this->VerifyMXRecordResult = $_VerifyMXRecordResult);
	}
	/**
	 * Get VerifyMXRecordResult
	 * @return int
	 */
	public function getVerifyMXRecordResult()
	{
		return $this->VerifyMXRecordResult;
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