<?php
namespace TerrariZ\PlayerInfo;


use Ramsey\Uuid\UuidInterface;

/**
 * Encapsulates data needed to create a player.
 */
class PlayerInfo{
        /**
         * @param mixed[] $extraData
         * @phpstan-param array<string, mixed> $extraData
         */
        public function __construct(
                private string $username,
                private UuidInterface $uuid,
                private Skin $skin,
                private string $locale,
                private array $extraData = []
        ){
                $this->username = TextFormat::clean($username);
        }

        public function getUsername() : string{
                return $this->username;
        }

        public function getUuid() : UuidInterface{
                return $this->uuid;
        }


        public function getLocale() : string{
                return $this->locale;
        }

        /**
         * @return mixed[]
         * @phpstan-return array<string, mixed>
         */
        public function getExtraData() : array{
                return $this->extraData;
        }
}