<?php

abstract class Transport
{
    /**
     * @var int
     */
    protected $capacity = 0;

    /**
     * @var int
     */
    protected $maxCapacity = 0;

    /**
     * @var string
     */
    protected $state;

    /**
     * Transport constructor.
     * @param int $capacity
     */
    public function __construct(int $capacity)
    {
        $this->maxCapacity = $capacity;
    }

    /**
     * @param int $load
     * @throws \Exception
     */
    public function load(int $load)
    {
        $this->setState(__METHOD__);

        $capacity = $this->capacity + $load;

        if ($capacity > $this->maxCapacity) {
            throw new \Exception('Over capacity');
        }

        $this->capacity = $capacity;
    }

    /**
     * @param int $load
     * @throws \Exception
     */
    public function unload(int $load)
    {
        $this->setState(__METHOD__);

        $capacity = $this->capacity - $load;

        if ($capacity < 0) {
            throw new \Exception('Can not unload more than have');
        }

        $this->capacity = $capacity;
    }

    /**
     * @returm void
     */
    public function stop()
    {
        if ($this->capacity != 0) {
            throw new \Exception('Can not stop before unload');
        }

        $this->setState(__METHOD__);
    }

    /**
     * @return int
     */
    public function capacityLeft(): int
    {
        return $this->maxCapacity - $this->capacity;
    }

    /**
     * @param $state
     */
    protected function setState(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}

trait FlyTransport
{
    public function fly()
    {
        $this->setState(__METHOD__);
    }
}

trait SeaTransport
{
    public function sail()
    {
        $this->setState(__METHOD__);
    }
}

trait GroundTransport
{
    public function move()
    {
        $this->setState(__METHOD__);
    }
}

class CargoFlyTransport extends Transport
{
    use FlyTransport;
}

class PassengersFlyTransport extends Transport
{
    use FlyTransport;
}

class CargoSeaTransport extends Transport
{
    use SeaTransport;
}

class PassengersSeaTransport extends Transport
{
    use SeaTransport;
}

class CargoGroundTransport extends Transport
{
    use GroundTransport;
}

class PassengersGroundTransport extends Transport
{
    use GroundTransport;
}