<?php
/**
 * Class file for AmazonECommerceServiceTypeBin
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeBin
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeBin extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The BinName
	 * @var string
	 */
	public $BinName;
	/**
	 * The BinItemCount
	 * @var positiveInteger
	 */
	public $BinItemCount;
	/**
	 * The BinParameter
	 * @var AmazonECommerceServiceTypeBinParameter
	 */
	public $BinParameter;
	/**
	 * Constructor
	 * @param string BinName
	 * @param positiveInteger BinItemCount
	 * @param AmazonECommerceServiceTypeBinParameter BinParameter
	 * @return AmazonECommerceServiceTypeBin
	 */
	public function __construct($_BinName = null,$_BinItemCount = null,$_BinParameter = null)
	{
		parent::__construct(array('BinName'=>$_BinName,'BinItemCount'=>$_BinItemCount,'BinParameter'=>$_BinParameter));
	}
	/**
	 * Set BinName
	 * @param string BinName
	 * @return string
	 */
	public function setBinName($_BinName)
	{
		return ($this->BinName = $_BinName);
	}
	/**
	 * Get BinName
	 * @return string
	 */
	public function getBinName()
	{
		return $this->BinName;
	}
	/**
	 * Set BinItemCount
	 * @param positiveInteger BinItemCount
	 * @return positiveInteger
	 */
	public function setBinItemCount($_BinItemCount)
	{
		return ($this->BinItemCount = $_BinItemCount);
	}
	/**
	 * Get BinItemCount
	 * @return positiveInteger
	 */
	public function getBinItemCount()
	{
		return $this->BinItemCount;
	}
	/**
	 * Set BinParameter
	 * @param BinParameter BinParameter
	 * @return BinParameter
	 */
	public function setBinParameter($_BinParameter)
	{
		return ($this->BinParameter = $_BinParameter);
	}
	/**
	 * Get BinParameter
	 * @return AmazonECommerceServiceTypeBinParameter
	 */
	public function getBinParameter()
	{
		return $this->BinParameter;
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