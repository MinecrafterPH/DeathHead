<?php
//by: SavionLegendZzz and ItzBulkDev
namespace DeathHead;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\PlayerDeathEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase{

public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
// maybe we dont need this?$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array());
$this->getServer()->getLogger()->info(TextFormat::BLUE."DeathHead Enabled");
$this->api = EconomyAPI::getInstance();
}

public function onDeath(PlayerDeathEvent $event){
  $cause = $event->getEntity()->getLastDamageCause();
  $item = $event->getItem("91")
        if($cause instanceof EntityDamageByEntityEvent) {
            $player = $event->getEntity()
            $killer = $event->getEntity()->getLastDamageCause()->getDamager();
            if($killer instanceof Player) {
                    $killer->sendMessage($message);
                    $killer->getInventory()->addItem($item);
                    $damager->sendMessage("You killed $player.\nYou earn $" . $config->get("paid-amount") . for getting a kill.");
			$player->sendMessage("You were killed by $damager.\nYou lose $" . $config->get("paid-amount") . " for getting killed.");
			$this->api->setMoney($damager, $config->get("paid-amount");
			$this->api->reduceMoney($player, $config->get("paid-amount");
                }
}
public function onTouch(PlayerInteractEvent $event){
            $player = $event->getPlayer()->getName();
            $item = $event->getItem()->getName();
            $config = $this->getConfig();
	    if($item == "91") {
	        $id = 91;
                $damage = 0;
                $count = 1;
                $item =  Item::get($id, $damage, $count);
                $player->getInventory()->addItem($item);
                $player->sendMessage("You can sell this for" . $config->get("paid-amount") . "!");
         }
     }
