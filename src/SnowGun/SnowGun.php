<?php

namespace SnowGun;

use pocketmine\plugin\PluginBase;
use pocketmine\block\Air;
use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\network\protocol\UseItemPacket;
use pocketmine\Player;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\Double;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\item\Item;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\ProjectileLaunchEvent;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\entity\Snowball;
use pocketmine\event\entity\EntityDespawnEvent;
use pocketmine\scheduler\CallbackTask;
use pocketmine\event\entity\EntityDeathEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\Server;
use pocketmine\entity\Living;

class SnowGun extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
	}
		public function onDamage(EntityDamageEvent $event){
		$player = $event->getEntity();
		$entity = $event->getEntity();
        if($player instanceof Player && $event->getCause() === EntityDamageEvent::CAUSE_PROJECTILE){
                $event->setDamage(3);
        }
	}
}
?>
