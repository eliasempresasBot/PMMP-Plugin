<?php

declare(strict_types=1);

namespace ELIASEMPRESAS;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class BroadcastTask extends Task{

	public function __construct(private Server $server){ }

	public function onRun() : void{
		$this->server->broadcastMessage("[ELIASEMPRESAS] I've run on tick " . $this->server->getTick());
	}
}
