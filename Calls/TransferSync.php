<?php
namespace ModulesGarden\DomainsReseller\Registrar\WakuSell\Calls;
use ModulesGarden\DomainsReseller\Registrar\WakuSell\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class TransferSync extends Call
{
    public $action = "domains/:domain/transfersync";
    
    public $type = parent::TYPE_POST;
}