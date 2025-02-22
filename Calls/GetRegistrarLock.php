<?php
namespace ModulesGarden\DomainsReseller\Registrar\WakuSell\Calls;
use ModulesGarden\DomainsReseller\Registrar\WakuSell\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class GetRegistrarLock extends Call
{
    public $action = "domains/:domain/lock";
    
    public $type = parent::TYPE_GET;
}