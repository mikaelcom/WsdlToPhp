<?php
/**
 * Class file for AmazonSimpleDBTypeDomainMetadataResult
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeDomainMetadataResult
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeDomainMetadataResult extends AmazonSimpleDBWsdlClass
{
	/**
	 * The ItemCount
	 * @var string
	 */
	public $ItemCount;
	/**
	 * The ItemNamesSizeBytes
	 * @var string
	 */
	public $ItemNamesSizeBytes;
	/**
	 * The AttributeNameCount
	 * @var string
	 */
	public $AttributeNameCount;
	/**
	 * The AttributeNamesSizeBytes
	 * @var string
	 */
	public $AttributeNamesSizeBytes;
	/**
	 * The AttributeValueCount
	 * @var string
	 */
	public $AttributeValueCount;
	/**
	 * The AttributeValuesSizeBytes
	 * @var string
	 */
	public $AttributeValuesSizeBytes;
	/**
	 * The Timestamp
	 * @var string
	 */
	public $Timestamp;
	/**
	 * Constructor
	 * @param string ItemCount
	 * @param string ItemNamesSizeBytes
	 * @param string AttributeNameCount
	 * @param string AttributeNamesSizeBytes
	 * @param string AttributeValueCount
	 * @param string AttributeValuesSizeBytes
	 * @param string Timestamp
	 * @return AmazonSimpleDBTypeDomainMetadataResult
	 */
	public function __construct($_ItemCount = null,$_ItemNamesSizeBytes = null,$_AttributeNameCount = null,$_AttributeNamesSizeBytes = null,$_AttributeValueCount = null,$_AttributeValuesSizeBytes = null,$_Timestamp = null)
	{
		parent::__construct(array('ItemCount'=>$_ItemCount,'ItemNamesSizeBytes'=>$_ItemNamesSizeBytes,'AttributeNameCount'=>$_AttributeNameCount,'AttributeNamesSizeBytes'=>$_AttributeNamesSizeBytes,'AttributeValueCount'=>$_AttributeValueCount,'AttributeValuesSizeBytes'=>$_AttributeValuesSizeBytes,'Timestamp'=>$_Timestamp));
	}
	/**
	 * Set ItemCount
	 * @param string ItemCount
	 * @return string
	 */
	public function setItemCount($_ItemCount)
	{
		return ($this->ItemCount = $_ItemCount);
	}
	/**
	 * Get ItemCount
	 * @return string
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * Set ItemNamesSizeBytes
	 * @param string ItemNamesSizeBytes
	 * @return string
	 */
	public function setItemNamesSizeBytes($_ItemNamesSizeBytes)
	{
		return ($this->ItemNamesSizeBytes = $_ItemNamesSizeBytes);
	}
	/**
	 * Get ItemNamesSizeBytes
	 * @return string
	 */
	public function getItemNamesSizeBytes()
	{
		return $this->ItemNamesSizeBytes;
	}
	/**
	 * Set AttributeNameCount
	 * @param string AttributeNameCount
	 * @return string
	 */
	public function setAttributeNameCount($_AttributeNameCount)
	{
		return ($this->AttributeNameCount = $_AttributeNameCount);
	}
	/**
	 * Get AttributeNameCount
	 * @return string
	 */
	public function getAttributeNameCount()
	{
		return $this->AttributeNameCount;
	}
	/**
	 * Set AttributeNamesSizeBytes
	 * @param string AttributeNamesSizeBytes
	 * @return string
	 */
	public function setAttributeNamesSizeBytes($_AttributeNamesSizeBytes)
	{
		return ($this->AttributeNamesSizeBytes = $_AttributeNamesSizeBytes);
	}
	/**
	 * Get AttributeNamesSizeBytes
	 * @return string
	 */
	public function getAttributeNamesSizeBytes()
	{
		return $this->AttributeNamesSizeBytes;
	}
	/**
	 * Set AttributeValueCount
	 * @param string AttributeValueCount
	 * @return string
	 */
	public function setAttributeValueCount($_AttributeValueCount)
	{
		return ($this->AttributeValueCount = $_AttributeValueCount);
	}
	/**
	 * Get AttributeValueCount
	 * @return string
	 */
	public function getAttributeValueCount()
	{
		return $this->AttributeValueCount;
	}
	/**
	 * Set AttributeValuesSizeBytes
	 * @param string AttributeValuesSizeBytes
	 * @return string
	 */
	public function setAttributeValuesSizeBytes($_AttributeValuesSizeBytes)
	{
		return ($this->AttributeValuesSizeBytes = $_AttributeValuesSizeBytes);
	}
	/**
	 * Get AttributeValuesSizeBytes
	 * @return string
	 */
	public function getAttributeValuesSizeBytes()
	{
		return $this->AttributeValuesSizeBytes;
	}
	/**
	 * Set Timestamp
	 * @param string Timestamp
	 * @return string
	 */
	public function setTimestamp($_Timestamp)
	{
		return ($this->Timestamp = $_Timestamp);
	}
	/**
	 * Get Timestamp
	 * @return string
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
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