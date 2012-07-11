<?php
/**
 * Class file for XiHoldingsTypeGetHoldersChangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHoldersChangesResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHoldersChangesResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetHoldersChangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeArrayOfHolderChange
	 */
	public $GetHoldersChangesResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeArrayOfHolderChange GetHoldersChangesResult
	 * @return XiHoldingsTypeGetHoldersChangesResponse
	 */
	public function __construct($_GetHoldersChangesResult = null)
	{
		parent::__construct(array('GetHoldersChangesResult'=>new XiHoldingsTypeArrayOfHolderChange($_GetHoldersChangesResult)));
	}
	/**
	 * Set GetHoldersChangesResult
	 * @param ArrayOfHolderChange GetHoldersChangesResult
	 * @return ArrayOfHolderChange
	 */
	public function setGetHoldersChangesResult($_GetHoldersChangesResult)
	{
		return ($this->GetHoldersChangesResult = $_GetHoldersChangesResult);
	}
	/**
	 * Get GetHoldersChangesResult
	 * @return XiHoldingsTypeArrayOfHolderChange
	 */
	public function getGetHoldersChangesResult()
	{
		return $this->GetHoldersChangesResult;
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