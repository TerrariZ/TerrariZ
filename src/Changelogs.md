Changelog of TerrariZ

3/06/24 early development
> Api changes to Event manager, cancelJoin(); Now has a new code layout so now to call this you have to do the following
public function example(PlayerJoinEvent $event, EventManager $manager, string $str, array $args): bool {
$player = $event->getPlayer()->getName();
$event->cancelJoin($player , "Server is Currently in Development"); //this will kick all players who aim to join, it is mandatory to have playername first, then reason, then if you want to apply a ban you need to add the time as an array (s,m,h,d,w,mm,y,p) seconds, minutes, hour, day, weeks, mmonths, year, permanent

}