<?php
	/**
	 * Invalidates all known caches which might be affected by this list's contents.
	 */
	private function invalidateAffectedCaches() : void{
		foreach($this->affectedHandlerCaches as $cache){
			$cache->list = null;
		}
	}

	/**
	 * @return RegisteredListener[]
	 * @phpstan-return list<RegisteredListener>
	 */
	public function getListenerList() : array{
		if($this->handlerCache->list !== null){
			return $this->handlerCache->list;
		}

		$handlerLists = [];
		for($currentList = $this; $currentList !== null; $currentList = $currentList->parentList){
			$handlerLists[] = $currentList;
		}

		$listenersByPriority = [];
		foreach($handlerLists as $currentList){
			foreach($currentList->handlerSlots as $priority => $listeners){
				$listenersByPriority[$priority] = array_merge($listenersByPriority[$priority] ?? [], $listeners);
			}
		}

		//TODO: why on earth do the priorities have higher values for lower priority?
		krsort($listenersByPriority, SORT_NUMERIC);

		return $this->handlerCache->list = array_merge(...$listenersByPriority);
	}
     }
