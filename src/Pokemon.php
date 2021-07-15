<?php


namespace NonO\BasicPokeapi;


class Pokemon
{
    private int $id;
    private string $name;
    private int $weight;
    private int $baseExp;
    private string $sprite;

    /**
     * Pokemon constructor.
     * @param int $id
     * @param string $name
     * @param int $weight
     * @param int $baseExp
     * @param string $sprite
     */
    public function __construct(int $id, string $name, int $weight, int $baseExp, string $sprite)
    {
        $this->id = $id;
        $this->name = $name;
        $this->weight = $weight;
        $this->baseExp = $baseExp;
        $this->sprite = $sprite;
    }

    public function toArray():array {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'weight' => $this->weight,
          'baseExp' => $this->baseExp,
          'sprite' => $this->sprite,
        ];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getBaseExp(): int
    {
        return $this->baseExp;
    }

    /**
     * @param int $baseExp
     */
    public function setBaseExp(int $baseExp): void
    {
        $this->baseExp = $baseExp;
    }

    /**
     * @return string
     */
    public function getSprite(): string
    {
        return $this->sprite;
    }

    /**
     * @param string $sprite
     */
    public function setSprite(string $sprite): void
    {
        $this->sprite = $sprite;
    }
}