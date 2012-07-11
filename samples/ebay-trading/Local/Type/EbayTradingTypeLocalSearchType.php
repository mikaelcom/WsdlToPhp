<?php
/**
 * Class file for EbayTradingTypeLocalSearchType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLocalSearchType
 * Documentation : Contains data for filtering a search by proximity.
 * @date 04/07/2012
 */
class EbayTradingTypeLocalSearchType extends EbayTradingWsdlClass
{
	/**
	 * The MaxDistance
	 * Meta informations :
	 * 	- documentation : The maximum distance from the specified postal code to search for items.
	 * @var int
	 */
	public $MaxDistance;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- documentation : The postal code to use as the basis for the proximity search.
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int MaxDistance
	 * @param string PostalCode
	 * @param DOMDocument any
	 * @return EbayTradingTypeLocalSearchType
	 */
	public function __construct($_MaxDistance = null,$_PostalCode = null,$_any = null)
	{
		parent::__construct(array('MaxDistance'=>$_MaxDistance,'PostalCode'=>$_PostalCode,'any'=>$_any));
	}
	/**
	 * Set MaxDistance
	 * @param int MaxDistance
	 * @return int
	 */
	public function setMaxDistance($_MaxDistance)
	{
		return ($this->MaxDistance = $_MaxDistance);
	}
	/**
	 * Get MaxDistance
	 * @return int
	 */
	public function getMaxDistance()
	{
		return $this->MaxDistance;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
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