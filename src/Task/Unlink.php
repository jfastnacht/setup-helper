<?php

namespace Fr\ProjectBuilder\Task;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2019 Dirk Wenzel <wenzel@cps-it.de>
 *  All rights reserved
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 * A copy is found in the text file GPL.txt and important notices to the license
 * from the author is found in LICENSE.txt distributed with these scripts.
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use Fr\ProjectBuilder\Report\Notice;
use Fr\ProjectBuilder\Report\Result;
use Fr\ProjectBuilder\Report\ResultInterface;

/**
 * Class Unlink
 *
 * unlink given files and folders
 */
class Unlink implements TaskInterface
{
    /**
     * @param array $config
     * @return ResultInterface
     */
    public function perform(array $config)
    {
        $result = new Result();
        if (empty($config)) {
            $result = new Notice(
                TaskInterface::MESSAGE_EMPTY_CONFIGURATION,
                1550153594
            );
        }
        return $result;
    }
}
