<?php

/*
 * This file is part of the Moodle Plugin CI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * License http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace MoodlePluginCI\Tests\Fake\Installer;

use MoodlePluginCI\Installer\Install;
use MoodlePluginCI\Installer\InstallerCollection;

class DummyInstall extends Install
{
    public function runInstallation(InstallerCollection $installers): void
    {
        // Do nothing.
    }
}
