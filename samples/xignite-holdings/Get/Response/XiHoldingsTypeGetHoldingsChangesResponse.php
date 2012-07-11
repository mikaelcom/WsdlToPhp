<?php
/**
 * Class file for XiHoldingsTypeGetHoldingsChangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHoldingsChangesResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHoldingsChangesResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetHoldingsChangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeArrayOfHoldingChange
	 */
	public $GetHoldingsChangesResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeArrayOfHoldingChange GetHoldingsChangesResult
	 * @return XiHoldingsTypeGetHoldingsChangesResponse
	 */
	public function __construct($_GetHoldingsChangesResult = null)
	{
		parent::__construct(array('GetHoldingsChangesResult'=>new XiHoldingsTypeArrayOfHoldingChange($_GetHoldingsChangesResult)));
	}
	/**
	 * Set GetHoldingsChangesResult
	 * @param ArrayOfHoldingChange GetHoldingsChangesResult
	 * @return ArrayOfHoldingChange
	 */
	public function setGetHoldingsChangesResult($_GetHoldingsChangesResult)
	{
		return ($this->GetHoldingsChangesResult = $_GetHoldingsChangesResult);
	}
	/**
	 * Get GetHoldingsChangesResult
	 * @return XiHoldingsTypeArrayOfHoldingChange
	 */
	public function getGetHoldingsChangesResult()
	{
		return $this->GetHoldingsChangesResult;
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