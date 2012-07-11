<?php
/**
 * Class file for AmazonECommerceServiceTypeSearchBinSet
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSearchBinSet
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSearchBinSet extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Bin
	 * @var AmazonECommerceServiceTypeBin
	 */
	public $Bin;
	/**
	 * The NarrowBy
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $NarrowBy;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeBin Bin
	 * @param string NarrowBy
	 * @return AmazonECommerceServiceTypeSearchBinSet
	 */
	public function __construct($_Bin = null,$_NarrowBy = null)
	{
		parent::__construct(array('Bin'=>$_Bin,'NarrowBy'=>$_NarrowBy));
	}
	/**
	 * Set Bin
	 * @param Bin Bin
	 * @return Bin
	 */
	public function setBin($_Bin)
	{
		return ($this->Bin = $_Bin);
	}
	/**
	 * Get Bin
	 * @return AmazonECommerceServiceTypeBin
	 */
	public function getBin()
	{
		return $this->Bin;
	}
	/**
	 * Set NarrowBy
	 * @param string NarrowBy
	 * @return string
	 */
	public function setNarrowBy($_NarrowBy)
	{
		return ($this->NarrowBy = $_NarrowBy);
	}
	/**
	 * Get NarrowBy
	 * @return string
	 */
	public function getNarrowBy()
	{
		return $this->NarrowBy;
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