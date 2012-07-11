<?php
/**
 * Class file for EbayTradingTypeTopRatedSellerDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTopRatedSellerDetailsType
 * Documentation : Container for top-rated seller program information.
 * @date 04/07/2012
 */
class EbayTradingTypeTopRatedSellerDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The TopRatedProgram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Top-rated seller program details for the seller. Returned when the seller is qualified as a top-rated seller.
	 * @var EbayTradingTypeTopRatedProgramCodeType
	 */
	public $TopRatedProgram;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeTopRatedProgramCodeType TopRatedProgram
	 * @param DOMDocument any
	 * @return EbayTradingTypeTopRatedSellerDetailsType
	 */
	public function __construct($_TopRatedProgram = null,$_any = null)
	{
		parent::__construct(array('TopRatedProgram'=>$_TopRatedProgram,'any'=>$_any));
	}
	/**
	 * Set TopRatedProgram
	 * @param TopRatedProgramCodeType TopRatedProgram
	 * @return TopRatedProgramCodeType
	 */
	public function setTopRatedProgram($_TopRatedProgram)
	{
		return ($this->TopRatedProgram = EbayTradingTypeTopRatedProgramCodeType::valueIsValid($_TopRatedProgram)?$_TopRatedProgram:null);
	}
	/**
	 * Get TopRatedProgram
	 * @return EbayTradingTypeTopRatedProgramCodeType
	 */
	public function getTopRatedProgram()
	{
		return $this->TopRatedProgram;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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