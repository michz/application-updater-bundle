<?php

namespace mztx\ApplicationUpdaterBundle\Provider;

/**
 * @author   :  Michael Zapf <m.zapf@mztx.de>
 * @date     :  07.01.18
 * @time     :  12:13
 */
class GithubReleaseProvider implements ProviderInterface
{
    /** @var string */
    private $minimumStability;

    /** @var string */
    private $releasesUrl;


    public function getLatestSuitableVersion(): string
    {
        // TODO: Implement getLatestSuitableVersion() method.
    }

    public function getPackageLink(string $version): string
    {
        // TODO: Implement getPackageLink() method.
    }
}
