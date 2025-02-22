<?php
namespace ModulesGarden\DomainsReseller\Registrar\WakuSell\Calls;
use ModulesGarden\DomainsReseller\Registrar\WakuSell\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class ModifyNameServer extends Call
{
    public $action = "domains/:domain/nameservers/modify";
    
    public $type = parent::TYPE_POST;
}