<?php



namespace JailEscapDP;

use pocketmine\scheduler\PluginTask;
use pocketmine\Server; 
use pocketmine\level\Level;
use pocketmine\math\Vector3;

class Task extends PluginTask{

	public function __construct(Main $plugin){

		parent::__construct($plugin);
		$this->plugin = $plugin;

	}



    public function onRun($currentTick){
    $this->plugin->tick();

}

}
