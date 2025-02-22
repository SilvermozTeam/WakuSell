<?php
namespace ModulesGarden\DomainsReseller\Registrar\WakuSell\Calls;
use ModulesGarden\DomainsReseller\Registrar\WakuSell\Core\Call;

/**
 * Description of SaveNameServers
 *
 * @author inbs
 */
class SaveNameServers extends Call
{
    public $action = "domains/:domain/nameservers";

    public $type = parent::TYPE_POST;
}