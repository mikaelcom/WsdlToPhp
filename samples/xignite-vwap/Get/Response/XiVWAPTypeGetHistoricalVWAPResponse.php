<?php
/**
 * Class file for XiVWAPTypeGetHistoricalVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetHistoricalVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetHistoricalVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetHistoricalVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeHistoricalVWAPs
	 */
	public $GetHistoricalVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeHistoricalVWAPs GetHistoricalVWAPResult
	 * @return XiVWAPTypeGetHistoricalVWAPResponse
	 */
	public function __construct($_GetHistoricalVWAPResult = null)
	{
		parent::__construct(array('GetHistoricalVWAPResult'=>$_GetHistoricalVWAPResult));
	}
	/**
	 * Set GetHistoricalVWAPResult
	 * @param HistoricalVWAPs GetHistoricalVWAPResult
	 * @return HistoricalVWAPs
	 */
	public function setGetHistoricalVWAPResult($_GetHistoricalVWAPResult)
	{
		return ($this->GetHistoricalVWAPResult = $_GetHistoricalVWAPResult);
	}
	/**
	 * Get GetHistoricalVWAPResult
	 * @return XiVWAPTypeHistoricalVWAPs
	 */
	public function getGetHistoricalVWAPResult()
	{
		return $this->GetHistoricalVWAPResult;
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