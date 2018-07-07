<?php

namespace mztx\ApplicationUpdaterBundle\Provider;

/**
 * @author   :  Michael Zapf <m.zapf@mztx.de>
 * @date     :  07.01.18
 * @time     :  12:13
 */
interface ProviderInterface
{
    public function getLatestSuitableVersion(): string;

    public function getPackageLink(string $version): string;
}
