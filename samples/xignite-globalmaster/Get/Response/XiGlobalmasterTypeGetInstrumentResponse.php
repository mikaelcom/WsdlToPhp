<?php
/**
 * Class file for XiGlobalmasterTypeGetInstrumentResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetInstrumentResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetInstrumentResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetInstrumentResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfInstrument
	 */
	public $GetInstrumentResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfInstrument GetInstrumentResult
	 * @return XiGlobalmasterTypeGetInstrumentResponse
	 */
	public function __construct($_GetInstrumentResult = null)
	{
		parent::__construct(array('GetInstrumentResult'=>new XiGlobalmasterTypeArrayOfInstrument($_GetInstrumentResult)));
	}
	/**
	 * Set GetInstrumentResult
	 * @param ArrayOfInstrument GetInstrumentResult
	 * @return ArrayOfInstrument
	 */
	public function setGetInstrumentResult($_GetInstrumentResult)
	{
		return ($this->GetInstrumentResult = $_GetInstrumentResult);
	}
	/**
	 * Get GetInstrumentResult
	 * @return XiGlobalmasterTypeArrayOfInstrument
	 */
	public function getGetInstrumentResult()
	{
		return $this->GetInstrumentResult;
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