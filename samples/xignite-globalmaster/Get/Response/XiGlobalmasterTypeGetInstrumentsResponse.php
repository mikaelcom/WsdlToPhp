<?php
/**
 * Class file for XiGlobalmasterTypeGetInstrumentsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetInstrumentsResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetInstrumentsResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetInstrumentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfInstrument
	 */
	public $GetInstrumentsResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfInstrument GetInstrumentsResult
	 * @return XiGlobalmasterTypeGetInstrumentsResponse
	 */
	public function __construct($_GetInstrumentsResult = null)
	{
		parent::__construct(array('GetInstrumentsResult'=>new XiGlobalmasterTypeArrayOfInstrument($_GetInstrumentsResult)));
	}
	/**
	 * Set GetInstrumentsResult
	 * @param ArrayOfInstrument GetInstrumentsResult
	 * @return ArrayOfInstrument
	 */
	public function setGetInstrumentsResult($_GetInstrumentsResult)
	{
		return ($this->GetInstrumentsResult = $_GetInstrumentsResult);
	}
	/**
	 * Get GetInstrumentsResult
	 * @return XiGlobalmasterTypeArrayOfInstrument
	 */
	public function getGetInstrumentsResult()
	{
		return $this->GetInstrumentsResult;
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