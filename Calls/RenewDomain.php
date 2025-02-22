<?php
namespace ModulesGarden\DomainsReseller\Registrar\WakuSell\Calls;
use ModulesGarden\DomainsReseller\Registrar\WakuSell\Core\Call;

/**
 * Description of RenewDomain
 *
 * @author inbs
 */
class RenewDomain extends Call
{
    public $action = "order/domains/renew";
    
    public $type = parent::TYPE_POST;
}