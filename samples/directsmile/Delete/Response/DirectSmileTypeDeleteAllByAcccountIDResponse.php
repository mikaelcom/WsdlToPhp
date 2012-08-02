<?php
/**
 * Class file for DirectSmileTypeDeleteAllByAcccountIDResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeDeleteAllByAcccountIDResponse
 * @date 02/08/2012
 */
class DirectSmileTypeDeleteAllByAcccountIDResponse extends DirectSmileWsdlClass
{
	/**
	 * The DeleteAllByAcccountIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeleteAllByAcccountIDResult;
	/**
	 * Constructor
	 * @param string DeleteAllByAcccountIDResult
	 * @return DirectSmileTypeDeleteAllByAcccountIDResponse
	 */
	public function __construct($_DeleteAllByAcccountIDResult = null)
	{
		parent::__construct(array('DeleteAllByAcccountIDResult'=>$_DeleteAllByAcccountIDResult));
	}
	/**
	 * Set DeleteAllByAcccountIDResult
	 * @param string DeleteAllByAcccountIDResult
	 * @return string
	 */
	public function setDeleteAllByAcccountIDResult($_DeleteAllByAcccountIDResult)
	{
		return ($this->DeleteAllByAcccountIDResult = $_DeleteAllByAcccountIDResult);
	}
	/**
	 * Get DeleteAllByAcccountIDResult
	 * @return string
	 */
	public function getDeleteAllByAcccountIDResult()
	{
		return $this->DeleteAllByAcccountIDResult;
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