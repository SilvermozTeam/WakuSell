<?php
namespace ModulesGarden\DomainsReseller\Registrar\WakuSell\Calls;
use ModulesGarden\DomainsReseller\Registrar\WakuSell\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class Sync extends Call
{
    public $action = "domains/:domain/sync";
    
    public $type = parent::TYPE_POST;
}