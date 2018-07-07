<?php

namespace mztx\ApplicationUpdaterBundle\Checker;

/**
 * @author   :  Michael Zapf <m.zapf@mztx.de>
 * @date     :  07.01.18
 * @time     :  12:08
 */
interface CheckerInterface
{
    public function isNewVersionAvailable(): bool;
}
