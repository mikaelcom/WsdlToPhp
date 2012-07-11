<?php
/**
 * Class file for EbayTradingTypeMemberMessageExchangeArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMemberMessageExchangeArrayType
 * Documentation : Container for messages. Returned for GetMemberMessages if messages that meet the request criteria exist.
 * @date 04/07/2012
 */
class EbayTradingTypeMemberMessageExchangeArrayType extends EbayTradingWsdlClass
{
	/**
	 * The MemberMessageExchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about individual messages. Returned if the parent container is returned.
	 * @var EbayTradingTypeMemberMessageExchangeType
	 */
	public $MemberMessageExchange;
	/**
	 * Constructor
	 * @param EbayTradingTypeMemberMessageExchangeType MemberMessageExchange
	 * @return EbayTradingTypeMemberMessageExchangeArrayType
	 */
	public function __construct($_MemberMessageExchange = null)
	{
		parent::__construct(array('MemberMessageExchange'=>$_MemberMessageExchange));
	}
	/**
	 * Set MemberMessageExchange
	 * @param MemberMessageExchangeType MemberMessageExchange
	 * @return MemberMessageExchangeType
	 */
	public function setMemberMessageExchange($_MemberMessageExchange)
	{
		return ($this->MemberMessageExchange = $_MemberMessageExchange);
	}
	/**
	 * Get MemberMessageExchange
	 * @return EbayTradingTypeMemberMessageExchangeType
	 */
	public function getMemberMessageExchange()
	{
		return $this->MemberMessageExchange;
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