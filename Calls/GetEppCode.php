<?php
namespace ModulesGarden\DomainsReseller\Registrar\WakuSell\Calls;
use ModulesGarden\DomainsReseller\Registrar\WakuSell\Core\Call;

/**
 * Description of GetEppCode
 *
 * @author inbs
 */
class GetEppCode extends Call
{
    public $action = "domains/:domain/eppcode";
    
    public $type = parent::TYPE_GET;
}