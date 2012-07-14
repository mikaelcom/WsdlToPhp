<?php
/**
 * Class file for PayPalTypePaginationResultType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaginationResultType
 * @date 14/07/2012
 */
class PayPalTypePaginationResultType extends PayPalWsdlClass
{
	/**
	 * The TotalNumberOfPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $TotalNumberOfPages;
	/**
	 * The TotalNumberOfEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $TotalNumberOfEntries;
	/**
	 * Constructor
	 * @param int TotalNumberOfPages
	 * @param int TotalNumberOfEntries
	 * @return PayPalTypePaginationResultType
	 */
	public function __construct($_TotalNumberOfPages = null,$_TotalNumberOfEntries = null)
	{
		parent::__construct(array('TotalNumberOfPages'=>$_TotalNumberOfPages,'TotalNumberOfEntries'=>$_TotalNumberOfEntries));
	}
	/**
	 * Set TotalNumberOfPages
	 * @param int TotalNumberOfPages
	 * @return int
	 */
	public function setTotalNumberOfPages($_TotalNumberOfPages)
	{
		return ($this->TotalNumberOfPages = $_TotalNumberOfPages);
	}
	/**
	 * Get TotalNumberOfPages
	 * @return int
	 */
	public function getTotalNumberOfPages()
	{
		return $this->TotalNumberOfPages;
	}
	/**
	 * Set TotalNumberOfEntries
	 * @param int TotalNumberOfEntries
	 * @return int
	 */
	public function setTotalNumberOfEntries($_TotalNumberOfEntries)
	{
		return ($this->TotalNumberOfEntries = $_TotalNumberOfEntries);
	}
	/**
	 * Get TotalNumberOfEntries
	 * @return int
	 */
	public function getTotalNumberOfEntries()
	{
		return $this->TotalNumberOfEntries;
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